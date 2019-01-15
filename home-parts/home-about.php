<style>
.about-wrapper {
    background-color: #f7f7f7;
    border-bottom: 1px solid #ddd;
}
.home-about-row ul {
    padding-left: 20px;
    text-indent: 2px;
    list-style: none;
}
.home-about-row li:before {
    content: '✔';
    margin-left: -1em;
    margin-right: .5rem;
}
</style>
<section class="about-wrapper section fadeIn wow clearfix py-4">

	<div class="container">

	  <h2 class="section-heading mb-0 pink-text"><strong>Words From Us</strong></h2>
	  <p class="section-description mb-3">Discover how Radical's founders, Liz and Rachel Edlich, created a solution for their skin to fit all skins.</p>

		<div id="home-about-row" class="home-about-row row py-4">
			<div class="col-12 col-md-6 mb-4 mb-sm-0">
				<img id="home-about-thumbnail" src="http://demo.iamradical.com/wp-content/uploads/2018/04/sisters-on-a-mission.jpg" alt="Sisters On a Mission" class="w-100 img-fluid rounded z-depth-1-half" style="cursor: pointer;">
				<!-- card -->
				<iframe id="home-about-video" class="w-100 img-fluid rounded z-depth-1-half" style="display: none;" width="100%" src="https://www.youtube.com/embed/f45Hm6w6zRM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="col-12 col-md-6">
				<!-- <h4 class=" pink-text">Words From Us</h4> -->
				<!-- <blockquote>The Edlich sisters’ heritage and lifelong mission to make a Radical difference compelled them to make Radical Skincare available to all. Committed to putting money in the bottle and not around it, Radical Skincare delivers Radical results and speaks to those who know better and want more.</blockquote> -->
				<p>Liz and Rachel are the daughters of Dr. Richard F. Edlich MD.PHD, world renowned Professor of Plastic Surgery. Working in their father's lab before the age of ten and at the University of Virginia Burn Unit, they were exposed to the science of skin rejuvenation and wound repair at extreme levels. After having been in the skin care industry in Los Angeles for 15 years and creating over 100 products for celebrities and others, their business became very personal when the unthinkable happened.</p>
				<!-- <ul>
				    <li>More honesty.</li>
				    <li>More potency.</li>
				    <li>More performance.</li>
				</ul> -->
				<a href="<?php echo get_site_url(); ?>/story" class="btn btn-pink waves-effect waves-light" title="Our Story"><i class="fa fa-angle-right mr-1"></i> Read more</a>
			</div>
		</div>

	</div>

</section>

<script>
jQuery(document).ready(function() {
	vidRescale(jQuery('#home-about-video'));
});
jQuery(window).on('resize', function() {
	vidRescale(jQuery('#home-about-video'));
});
jQuery('#home-about-thumbnail').on('click', function() {
	jQuery(this).hide();
	jQuery('#home-about-video').show();
	vidRescale(jQuery('#home-about-video'));
});
function vidRescale(e){
  /* aspectRatio = 16:9 */
  var aspectRatioW = 16;
  var aspectRatioH = 9;
  jQuery(e).attr('width', '100%');
  var w = jQuery(e).width();
  var h = (w*aspectRatioH)/aspectRatioW;
  jQuery(e).height(h);
}
</script>