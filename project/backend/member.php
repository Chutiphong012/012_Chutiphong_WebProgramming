<!DOCTYPE html>
<html>

<head>
    <?php include('h.php'); 
    error_reporting( error_reporting() & ~E_NOTICE ); 
    ?>
    
</head>

<body>
<?php include('../navbar_back.php'); ?>
    <div class="container">
        <p></p>
        <div class="row">
            <div class="col-md-3">
                <!-- Left side column. contains the logo and sidebar -->
                <?php include('menu_left.php'); ?>
                <!-- Content Wrapper. Contains page content -->
            </div>

            <div class="col-md-9">
                <a href="member.php?act=add" class="btn btn-warning">เพิ่ม</a>
                <p></p>
                <?php
                $act = isset($_GET['act']) ? $_GET['act'] : '';
                if ($act == 'add') {
                    include('member_form_add.php');
                } elseif ($act == 'edit') {
                    include('member_form_edit.php');
                } else {
                    include('member_list.php');
                }
                ?>
            </div>

        </div>
    </div>
    <br><br>
    <?php
        include('../footer.html');
        ?>
</body>

</html>
