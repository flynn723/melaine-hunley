<footer class="page-footer light-footer center-on-small-only">
    <?php
    if ( ! is_page_template( 'template-cart.php' ) && ! is_page_template( 'template-checkout.php' ) ) {
      get_template_part( 'footer-parts/footer', 'first-row' );
    } ?>
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            <p class="white-text mb-0"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> | All rights reserved. Powered by <a href="https://mydigitalsauce.com/" title="MyDigitalSauce" >MyDigitalSauce</a></p>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>     
