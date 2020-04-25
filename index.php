<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospital Management System</title>
  <link rel="shortcut icon" href='img/tech.png'>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


  <style type="text/css">
  .flip-box {
  background-color: transparent;
  width: 375px;
  height: 220px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
  </style>
</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">s<span class="text-warning">sh</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#main-header">Home</a></li>
                  <li class=""><a href="#feature">About</a></li>
                  <li class=""><a href="#department">Departments</a></li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <ol>
                    <a class="dropdown-item" href="login_patient.php">Patient Login</a><br>
                    <a class="dropdown-item" href="schedule.php">OPD Schedule</a>
                    </ol>
                  </div>

                </li>
                  <li class=""><a href="#testimonial">Feedback</a></li>
                  <li class=""><a href="#blog">Blog</a></li>

                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <ol>
                    <a class="dropdown-item" href="doc_login.php">Doctor's Login</a><br>
                    <a class="dropdown-item" href="admin_login.php">SSH Manager</a><br>
                    <a class="dropdown-item" href="super.php">SSH Super Admin</a>
                    </ol>
                  </div>
                </li>

                  <li class=""><a href="#contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="ashish">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"> We are here to help you </h1>
                <h1 class="bnr-title">Welcome to</h1>
                <h2 class="bnr-sub-title">Sir Sunder Lal Hospital</h2>
                <p align="center">
                	<img src="sloka.jpg" width="239" height="43" align="middle">
                </p>
                <div class="brn-btn">
                  <a href="appointment.php" class="btn btn-download">Make An Appointment</a>
                  <a href="registration.php" class="btn btn-more">Register Yourself!</a>
                  <a href="ambulance.php" class="btn btn-download">Book an Ambulance</a>
                </div>
                <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER Ended-->
    <!--About Start-->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
    <div class="container-fluid">
		<h1 class=" text-center text-capitalize pt-5">about us</h1>
		<hr class="w-25 mx-auto pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser01.png">
              </div>
              <h3 class="pad-bt">Varanasi</h3>
              <p>Kashi or Varanasi is the oldest living city in the world, known to exist from the ancient Vedic era. It is the cultural & literary capital of India since time immemorial. The history of Medical Education in Varanasi is at least 2500 years old. It has produced great scholars of Ayurveda like Divodas Dhanwantri and Charaka.Now Varanasi is awarded by <spnan>UNESCO</spnan> as <span>"THE CITY OF MUSIC."</span></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser03.png">
              </div>
              <h3 class="pad-bt">S S H</h3>
              <p>Sir Sunderlal Hospital is primarily a teaching and training hospital for the undergraduates, post graduates, super specialties and research courses run by the Institute of Medical Sciences in the various disciplines of medicine, nursing and paramedics. It is the only Tertiary care Hospital providing specialty and Super Specialty services to the health care needs of about 20 Crore population of Eastern UP, Western Bihar, adjoining MP, Chhattisgarh and Jharkhand as well as neighboring country of Nepal.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser02.png">
              </div>
              <h3 class="pad-bt15">IMS - BHU</h3>
              <p>It is a unique hospital to provide both Ayurveda and Modern Medicine services under one roof. It also cares for the health of approximately 60,000 people of the University community including students, teachers and employees and their dependents. Besides this, Sir Sunderlal Hospital acts as the main referral hospital for Diesel Locomotive Works, Varanasi, Military Hospital, NTPC, Coal India, BHEL, and other neighboring Hospitals of the catchment area.</p>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    </section>
    <!--About end-->
    <!-- department start -->
    <section id="department" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Our Speciality Departments</h2>
            <hr class="w-25 mx-auto pt-4">
            <p class="sub-title pad-bt15">SSH has a  team to treat a every patient very gently. Our departments are shown below</p>
            <hr class="bottom-line">
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
        <div class="flip-box">
		  <div class="flip-box-inner">
		    <div class="flip-box-front">
		      <img src="img/heart.jfif" alt="cardiac image" style="width:400px;height:250px">
		    </div>
		    <div class="flip-box-back">
		      <h2><u>Department of Cardiovascular</u></h2>
		      <p>Department is currently doing all sort of valve replacements, CABG and surgery for Congenital Heart diseases. This is apart from a very well developed Thoracic Surgery programme.</p>
		    </div>
		  </div>
		</div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <div class="flip-box">
		  <div class="flip-box-inner">
		    <div class="flip-box-front">
		      <img src="img/ortho.jpg" alt="orthopedics image" style="width:400px;height:250px">
		    </div>
		    <div class="flip-box-back">
		      <h2><u>Department of Orthopedics</u></h2>
		      <p>Fully equipped physiotherapy section, care of OPD and indoor patients. All aspects of Orthopaedic and Trauma</p>
		    </div>
		  </div>
		</div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <div class="flip-box">
		  <div class="flip-box-inner">
		    <div class="flip-box-front">
		      <img src="img/neuro.jfif" alt="neuro image" style="width:400px;height:250px">
		    </div>
		    <div class="flip-box-back">
		      <h2><u>Department of Neurosurgery</u></h2>
		      <p>Division was upgraded to Department in year 1998.Department has procured expensive equipments C-Arm with DSA and Operating Microscope.</p>
		    </div>
		  </div>
		</div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <div class="flip-box">
		  <div class="flip-box-inner">
		    <div class="flip-box-front">
		      <img src="img/chest.jpg" alt="chest image" style="width:400px;height:250px">
		    </div>
		    <div class="flip-box-back">
		      <h2><u>Department of Chest and TB</u></h2>
		      <p>The Department which is serving the public for more than 35 years has a clinic to provide domiciliary treatment and has 30 indoor beds. The clinic has daily attendance of about 200 patients.</p>
		    </div>
		  </div>
		</div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <div class="flip-box">
		  <div class="flip-box-inner">
		    <div class="flip-box-front">
		      <img src="img/dentist.jpg" alt="Paris" style="width:400px;height:250px">
		    </div>
		    <div class="flip-box-back">
		      <h2><u>Department of Dental Sciences</u></h2>
		      <p>The patients attendance in the department continued increasing trends of previous year. In the year of 2019 it has the strength of 33,683 patients. </p>
		    </div>
		  </div>
		</div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <div class="flip-box">
		  <div class="flip-box-inner">
		    <div class="flip-box-front">
		      <img src="img/eye.jfif" alt="Paris" style="width:400px;height:250px">
		    </div>
		    <div class="flip-box-back">
		      <h2><u>Department of Opthamology</u></h2>
		      <p>We are going to obtain following latest gadgets like Optical Coherence Tomograpy Machine. B-Scan, fkor USG of eye, Non-Contact Tonometer ,Laser DCR Biochemistry Auto Analyser, Endolaser Unit, to help in proper diagnosis of the disease.</p>
		    </div>
		  </div>
		</div>
          </div>
        </div>
      </div>
    </section>
    <!--department end-->
    
    <!--Carousel start-->
    <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
          <div class="row">
            <div class="testimonial-item">
              <ul class="bxslider">
                <li>
                  <blockquote>
                    <img src="img/thumb.png" class="img-responsive">
                    <p>We believe religion to be the surest foundation of character and the truest source of human happiness. </p>
                  </blockquote>
                  <small>Pt. Malviya, Founder</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/thumb1.png" class="img-responsive">
                    <p>Doctors are very helpfull. Good environment for patients as well as Students. </p>
                  </blockquote>
                  <small>Ashish Verma, Visitor</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/thumb2.png" class="img-responsive">
                    <p>Secure hospital at any time. Facilities are good and systems are very excellent.</p>
                  </blockquote>
                  <small>Marry Smith, Patient</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/tech.png" class="img-responsive">
                    <p>A good hospital in a religious city.</p>
                  </blockquote>
                  <small>Ashish, Member of Techniqa Family</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Carousal end-->
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Our Blog</h2>
            <hr class="w-25 mx-auto pt-5">
            <p class="sub-title pad-bt15">Our blog has recent home remedies and researches. </p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/blog01.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Blood Group is used to check the possibilty of diseases. </h2>
                <div class="blog-comment">
                  <p>Posted In: <span>The Hindu</span></p>
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a> 15</span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p>Our research is based on the found of possibilty of diseaes in future. So that we can treat that patient very efficiently. </p>
                <a href="www.google.com" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/blog02.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Blood Group is used to check the possibilty of diseases. </h2>
                <div class="blog-comment">
                  <p>Posted In: <span>Dainik Jagran</span></p>
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a> 65</span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 28</span></p>
                </div>
                <p>Our research is based on the found of possibilty of diseaes in future. So that we can treat that patient very efficiently. </p>
                <a href="" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/blog03.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>BHU founds a new way to treat patients who are suffering from blood cancer.</h2>
                <div class="blog-comment">
                  <p>Posted In: <span>TOI</span></p>
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a> 37</span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 19</span></p>
                </div>
                <p>Our research is based on the found of possibilty of diseaes in future. So that we can treat that patient very efficiently. </p>
                <a href="" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--contact us begins-->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">For any query Contact Us</h2>
            <p class="sub-title pad-bt15">We send you the daily news and updates. </p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Banaras Hindu University, Semi Cir Rd Number 4, Lanka, <br>Varanasi, Uttar Pradesh 221005</p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>helpdeskbhu@gmail.com</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+91 6385461201</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <form action="layout.php>" method="post" class="contactForm">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off" required />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" autocomplete="off" required />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" autocomplete="off" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" autocomplete="off" required></textarea>
                    <div class="validation"></div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit" name="web_btn" >SEND</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--contact us ends-->
    <!--footer-->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>All the rights are reserved by IMS-BHU 2019</p>
        </div>
      </div>
    </footer>
    <!--footer end-->
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
