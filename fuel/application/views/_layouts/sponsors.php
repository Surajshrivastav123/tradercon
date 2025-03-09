<?php $this->load->view('_blocks/header')?>

	

<div class="react-wrapper">

  <div class="react-wrapper-inner"> 

    <!--================= Breadcrumbs Section Start Here

     <div class="react-breadcrumbs">

      <div class="breadcrumbs-wrap"> <img class="desktop" src="<?//=img_path('banner/'.$event->sponsors_banner)?>" alt="Breadcrumbs"> <img class="mobile" src="<?//=img_path('banner/'.$event->sponsors_banner)?>" alt="Breadcrumbs">

        <div class="breadcrumbs-inner">

          <div class="container">

            <div class="breadcrumbs-text">

              <h1 class="breadcrumbs-title">Sponsors</h1>

              <div class="back-nav">

                <ul>

                  <li><a href="<?php //echo base_url(); ?>">Home</a></li>

                  <li>Sponsors</li>

                </ul>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

     Breadcrumbs Section End Here =================-->

    

    <div class="profile-top back__course__area pt---120 pb---90">

      <div class="container">

        <div class="row">

          

          	

            <?php 

           

            if(is_array($sponsors_list))

            {

            foreach($sponsors_list as $sponsor)

            {

            ?>

             <div class="sponsors-logo col-12 col-sm-6 col-md-3 col-lg-4 col-xl-4">
<a href="<?=img_path($sponsor->link)?>" target="_blank" title="<?=$sponsor->title?>" >
				<img src="<?=img_path('sponsors/'.$sponsor->image)?>" alt="sponsors">
            </a>
			    </div>

			

          

            <?php }} ?>

      

          </div>

        </div>

      </div>

    </div>

  </div>

	

<?php $this->load->view('_blocks/footer')?>

