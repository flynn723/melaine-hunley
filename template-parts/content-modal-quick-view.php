

<div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="quickViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title quick-view-title m-0" id="quickViewModalLabel" class="m-0">Product</h5>
            </div> -->
            <div class="modal-body">
              <div class="container">
              	<!-- <div class="row"> -->	
              	<!-- </div> -->
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 0; z-index: 900;">
	                  <span aria-hidden="true">&times;</span>
	              </button>
	              <div class="row">
	              	<div class="col-12 col-md-4 p-0">
	              		<img src="#" class="quick-view-thumbnail w-100" alt="" />
	              	</div>
	              	<div class="col-12 col-md-8">
	              		<h4 class="quick-view-title m-0 mb-2" id="quickViewModalLabel" >Product</h4>
	              		<div class="quick-view-rating"></div>
	              		<div class="quick-view-price mb-2"></div>

	              		<div class="quick-view-excerpt"></div>

										<a href="#" class="quick-view-more-btn btn btn-outline-pink ml-0" title="View More">View More</a>    
										<a href="#" data-quantity="1" class="quick-view-add-to-cart btn btn-pink product_type_simple add_to_cart_button ajax_add_to_cart ml-0 ml-md-2" data-product_id="" data-product_sku="" rel="nofollow">Add to cart</a>              		
	              	</div>
	              </div>
              </div>
            </div>
        </div>
    </div>
</div>

<script>
(function($) {

$(document).ready(function() {
	listen_To_Quick_View_Click();
});

function listen_To_Quick_View_Click() {

	$('.card-product .view.overlay').on('click', function() {

		const productId = $(this).parent().attr('product-id');
		const productEl = $(this).parent();
		const settings = {
        url:  "<?php echo get_site_url(); ?>/wp-json/wp/v2/product/" + productId,
        cache: false
    };
    $.ajax(settings).done(function( productData ) {

      console.log("Product Data", productData);

			/* Get Vars */
			let productThumbnail = productEl.find('.product-img').attr('src');
			let productTitle = productEl.find('.card-title').text();
			let productRatingHTML = productEl.find('.star-rating').clone();
			let productOnSale = productEl.find('.regular-price').length > 0;
			let productSalePrice = productEl.find('.sale-price').text();
			let productRegularPrice = productEl.find('.regular-price').text();
			let quickViewPriceHTML = '<span class="sale-price mr-2">' + productSalePrice + '</span>';
			if ( productOnSale ) {
				quickViewPriceHTML += '<strike class="regular-price" >' + productRegularPrice + '</strike>';
			}
			let addToBtnHref = (location.href.includes('?')) ? location.href + '&add-to-cart=' + productId : location.href + '?add-to-cart=' + productId;

			// alert(productTitle);

			/* Set quick view modal - product details */
			$('#quickViewModal .quick-view-thumbnail').attr('src', productThumbnail);
			$('#quickViewModal .quick-view-title').text(productTitle);
			$('#quickViewModal .quick-view-rating').html(productRatingHTML);
			$('#quickViewModal .quick-view-price').html(quickViewPriceHTML);
			$('#quickViewModal .quick-view-excerpt').html(productData.excerpt.rendered);
			$('#quickViewModal .quick-view-more-btn').attr('href', productData.link);
			$('#quickViewModal .quick-view-add-to-cart').attr('href', addToBtnHref);

			/* Show Modal */
			jQuery('#quickViewModal').modal('show');

    });

	});

}

})(jQuery);
</script>