<?php
$connect=mysqli_connect('localhost','root','') or die (mysqli_error($connect));
//echo "connected";
$db=mysqli_select_db($connect,'fedha') or die (mysqli_error($connect));
//echo "db_selected";

?>