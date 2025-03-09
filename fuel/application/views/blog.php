  <!--================= Breadcrumbs Section End Here =================-->
  
  <div class="back__course__page_grid react-courses__single-page pb---40 pt---110">
    <div class="container pb---70">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-single-inner">
            <div class="blog-content">
              <h3><?=$blogdetails->title?></h3>
              <div class="blog-image"> <img src="<?=img_path("blog/".$blogdetails->image)?>" alt="Blog Image"></div>
              <?=$blogdetails->content?>
              <div class="blog-tags">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <div class="share-course">Share this post: <em>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                        <circle cx="18" cy="5" r="3"></circle>
                        <circle cx="6" cy="12" r="3"></circle>
                        <circle cx="18" cy="19" r="3"></circle>
                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                      </svg>
                      </em> <span> <a href="#"><i aria-hidden="true" class="social_facebook"></i></a> <a href="#"><i aria-hidden="true" class="social_twitter"></i></a> <a href="#"><i aria-hidden="true" class="social_linkedin"></i></a> </span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="react-sidebar ml----30">
            <div class="widget back-search">
              <h3 class="widget-title">Search</h3>
              <form>
                <input type="text" name="input" placeholder="Search...">
                <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                </button>
              </form>
            </div>
            <div class="widget back-post">
              <h3 class="widget-title">Related Posts</h3>
              <ul class="related-courses">
                <li> <a href="coureses-single.html"><span class="post-images"><img src="assets/images/blog/4.png" alt="post"></span></a>
                  <div class="titles">
                    <h4><a href="coureses-single.html">A Better alternative <br>
                      to grading student writing</a></h4>
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Dec 28, 2022</span> </div>
                </li>
                <li> <a href="coureses-single.html"><span class="post-images"><img src="assets/images/blog/5.png" alt="post"></span></a>
                  <div class="titles">
                    <h4><a href="coureses-single.html">Strategic Social <br>
                      Media & evolution of visual</a></h4>
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    April 14, 2022</span> </div>
                </li>
                <li> <a href="coureses-single.html"><span class="post-images"><img src="assets/images/blog/6.png" alt="post"></span></a>
                  <div class="titles">
                    <h4><a href="coureses-single.html">Adobe lightroom <br>
                      for beginners complete</a></h4>
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Jun 27, 2022</span> </div>
                </li>
              </ul>
            </div>
            <div class="widget react-categories-course">
              <h3 class="widget-title">Blogs</h3>
              <ul class="recent-category">
                <li> <a href="#">Intraday trading <em>(6)</em></a></li>
                <li> <a href="#">Delivery trading <em>(4)</em></a></li>
                <li> <a href="#">Swing trading <em>(8)</em></a></li>
                <li> <a href="#">Positional trading<em>(3)</em></a></li>
                <li> <a href="#">Fundamental trading<em>(5)</em></a></li>
                <li> <a href="#">Technical trading<em>(2)</em></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--================= Wrapper End Here =================--> 