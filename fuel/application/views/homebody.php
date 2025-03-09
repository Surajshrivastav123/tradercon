 <!--================= Wrapper Start Here =================-->
<div class="react-wrapper">
  <div class="react-wrapper-inner"> 
    
    <!--================= Slider Section Start Here =================-->
    <style>
      .banner { 
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?=img_path('banner/'.$vars['banner']->image)?>');
      }
</style>
    <div class="react-slider-part">
      <section class="banner">
        <div class="banner-inner">
          <h1><?=$vars['page_title']?><br>
          <span class="section-pretitle"><?=$vars['meta_description']?></span></h1>
          <h4>EVENT WILL START IN</h4>
          <div id="normal-countdown" data-date="<?=$event->starton?>"></div>
          <a href="<?=base_url("prices")?>" class="buybtn"> Buy Ticket Now
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
          </a> </div>
      </section>
    </div>
    <!--================= Slider Section End Here =================--> 
    
    <!--=================  About Section Start Here ================= -->
    <div class="about__area about__area_one p-relative pt---100 pb---70">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="about__content">
            <?=$vars['body']?>       
              </div>

          </div>
        </div>
      </div>
    </div>
    <!--================= About Section End Here ================= --> 
    
    <!--================= Upcoming Event Section Start Here =================-->
    <div class="react-upcoming__event blog__area pb---100">
      <div class="container">
        <div class="react__title__section text-center">
          <h5>Listen to the </h5>
          <h2 class="react__tittle">Event Speakers</h2>
        </div>
        <div class="instructors___page">
          <div class="row">
          <?php 
           
           if(is_array($speakers_list))
           {
           foreach($speakers_list as $speaker)
           {
           ?>
            <div class="col-lg-3"> 
              <div class="instructor__content">
                <div class="instructor__image"> <img src="<?=img_path($speaker->image)?>" alt="course instructor">
                  <div class="content__hover">
                    <ul>
                      <li>
                        <h5 class="white-color"><?=$speaker->name?></h5>
                      </li>
                    </ul>
                    <p class="iconsty"><a href="<?=base_url('profile/'. $speaker->id)?>"> <i class="arrow_carrot-right"></i> </a></p>
                  </div>
                </div>
                <div class="bottom-content">
                  <h4><a href="#"><?=$speaker->name?></a></h4>
                </div>
              </div>
            </div>
           
            <?php }} ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--================= Upcoming Event Section End Here =================--> 
  
  <!--=================  Pricing Start Here  =================-->
  <div class="pricing-section home-five pt---120">
    <div class="pricing-section-header-bg"></div>
  <div class="container">

      <div class="section-title-area home-five text-center">

        <div class="section-pretitle">We’re offering 3 Unique pricing plans</div>

        <div class="section-title">Pricing & Offerings Plan </div>

      </div>

      <div class="row justify-content-center">

      <?php foreach($Offerings as $offer){ ?>

        <div class="col-xl-4 col-md-4">

          <div class="price-card">

            <div class="price-plan">

              <div class="contents shape1 circle1">

                <div class="plan-type"><?=$offer->title_top?></div>

                <div class="price shapeTwo shapethree"><?=$offer->title?></div>

              </div>

            </div>

            <div class="price-details">

            <?php foreach(json_decode($offer->content) as $topic){ ?>

              <div class="item"> <i class="icon_check_alt2"></i><?=$topic->title?></div>

              <?php } ?>

              

              <button class="price-btn">

              <a href="<?=base_url("registration/".$offer->id)?>">BOOK NOW</a>

              </button>

            </div>

          </div>

        </div>

        <?php } ?>

      </div>

    </div>
 
 
  </div>
  <!--=================  Pricing End Here  =================--> 
  
  <!--================= Clients Section Start Here =================-->
   <!-- <div class="react-clients react-clientso pt---120 pb---120 mt---102">
    <div class="container">
      <div class="react__title__section text-center">
        <h6 class="react__subtitle">Graat Words About Convention.</h6>
        <h2 class="react__tittle"> What our clients say about </h2>
      </div>
      <div class="container">
        <div class="client-slider owl-carousel">
          <div class="single-client">
            <div class="client-bottom"> <span class="client-author"><img src="assets/images/testimonial/testimonial.png" alt="Testimonials"> </span> </div>
            <div class="client-content"> <span class="client-title">Justin Case <em> Student</em></span>
              <p>Nulla porttitor accumsan tincidunt. vamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in.</p>
              <div class="testimonial__ratings"> <em class="icon_star"></em> <em class="icon_star"></em> <em class="icon_star"></em> <em class="icon_star"></em> <em class="icon_star_alt"></em> <span><em>4.9</em> (14 Reviews)</span> </div>
              <img class="comma" src="assets/images/testimonial/coma.png" alt="image"> </div>
          </div>
          <div class="single-client">
            <div class="client-bottom"> <span class="client-author"><img src="assets/images/testimonial/testimonial.png" alt="Testimonials"> </span> </div>
            <div class="client-content"> <span class="client-title">Justin Case <em> Student</em></span>
              <p>Nulla porttitor accumsan tincidunt. vamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in.</p>
              <div class="testimonial__ratings"> <em class="icon_star"></em> <em class="icon_star"></em> <em class="icon_star"></em> <em class="icon_star"></em> <em class="icon_star_alt"></em> <span><em>4.9</em> (14 Reviews)</span> </div>
              <img class="comma" src="assets/images/testimonial/coma.png" alt="image"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
  <!--================= Clients Section End Here =================--> 
  
  <!--================= Blog Section Start Here =================-->
  <div class="react-blog__area blog__area pt---90 pb---120">
    <div class="container blog__width">
      <div class="react__title__section text-center">
        <!--<h2 class="react__tittle"> News and Blogs </h2>-->
      </div>
      <div class="row">
      <?php foreach($bloglist as $blog){ ?>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
          <div class="blog__card mb-50">
            <div class="blog__thumb w-img p-relative"> <a class="blog__thumb--image" href="<?=base_url('blog/'.$blog->slug)?>"> <img src="<?=img_path("blog/".$blog->image)?>" alt="This the <?=$blog->id?> card image"> </a> <em class="b_date"><?=date("M d",strtotime($blog->publish_date))?></em> </div>
            <div class="blog__card--content">
              <div class="blog__card--content-area mb-25">
                <h3 class="blog__card--title"> <a href="<?=base_url('blog/'.$blog->slug)?>"><?=$blog->title?></a></h3>
              </div>
              <div class="blog__card--icon ">
                <div class="blog__card--icon-1"><?=substr($blog->content,50)?> </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        
      </div>
    </div>
  </div>
  <!--================= Blog Section End Here =================--> 
  
</div>
</div>
<!--================= Wrapper End Here =================--> 
