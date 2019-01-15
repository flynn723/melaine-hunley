<style>
.watch-video-img-wrapper {
    position: relative;
}
.light-grey-pink-active-tabs {
	    background-color: #f5f5f5 !important;
    border: 1px solid #ddd;
}
.light-grey-pink-active-tabs li a {
    color: #000;
}
.light-grey-pink-active-tabs li a.active {
    border-color: #b20839;
    border-bottom: 4px #b20839 solid;
    color: #b20839;
}
a.inner-wrapper-watch-video-btn.btn.btn-pink {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    margin: 24% auto !important;
    width: 200px;
    display: block;
    text-align: center;
}
.attribute-modal-inner-body {
	height: 100%;
	max-height: 500px;
	overflow-y: scroll;
}
@media (min-width: 768px) {
	.product-desc-tab-content {
		border: 1px solid #ddd;
		border-top: none;		
	}	
	.product-desc-tabs .nav-item {
	    width: 25%;
	}
}
@media (min-width: 992px) {
	.product-description-wrapper {
		padding: 1rem;
		margin: 0 1rem;
		border: 1px solid #ddd;
		border-radius: .25rem;
	}
	.product-reviews-wrapper {
		margin: 0 1rem;
		border-radius: .25rem;
	}
	.product-reviews-wrapper ol.commentlist {
	    height: 100%;
	    overflow-y: scroll;
	    max-height: 540px;
	}
}
</style>


<!-- <div class="product-description-anchor-buttons hidden-md-down">
	<div class="row mb-4 text-center">
		<div class="smooth-scroll col">
			<a href="#benefits" class="btn btn-outline-grey">
				Benefits
			</a>
		</div>
		<div class="smooth-scroll col">
			<a href="#self-care" class="btn btn-outline-grey">
				Self-Care
			</a>
		</div>
		<div class="smooth-scroll col">
			<a href="#ingredients" class="btn btn-outline-grey">
				Ingredients
			</a>
		</div>
		<div class="smooth-scroll col">
			<a href="#reviews" class="btn btn-outline-grey">
				Reviews
			</a>
		</div>
	</div>
</div> -->

<!-- Nav tabs -->
<div class="product-desc-tabs tabs-wrapper mx-3"> 
    <ul class="nav classic-tabs light-grey-pink-active-tabs hidden-sm-down" role="tablist">
        <li class="nav-item smooth-scroll" >
            <a class="nav-link waves-light active" href="#benefits" data-offset="-100" >Benefits</a>
        </li>
        <li class="nav-item smooth-scroll" >
            <a class="nav-link waves-light" href="#selfcare" data-offset="200" >Selfcare</a>
        </li>
        <li class="nav-item smooth-scroll">
            <a class="nav-link waves-light" href="#ingredients" data-offset="200" >Ingredients</a>
        </li>
        <li class="nav-item smooth-scroll">
            <a class="nav-link waves-light" href="#reviews" data-offset="200" >Reviews</a>
        </li>
    </ul>
</div>
<div class="product-desc-tab-content tab-content pt-0 pt-md-3 mx-md-3 mb-4">
  <div class="tab-pane fade in show active" id="panel51" role="tabpanel">
		<?php the_content(); ?>	
  </div>
</div>
<!-- <div class="product-description-wrapper mb-4">
</div> -->

<!--Accordion wrapper-->
<div class="accordion product-reviews-wrapper mb-4" id="review" role="tablist" aria-multiselectable="true">
  <!-- Accordion card -->
  <div class="card" style="border-radius: .25rem; border: 1px solid #ddd;" >
    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne" style="border-bottom: 1px solid #ddd;">
        <a data-toggle="collapse" data-parent="#review" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
            <h5 class="mb-0 pink-text">
                Reviews <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>
    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#review">
        <div class="card-body">
				<?php comments_template(); ?>
        </div>
    </div>
  </div>
</div>
                

<!-- The Modal -->
<div class="modal" id="attributesModal">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Product Attributes</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body p-3">
      	<div class="attribute-modal-inner-body">
					<?php
					global $product;
					$attributes = $product->get_attributes(); ?>
					<ul>
						<?php
					  foreach($attributes as $attribute) { ?>
					   	<li>
					   		<b><?php echo $attribute['name']; ?></b>
					   		<p><?php foreach( $attribute['options'] as $option ) { echo $option; } ?></p>
					   	</li>
					  <?php
					  }
					  ?>
					</ul>      		
      	</div>
      </div>
      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="productVideoModal">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body p-0">
				<div class="embed-responsive embed-responsive-16by9">
				    <iframe class="embed-responsive-item" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
      </div>
      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>

<script>
(function( $ ) {
$(document).ready(function($) {
	$('.inner-wrapper-watch-video-btn').on('click', function() {
		let iframeTitle = $(this).attr('data-iframe-title');
		let iframeSrc = $(this).attr('data-iframe-src');
		$('#productVideoModal').find('.modal-title').text(iframeTitle);
		$('#productVideoModal').find('.embed-responsive-item').attr('src', 'https://www.youtube.com/embed/' + iframeSrc + '?rel=0"');
		
		jQuery('#productVideoModal').modal('show');
	});
	$('.product-desc-tabs .nav-item').on('click', function() {
		$('.product-desc-tabs .nav-item a').removeClass('active');
		$(this).find('a').addClass('active');
	});
});
})(jQuery);	
</script>