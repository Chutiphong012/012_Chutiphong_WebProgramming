<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "ecommercedemo";

$con = new mysqli($host, $username, $password, $db);
if ($con->connect_error) {
    die('Error : (' . $con->connect_errno . ')' . $con->connect_error);
} else {
    echo "Connect Database successfully!";
}
$con->set_charset("utf8"); //สนับสนุนภาษาไทย




?>