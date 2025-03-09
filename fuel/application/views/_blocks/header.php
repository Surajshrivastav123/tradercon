<!DOCTYPE html>
<html lang="zxx">
<head>
<!--================= Meta tag =================-->
<meta charset="utf-8">
<title>Tradersconvention - 2024</title>
<title>
		<?php 
			if (!empty($is_blog)) :
				echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
			endif;
		?> | Tradersconvention - 2023
	</title>
  <meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
	<meta name="description" content="<?php echo fuel_var('meta_description')?>">
<meta name="description" content="">
<!--================= Responsive Tag =================-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--================= Favicon =================-->
<link rel="apple-touch-icon" href="<?=img_path('fav.png')?>">
<link rel="shortcut icon" type="image/x-icon" href="<?=img_path('fav.png')?>">
<!--================= Bootstrap V5 css =================-->
<?=css(array(
  'bootstrap.min',
  'menus',
  'animate',
  'owl.carousel',
  'elegant-icon',
  'magnific-popup',
  'animations',
  'style',
  'custom-spacing',
  'responsive',
  
))?>
 
 
 
</head>
<body>
<!--================= Preloader Section Start Here =================-->
<div id="react__preloader">
  <div id="react__circle_loader"></div>
  <div class="react__loader_logo"><img src="<?=img_path('preload.png')?>" alt="Preload"></div>
</div>
<!--================= Preloader Section End Here =================--> 

<!--================= Header Section Start Here =================-->
<header id="react-header" class="react-header react-header-two">
  <div class="menu-part">
    <div class="container"> 
      <!--================= Menu Start Here =================-->
      <div class="react-main-menu">
        <nav> 
          <!--================= Menu Toggle btn =================-->
          <div class="menu-toggle">
            <div class="logo"><a href="<?=base_url()?>" class="logo-text"> <img src="<?=img_path('logo2.png')?>" alt="logo"> </a></div>
            <button type="button" id="menu-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <!--================= Menu Structure =================-->
          <div class="react-inner-menus">
          <?php 
                           
                           echo $nav_arr = fuel_nav(array('depth'=>1
		  					,'render_type' => 'basic'
							, 'group_id' => 1
                                                        , 'active_class'=>'active'
                                                        ,'active'=>  uri_segment(2)
							,'container_tag_attrs' => array('style' => '' ,'id'=>'backmenu')
							,'container_tag_class' => 'react-menus react-sub-shadow'
							,'order' => 'precedence'
                                                        ,'use_nav_key'=>TRUE
                                                        ,'home_link'=>  base_url()
							,'subcontainer_tag_class'=>array('','','')
							));
                           ?>
            <ul id="backmenu" class="react-menus react-sub-shadow">
              <li> <!--<a href="<?=base_url((isset($this->session->user))?"logout":"Login")?>"><?=(isset($this->session->user))?"Logout":"Login" ?></a>--></li>
            </ul> 
            <div class="searchbar-part">
              <div class="react-logins"> <a href="<?=base_url('prices')?>"> Buy Ticket Now
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
                </a> </div>
            </div>
          </div>
        </nav>
      </div>
      <!--=================  Menu End Here  =================--> 
    </div>
  </div>
</header>
<!--================= Header Section End Here =================--> 
