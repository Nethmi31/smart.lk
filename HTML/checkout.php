<?php
   $conn=mysqli_connect("localhost","root","","zara");
   
   if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $address=$_POST['address'];
       $pType=$_POST['pmode'];
       $cNumber=$_POST['Cnumber'];
       $Expire=$_POST['month'];
       $cvv=$_POST['cvv'];
       $postal=$_POST['pcode'];
   
   
       $sql= "INSERT INTO checkouts (name,email,phone,address,payment_type,card_number,expiry_date,cvv,postal_code)
       VALUES ('$name','$email','$phone','$address','$pType','$cNumber','$Expire','$cvv','$postal')";
       $res=mysqli_query($conn,$sql);
       if($res)
       {
           echo "query okay";
       }
       // header("Location: checkout.php");
       
   
       
       }
   ?>
<html>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <head>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../CSS/main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <style>
         * {
         box-sizing: border-box;  /* Grid Sizing*/
         }
         body
         {
         font-family: 'Roboto', sans-serif!important;
         margin:0;
         padding:0;
         /* box-sizing: border-box; */
         }
         #checkform {
         font-family: 'Roboto', sans-serif!important;
         margin: 150px;
         padding:50px;
         box-sizing: border-box;
         /*margin-top:10px;*/
         width:75%;
         background-color:	#F5F5F5;
         width: 45rem;
         border:1px;
         border-radius: 5px;
         }
         .chekouth1
         {
         text-align:left;
         font-weight:bold;
         }
         .chekouth1,.chekouth2
         {
         color:darkblue;
         text-align:center;
         }
         .checkp
         {
         text-align:center;
         display:block;
         font-size: 1.1rem;
         font-weight: 400;
         color:darkblue;
         }
         .inputboxp
         {
         color:#030303;
         width: 100%;
         padding: 0.5rem;
         border: none;
         border-bottom: 1.5px solid #ccc;
         margin-bottom: 1rem;
         border-radius: 0.3rem;
         font-family: 'Roboto', sans-serif;
         color: darkblue;
         font-size: 1.1rem;
         font-weight: 500;
         outline:none;
         }
         .from-control
         {
         color:#030303;
         width: 100%;
         padding: 0.5rem;
         border: none;
         border-bottom: 1.5px solid #ccc;
         margin-bottom: 1rem;
         border-radius: 0.3rem;
         font-family: 'Roboto', sans-serif;
         color: darkblue;
         font-size: 1.1rem;
         font-weight: 500;
         outline:none;
         }
         .buttonp{
         background: linear-gradient(135deg, #753370 0%, #298096 100%);
         padding: 15px;
         border: none;
         border-radius: 50px;
         color: white;
         font-weight: 400;
         font-size: 1.2rem;
         margin-top: 10px;
         width:100%;
         letter-spacing: .11rem;
         outline:none;
         cursor: pointer;
         transition:background-image 3s ease-in-out;
         }
         .buttonp:hover
         {
         transform: scale(1.05) translateY(-3px);
         box-shadow: 3px 3px 6px #38373785;
         }
         .form1{
         margin-top:100px;
         max-width:1000px;
         width:75%;
         }
         .card {
         display:inline-block;
         max-width:200px;
         width:25%;
         height:250px;
         align:right;
         position: absolute; 
         border:1px solid black;
         }
      </style>
   </head>
   <body>
      <?php
         require_once("header.php")  ;
         ?><br><br><br><br>
      <center>
         <div class="form1">
            <form  method="POST" id="checkform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <!--Prevent open another page when submit-->
               <h1 class="chekouth1">CheckOut</h1>
               <br>
               <h2 class="chekouth2">Checkout Information</h2>
               <p class="checkp"> Name</p>
               <input type="text" name="name" class="inputboxp" placeholder="enter name" required id="1">
               <p class="checkp"> Email</p>
               <input type="text" name="email"  placeholder="enter email" class="inputboxp" required id="2">
               <p class="checkp">phone Number</p>
               <input type="text" name="phone" placeholder="enter phone" class="inputboxp" required id="3">
               <p class="checkp" >Address</p>
               <input type="text" name="address"  placeholder="enter address" class="inputboxp" required id="4">
               <h2 class="chekouth2">Payement Information</h2>
               <p class="checkp">payment type</p>
               <br>
               <select class="form-control" name="pmode" id="card_type" required>
                  <option value="">--Select a Card Type--</option>
                  <option value="Visa">Visa</option>
                  <option value="RuPay">Cash on Delivery</option>
                  <option value="MasterCard">MasterCard</option>
               </select>
               <p class="checkp">Card Number</p>
               <input type="text" name="Cnumber" placeholder=" card number" class="form-control" required maxlength="16" id="5">
               <p class="checkp">Expiring</p>
               <input type="text" size="2" placeholder="MM" data-stripe="exp_month" maxlength="2" name="month" id="6" >
               <span> / </span>
               <input type="text" size="2" placeholder="YY" data-stripe="exp_year" maxlength="2" name="month" >
               <!-- <input  class="inputboxp" type="text" name="expiry" id="expiry"/ placeholder="MM/YY" /> -->
               <p class="checkp">CVV code</p>
               <input type="password" name="cvv" placeholder=" CVV" class="inputboxp" required maxlength="3" id="7">
               <p class="checkp">Postal Code</p>
               <input type="password" name="pcode" placeholder=" postal code" class="inputboxp" required id="8">
               <button onclick="fireSweetAlert()" type="submit" class="buttonp" name="submit">CheckOut</button>
            </form>
         </div>
      </center>
      <script>
         function fireSweetAlert() {                                                                                                              
             // var a= document.getElementById("1").value;
             // var b= document.getElementById("2").value;
             // var c= document.getElementById("3").value;
             // var d= document.getElementById("4").value;
             // var e= document.getElementById("5").value;
             // var f= document.getElementById("6").value;
             // var g= document.getElementById("7").value;
             // var h= document.getElementById("8").value;
             
         
             // if(a != "" && b != "" && c != "" d != "" && e != "" &&  g != "" && h != "" ){
                 
                     Swal.fire(
                     'Thank You!',
                     'for your Purchase',
                     'success'
                     )
                 // }    
             }
         
      </script>
      <br>
      <!-- <div class = "card-wrapper">
         <?php
            // if(isset($_GET['id'])){
            //     $conn=mysqli_connect("localhost","root","","zara");
            //     $pid=$_GET['id'];
            //     $sql="SELECT * FROM product WHERE id='$pid'";
            //     $res=mysqli_query($conn,$sql);
            
            //     $row=mysqli_fetch_assoc($res);
            
            
            
            //     echo"<div class = 'card'>";
                
            //         echo"<div class = 'product-imgs'>";
            //             echo"<div class = 'img-display'>";
            //                 echo"<div class = 'img-showcase'>";
            //                     echo "<img src='../admin1/upload/product/".$row['image']."'>";
            //                     echo"<h2 class = 'product-title'>".$row['name']."</h2>";
            //                     echo"<p class = 'new-price'>".$row['price']."</p>";
            //                     echo $row['description'];
            //                 echo"</div>";
            //             echo"</div>";
            //         echo"</div>";  
            //     echo"</div>";
            // echo"</div>";
            // }
            ?>
         
         </div> -->
   </body>
   <?php
      require_once("footer.php")  
      ?>
</html>