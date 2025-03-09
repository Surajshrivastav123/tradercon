<?php $this->load->view('_blocks/header')?>

	

<div class="react-wrapper">

  <div class="react-wrapper-inner"> 

    <!--================= Breadcrumbs Section Start Here =================--> 

    

    <!--================= Breadcrumbs Section End Here =================-->

    

    <div class="react-upcoming__event blog__area pb---100">

      <div class="container">

        <div class="react__title__section text-center">

          <h5>Listen to the </h5>

          <h2 class="react__tittle">Mentors</h2>

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

                <div class="instructor__image"> <img src="<?=img_path('advisor/'.$speaker->image)?>" alt="course instructor">

                  <div class="content__hover">

                    <ul>

                      <li>

                        <h5 class="white-color"><?=$speaker->name?></h5>

                      </li>

                    </ul>

                    <p class="iconsty"><a href="<?=base_url('mentor/'. $speaker->id)?>"> <i class="arrow_carrot-right"></i> </a></p>

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

</div>

	

<?php $this->load->view('_blocks/footer')?>