<?php
$con = mysqli_connect("localhost","root","","aroma") or die(mysqli_error($con));
mysqli_query($con,"SET NAMES 'utf8'");
date_default_timezone_set("Asia/Bangkok");
?>