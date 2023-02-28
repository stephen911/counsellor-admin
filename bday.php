<?php

include 'starter.php';

$current_date = date('Y-m-d');
$query = "SELECT * from members WHERE month($current_date) = month(tdate) AND day($current_date)=day(tdate)";

$done = mysqli_query($conn, $query);

$count=mysqli_num_rows($fire) ;

?>