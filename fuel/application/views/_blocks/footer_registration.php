<!--================= Footer Section Start Here =================-->
<footer id="react-footer" class="react-footer react-footer-two pt---100 mt---100">
  <div class="footer-top">
	  
	  <div class="container">
                    <div class="footer-top-cta">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Would you be interested in collaborating<br>
									as a sponsor for the Traders Convention?</h3>
                            </div>
                            <div class="col-lg-4 text-right">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal"> Go To FAQ <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                            </div>
                        </div>
                    </div>
                </div> 
	  
	  
    <div class="container">
      <div class="row">
		  
        <!--<div class="col-lg-3 md-mb-30">
          <div class="footer-widget footer-widget-1">
            <div class="footer-logo white"> <a href="index.html" class="logo-text"> <img src="assets/images/footer-logo.png" alt="logo"></a> </div>
            <h5 class="footer-subtitle">There are course and event custom <br>
              post types so you can easily create and<br>
              manage course, events.</h5>
            <ul class="footer-address">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                <a href="tel:+(402)76244183"> +(402) 762 441 83 </a></li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <a href="mailto:info@yourdmain.com"> info@todayConvention.com </a></li>
            </ul>
          </div>
        </div>-->
		  
        <div class="col-lg-12">
          <div class="footer-widget text-center">
            <!--<h3 class="footer-title">About Us</h3>-->
            <div class="footer-menu">
            <?php 
                           
                           echo $nav_arr = fuel_nav(array('depth'=>1
		  					,'render_type' => 'basic'
							, 'group_id' => 3
                                                        , 'active_class'=>'active'
                                                        ,'active'=>  uri_segment(2)
							,'container_tag_attrs' => array('style' => '' ,'id'=>'usefullinks')
							,'container_tag_class' => 'footer-menu'
							,'order' => 'precedence'
                                                        ,'use_nav_key'=>TRUE
                                                        ,'home_link'=>  base_url()
							,'subcontainer_tag_class'=>array('','','')
							));
                           ?>
            </div>
          </div>
        </div>
		  
       <!-- <div class="col-lg-3 md-mb-30">
          <div class="footer-widget footer-widget-3">
            <h3 class="footer-title">Useful Links</h3>
            <div class="footer-menu">
            <?php 
                           
                         /*  echo $nav_arr = fuel_nav(array('depth'=>1
		  					,'render_type' => 'basic'
							, 'group_id' => 2
                                                        , 'active_class'=>'active'
                                                        ,'active'=>  uri_segment(2)
							,'container_tag_attrs' => array('style' => '' ,'id'=>'usefullinks')
							,'container_tag_class' => 'footer-menu'
							,'order' => 'precedence'
                                                        ,'use_nav_key'=>TRUE
                                                        ,'home_link'=>  base_url()
							,'subcontainer_tag_class'=>array('','','')
							));
							
							*/
                           ?>
              <ul>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="registration.html">Registration</a></li>
                <li><a href="Terms-Conditions.html">Terms & Conditions</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="refund-policy.html">Refund Policy</a></li>
                <li><a href="blog.html.html">News & Blog</a></li>
                <li><a href="faq.html">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>-->
		  
       <!-- <div class="col-lg-3">
          <div class="footer-widget footer-widget-4">
            <h3 class="footer-title">Newsletter</h3>
            <div class="footer3__form">
              <p>Get the latest todayConvention news <br>
                delivered to you inbox</p>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button class="footer3__form-1"> <i class="arrow_right"></i> </button>
              </form>
            </div>
          </div>
        </div>-->
		  
		  
		  
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="react-copy-left">© 2024 <a href="#">tradersconvention.com</a> All Rights Reserved</div>
      <div class="react-copy-right">
        <ul class="social-links">
          <li class="follow">Follow us</li>
          <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
          <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
          <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--================= Footer Section End Here =================--> 
	
	
	
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Traders Convention as a Sponsor ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		  
		  
		<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPhonenumber" placeholder="phonenumber">
  <label for="floatingPassword">Phone Number</label>
</div>  
		  
		  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>	
	
	

<!--================= Scroll to Top Start =================-->
<div id="backscrollUp" class="home"> <span aria-hidden="true" class="arrow_carrot-up"></span> </div>
<!--================= Scroll to Top End =================--> 
<?=js(array(
  'jquery.min',
  'modernizr-2.8.3.min',
  'bootstrap.min',
  'owl.carousel.min',
  'jquery.magnific-popup.min',
  'jquery.counterup.min',
  'waypoints.min',
  'menus',
  'plugins',
  'main',
  'jquery.countdown.min',
  'scripts'
))?>
<!--================= Jquery latest version =================--> 
 
 
</body>
</html>