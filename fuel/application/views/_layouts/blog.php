<?php $this->load->view('_blocks/header')?>
<div class="react-wrapper">
<div class="react-wrapper-inner"> 
      <!--================= Breadcrumbs Section Start Here =================-->
  <div class="react-breadcrumbs">
    <div class="breadcrumbs-wrap"> <img class="desktop" src="<?=img_path("breadcrumbs/1.jpg")?>" alt="Breadcrumbs"> <img class="mobile" src="<?=img_path("breadcrumbs/1.jpg")?>" alt="Breadcrumbs">
      <div class="breadcrumbs-inner">
        <div class="container">
          <div class="breadcrumbs-text">
            <h1 class="breadcrumbs-title">Blog </h1>
            <div class="back-nav">
              <ul>
                <li><a href="<?=base_url("")?>">Home</a></li>
                <li>Registration</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
		<?php echo fuel_var('body', 'This is a default layout. To change this layout go to the fuel/application/views/blog.php file.'); ?>
	</div>
    </div>
<?php $this->load->view('_blocks/footer_registration')?>