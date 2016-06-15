<?php wp_footer(); ?>

<footer>
    <div class="container-fluid footer-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6 pull-left">
                    <img src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="Cavada logo" class="img-responsive logo"/>
                    <div class="col-xs-12 col-lg-9 footer-info" style="padding-left:0px;">
                        <p class="footer-info">Phone: <a href="tel:2108805299">(210) 880-5299 </a></p>
                        <p class="footer-info"> 110 Broadway, STE 370 San Antonio, TX 78205 </p>
                        <p class="footer-info"> Inside the Texas Water Exchange offices Parking is in the garage behind the building.</p>
                    </div>
                </div>
                <div class="col-lg-6 copyright">
                    <p class="footer-info">We are a debt relief law firm. We help people file for bankruptcy relief under the bankruptcy code.</p>
                    <p>Copyright <?php echo date( 'Y'); ?> <a href="http://www.acadigital.net">ACA Digital</a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
$(document).ready(function() {
   
    $('button.contact-us-btn').click(function(){
        $('html,body').animate({scrollTop:4250}, 3000);
        return false;
    });

});
</script>