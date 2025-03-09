<?php $this->load->view('_blocks/header')?>
	
<div class="react-wrapper">
<div class="react-wrapper-inner"> 
    <!--================= Breadcrumbs Section Start Here =================--> 
     <div class="react-breadcrumbs">
      <div class="breadcrumbs-wrap"> <img class="desktop" src="<?php echo base_url(); ?>assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs"> <img class="mobile" src="<?php echo base_url(); ?>assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
        <div class="breadcrumbs-inner">
        <div class="container">
          <div class="breadcrumbs-text">
            <h1 class="breadcrumbs-title">ONLINE REGISTRATION</h1>
            <div class="back-nav">
              <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Registration</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================= Breadcrumbs Section End Here =================-->
    <div class="profile-top back__course__area pt---100 pb---90">
    <div class="container">
      <div class="col-md-12">
       
          <?php
	$attributes = array('role' => 'form', 'id'=>'login_from');
	echo form_open('login/process', $attributes);
	?>
            <div class="row">
              <div class="col-md-6  pt---100">
				  
				 <h2>Welcome Back !</h2>
				 <?php
				 if($this->session->flashdata('message')) {
				$message = $this->session->flashdata('message');
				?>
				<div><h4 class="btn-danger"><?php echo $message; ?></h4>

				</div>
				<?php
				}

				?>
		 	
				  <h4>To Keep connected with us Please login to your account </h4>
				  
				<div class="mb-3">   
				<label for="exampleInputEmail1" class="form-label">Email Address</label>  
                <div class="form-floating mb-3">
                  <input type="email" name="user_name" id="user_name" class="form-control" id="floatingInput" placeholder="name@example.com" required="required">
                  <label for="floatingInput"><i class="icon_mail_alt"></i> Your Email Address</label>
                </div>
				 </div>
				  
				<div class="mt-4">  
				<label for="exampleInputEmail1" class="form-label">Password</label>
                <div class="form-floating">
                  <input type="password" name="password" id="password" class="form-control" id="floatingPassword" placeholder="Password" required="required">
                  <label for="floatingPassword"><i class="icon_lock-open_alt"></i> Password</label>
                </div>
				</div> 
				  
				
					
					
                 <div class="row g-3">
					 
					 <div class="col-6 pt---10"><button class="buybtn text-center"> Submit </button></div>
					 	
					<?php  echo form_close(); ?>   
					
				  <div class="col-6 pt---30">
					 <a href="#">Forgot Password ?</a> <br>
					 <a href="registration.html">Don't have an accounts? Register here</a> 
			      </div>
					 
					 
				  
				  </div> 			
					
                
             </div>
        
        
				<div class="col-md-6"><img class="desktop" src="<?php echo base_url(); ?>assets/images/about/ab.png" alt="Breadcrumbs"></div>
		  
		  
	  
		  
      </div>
    </div>
  </div>
</div>
	
<?php $this->load->view('_blocks/footer_registration')?>
