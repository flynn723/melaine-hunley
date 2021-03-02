<?php
// $pricing_bg_image = 'https://mdbootstrap.com/img/Photos/Others/pricing-table%20(6).jpg';
$pricing_card_bg = 'https://melaniehunley.com/wp-content/uploads/2019/01/melaniehunley-photo-couple.jpg-e1547680339240.jpg';
$other_pricing_card_bg = 'https://melaniehunley.com/wp-content/uploads/2019/01/smiling-couple-beach.jpg';
?>
<style>
.pricing-card .price h1:after, .pricing-card .price h2:after {
  display: none;
}
</style>
<section class="section-packages my-5">

  <div class="container">

    <div class="row">
      <div class="col text-center">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5">Photography Packages</h2>
        <!-- Section description -->
        <p class="w-responsive mx-auto mb-5">I am so thrilled you have come to check out my packages! They will not disappoint and I have deals for every special occasion! See below and let’s book your special shoot today! </p>      
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

        <div class="card card-image h-100" style="background-image: url('<?php echo $pricing_card_bg; ?>');">
          <div class="h-100 text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">

            <div class="card-body w-100">
              <h5>Basic</h5>
              <div class="price pt-0">
                <h2 class="number font-family-pinyon mb-0">200</h2>
              </div>
              <ul class="striped mb-0">
                <li>
                  <p><strong>One</strong> hour session</p>
                </li>
                <li>
                  <p><strong>20</strong> edited photos</p>
                </li>
              </ul>
              <a class="btn btn-outline-white waves-effect waves-light">Book Now</a>
            </div>

          </div>

        </div>
      </div>

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

        <!-- Card -->
        <div class="card card-image h-100" style="background-image: url('<?php echo $other_pricing_card_bg; ?>');">

          <!-- Pricing card -->
          <div class="h-100 text-white text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded">

            <!-- Content -->
            <div class="card-body w-100">
              <h5>Premium</h5>
              <div class="price pt-0">
                <h2 class="number font-family-pinyon mb-0">500</h2>
              </div>
              <ul class="striped mb-0">
                <li>
                  <p><strong>One</strong> hour photoshoot planning</p>
                </li>
                <li>
                  <p><strong>Two</strong> hour session</p>
                </li>
                <li>
                  <p><strong>30</strong> edited photos</p>
                </li>
              </ul>
              <a class="btn btn-outline-white waves-effect waves-light">Book Now</a>
            </div>

          </div>
          <!-- Pricing card -->

        </div>
        <!-- Card -->

      </div>

      <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

        <div class="card card-image h-100" style="background-image: url('<?php echo $pricing_card_bg; ?>');">
          <div class="h-100 text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">


            <div class="card-body w-100">
              <h5>Pro</h5>
              <div class="price pt-0">
                <h2 class="number font-family-pinyon mb-0">2000</h2>
              </div>
              <ul class="striped mb-0">
                <li>
                  <p><strong>Two</strong> hours photoshoot planning</p>
                </li>
                <li>
                  <p><strong>Full</strong> day session</p>
                </li>
                <li>
                  <p><strong>Unlimited</strong> edited photos</p>
                </li>
                <li>
                  <p><strong>Physical</strong> photo album</p>
                </li>
              </ul>
              <a class="btn btn-outline-white waves-effect waves-light">Book Now</a>
            </div>

          </div>

        </div>
      </div>

    </div>
    
  </div>

</section>

<section class="section-custom-packages my-5">

  <div class="container">
    
    <div class="row">
      <div class="col text-center">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5">Custom Photography Package</h2>
        <!-- Section description -->
        <p class="w-responsive mx-auto mb-5">Need a custom photography package? Sounds great, built your own custom photography package here.</p>      
      </div>
    </div>

    <div class="offset-lg-3 col-lg-6 col-md-12 mb-lg-0 mb-4">

      <div class="card card-image h-100" style="background-image: url('<?php echo $other_pricing_card_bg; ?>');">
        <div class="h-100 text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">


          <div class="card-body w-100">
            <h5>Custom</h5>
            <!-- <div class="price pt-0">
              <h2 class="number font-family-pinyon mb-0">2000</h2>
            </div> -->
            <ul class="striped mb-0">
              <li>
                <p><strong>You</strong> decide photoshoot planning duration</p>
              </li>
              <li>
                <p><strong>You</strong> decide session duration</p>
              </li>
              <li>
                <p><strong>You</strong> edited photos quantity</p>
              </li>
              <li>
                <p><strong>You</strong> choose photo album</p>
              </li>
            </ul>
            <a class="btn btn-outline-white waves-effect waves-light">Book Now</a>
          </div>

        </div>

      </div>
    </div>

  </div>
  
</section>