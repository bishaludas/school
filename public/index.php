<!-- initialize -->
<?php require_once('../private/initialize.php'); ?>
<!-- initialize end -->
<?php $title ="Home"; ?>
<!-- header -->
<?php include(SHARED_PATH.'/header.php'); ?>
<!-- header end -->		


<!-- BANNER AREA -->
<div class="container">
  <div class="row">
   <marquee><p style="font-family: Impact; font-size: 12pt">मिति २०७५ भाद्र २७ गते जनकल्याण नमुना माध्यमिक विद्यालय वागचाैर न.पा. -२ थारमारेकाे वार्षिकोत्सब समारोहकाे अवसरमा जनकल्याण पूर्वविद्यार्थी समाजद्वारा विद्यालयकाे वेवसाइट निर्माण गरि उद्घाटन तथा हस्तान्तरण कार्यक्रम सम्पन्न गरिदै ।</p></marquee>
 </div>
</div>
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
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">News and Notices</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Events</a>
          </li> -->
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane tab-mod fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?php bannerNews($con); ?>
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

          <?php 
          function Events($con){
            $query = mysqli_query($con, "SELECT * FROM events ORDER BY date");
            $counter =1;
            while ($row = mysqli_fetch_assoc($query)) {
              $id = url($row['id']);
              $event_title = $row['title'];
              $event_body = $row['body'];
              $date = $row['date'];
              $yrdata = strtotime($date);

              $res ="<div class='row event-list py-2'>
              <div class='col-lg-4'>
              <ul class='event-day text-center border'>
              <li class='bg-event py-2'>".date('F, Y', $yrdata)."</li>
              <li class='bg-light py-2'>".date('jS', $yrdata)."</li>
              </ul>
              
              </div>
              <div class='col-lg-8'>
              <b>$event_title</b>
              <p>$event_body</p>
              <hr>
              </div>
              </div>";

              echo $res;      
              ++$counter;
            }
          }

          Events($con);
          ?>
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

          <?php 
          fetchTestimonial($con);
          ?>          
        </div>
      </div>
    </div>
  </div>
  

</section>




<!-- footer -->
<?php include(SHARED_PATH.'/footer.php'); ?>