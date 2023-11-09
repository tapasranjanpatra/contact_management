<?php
include('db_connection.php');
$query="select*from `contactmg` ";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);

// delete
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM contactmg WHERE id = $id";
  
    if (mysqli_query($conn, $sql)) {
      // Record deleted successfully, you can redirect to a success page
      header('Location: main.php');
    } else {
      // Handle errors if the deletion fails
      echo "Error: " . mysqli_error($connection);
    }
}






?>





<!DOCTYPE html>

<html>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Welcome to contact Management</h1>
    <table>
        <thead>
            <td>
                <button><a href="add.php">Add</a> </button>
            </td>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
              <?php
              while($row=mysqli_fetch_assoc($result)){
              ?> 

            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php   echo $row['address']; ?></td>
                <td><?php echo $row['age'];?></td>
                <td>
                    <button><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a> </button>
                    <button><a href="main.php?id=<?php echo $row['id'] ?>">Delete</a></button>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
</body>
</html>