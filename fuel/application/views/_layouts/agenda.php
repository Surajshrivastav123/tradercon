<?php $this->load->view('_blocks/header')?>
	
<!--================= Wrapper Start Here =================-->
<div class="react-wrapper">
  <div class="react-wrapper-inner"> 
    <!--================= Breadcrumbs Section Start Here =================-->
    <div class="react-breadcrumbs">
      <div class="breadcrumbs-wrap"> <img class="desktop" src="<?=img_path('agenda/'.$banner)?>" alt="Breadcrumbs"> <img class="mobile" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
        <div class="breadcrumbs-inner">
          <div class="container">
            <div class="breadcrumbs-text">
              <h1 class="breadcrumbs-title">Agenda</h1>
              <div class="back-nav">
                <ul>
                  <li><a href="<?=base_url()?>">Home</a></li>
                  <li>agenda</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================= Breadcrumbs Section End Here =================-->
    
    <div class="profile-top back__course__area pt---120 pb---90">
      <div class="container agenda">
        <div class="row">

		<?php echo fuel_var('body', 'This is a default layout. To change this layout go to the fuel/application/views/_layouts/main.php file.'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('_blocks/footer')?>
