<?php $this->load->view('_blocks/header')?>

	

      <!--================= Wrapper Start Here =================-->

      <div class="react-wrapper">

            <div class="react-wrapper-inner">

               



                 <div class="pricing-section home-five pt---120 pb---120">

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

