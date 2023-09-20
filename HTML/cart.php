<?php
   include('connection.php');
      
   session_start();
   
      if(isset($_GET['qty'])){
         $qty=$_GET['qty'];
         $unitprice=$_GET['price'];
         //$tot=$qty*$unitprice;
      }
   
   	if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price']) && isset($_GET['qty'])){
   		$pid=$_GET['id'];
   		$name=$_GET['name'];
   		$price=$_GET['price'];
   		$qty=$_GET['qty'];
   
   		$sql="INSERT INTO shopping_cart(product_id,product_name,unit_price,qty) VALUES('$pid','$name','$price','$qty')";
   		$res=mysqli_query($conn,$sql);
   
   		if($res){
   			echo "<script>
   				alert('product added to cart');
               window.location.href = 'cart.php';
   			</script>";
   		}else{
   			echo mysqli_error($conn);
   		}
   
   	}
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="stylesheet.css">
      <!--add style sheet-->
      <title>Shopping Cart</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link rel="stylesheet" href="../CSS/cartstyle.css">
      <!--add style sheet-->
   </head>
   <body>
      <!--Cart View--------------------------------------------------->
      <main class="page">
         <section class="shopping-cart dark">
            <div class="container">
            <div class="block-heading">
               <!---heading section-->
               <h2>Shopping Cart</h2>
               <p>Zara.lk provides a reliable, secure shopping cart solution for your order. 
               </p>
            </div>
            <!--left code--->
            <div class="content">
               <div class="row">
                  <div class="col-md-12 col-lg-8">
                     <div class="items">
                        <?php
                           $tot=0;
                           if(isset($_SESSION['cart'])){
                              foreach($_SESSION['cart'] as $key=>$value){
                                $sql="SELECT product.id,product.price,product.image FROM product WHERE  product.id='$key'";
                                $res=mysqli_query($conn,$sql);
                                $data=array();
                                while($row=mysqli_fetch_assoc($res)) {
                                    $data[]=$row;
                                }
                                $productAr=$res;
                           
                           ?>
                        <div class="product">
                           <div class="row">
                              <div class="col-md-3">
                                 <img class="img-fluid mx-auto d-block image" src="<?php echo "../admin1/upload/product".$row['image']?>">
                                 <div class="col-md-8">
                                    <div class="info">
                                       <div class="row">
                                          <div class="col-md-5 product-name">
                                             <div class="product-name">
                                                <a href="#"><?php echo $row['name']?></a>
                                                <div class="product-info">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-4 quantity">
                                             <label for="quantity">Quantity:</label>
                                             <form>
                                                <input id="qty" type="number" value ="<?php echo $row['quantity']?>" name="qty"class="form-control quantity-input">
                                          </div>
                                          <div class="col-md-3 price">
                                          <span name="uprice"><?php echo $row['price']?></span>
                                          </div>
                                          &nbsp;&nbsp;&nbsp;&nbsp;<button  name="update" class="btn-update"><a  href="javascript:void(0)" onclick="update('<?php echo $row['quantity']?>','<?php echo $row['price']?>')">Update</a></button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php 
                              }
                              }
                              $sql="SELECT SUM(shopping_cart.unit_price) AS tot FROM shopping_cart;";
                              $res=mysqli_query($conn,$sql);
                              $row=mysqli_fetch_row($res);
                              $tot=$row[0];
                                 ?>
                        </div>
                     </div>
                     <!--summery -->
                     <div class="col-md-12 col-lg-4">
                     <div class="summary">
                     <h3>Summary</h3>
                     <div class="summary-item"><span class="text">Subtotal</span><span class="price"><?php if($tot>0){echo $tot;} ?></span></div>
                     <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                     <div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
                     <div class="summary-item"><span class="text">Total</span><span class="price"><?php if($tot>0){echo $tot;} ?></span></div>
                     <button type="button" class="btn btn-primary btn-lg btn-block"><a href="checkout.php"> Checkout</button></a>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      </form>
      <!--<?php
         /* require_once("footer.php");*/
          ?>--->
   </body>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script>
      if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
      }
      
   </script>
</html>