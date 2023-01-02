<?php 
include ('dbcon.php');
$qry = "insert into king values (null, 'Aziz' , 19 , 5000),
(null, 'Ali' , 18 , 7000)";

$result = mysqli_query($cn, $qry);

if($result == true){
echo "<script> alert(' data insert sucessfully')  </script>";
}else{
    echo "<script> alert(' data not inserted sucessfully')  </script>";
}
?>