<?php
require_once "config.php";
  {
    $name=$_REQUEST['name'];
    $lname=$_REQUEST['lname'];
    $gender=$_REQUEST['gender'];
    $dob=$_REQUEST['dob'];
    $file=$_FILES['image'];
  }
$stmt=$conn->prepare($sql_insert_record);
$stmt->bind_param("ssss",$name,$lname,$gender,$dob);
if(!file_exists("image")){mkdir("image");}
$res=$name.$lname.".png";
move_uploaded_file($_FILES['image']['tmp_name'],"image/" ."$res");
$check=mysqli_stmt_execute($stmt);
if($check){echo "<h1 class='h1'>thank you ",$name," your data is successfully stored in database<h1>";} 
else{echo "ERROR: Could not execute query (inform shravan): $sql. " . mysqli_error($link);}
 ?>

