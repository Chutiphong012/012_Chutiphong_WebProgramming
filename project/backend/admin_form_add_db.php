<?php
include('condb.php');

$a_user = $_POST['a_user'];
$a_pass = $_POST['a_pass'];
$a_name = $_POST['a_name'];

/////////////////// ตรวจสอบข้อมูลซ้ำ ///////////////////////
$check = "
	SELECT  a_user 
	FROM tbl_admin  
	WHERE a_user = '$a_user' 
	";
    $result1 = mysqli_query($con, $check);
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{
  /////////////////// ตรวจสอบข้อมูลซ้ำ ///////////////////////    

$sql ="INSERT INTO tbl_admin
    
    (a_user,  a_pass, a_name) 

    VALUES 

    ('$a_user', '$a_pass', '$a_name')";
    
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    }

    if($result){
      echo "<script>";
      echo "alert('การเพิ่มข้อมูลเสร็จสมบูรณ์');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    }
?>