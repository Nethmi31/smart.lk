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
    mysqli_query($conn,$sql);

    
    }
?>
