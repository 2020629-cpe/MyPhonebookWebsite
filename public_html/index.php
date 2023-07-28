<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>KKAD PHONEBOOK</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/PHLOGO.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="phonebook.php">Phonebook</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.php">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Details</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="logout.php">Logout</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-2 d_none">
                     <ul class="email text_align_right">
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- start slider section -->
      <div id="top_section" class=" banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>KKAD  <br>PHONEBOOK </h1>
                                    <p>This name suggests that the phonebook serves as a valuable repository of important contacts and cherished memories. It conveys the idea of preserving meaningful relationships and facilitating delightful connections with others.
                                    </p>
                                    <a class="read_more" href="about.php">KKAD Phonebook </a><a class="read_more" href="contact.php">Contact Me </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>The  <br>Shutterword Explorer </h1>
                                    <p>This name reflects my passion for photography ("shutter") and reading ("word"). It highlights my curiosity and adventurous nature in discovering new places, capturing moments through the lens, and immersing yourself in the world of stories and imagination. Additionally, it acknowledges my love for horror movies and anime, which contribute to my sense of thrill and fascination with different realms of storytelling. Showcases my interest in tinkering, fixing, and improving things, indicating my practical and hands-on approach to problem-solving.
                                    </p>
                                    <a class="read_more" href="about.php">KKAD PHONEBOOK </a><a class="read_more" href="contact.php">Contact Me</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>My  <br>Gallery </h1>
                                    <p>Capturing a moment in a photograph is freezing time, preserving the beauty and emotions that fade away but remain eternally alive within the frame.
                                    </p>
                                    <a class="read_more" href="about.php">KKAD PHONEBOOK </a><a class="read_more" href="contact.php">Contact Me</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work </h1>
                                    <p>Unleash Your Creativity, Inspire the World!
                                    </p>
                                    <a class="read_more" href="about.php">KKAD PHONEBOOK </a><a class="read_more" href="contact.php">Contact Me</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>About KKAD Phonebook</h2>
                     <p>"Unlock Connections, Embrace Convenience: Your Reliable Phonebook!"</p>
                     <li>This name suggests that the phonebook serves as a valuable repository of important contacts and cherished memories. It conveys the idea of preserving meaningful relationships and facilitating delightful connections with others.</li>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- gallery -->
      <div class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>My Gallery </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div id="ho_nf" class="gallery_main text_align_left">
                     <figure>
                        <img src="images/pic1.jpg" alt="#"/>
                        <div class="gallery_text">
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="gallery_main text_align_left">
                     <figure>
                        <img src="images/cute5.jpg" alt="#"/>
                        <div class="gallery_text">
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="gallery_main text_align_left">
                     <figure>
                        <img src="images/pic2.png" alt="#"/>
                        <div class="gallery_text">
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="gallery_main text_align_left">
                     <figure>
                        <img src="images/cute3.jpg" alt="#"/>
                        <div class="gallery_text">
                        </div>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <a class="logo_footer" href="index.php"><img src="images/PHLOGO.png" alt="#" /></a>
                  </div>
                  <div class="col-md-3 col-sm-6"
                  >
                     <div class="Informa helpful">
                        <h3>Useful  Link</h3>
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="phonebook.php">Phonebook</a></li>
                           <li><a href="gallery.php">Gallery</a></li>
                           <li><a href="contact.php">Contact Me</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>Phonebook</h3>
                        <ul>
                           <li>It allows users to search                             
                           </li>
                           <li>for and access telephone numbers,                            
                           </li>
                           <li>contact details, and other information                          
                           </li>
                           <li>about individuals, businesses, or organizations.                              
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa conta">
                        <h3>contact Me</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-map-marker" aria-hidden="true"></i> Paligawan Balete, Batangas
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i> Call 09368765099
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-envelope" aria-hidden="true"></i> kylallanes20@gmail.com
                              </a>
                           </li>
                           <li> <a href="https://ubian.ub.edu.ph/my_profile"> <i class="fa fa-envelope" aria-hidden="true"></i> 2020629@ub.edu.ph
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_left">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <p>© 2023 KKAD  <a href="https://html.design/"> PHONEBOOK</a></p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social_icon text_align_center">
                           <li> <a href="https://www.facebook.com/llanes.kyla"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="https://www.instagram.com/kyla_llanes/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li> <a href="https://github.com/2020629-cpe"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>