<?php $this->load->view('_blocks/header')?>

	



        <!--================= Wrapper Start Here =================-->

        <div class="react-wrapper">

            <div class="react-wrapper-inner">

                <!--================= Breadcrumbs Section Start Here =================-->

                <div class="react-breadcrumbs">

                    <div class="breadcrumbs-wrap">

                        <img class="desktop" src="<?=img_path('breadcrumbs/1.jpg')?>" alt="Breadcrumbs">

                        <img class="mobile" src="<?=img_path('breadcrumbs/1.jpg')?>" alt="Breadcrumbs">

                        <div class="breadcrumbs-inner">

                            <div class="container">

                                <div class="breadcrumbs-text">

                                    <h1 class="breadcrumbs-title">Profile</h1>

                                    <div class="back-nav">

                                        <ul>

                                            <li><a href="<?=base_url()?>">Home</a></li>

                                            <li>Profile</li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>                

                </div>

                <!--================= Breadcrumbs Section End Here =================-->



                <div class="profile-top back__course__area pt---120 pb---90">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4">

                                <img src="<?=img_path($speaker->image)?>" alt="profile">

                                <a href="<?=base_url('prices')?>" class="follows"><?=$speaker->register_at?> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>

                            </div>

                            <div class="col-lg-8">

                                <ul class="user-section">

                                    <li class="user">

                                        <span class="name">Name:</span><em><?=$speaker->name?></em>

                                    </li>

                                    <li>Phone:<em><?=$speaker->phone_number?></em> </li>

                                    <li>Email:<em><?=$speaker->email?></em> </li>

                                    <li class="social">

                                        Follow: <em>

                                            <a href="<?=$speaker->youtube_link?>"><span aria-hidden="true" class="social_youtube"></span></a>

                                            <a href="<?=$speaker->instagram_link?>"><span aria-hidden="true" class="social_instagram"></span></a>
                                            <a href="<?=$speaker->twitter_link?>"><span aria-hidden="true" class="social_twitter"></span></a> 
                                          <a href="<?=$speaker->linkedin_link?>"><span aria-hidden="true" class="social_linkedin"></span></a>

                                        </em>

                                    </li>

                                </ul>

                                <h3>Biography</h3>



                                <?=$speaker->biography?>

                                

                            </div>

                        </div>

                    </div>

                </div>               

            </div>

        </div>

        <!--================= Wrapper End Here =================-->

	<script>

        window.addEventListener('load', 

  function() { 

    document.querySelectorAll("body")[0].classList.add('profile-page')    ;

  }, false);

         

    </script>    

<?php $this->load->view('_blocks/footer')?>

