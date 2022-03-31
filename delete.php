<?php

 include ("dbconnect.php");
 error_reporting (0);
 $id= addslashes(base64_decode($_GET['productid']));
 $query = "DELETE FROM products WHERE pid = '$id'";
 $data=mysqli_query ($con, $query);
if ($data)
     echo "<font color='green'>Record Deleted from Database";
else
     echo "<font color='red'>Failed to delete Record from Database";
?>