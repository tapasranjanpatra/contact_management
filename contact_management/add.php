<?php
include('db_connection.php'); 
  //this is the syntax for connection to database
  

if(isset($_POST['submit'])){

   
    $name=$_POST["name"];
    $last= $_POST["last"];
    $email=$_POST["email"];
    $phone = $_POST["phone"];
    $age= $_POST["age"];
    $company= $_POST["company"];
    $post  = $_POST["post"];
    $address= $_POST["address"];
    //************************* */



    $query="INSERT INTO `contactmg`(`name`,`last`,`email`,`phone`,`age`,`company`,`post`,`address`) VALUES(?,?,?,?,?,?,?,?)";
    $mysql=mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($mysql,"sssiisss",$name,$last,$email,$phone,$age,$company,$post,$address);
    $result=mysqli_stmt_execute($mysql);

    if($result==true){
        header('location:main.php');
    }


    
   

}





?>





<!DOCTYPE html>
<html>
<head>
    <title>Contact Management</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
   
    <h1>Contact Management</h1>
<form action="" method="post">
<div id="contact-form">
        <h2>Add</h2>
       
        <input type="hidden" id="contact-id">
        
        <input type="text" id="contact-name" name="name" placeholder="Name">
        <input type="text" id="contact-last" name="last" placeholder="Last">
        <input type="text" id="contact-email" name="email" placeholder="Email">
        <input type="text" id="contact-phone" name="phone" placeholder="Phone">
        <input type="text" id="contact-age" name="age"placeholder="age">
        <input type="text" id="contact-company" name="company" placeholder="company">
        <input type="text" id="contact-position" name="post" placeholder="post">
  
        <textarea id="contact-address" name="address" placeholder="Address"></textarea>
    
        <!-- <button type="submit">Save</button> -->
        <input type="submit" name="submit" value="save">
    </div>




</form>
   
    <!-- Display the contact list -->
    
 
</body>
</html>
