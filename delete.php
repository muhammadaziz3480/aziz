<?php
include('dbcon.php');

$qry = "delete from data where Student ID = 1";

$result = mysqli_query($cn, $qry);                                                                                                                                                                                                                  );

if ( $result == true ) {
    echo "<script> alert (' data deleted sucessfully ') </script>";
}
else {
    echo "  <script> alert (' data not deleted sucessfully ') </script>";
}


?>