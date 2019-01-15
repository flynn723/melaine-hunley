<style>
#accordionEx {
    border-radius: 0.25rem;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
.accordion .card {
    border-radius: 0.25rem;
}
/*.accordion .card .card-header {
    border-bottom: 1px solid #ddd;
}*/
.accordion .card .card-header a {
    color: #9e9ea1;
}
</style>


<!--Accordion wrapper-->
<div class="accordion mb-4" id="accordionEx" role="tablist" aria-multiselectable="true">
    <!-- Accordion card -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header" role="tab" id="headingOne">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class=" grey-text mb-0">Shop by Category <i class="fa fa-angle-down rotate-icon"></i></h5>
            </a>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
            <div class="card-body">
                <?php
                $categories = get_terms( array('product_cat') );
                forEach( $categories as $category) { ?>
                    <a class="grey-text mb-2" href="<?php echo get_site_url() . '/product-category/' . $category->slug; ?>" title="<?php echo $category->name; ?>" style="display: block;" ><?php echo $category->name; ?></a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Accordion card -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header" role="tab" id="headingTwo">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h5 class=" grey-text mb-0">Shop by Concern <i class="fa fa-angle-down rotate-icon"></i></h5>
            </a>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
            <div class="card-body">
                <?php
                $categories = get_terms( array('product_tag') );
                forEach( $categories as $category) { ?>
                    <a class="grey-text mb-2" href="<?php echo get_site_url() . '/product-tag/' . $category->slug; ?>" title="<?php echo $category->name; ?>" style="display: block;" ><?php echo $category->name; ?></a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!--/.Accordion wrapper-->
<a href="/products/extreme-repair/" title="Extreme Repair" class="card" style="border-radius: 0.25rem;" >
    <img src="/wp-content/uploads/2018/05/Radical.Website.ExtremeRepair.Banner_9.16.14-1.png" class="w-100 img-fluid">
</a>
                