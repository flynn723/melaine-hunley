<style>
.breadcrumb-item+.breadcrumb-item::before {
    display: none;
}
</style>
	<div class="container">
    <ol class="breadcrumb lighten-4 mt-4 mb-0">
        <li class="breadcrumb-item"><a class="black-text" href="/">Home</a><i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
        <li class="breadcrumb-item">
        	<?php $terms = get_the_terms( $post->ID, 'jetpack-portfolio-type' ); ?>
        	<a class="black-text" title="<?php echo $terms[0]->name; ?>" href="/project-type/<?php echo $terms[0]->slug; ?>" ><em><?php echo $terms[0]->name; ?></em></a>
        </li>
    </ol>
	</div>