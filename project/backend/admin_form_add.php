<?php include("h.php");?>

<form name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="row g-3">
    <div class="col-md-6">
        <input name="a_user" type="text" required class="form-control" id="a_user" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" />
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <input name="a_pass" type="password" required class="form-control" id="a_pass" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <input name="a_name" type="text" required class="form-control" id="a_name" placeholder="ชื่อ-สกุล" />
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-6 text-end">
        <button type="submit" class="btn btn-success"><span class="bi bi-save"></span>บันทึก</button>
    </div>
</form>
