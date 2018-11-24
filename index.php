<?php

  // Check If User Coming From A Request 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Assign Variables
    $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $cell = filter_var($_POST['cellphone'], FILTER_SANITIZE_NUMBER_INT);
    $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Creating Array Of Errors
    $formErrors = array();
    if (strlen($user) <= 5) { 
      $formErrors[] = '<strong> Oh snap! </strong> User Must Be Larger Than 5 charcters';
    }
    if (strlen($msg) < 10) {
      $formErrors[] = '<strong> Oh snap! </strong> Message Can\'t be Less Than 10 charcters';
    }

    // If No Error Send The Message To Mail
    $subject = "Mail From '$user'";
    $to = "mahmoudhammad423@gmail.com";
    $headers = "MIME-VERSION: 1.0" . "\r\n";
    $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers ="Form: <$mail> \r\n";
    if (empty($formErrors)) {
      mail('$to, $subject, $msg, $headers');
      $user   = '';
      $mail   = '';
      $cell   = '';
      $msg  = '';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="theme-color" content="#ed7263">
  	<title>Mahmoud Hamde | Portfolio</title>
  	<!-- Bootstrap -->
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Lato Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900i" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- BxSlider -->
    <link rel="stylesheet" href="css/jquery.bxslider.min.css">
    <!-- Favicon -->
    <link rel="icon" href="img/m-logo.png" type="image/png"/>
    <!--    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->
    <!-- Lightbox Gallery -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- EmojiOneArea -->
    <link rel="stylesheet" href="css/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.css">
  	<!-- Style Sheet -->
  	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Start Header -->
  <header>
    <div class="welcome" style="width: 100%; height: 400px; background-image: url('img/port-bg.jpg'); background-repeat: no-repeat;background-size: cover;">
      <!-- Start V-Card -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12"></div>
        <div class="v-card v-card1 wow fadeInDown">
          <div class="v-card-img">
            <a href="img/my-profile.jpg" data-lightbox="roadstrip">
              <img alt="profile-img" class="img-responsive" src="img/my-profile.jpg">
            </a>
          </div>
          <div class="v-card-info">
            <div class="info-heading">
              <h4>Mahmoud Hammad</h4>
              <h6>Engineer and software developer</h6>
            </div>
            <div class="infos">
              <ul class="profile-list list-unstyled">
                <li class="clearfix">
                  <p class="title">
                    Hello! My name is Mahmoud Hamde Hammad and I'm Web Developer. I have experience in developing a real-time web applications, complex front-end and back-end management systems, social platform applications. All my projects based on and PHP5 in conjunction with other modern web technologies.
                  </p>
                </li>
                <li class="clearfix">
                  <span class="title">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <span class="list-content">
                    mahmoudhammad423@gmail.com
                  </span>
                </li>
                <li class="clearfix">
                  <span class="title">
                    <i class="fa fa-map-marker"></i>
                  </span>
                  <span class="list-content">
                    El-saf Helwan
                  </span>
                </li>
                <li class="clearfix">
                  <span class="title">
                    <i class="fa fa-mobile"></i>
                  </span>
                  <span class="list-content">
                    0111 189 3717
                    -
                    0100 446 0433 <img class="whats" src="img/whats.png">
                  </span>
                </li>
              </ul>
            </div>
            <div class="social">
              <ul class="list-unstyled">
                <li class="social-list">
                  <a href="https://www.facebook.com/mahmoud.h.hammad.1" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="social-list">
                  <a href="https://twitter.com/MahmoudHammad93" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="social-list">
                  <a href="https://www.linkedin.com/in/mahmoud-hammad-29a3ab15a/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="social-list">
                  <a href="https://myaccount.google.com/?utm_source=OGB&utm_medium=act&pli=1" target="_blank">
                    <i class="fa fa-google-plus-square"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End V-Card -->
    </div>
    <!-- Start Navbar -->
   <!--  <nav class="navbar navbar-default">
      <div class="container"> -->
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- <div class="navbar-header">
            <span class="sr-only">Toggle navigation</span>
            <div class="content wow fadeInDown" id="content" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="icon">
              <div class="icon1"></div>
              <div class="icon2"></div>
              <div class="icon3"></div>
            </div>
          </button>
          <a class="navbar-brand wow fadeInDown" href="#">
            <img src="img/m-logo.png" class="img-responsive">
          </a>
        </div> -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
          <!-- <ul class="nav navbar-nav links">
            <li class="wow fadeInDown">
              <a href="#" data-value="hom">
                <i class="fa fa-home"></i>
                Home
              </a>
            </li>
            <li class="wow fadeInDown">
              <a href="#" data-value="abou">
                <i class="fa fa-fire"></i>
                About
              </a>
            </li>
            <a class="navbar-brand wow fadeInDown" href="#" data-value="head">
              <img src="img/m-logo.png" class="img-responsive">
            </a>
            <li class="wow fadeInDown">
              <a href="#" data-value="port">
                <i class="fa fa-code"></i>
                Portfolio
              </a>
            </li>
            <li class="wow fadeInDown">
              <a href="#" data-value="cont">
                <i class="fa fa-envelope"></i>
                Contact Me
              </a>
            </li>
          </ul> -->
        <!-- </div>/.navbar-collapse -->
      <!-- </div>/.container-fluid -->
    <!-- </nav> -->
    <!-- End Navbar -->
    <!-- Start Slider -->
    <!-- <section class="header" id="hom">
      <div class="container"  id="head">
        <h1 class="heading text-center wow fadeInDown">Welcome</h1>
        <p id="heading-text" class="heading-text text-center wow fadeInLeft"></p>
        <div class="hr"></div>
        <div class="featuer wow fadeInLeft">
          <div class="slides">
            <img src="img/slider-1.png" alt="1" title="1">
            <img src="img/slider-2.png" alt="2" title="2">
            <img src="img/slider-3.png" alt="3" title="3">
            <img src="img/slider-4.png" alt="4" title="4">
            <img src="img/slider-5.png" alt="5" title="5">
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Slider -->
  </header>
  <!-- End Header -->

  <!-- Start Empty Section -->
  <div class="empty" id="abou">
    
  </div>
  <!-- End Empty Section -->

  <!-- Start About Me -->
  <main class="about-me">
    <!-- Start V-Card -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12"></div>
        <div class="v-card wow fadeInDown">
          <div class="v-card-img">
            <a href="img/my-profile.jpg" data-lightbox="roadstrip">
              <img alt="profile-img" class="img-responsive" src="img/my-profile.jpg">
            </a>
          </div>
          <div class="v-card-info">
            <div class="info-heading">
              <h4>Mahmoud Hammad</h4>
              <h6>Engineer and software developer</h6>
            </div>
            <div class="infos">
              <ul class="profile-list list-unstyled">
                <li class="clearfix">
                  <p class="title">
                    Hello! My name is Mahmoud Hamde Hammad and I'm Web Developer. I have experience in developing a real-time web applications, complex front-end and back-end management systems, social platform applications. All my projects based on and PHP5 in conjunction with other modern web technologies.
                  </p>
                </li>
                <li class="clearfix">
                  <span class="title">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <span class="list-content">
                    mahmoudhammad423@gmail.com
                  </span>
                </li>
                <li class="clearfix">
                  <span class="title">
                    <i class="fa fa-map-marker"></i>
                  </span>
                  <span class="list-content">
                    El-saf Helwan
                  </span>
                </li>
                <li class="clearfix">
                  <span class="title">
                    <i class="fa fa-mobile"></i>
                  </span>
                  <span class="list-content">
                    0111 189 3717
                    -
                    0100 446 0433 <img class="whats" src="img/whats.png">
                  </span>
                </li>
              </ul>
            </div>
            <div class="social">
              <ul class="list-unstyled">
                <li class="social-list">
                  <a href="https://www.facebook.com/mahmoud.h.hammad.1" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="social-list">
                  <a href="https://twitter.com/MahmoudHammad93" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="social-list">
                  <a href="https://www.linkedin.com/in/mahmoud-hammad-29a3ab15a/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="social-list">
                  <a href="https://myaccount.google.com/?utm_source=OGB&utm_medium=act&pli=1" target="_blank">
                    <i class="fa fa-google-plus-square"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End V-Card -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about wow fadeInLeft">
            <h2>About Me</h2>
            <div class="hr"></div>
            <p class="about-p">
              Hello! My name is Mahmoud Hamde Hammad and I'm Web Developer. I have experience in developing a real-time web applications, complex front-end and back-end management systems, social platform applications. All my projects based on and PHP5 in conjunction with other modern web technologies. PHP (native PHP, Laravel), MySQL, jQuery, SASS, HTML5, CSS3, Basic Knowledge in( Angular.js/React.js )are used. While developing an application I always keep in mind SEO optimization and social integration. Furthermore, I'm trying to make my code as clean as possible. In addition, I can convert designs to high quality, cross-browser compatible HTML5/CSS3 markup.
            </p>
            <div class="cv wow fadeInDown">
              <h2>
                Download my Cv: 
                <a href="files/Mahmoud-Hammad-Cv.pdf" class="fa fa-file-pdf-o" download="Mahmoud Hammad-Cv" target="_blank"></a>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="skils">
            <h2>My Skills</h2>
            <div class="hr"></div>
            <!-- Progress Box -->
            <div class="progress-box wow fadeInDown">
                <h5>HTML <span class="color-heading pull-right">100%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="100"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>HTML5 <span class="color-heading pull-right">100%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="100"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>CSS <span class="color-heading pull-right">95%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="95"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>CSS3 <span class="color-heading pull-right">90%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="90"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>BOOTSTRAP <span class="color-heading pull-right">93%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="93"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>BOOTSTRAP4 <span class="color-heading pull-right">80%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="80"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>SASS <span class="color-heading pull-right">77%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>JAVASCRIPT <span class="color-heading pull-right">90%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="90"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>JQUERY <span class="color-heading pull-right">80%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="80"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>ANGULAR <span class="color-heading pull-right">50%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="50"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>REACT <span class="color-heading pull-right">50%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="50"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>VUE <span class="color-heading pull-right">65%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="65"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>PHP <span class="color-heading pull-right">60%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="60"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>LARAVEL <span class="color-heading pull-right">50%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="50"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>MYSQL <span class="color-heading pull-right">77%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                </div>
            </div>
            <div class="progress-box wow fadeInDown">
                <h5>PHOTOSHOP <span class="color-heading pull-right">50%</span></h5>
                <div class="progress">
                    <div class="progress-bar bg-color-base" role="progressbar" data-width="50"></div>
                </div>
            </div>
            <!-- End Progress Box -->
          </div> 
        </div>
      </div>
    </div>
  </main>
  <!-- End About Me -->
  
  <!-- Start Portfplio-->
  <section class="portfolio popup-gallery" id="port">
    <div class="container">
      <div class="col-lg-12 lay">
        <h2>Portfolio</h2>
        <div class="hr"></div>
        <div class="col-lg-4">
          <div class="img wow fadeInDown">
            <div class="overlay">
              <a href="img/slider-1.png" class="fa fa-eye" data-lightbox="roadtrip"></a>
              <a href="http://novochem.net" class="fa fa-link" target="_blank"></a>
            </div>
            <img src="img/slider-1.png">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img wow fadeInDown" data-wow-delay="0.3s">
            <div class="overlay">
              <a href="img/slider-2.png" class="fa fa-eye" data-lightbox="roadtrip"></a>
              <a href="http://notcourses.net" class="fa fa-link" target="_blank"></a>
            </div>
            <img src="img/slider-2.png">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img wow fadeInDown" data-wow-delay="0.6s">
            <div class="overlay">
              <a href="img/slider-3.png" class="fa fa-eye" data-lightbox="roadtrip"></a>
              <a href="http://novochem.net" class="fa fa-link" target="_blank"></a>
            </div>
            <img src="img/slider-3.png">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img wow fadeInDown">
            <div class="overlay">
              <a href="img/slider-4.png" class="fa fa-eye" data-lightbox="roadtrip"></a>
              <a href="http://novochem.net" class="fa fa-link" target="_blank"></a>
            </div>
            <img src="img/slider-4.png">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img wow fadeInDown" data-wow-delay="0.3s">
            <div class="overlay">
              <a href="img/slider-5.png" class="fa fa-eye" data-lightbox="roadtrip"></a>
              <a href="http://staging.fastkood.com/" class="fa fa-link" target="_blank"></a>
            </div>
            <img src="img/slider-5.png">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="img wow fadeInDown" data-wow-delay="0.6s">
            <div class="overlay">
              <a href="img/slider-6.png" class="fa fa-eye" data-lightbox="roadtrip"></a>
              <a href="http://staging.fastkood.com/" class="fa fa-link" target="_blank"></a>
            </div>
            <img src="img/slider-6.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio -->
  <!-- Start Footer -->
  <footer class="footer"  id="cont">
    <div class="container">
      <div class="info">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <div class="logo  wow fadeInLeft" >
              <a href="#">
                <img src="img/m-logo.png" class="img-responsive" data-value="head">
              </a>
            </div>
            <div class="describe  wow fadeInDown" >
              <p>
                Seeking for a Good long term career opportunity in a respectful company that will enhance and develop my future career. Developing clear, effective and accurate documents 
                for tailored software packages. Ability to learn new skills Interesting in being Great Programmer 
                in Android . Hope to make apps to help people to make their life easier
                <div class="signature pull-right">
                <h5>
                  signature :- 
                </h5>
                <span>
                  Mahmoud Hammad
                </span>
              </div>
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-lg-10 col-lg-offset-2">
                <div class="contact-head">
                  <h2>
                    Contact Me
                  </h2>
                </div>
                <form id="contact" class="form-contact wow fadeInDown"  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" ">
                  <?php if (! empty($formErrors)) { ?>
                  <div class="alert alert-danger alert-dismissible" role="start">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <?php
                      foreach ($formErrors as $error) {
                        echo $error . '<br/>';
                      }
                    ?>
                  </div>
                  <?php } ?>
                  <?php if (isset($success)) {
                    echo $success;
                  } ?>
                  <div class="form-group">
                    <input
                      class="username form-control" 
                      type="text" 
                      name="username" 
                      placeholder="Type Your Name"
                      value="<?php if (isset($user)) { echo $user; }?>">
                    <i class="fa fa-user fa-fw"></i>
                    <span class="asterisx"></span>
                    <span class="fa fa-check"></span>
                    <div class="alert alert-danger alert-dismissible custom-alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong> Oh snap! </strong> Your Name Must Be Larger Than 5 charcters
                    </div>
                  </div>
                  <div class="form-group">
                    <input
                      id="tip_email" 
                      class="email form-control" 
                      type="email" 
                      name="email" 
                      placeholder="E-mail"
                      value="<?php if (isset($mail)) { echo $mail; }?>">
                    <i class="fa fa-envelope fa-fw"></i>
                    <span class="asterisx textarea"></span>
                    <span class="fa fa-check textarea"></span>
                    <div class="alert alert-danger alert-dismissible custom-alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong> Oh snap! </strong> Put Your E-mail
                    </div>
                  </div>
                  <div class="form-group">
                    <input 
                      class="phone form-control" 
                      type="text" 
                      name="cellphone" 
                      placeholder="Type Your Phone"
                      value="<?php if (isset($cell)) { echo $cell; }?>">
                    <i class="fa fa-phone fa-fw"></i>
                    <span class="asterisx"></span>
                    <span class="fa fa-check"></span>
                    <div class="alert alert-danger alert-dismissible custom-alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong> Oh snap! </strong> Type Your Phone
                    </div>
                  </div>

                  <div class="form-group">
                    <textarea 
                      class="message form-control"
                      name="message" 
                      rows="4"
                      placeholder="Type Your Message:"><?php if (isset($msg)) { echo $msg; }?></textarea>
                      <span class="asterisx textarea"></span>
                      <span id="check" class="fa fa-check textarea"></span>
                      <div class="alert alert-danger alert-dismissible custom-alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong> Oh snap! </strong> Message Can't be Less Than 10 charcters
                      </div>
                  </div>
                  <div class="btn-submit">
                    <input 
                      id="btn-submit" 
                      class="btn btn-info btn-block" 
                      type="submit" 
                      name="submit" 
                      value="Send Message"
                      onsubmit="submitajaxform();">
                      <span class="before"></span>
                      <span class="after"></span>
                  </div>
                  <input 
                    type="hidden" 
                    id="ad_id" 
                    name="ad_id" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Start Copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 col-sm-6">
        <p>
          Made with
          <i id="heart" class="fa fa-heart animated Pulse"></i>
          by
          <strong>
            <a href="https://www.facebook.com/mahmoud.h.hammad.1" target="_blank">
              Mahmoud Hammad
            </a>
          </strong>
        </p>
      </div>
      <div class="col-lg-6 col-sm-6">
        <div class="social">
          <ul class="social-icon list-unstyled">
            <li>
              <a href="https://www.facebook.com/mahmoud.h.hammad.1" target="_blank">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/MahmoudHammad93" target="_blank">
                <i class="fa fa-twitter"></i>
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://myaccount.google.com/?utm_source=OGB&utm_medium=act&pli=1" target="_blank">
                <i class="fa fa-google-plus-square"></i>
                <i class="fa fa-google-plus-square"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/mahmoud-hammad-29a3ab15a/" target="_blank">
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- End Copyright -->
  <!-- End Footer -->
  <!-- Start Social Media -->
  <div class="social-media">
    <ul class="social-icon list-unstyled">
      <li>
        <a href="https://www.facebook.com/mahmoud.h.hammad.1" target="_blank">
          <i class="fa fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/MahmoudHammad93" target="_blank">
          <i class="fa fa-twitter"></i>
        </a>
      </li>
      <li>
        <a href="https://myaccount.google.com/?utm_source=OGB&utm_medium=act&pli=1" target="_blank">
          <i class="fa fa-google-plus-square"></i>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/mahmoud-hammad-29a3ab15a/" target="_blank">
          <i class="fa fa-linkedin"></i>
        </a>
      </li>
    </ul>
  </div>
  <!-- End Social Media -->
  <!-- Start Loading Page -->
  <div id="loading-page" class="loading-page">
    <div class="sk-circle">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
    <div class="text-holder text-center">
      <h3>Mahmoud Hammad</h3>
      <h6>Engineer and software developer</h6>
    </div>
  </div>
  <!-- End Loading Page -->
  <!--Start Scroll To Top-->
  <div id="scroll-top">
    <a href="#" data-value="hom">
      <i class="fa fa-angle-up fa-2x"></i>
    </a>
  </div>
  <!--End Scroll To Top-->
<!-- JQuery -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Lightbox -->
<script src="js/lightbox.js"></script>
<!-- BxSlider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- AOS -->
<script src="js/aos.js"></script>
<!-- WOW -->
<script src="js/wow.js"></script>
<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- EmojiOneArea -->
<script src="js/emojionearea.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.js"></script>
<!-- My Script -->
<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slidesjs/3.0/jquery.slides.min.js"></script>
</body>
</html>