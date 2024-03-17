<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$a_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_admin WHERE a_id='$a_id' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
extract($row);
?>
<form name="admin" action="admin_form_edit_db.php" method="POST" id="admin" class="row g-3">
    <input type="hitdden" name="a_id" value="<?php echo $a_id; ?>">
    <div class="col-md-6">
        <input name="a_user" type="text" required class="form-control" id="a_user" value="<?=$a_user;?>" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" />
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <input name="a_pass" type="password" required class="form-control" id="a_pass" value="<?=$a_pass;?>" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <input name="a_name" type="text" required class="form-control" id="a_name" value="<?=$a_name;?>" placeholder="ชื่อ-สกุล" />
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-6 text-end">
        <button type="submit" class="btn btn-success"><span class="bi bi-save"></span>บันทึก</button>
    </div>
</form>
