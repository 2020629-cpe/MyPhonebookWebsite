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
    <title>Registration - KKAD PHONEBOOK</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="main.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
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
                                        <a class="nav-link" href="login.php">Login</a>
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
                <form class="forms" method="post" name="registration">
                    <h1 class="login-title">Registration</h1>
                    <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required />
                    <input type="text" class="login-input" name="email" placeholder="Email Address" required />
                    <input type="password" class="login-input" name="password" placeholder="Password" required />
                    <input type="submit" value="Register" name="submit" class="buttons1" />
                    <p class="message">Already have an account? <a href="login.php">Login</a></p>
                </form>

                <?php
                require('db.php');
                // When form submitted, insert values into the database.
                if (isset($_REQUEST['username'])) {
                    // removes backslashes
                    $username = stripslashes($_REQUEST['username']);
                    //escapes special characters in a string
                    $username = mysqli_real_escape_string($con, $username);
                    $email    = stripslashes($_REQUEST['email']);
                    $email    = mysqli_real_escape_string($con, $email);
                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($con, $password);
                    $create_datetime = date("Y-m-d H:i:s");
                    $query    = "INSERT into `users` (username, password, email, create_datetime)
                                 VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
                    $result   = mysqli_query($con, $query);
                    if ($result) {
                        echo "<div class='form1'>
                              <h3>You are registered successfully.</h3><br/>
                              <p class='link'>Click here to <a href='login.php'>Login</a></p>
                              </div>";
                    } else {
                        echo "<div class='form1'>
                              <h3>Required fields are missing.</h3><br/>
                              <p class='link'>Click here to <a href='registration.php'>register</a> again.</p>
                              </div>";
                    }
                }
                ?>
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
                        <h2>My Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="ho_nf" class="gallery_main text_align_left">
                        <figure>
                            <img src="images/pic1.jpg" alt="#" />
                            <div class="gallery_text">
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="ho_nf" class="gallery_main text_align_left">
                        <figure>
                            <img src="images/cute5.jpg" alt="#" />
                            <div class="gallery_text">
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="ho_nf" class="gallery_main text_align_left">
                        <figure>
                            <img src="images/pic2.jpg" alt="#" />
                            <div class="gallery_text">
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="ho_nf" class="gallery_main text_align_left">
                        <figure>
                            <img src="images/cute3.jpg" alt="#" />
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
                    <div class="col-md-3 col-sm-6">
                        <div class="Informa helpful">
                            <h3>Useful Link</h3>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="phonebook.php">Phonebook</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact Details</a></li>
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
                            <h3>Contact Me</h3>
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
                            <p>© 2023 KKAD <a href="https://html.design/">PHONEBOOK</a></p>
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
