
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flower.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- <Link rel="stylesheet" href="login.css"> -->
    <title>Spices</title>
</head>
<body>
     <!-- navbar start here -->
     <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SPICES</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="Home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
              </li>
              <li class="nav-item">  
               <a class="nav-link"href="Product.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
              </li>
            </ul>

            <button class="btn-btn-primary p-2 my-lg-0 my-2">
              <a href="Signup.php">Sign In</a>
          </button>
        
            <div class="parent">
              <?php 
              $count=0;
              if(isset($_SESSION['cart']))
              {
                $count=count($_SESSION['cart']);
              }
              ?>
              <a href="mycart.php" class="btn btn-success">Cart(<?php echo $count;?>)</a>
            </div>
          
        </div>
      </nav>
     <!-- navbar end here -->