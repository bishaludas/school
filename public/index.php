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
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane tab-mod fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit!
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptatibus accusantium explicabo amet deserunt incidunt culpa est dolore placeat commodi?
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit!
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptatibus accusantium explicabo amet deserunt incidunt culpa est dolore placeat commodi?
            </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit!
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptatibus accusantium explicabo amet deserunt incidunt culpa est dolore placeat commodi?
            </p>
          </div>
          <div class="tab-pane tab-mod fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit!</p>
          </div>
          <div class="tab-pane tab-mod fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
            <div><a href="https://google.com" class="btn btn-sm btn-danger">Read More</a></div>
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

          <div class="message-img">
            <img src="img/people/1.jpg" alt="">
          </div>
          <p class="message-man text-center">Mr. Someone</p>

          <p class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolores ab magni, placeat in. Laboriosam et, nulla aspernatur quam asperiores praesentium. Velit id animi maiores veniam impedit suscipit corporis unde.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis reiciendis magnam impedit mollitia neque aspernatur suscipit incidunt voluptates, iste minus.
          </p>
        </div>
        <div class="col-lg-6">
          <div class="message-title">MESSAGE FROM CHAIRMAIN</div>

          <div class="message-img">
            <img src="img/people/2.jpg" alt="">
          </div>
          <p class="message-man text-center">Mr. Someone</p>

          <p class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolores ab magni, placeat in. Laboriosam et, nulla aspernatur quam asperiores praesentium. Velit id animi maiores veniam impedit suscipit corporis unde.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis reiciendis magnam impedit mollitia neque aspernatur suscipit incidunt voluptates, iste minus.
          </p>
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

            <!-- Start here -->
            <div class="row news-list py-2">
              <div class="col-lg-4">
                <div class="news-img">
                  <img src="img/people/2.jpg" class="img-fluid" alt="">
                </div>

              </div>
              <div class="col-lg-8">
                <b>title</b>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, doloribus.</p>
                <a href="#" class="btn btn-sm btn-outline-danger">Read More</a>
              </div>
            </div>
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



  <!-- testimonial -->
  <section class="testimonial mt-5">
    <div class="testimonial-overlay py-5">
      <h3>Testimonials</h3>
      <div class="container-fluid">
        <div class="row">

          <!-- start  -->
          <div class="col-md-3 text-center mt-4">
            <div class="testimonial-img">
              <img src="img/people/1.jpg" alt="">
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione eligendi voluptatem, laudantium quibusdam aliquid alias totam nam cumque! Minima, quo!
            </p>
            <b>Student</b>
          </div>
          <!-- end -->

          <div class="col-md-3 text-center mt-4">
            lol 
          </div>
          <div class="col-md-3 text-center mt-4">
            lol 
          </div>
          <div class="col-md-3 text-center mt-4">
            lol 
          </div>
          
        </div>
      </div>
    </div>
  </div>
  

</section>








<!-- footer -->
<?php include(SHARED_PATH.'/footer.php'); ?>