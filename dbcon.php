<?php 
$db_user = "root";
$db_host = "localhost";


$cn = mysqli_connect($db_host,$db_user);
// if($cn == true){
//     echo "<script>alert('db connection connected sucessfully')</script>";
// }else{
//     echo "<script>alert('db connection not connected sucessfully')</script>";
// }

$db = mysqli_select_db($cn,"db123");



?>