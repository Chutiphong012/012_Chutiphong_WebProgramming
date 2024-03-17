<meta charset="UTF-8">
<?php
// เชื่อมต่อ database:
include('condb.php');

// รับค่า ID ที่ต้องการลบจาก URL
$a_id = $_REQUEST["ID"];

// สร้างคำสั่ง SQL สำหรับลบข้อมูล
$sql = "DELETE FROM tbl_admin WHERE a_id='$a_id'";

// ทำการลบข้อมูล
$result = mysqli_query($con, $sql);

// ตรวจสอบการทำงานของคำสั่ง SQL ว่าสำเร็จหรือไม่
if($result) {
    // ถ้าสำเร็จ ให้ redirect กลับไปที่หน้า admin.php
    echo "<script type='text/javascript'>";
    echo "window.location = 'admin.php'; ";
    echo "</script>";
} else {
    // ถ้าไม่สำเร็จ ให้แสดง Alert แจ้งเตือน
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
}
?>
