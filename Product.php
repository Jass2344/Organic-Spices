<?php include ("Navbar.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spices</title>
    <link rel="stylesheet" href="flower.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
       
      <!-- products start -->
      <section id="product">
        <div class="container">
            <h1 class="text-center my-5">OUR PRODUCTS</h1>
            <div class="row m-2">
              <div class="col-lg-4 col-md-4 col-12">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/turmeric.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Turmeric powder </h5>
                    <h5>₹300</h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="Turmeric">
                    <input type="hidden" name="Price"value="300">
                  </div>
                </div>
              </form>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
              <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/chilli.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Red chilli powder</h5>
                    <h5>₹180</h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="Red chilli powder ">
                    <input type="hidden" name="Price"value="180">
                  </div>
                </div>
              </form>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
              <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/black.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Black Pepper</h5>
                    <h5>₹200</h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="Black Pepper">
                    <input type="hidden" name="Price"value="200">
                  </div>
                </div>
                </form>
              </div>
            </div>
            <div class="row m-2">
              <div class="col-lg-4 col-md-4 col-12">
              <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/cloves.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Cloves</h5>
                    <h5>₹100</h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="cloves">
                    <input type="hidden" name="Price"value="100">
                  </div>
                </div>
                </form>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
              <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/anise.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Anises</h5>
                    <h5>₹180</h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="Anises">
                    <input type="hidden" name="Price"value="180">
                  </div>
                </div>
                </form>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
              <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/tej patta.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Tej Patta</h5>
                    <h5>₹150<h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="Tej Patta">
                    <input type="hidden" name="Price"value="150">
                  </div>
                </div>
                
              </div>
              </form>
            </div>
            <div class="row m-2">
              <div class="col-lg-4 col-md-4 col-12">
              <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/tea.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Tea Masala</h5>
                    <h5>₹300</h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="Tea Masala">
                    <input type="hidden" name="Price"value="300">
                  </div>
                </div>
                </form>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
              <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/cinna.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Cinnamon powder</h5>
                    <h5>₹200</h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="Cinnamon powder">
                    <input type="hidden" name="Price"value="200">
                    

                  </div>
                </div>
                </form>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
              <form action="manage_cart.php" method="POST">
                <div class="card">
                  <img src="images/net.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Netmeg powder</h5>
                    <h5>₹120</h5>
                    <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to cart</button>
                    <input type="hidden" name="Item_name"value="Turmeric">
                    <input type="hidden" name="Price"value="300">
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
      </section>
      <footer>
      <div class='footercontainer'>
         <div class="socialicons">
           <a href="/"><i class="bi bi-facebook"></i></a>
           <a href="/"><i class="bi bi-instagram"></i></a>
           <a href="/"><i class="bi bi-youtube"></i></a>
           <a href="/"><i class="bi bi-google"></i></a>
         </div>
    <div class="footernav">
      <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/">About</a></li>
          <li><a href="/">News</a></li>
          <li><a href="/">Contact Us</a></li>
          <li><a href="/">Our Team</a></li>
      </ul>
     </div>
       <div class="footerBottom">
          <p>Designed by <span class='designer'>Jaspreet Kaur</span></p>
       </div>
    </div>
  </footer>
     <!-- footer end  -->
</body>
</html>