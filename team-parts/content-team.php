<!-- <div class="row">
    <div class="col">
        <h4 class="mb-4" >Everyone At Radical Shares The Same Values And Has The Same Vision</h3>
    </div>
</div> -->

<div class="team-tabs-wrapper">
    <!-- Nav tabs -->
    <div class="team-tabs-wrapper tabs-wrapper w-100"> 
        <ul class="nav classic-tabs tabs-pink" role="tablist">
            <li class="nav-item">
                <a class="nav-link waves-light active" data-toggle="tab" href="#team_founders" role="tab">Founders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-light" data-toggle="tab" href="#team_scientists" role="tab">Scientists</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link waves-light" data-toggle="tab" href="#team_advisors" role="tab">Senior Advisors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-light" data-toggle="tab" href="#team_investors" role="tab">Investors/Management</a>
            </li> -->
        </ul>
    </div>

    <!-- Tab panels -->
    <div class="team-tab-content tab-content mb-4">

        <!--Panel 1-->
        <div class="tab-pane fade in show active" id="team_founders" role="tabpanel">

            <?php
                get_template_part( 'team-parts/content', 'team-founders' ); 
            ?>

        </div>

        <!--Panel 2-->
        <div class="tab-pane fade" id="team_scientists" role="tabpanel">

            <?php
                get_template_part( 'team-parts/content', 'team-scientists' ); 
            ?>

        </div>

        <!--Panel 3-->
        <!-- <div class="tab-pane fade" id="team_advisors" role="tabpanel">

            <?php
                //get_template_part( 'team-parts/content', 'team-advisors' ); 
            ?>

        </div> -->

        <!--Panel 4-->
        <!-- <div class="tab-pane fade" id="team_investors" role="tabpanel">
            
            <?php
                //get_template_part( 'team-parts/content', 'team-investors' ); 
            ?>

        </div> -->

    </div>
</div>

<script>
jQuery(document).ready(function($) {

});
jQuery('.team-read-more').on('click', function($) {
    jQuery(this).hide();
    jQuery(this).next().show();
});
</script>