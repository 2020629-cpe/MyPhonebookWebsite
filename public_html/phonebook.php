<?php
session_start(); // Start the session

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: index.php");
    exit;
}

// Logout functionality
if (isset($_POST['logout'])) {
    // Destroy the session and redirect to the login page
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>KKAD PHONEBOOK</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #6c757d;
         margin: 0;
         padding: 0;
      }

      .header {
         background-color: #333;
         color: #fff;
         padding: 10px;
      }

      .logo img {
         max-width: 100%;
         height: auto;
      }

      .navigation {
         background-color: #333;
         padding: 10px;
      }

      .navigation .navbar-nav .nav-link {
         color: #fff;
         padding: 5px 10px;
      }

      .navigation .navbar-nav .nav-link:hover {
         background-color: #555;
      }

      h1 {
         margin-top: 40px;
         margin-bottom: 20px;
      }

      .form-group {
         margin-bottom: 20px;
      }

      .btn-primary {
         background-color: #333;
         border-color: #333;
      }

      .btn-primary:hover {
         background-color: #555;
         border-color: #555;
      }

      #contactList {
         list-style: none;
         padding: 0;
      }

      #contactList li {
         border: 1px solid #ddd;
         padding: 10px;
         margin-bottom: 10px;
         background-color: #fff;
      }

      #searchInput {
         margin-bottom: 20px;
      }

.containers {
    max-width: 1833px;
}
.containers {
    background-color: #fff;
    padding: 23px;
    margin-top: 40px;
    margin-left: 50px;
}
   </style>
</head>
<body>
   <header class="header">
      <div class="container">
         <div class="row">
            <div class="col-md-2 col-sm-3 col logo_section">
               <div class="logo">
                  <a href="index.php"><img src="images/PHLOGO.png" alt="#" /></a>
               </div>
            </div>
            <div class="col-md-8 col-sm-9">
               <nav class="navigation navbar navbar-expand-md navbar-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                     aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsExample04">
                     <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="phonebook.php">Phonebook</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact Me</a>
                        </li>
                        <li class="nav-item">
                           <form method="post" onsubmit="return confirmLogout();">
                              <button class="nav-link btn btn-link" type="submit" name="logout">Log out</button>
                           </form>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>

   <div class="containers">
      <h1>Phonebook</h1>
      <div class="row">
         <div class="col-md-6">
            <form id="contactForm">
               <input type="hidden" id="contactId">
               <div class="form-group">
                  <div class="form-group" style = "width: 300px;">
                  <label for="firstName">First Name:</label>
                  <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                  </div>
               </div>
               <div class="form-group">
                   <div class="form-group" style = "width: 300px;">
                  <label for="lastName">Last Name:</label>
                  <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-group" style = "width: 300px;">
                  <label for="middleName">Middle Name:</label>
                  <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
                  </div>
               </div>
               <div class="form-group">
                   <div class="form-group" style = "width: 300px;">
                  <label for="address">Address:</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter address">
                  </div>
               </div>
               <div class="form-group">
                   <div class="form-group" style = "width: 300px;">
                  <label for="phoneNumber">Phone Number:</label>
                  <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
                  </div>
               </div>
               <div class="form-group">
                   <div class="form-group" style = "width: 300px;">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
               </div>
               <div class="form-group">
                   <div class="form-group" style = "width: 300px;">
                  <label for="notes">Notes:</label>
                  <textarea class="form-control" id="notes" placeholder="Enter notes"></textarea>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary">Save</button>
            </form>
         </div>
         <div class="col-md-6">
        <h2 class="text-center">Contact List</h2>
        <input type="text" class="form-control" id="searchInput" placeholder="Search">
        <ul id="contactList" class="list-group" style="display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: row-reverse;
    padding-left: 0;
    margin-bottom: 0;
    border-radius: 0.25rem;
    flex-wrap: nowrap;
    justify-content: flex-end;
    /* margin-right: 56px; */
    align-content: center;
    align-items: center;
    /* padding-right: 20px;"></ul>
      </div>
    </div>
  </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <script>
      function confirmLogout() {
         var confirmation = confirm("Are you sure you want to log out?");
         if (confirmation) {
            return true;
         } else {
            return false;
         }
      }
   </script>
   <script src="script.js"></script>
</body>
</html>


