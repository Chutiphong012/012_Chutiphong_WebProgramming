<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
$date1 = date("Ymd_His");
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());
	
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$p_id = $_POST["p_id"];
$p_name = $_POST["p_name"];
$type_id = $_POST["type_id"];
$p_detail = $_POST["p_detail"];
$p_price = $_POST["p_price"];
$p_img = isset($_FILES['p_img']['name']) ? $_FILES['p_img']['name'] : '';
$img2 = $_POST['img2'];
if ($p_img != '') { 
    //โฟลเดอร์ที่เก็บไฟล์
    $path="p_img/";
    //ตัวขื่อกับนามสกุลภาพออกจากกัน
    $type = strrchr($_FILES['p_img']['name'],".");
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname =$numrand.$date1.$type;
 
    $path_copy=$path.$newname;
    $path_link="p_img/".$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);  
		
} else {
    $newname = $img2;
}

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
$sql = "UPDATE tbl_product SET  
        p_name='$p_name',
        type_id='$type_id', 
        p_detail='$p_detail',
        p_price='$p_price',
        p_img='$newname'
        WHERE p_id='$p_id' ";

$result = mysqli_query($con, $sql);

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Update Succesfuly');";
    echo "window.location = 'product.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
}
?>
