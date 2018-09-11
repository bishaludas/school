<!-- initialize -->
<?php require_once('../private/initialize.php'); ?>
<!-- initialize end -->
<?php $title ="Home"; ?>
<!-- header -->
<?php include(SHARED_PATH.'/header.php'); ?>
<!-- header end -->		


<!-- BANNER AREA -->
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-9">
      <!-- carousel banner -->
      <div id="carousel-image" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-image" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-image" data-slide-to="1"></li>
          <li data-target="#carousel-image" data-slide-to="2"></li>
          <li data-target="#carousel-image" data-slide-to="3"></li>
          <li data-target="#carousel-image" data-slide-to="4"></li>
          <li data-target="#carousel-image" data-slide-to="5"></li>
          <li data-target="#carousel-image" data-slide-to="6"></li>
          <li data-target="#carousel-image" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item cs-img1 active">
            <!-- <img class="d-block w-100"  src="img/banner/1.jpeg" alt="First slide"> -->
          </div>
          <div class="carousel-item cs-img2">
            <!-- <img class="d-block w-100" src="img/banner/2.jpeg" alt="Second slide"> -->
          </div>
          <div class="carousel-item cs-img3">
            <!-- <img class="d-block w-100" src="img/banner/3.jpeg" alt="Third slide"> -->
          </div>

          <div class="carousel-item cs-img6">
            <!-- <img class="d-block w-100" src="img/banner/3.jpeg" alt="Third slide"> -->
          </div>
          <div class="carousel-item cs-img7">
            <!-- <img class="d-block w-100" src="img/banner/3.jpeg" alt="Third slide"> -->
          </div>
          <div class="carousel-item cs-img8">
            <!-- <img class="d-block w-100" src="img/banner/3.jpeg" alt="Third slide"> -->
          </div>
          <div class="carousel-item cs-img9">
            <!-- <img class="d-block w-100" src="img/banner/3.jpeg" alt="Third slide"> -->
          </div>
          <div class="carousel-item cs-img10">
            <!-- <img class="d-block w-100" src="img/banner/3.jpeg" alt="Third slide"> -->
          </div>
        </div>


        <!-- next prev button -->
          <!-- <a class="carousel-control-prev" href="#carousel-image" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>


          <a class="carousel-control-next" href="#carousel-image" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>
      <!-- carousel banner end -->


      <!-- banner-news -->
      <div class="col-md-3 ">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Events</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane tab-mod fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?php bannerNews($con); ?>
          </div>


          <div class="tab-pane tab-mod fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit!</p>
          </div>
        </div>
      </div>
      <!-- banner-news ends-->
    </div>
  </div>
  <!-- BANNER END -->
  <hr class="style-four">


  <!-- About us -->
  <section class="about-us my-5">
    <h3>विध्यालयको संक्षिप्त परिचय</h3>
    <div class="container">
      <div class="row ">

      </div>
      <div class="row">
        <div class="col-sm-12 col-md-9">

          <div class="about-content py-4">
            <?php selectAboutUslim($con); ?>
            <div><a href="<?php echo url_for('/pages?url=about us&column=details'); ?>" class="btn btn-sm btn-danger">Read More</a></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="about-image"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- About us -->



  <!-- Message -->
  <section class="message py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="message-title">MESSAGE FROM Principle</div>
          <?php 
          messagePrincipal($con);
          ?>
          
        </div>

        <div class="col-lg-6">
          <div class="message-title">MESSAGE FROM CHAIRMAIN</div>

          <?php messageChairman($con); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Message End-->



  <!-- NEWS SECTION -->
  <section class="news py-5">
    <div class="container">
      <div class="row">

        <!-- NEWS SECTION start -->
        <div class="col-lg-6 pb-2 border-right">
          <div class="message-title"><i class="ion-ios-paper"></i>&nbsp;&nbsp;&nbsp;Latest News & Article</div>
          <div class="container">

            <!-- Start here -->

            <?php 
            viewLatestNews($con);
            ?>
            <!-- end here -->

          </div>
        </div>
        <!-- NEWS SECTION start -->



        <!-- Event SECTION start -->
        <div class="col-lg-6">
          <div class="message-title"><i class="ion-android-calendar"></i>&nbsp;&nbsp;&nbsp;Upcomming Events</div>
          <!-- Start here -->
          <div class="row event-list py-2">
            <div class="col-lg-4">
              <ul class="event-day text-center border">
                <li class="bg-event py-2">Month</li>
                <li class="bg-light py-2">Day</li>
              </ul>
              
            </div>
            <div class="col-lg-8">
              <b>title</b>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, doloribus.</p>
              <hr>
            </div>
          </div>
          <!-- end here -->

          <!-- Start here -->
          <div class="row event-list py-2">
            <div class="col-lg-4">
              <ul class="event-day text-center border">
                <li class="bg-event py-2">Month</li>
                <li class="bg-light py-2">Day</li>
              </ul>
              
            </div>
            <div class="col-lg-8">
              <b>title</b>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, doloribus.</p>
              <hr>
            </div>
          </div>
          <!-- end here -->
        </div>
        <!-- NEWS SECTION start -->



      </div>
    </div>
  </section>
  <!-- NEWS SECTION End-->

  <div class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="autoplay-title">We Provide Innovative Education</div>
        </div>  
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="slider mx-3">
            <div class="autoplay-image">
              <img src="img/slider/1.jpg" class="img-fluid" alt="abc">
            </div>
            <div class="autoplay-image">
              <img src="img/slider/2.jpg" class="img-fluid" alt="abc">
            </div>
            <div class="autoplay-image">
              <img src="img/slider/3.jpg" class="img-fluid" alt="abc">
            </div>
            <div class="autoplay-image">
              <img src="img/slider/4.jpg" class="img-fluid" alt="abc">
            </div>
            <div class="autoplay-image">
              <img src="img/slider/5.jpg" class="img-fluid" alt="abc">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



  <!-- testimonial -->
  <section class="testimonial mt-5">
    <div class="testimonial-overlay py-5">
      <h3>Testimonials</h3>
      <div class="container-fluid">
        <div class="row">

          <!-- start  -->
          <div class="offset-md-2 col-md-3 text-center mt-4">
            <div class="testimonial-img">
              <img src="img/people/1.jpg" alt="">
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione eligendi voluptatem, laudantium quibusdam aliquid alias totam nam cumque! Minima, quo!
            </p>
            <b>Student</b>
          </div>
          <!-- end -->

          <div class="offset-md-2 col-md-3 text-center mt-4">
            <div class="testimonial-img">
              <img src="img/people/1.jpg" alt="">
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione eligendi voluptatem, laudantium quibusdam aliquid alias totam nam cumque! Minima, quo!
            </p>
            <b>Student</b> 
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
  

</section>




<!-- footer -->
<?php include(SHARED_PATH.'/footer.php'); ?>