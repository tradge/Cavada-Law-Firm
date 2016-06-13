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
  
  <?php wp_head(); ?>
  
  <div class="container-fluid header-background">
      <div class="container">
          <div class="col-lg-4 logo pull-left">
              <img src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="Cavada Law Firm Logo" class="img-responsive logo">
          </div>
          <div class="col-lg-4 col-lg-offset-1 text-center widget-text">
                <p>Phone: (210) 880-5299</p>
                <p>110 Broadway, STE 370 </br>
                San Antonio, TX 78205</p>
                <p>Inside the Texas Water Exchange offices</br>
                Parking is in the garage.</p>
          </div>
          <div class="col-lg-3 col-lg-offset-1 pull-right">
              <button href="#contact" class="btn btn-default contact-us-btn">CONTACT US</button>
          </div>
      </div>
      
  </div>