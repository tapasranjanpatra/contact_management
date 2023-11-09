
<?php

include('db_connection.php');
// this is database connection 
$id = $_GET['id'];
$query="select*from contactmg where id='$id'";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);
// above code for edit
// update
if(isset($_POST['submit'])){

   
    $name=$_POST["name"];
    $last= $_POST["last"];
    $email=$_POST["email"];
    $phone = $_POST["phone"];
    $age= $_POST["age"];
    $company= $_POST["company"];
    $post  = $_POST["post"];
    $address= $_POST["address"];
        // Perform an UPDATE query to update the data in the database
        $sql = "UPDATE contactmg SET name = '$name', last='$last',email='$email', phone = '$phone',age='$age',company='$company',post='$post', address='$address' WHERE id = $id";
        
        if (mysqli_query($conn, $sql)) {
            // Data updated successfully, you can redirect to a success page
            header('Location: main.php');
        } else {
            // Handle errors if the update fails
            echo "Error: " . mysqli_error($connection);
        }
    }
    
// this code for delete botton



  // Perform a DELETE query to remove the record from the database
 


 










 





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
        <h2>Edit</h2>
       
        <input type="hidden" id="contact-id">
        
        <input type="text" id="contact-name" name="name" value="<?php echo $data['name'] ?>" placeholder="Name">
        <input type="text" id="contact-last" name="last"  value="<?php echo $data['last'] ?>" placeholder="Last">
        <input type="text" id="contact-email" name="email"  value="<?php echo $data['email'] ?>" placeholder="Email">
        <input type="text" id="contact-phone" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Phone">
        <input type="text" id="contact-age" name="age"  value="<?php echo $data['age'] ?> "placeholder="age">
        <input type="text" id="contact-company" name="company"  value="<?php echo $data['company'] ?> "placeholder="company">
        <input type="text" id="contact-position" name="post" value="<?php echo $data['post'] ?> "placeholder="post">
  
        <textarea id="contact-address" name="address"  placeholder="Address"><?php echo $data['address'] ?></textarea>
    
        <!-- <button type="submit">Save</button> -->
        <input type="submit" name="submit" value="update">
    </div>


    

 
</body>
</html>
