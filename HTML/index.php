<!--TOP hedaer-->
<?php
   require_once("header.php");
    ?>
<!--Slider-->
<div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
   <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
      <div class="carousel-item active">
           <!-- <img src="../PHOTO/slider/three.jpg" class="d-block w-100" alt="..."> -->
         <img src="../PHOTO/slider/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
         <!-- <img src="../PHOTO/slider/one.jpg" class="d-block w-100" alt="..."> -->
         <img src="../PHOTO/slider/two.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
         <img src="../PHOTO/slider/three.png" class="d-block w-100" alt="...">
         <!-- <img src="../PHOTO/slider/access.png" class="d-block w-100" alt="..."> -->
      </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Next</span>
   </button>
</div>
<!-- discription_one -->
<div class="container desc1-section">
   <div class="row">
      <div class="col-md-4 desc1-col" id="discription_one">
         <img src="../PHOTO/discription/1.jpg">
         <p id="dis_con">Get 'dolled up in a stylish floral dress with an elegant flare. Sobeſhhades ideal for daytime and the perkier textures to shine when the sun is not.<br><a style="text-decoration:none;" href="mini_dress.php"> SHOP NOW </a></p>
      </div>
      <div class="col-md-4 desc1-col" id="discription_one">
         <p id="dis_con">Get 'dolled up in a stylish floral dress with an elegant flare. Sobeſhhades ideal for daytime and the perkier textures to shine when the sun is not. <br><a style="text-decoration:none;" href="mini_dress.php"> SHOP NOW </a></p>
         <img src="../PHOTO/discription/2.jpg">
      </div>
      <div class="col-md-4 desc1-col" id="discription_one">
         <img src="../PHOTO/discription/1one.jpg">
         <p id="dis_con">Get 'dolled up in a stylish floral dress with an elegant flare. Sobeſhhades ideal for daytime and the perkier textures to shine when the sun is not. <br><a style="text-decoration:none;" href="mini_dress.php"> SHOP NOW </a></p>
      </div>
   </div>
</div>
<br>
<center>
   <h1>New Arrival</h1>
   <hr style="width:60%;">
</center>
<div class="container">
   <div class="row">
      <?php
         $conn=mysqli_connect("localhost","root","1234","zara");
         $sql="SELECT * FROM product WHERE category='53' ORDER BY id DESC";
         $result=mysqli_query($conn,$sql);
         
         
         
         while($row=mysqli_fetch_array($result)){
         
         
                 
                 echo"<div class='col-md-4'>";
                         echo"<div class='row product-pr'>";
                         echo"<div class='col container-product' >";
                                 echo "<img src='../admin1/upload/product/".$row['image']."'>";
                                 // echo "<img src='../PHOTO/product/mini_dress/5/1.jpg' alt='img' class='image-pr' style='width:100%'>";
                                 echo "<div class='middle-pr'>";
                                         echo"<p><a href='../HTML/productDetail.php?id=".$row['id']."'><button>Shop Now</button></a></p>";
                                 echo"</div>";
                                 echo"<h2 class='dress-code'>".$row['name']."</h2>";
                                 // echo"<p>".$row['description']."</p>";
                                 echo"<p class='p_tag'>".$row['price']."</p>";
                         echo"</div>";
                         echo"</div>";
                 echo"</div>";
                 }
                 
                 ?>
   </div>
</div>
<br><br>   
<div>
   <center>
      <img src="../PHOTO/discription/four.jpg" width="90%"> 
   </center>
</div>
<div class="container desc2-section">
   <div class="row">
      <div class="col-md-4 desc2-col" id="discription2_one">
         <h2>July Month Collection</h2>
         <p> July Month Collection
            See what is at Nils this month to ‘cat-walk’ in your favourite attire and step into the next month with your chin up and head high.<br><br>
            SHOP NOW 
         </p>
      </div>
      <div class="col-md-8 desc2-col" id="discription2_one">
         <img src="../PHOTO/discription/five.jpg" width="100%" height="500px">
      </div>
   </div>
</div>
<div class="container desc2-section">
   <div class="row">
      <div class="col-md-8 desc2-col" id="discription2_one">
         <img src="../PHOTO/discription/seven.jpg" width="100%">
      </div>
      <div class="col-md-4 desc2-col" id="discription2_one">
         <h2>July Month Collection</h2>
         <p> July Month Collection
            See what is at Nils this month to ‘cat-walk’ in your favourite attire and step into the next month with your chin up and head high.<br><br>
            <a style="text-decoration:none;" href="mini_dress.php">SHOP NOW </a>
         </p>
      </div>
   </div>
</div>
<div class="footer">
   <div class="inner_footer">
      <div class="logo_container">
         <img src="../PHOTO/logooo.png" width="80px" height="100px"><br><br>
      </div>
      <div class="footer_third">
         <h1>Zara.lk</h1>
         <h1>Need a help ?</h1>
         <a href="#">Terms &amp; conditions</a>
      </div>
      <div class="footer_third">
         <h1>Contact us...</h1>
         <a href="#">Zara logistic</a>
         <a href="#">Tel: 0769800565</a>
      </div>
      <div class="footer_third">
         <h1>Follow Us</h1>
         <l1><a href="#"><i class="fa fa-facebook"></i></a></l1>
         <l1><a href="#"><i class="fa fa-instagram"></i></a></l1>
         <l1><a href="#"><i class="fa fa-twitter"></i></a></l1>
         <l1><a href="#"><i class="fa fa-linkedin"></i></a></l1>
      </div>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
</body>
</html>