 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<link href="<?php echo bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
 <link href="<?php echo bloginfo('template_url');?>/css/media.css" rel="stylesheet">
 <?php wp_head(); ?>
  
  <div class="container-fluid header-background">
      <div class="container">
       <div class="row">
          <div class="col-xs-9 col-sm-4 col-lg-4 logo pull-left">
              
              <img src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="Cavada Law Firm Logo" class="img-responsive logo">
          </div>
          <div class="col-sm-2 col-md-4 hidden-md hidden-lg pull-right text-center call-button">
            <a href="tel:2108805299"><i class="glyphicon glyphicon-earphone "></i></a>
          </div>
          <div class="col-lg-4 col-md-4 text-center widget-text hidden-xs hidden-sm">
                <p>Phone: <a href="tel:2108805299">(210) 880-5299 </a></p>
                <p> 110 Broadway, STE 370 San Antonio, TX 78205 </br> Inside the Texas Water Exchange offices Parking is in the garage behind the building.</p>
          </div>
          <div class="hidden-sm hidden-xs col-lg-4">
              <button class="btn btn-default contact-us-btn">CONTACT US</button>
          </div>
        </div>
      </div>
      
  </div>