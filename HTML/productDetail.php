<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Product Card/Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="productDetailStyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   </head>
   <body>
      <?php
         require_once('header.php');
         include('connection.php');
         ?>
      <br><br><br>
      <div class = "card-wrapper">
         <form action="add_cart.php" method="post">
            <?php
               //require('connection.php');
               
                   if(isset($_GET['id'])){
                     $conn=mysqli_connect("localhost","root","","zara");
                     $pid=$_GET['id'];
                     $sql="SELECT * FROM product WHERE id='$pid'";
                     $res=mysqli_query($conn,$sql);
               
                     $row=mysqli_fetch_assoc($res);
               
                   
                   ?>
            <div class = "card">
               <!-- card left -->
               <div class = "product-imgs">
                  <div class = "img-display">
                     <div class = "img-showcase">
                        <img src="<?php echo "../admin1/upload/product/".$row['image']?>" >
                     </div>
                  </div>
               </div>
               <!-- card right -->
               <div class = "product-content">
                  <h2 class = "product-title"><?php echo $row['name']?></h2>
                  <!--<div class = "product-rating">
                     <i class = "fas fa-star"></i>
                     <i class = "fas fa-star"></i>
                     <i class = "fas fa-star"></i>
                     <i class = "fas fa-star"></i>
                     <i class = "fas fa-star-half-alt"></i>
                     <span>4.7(21)</span>
                     </div>-->
                  <div class = "product-price">
                     <!--need edit-->
                     <p class = "new-price">New Price: RS: <?php echo $row['price']?></p>
                  </div>
                  <div class = "product-detail">
                     <h2>about this item: </h2>
                     <ul>
                        <?php echo $row['description']?>
                        <li>
                           Size guide
                           <span class="sizechart">
                              <!--<i class = "fas fa-tape" id="sizechart"></i>-->
                           </span>
                        </li>
                        <img class="sizechart" src="../PHOTO/product/maxi_dress/sizechart.jpg">
                        <li>Size new</li>
                        <li>
                           <div class="size-button">
                              <button class="size" name="size">S</button>
                              <button class="size" name="size" >M</button>
                              <button class="size" name="size">L</button>
                              <button class="size" name="size" >XL</button>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <a href="cart.php?id=<?php echo $pid;?>&name=<?php echo $row['name'];?>&price=<?php echo $row['price'];?>&qty=<?php echo 1;?>">
                     <div class = "purchase-info">
                        <input type = "number" min = "0" value = "1">
                        <button type = "submit" name="addcart" class = "btn">
                        Add to Cart <i class = "fas fa-shopping-cart"></i>
                        </button>
                        <input type="hidden" name="p_id" value="<?php echo $pid;?>">
                        <input type="hidden" name="p_name" value="<?php echo $row['name'];?>">
                        <input type="hidden" name="p_price" value="<?php echo $row['price'];?>">
                        <input type="hidden" name="p_img" value="<?php echo $row['image'];?>">
                        <!-- <button type = "button" class = "btn">Compare</button>-->
                     </div>
                     <div class = "social-links">
                        <p>Share At: </p>
                  <a href = "#">
                  <i class = "fab fa-facebook-f"></i>
                  </a>
                  <a href = "#">
                  <i class = "fab fa-twitter"></i>
                  </a>
                  <a href = "#">
                  <i class = "fab fa-instagram"></i>
                  </a>
                  <a href = "#">
                  <i class = "fab fa-whatsapp"></i>
                  </a>
                  <a href = "#">
                  <i class = "fab fa-pinterest"></i>
                  </a>
                  </div>
               </div>
            </div>
            <?php
               }
               
               ?>
      </div>
      </form>
      <!--footer -->  
      <?php
         require_once('footer.php');
         ?>    
      <script src="../../JS/productDetailJs.js"></script>
   </body>
</html>