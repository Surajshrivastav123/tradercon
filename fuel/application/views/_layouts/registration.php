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

    <?php

	$attributes = array('role' => 'form', 'enctype' => 'multipart/form-data','id'=>'delg_from');

	echo form_open('', $attributes);

	?>

    <div class="profile-top back__course__area pt---100 pb---90">

    <div class="container">

      <div class="col-md-12">

        <div class="card">

          <div class="card-body">

            <div class="row">

          <div class="col-md-6">

                <div class="form-floating mb-3">

                  <input type="text" name="first_name" id="first_name" class="form-control" placeholder="name@example.com" required="required">

                  <label for="floatingInput"><i class="icon_profile"></i> Your First Name</label>

                </div>

                <div class="form-floating">

                  <input type="text" name="last_name" id="last_name" class="form-control"  placeholder="Password" required="required">

                  <label for="floatingPassword"><i class="icon_profile"></i> Your Last Name</label>

                </div>

              </div>

              <div class="col-md-6">

                <div class="form-floating mb-3">

                  <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" required="required">

                  <label for="floatingInput"><i class="icon_mail_alt"></i> Your Email Address</label>

                </div>

                <div class="form-floating">

                  <input type="text" name="twitter_id" id="twitter_id" class="form-control" required="required" placeholder="Twitter">

                  <label for="floatingPassword"><i class="social_twitter"></i> Twitter handle</label>

                </div>

              </div>

              <div class="col-md-6 mt-3">

                <div class="form-floating mb-3">

                  <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="9902345678" required="required">

                  <label for="floatingInput"><i class="icon_mobile"></i> Phone number</label>

                </div>

                <div class="form-floating mb-3">

                  <input type="text" name="emergency_contact_number" class="form-control" id="emergency_contact_number" placeholder="78888888888"> 

                  <label for="floatingInput"><i class="icon_phone"></i> Emergency number to contact</label>

                </div>

                <div class="form-floating mb-3">

                  <input type="text" id="trading_years" class="form-control" name="trading_years" placeholder="10">

                  <label for="floatingInput"> <i class="icon_calendar"></i> No. of years in trading</label>

                </div>

              </div>

              <div class="col-md-6 mt-3">

                <div class="form-floating mb-3">

                  <select class="form-select" name="country" id="country" aria-label="Floating label select example">
                    <option selected>Country</option>
                    <option value="India">India</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="US">US</option>
                    <option value="UK">UK</option>
                    <option value="europe">europe</option>
                      <option value="U.A.E">U.A.E</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Oman">Oman</option>
                    <option value="Others">Others</option>
                  </select>

                  <label for="floatingSelect"><i class="icon_globe"></i> Select Country</label>

                </div>

                <div class="form-floating mb-3">

                  <input type="text" name="state" id="text" class="form-control" placeholder="Telangana">

                  <label for="floatingInput"><i class="icon_map"></i> State</label>

                </div>

                <div class="form-floating mb-3">

                  <input type="text" name="city" id="city" class="form-control" placeholder="Hyderebad">

                  <label for="floatingInput"><i class="icon_pin_alt"></i> City</label>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="card mt---30">

          <div class="card-body">

            <div class="row">

              <div class="col-4">

                <h5>Capital allocation for trading</h5>

                <div class="form-check">

                  <input class="form-check-input" value="10" type="radio" name="capital_allocation_trading" id="flexRadioDefault1"checked>

                  <label class="form-check-label" for="flexRadioDefault1"> Upto 10 lakhs </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" value="50" type="radio" name="capital_allocation_trading" id="flexRadioDefault2">

                  <label class="form-check-label" for="flexRadioDefault2"> 11 to 50 lakhs </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" value="99" type="radio" name="capital_allocation_trading" id="flexRadioDefault2">

                  <label class="form-check-label" for="flexRadioDefault2"> 51 to 100 lakhs </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" value="100" type="radio" name="capital_allocation_trading" id="flexRadioDefault2">

                  <label class="form-check-label" for="flexRadioDefault2"> 1 Cr and above </label>

                </div>

              </div>

              <div class="col-4">

                <h5>Markets traded</h5>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" value="NSE" name="market_traded[]" id="flexCheckChecked" checked>

                  <label class="form-check-label" for="flexCheckDefault"> NSE and BSE </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" value="SGX" name="market_traded[]" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckChecked"> MCX </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" value="S&P" id="flexCheckDefault" name="market_traded[]">

                  <label class="form-check-label" for="flexCheckDefault"> US Markets </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" value="Cryptocurrencies" name="market_traded[]" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault"> Cryptocurrencies </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" value="Others" name="market_traded[]" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault"> Others </label>

                </div>

              </div>

              <div class="col-4">

                <h5>Profile</h5>

                <div class="form-check">

                  <input class="form-check-input" type="radio" value="Full time Trader" name="profile[]" id="flexRadioDefault1"checked>

                  <label class="form-check-label" for="flexRadioDefault1">Full time Trader</label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="radio" value="Part time, with full time Job" name="profile[]" id="flexRadioDefault2">

                  <label class="form-check-label" for="flexRadioDefault2">Part time, with full time Job</label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="radio" value="Investor" name="profile[]" id="flexRadioDefault2">

                  <label class="form-check-label" for="flexRadioDefault2">Investor</label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="radio" value="Others"  name="profile[]" id="flexRadioDefault2">

                  <label class="form-check-label" for="flexRadioDefault2">Others</label>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="card mt---30">

          <div class="card-body">

            <div class="row">

              <div class="col-4">

                <h5>How did you hear about Traders Convention</h5>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox"  name="how_to_know[]" value="Twitter" id="flexCheckChecked" checked>

                  <label class="form-check-label" for="flexCheckDefault"> Twitter </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="how_to_know[]" value="Facebook" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckChecked"> Instgram </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="how_to_know[]" value="TV" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault"> Youtube </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="how_to_know[]" value="Other" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault"> Other </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="how_to_know[]" value="Through sponsors" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault"> Through Mentors </label>

                </div>

              </div>

              <div class="col-4">

                <h5>Please tell us your Food preference</h5>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="food_preferences[]" value="Vegetarian" id="flexCheckChecked" checked>

                  <label class="form-check-label" for="flexCheckDefault"> Vegetarian </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="food_preferences[]" value="Non-Vegetarian" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckChecked"> Non-Vegetarian </label>

                </div>

             <!--   <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="food_preferences[]" value="Jain" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault"> Jain</label>

                </div>-->

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="food_preferences[]" value="Others" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault"> Others </label>

                </div>

              </div>
<!--
              <div class="col-4">

                <h5>Please Share Your Beverage Preference</h5>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="bevarage_preferences[]" value="Scotch" id="flexCheckChecked" checked>

                  <label class="form-check-label" for="flexCheckDefault"> Scotch </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="bevarage_preferences[]" value="Beer" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckChecked"> Beer </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="bevarage_preferences[]" value="Hell No! I am a healthy teetotaler. Fruit Juice for me!" id="flexCheckDefault">

                  <label class="form-check-label" for="flexCheckDefault"> Hell No! I am a healthy teetotaler. Fruit Juice for me! </label>

                </div>

              </div>
-->
            </div>

          </div>

        </div>

       <div class="card mt---30">

          <div class="card-body">

            <div class="row">

             <!--  <div class="col-6">

                <h5>Icebreaker round</h5>

                <div class="form-floating">

                  <textarea name="ice_baker_round" id="ice_baker_round" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>

                  <label for="floatingTextarea2">Comments</label>

                </div>

              </div>

              <div class="col-6">

                <h5>T-Shirt Size:</h5>

                <div class="form-check form-check-inline">

                  <input class="form-check-input" type="radio" name="tshirt_size" id="inlineRadio1" value="S">

                  <label class="form-check-label" for="inlineRadio1">S</label>

                </div>

                <div class="form-check form-check-inline">

                  <input class="form-check-input" type="radio" name="tshirt_size" id="inlineRadio2" value="M">

                  <label class="form-check-label" for="inlineRadio2">M</label>

                </div>

                <div class="form-check form-check-inline">

                  <input class="form-check-input" type="radio" name="tshirt_size" id="inlineRadio2" value="L">

                  <label class="form-check-label" for="inlineRadio2">L</label>

                </div>

                <div class="form-check form-check-inline">

                  <input class="form-check-input" type="radio" name="tshirt_size" id="inlineRadio2" value="XL">

                  <label class="form-check-label" for="inlineRadio2">XL</label>

                </div>

                <div class="form-check form-check-inline">

                  <input class="form-check-input" type="radio" name="tshirt_size" id="inlineRadio2" value="XXL">

                  <label class="form-check-label" for="inlineRadio2">XXL</label>

                </div>

                <div class="form-check form-check-inline">

                  <input class="form-check-input" type="radio" name="tshirt_size" id="inlineRadio2" value="Others">

                  <label class="form-check-label" for="inlineRadio2">Others</label>

                </div>

              </div>

              <div class="col-6 mt---30">

                <h5>I  would like to receive special offers on trading tools and products from Traders Convention’s partners</h5>

                <div class="form-check">

                  <input class="form-check-input" type="radio" name="specaial_offer_received" id="exampleRadios1" value="Yes" checked>

                  <label class="form-check-label" for="exampleRadios1"> Yes </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="radio" name="specaial_offer_received" id="exampleRadios2" value="No">

                  <label class="form-check-label" for="exampleRadios2"> No </label>

                </div>

              </div>

              <div class="col-6 mt---30">

                <h5>I would like to connect with participants on social media. Announce me after I have registered.</h5>

                <div class="form-check">

                  <input class="form-check-input" type="radio" name="social_media_connect" id="exampleRadios1" value="Yes" checked>

                  <label class="form-check-label" for="exampleRadios1"> Yes </label>

                </div>

                <div class="form-check">

                  <input class="form-check-input" type="radio" name="social_media_connect" id="exampleRadios2" value="No">

                  <label class="form-check-label" for="exampleRadios2"> No </label>

                </div>

              </div>-->

            </div>

          </div>

        </div>

		  

		  

		  <div class="row mt---30">

		  <h5>Terms of Attendance</h5>

		<div class="form-check">

  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">

  <label class="form-check-label" for="defaultCheck1">

    Default checkbox

  </label>

	<a href="#">I agree to the terms of attendance (Read more)</a>		

</div>

			  

			  

 	  

<button class="buybtn col-2 text-center"> Submit </button>

			  

</div>

<?php  echo form_close(); ?>        	

           



        </div>

      </div>

    </div>

  </div>

	

<?php $this->load->view('_blocks/footer_registration')?>

