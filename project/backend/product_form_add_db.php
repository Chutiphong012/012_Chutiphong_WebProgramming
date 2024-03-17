<meta charset="UTF-8">
<?php
include('condb.php');

date_default_timezone_set('Asia/Bangkok');

$date1 = date("Ymd_His");
$numrand = (mt_rand());

$p_name = $_POST['p_name'];
$type_id = $_POST['type_id'];
$p_detail = $_POST['p_detail'];
$p_price = $_POST['p_price'];

$p_img = '';
$newname = '';

$upload = $_FILES['p_img'];

if ($upload['name'] != '') {
    $path = "p_img/";
    $type = strrchr($upload['name'], ".");
    $newname = 'p_img' . $numrand . $date1 . $type;
    $path_copy = $path . $newname;
    $path_link = "p_img/" . $newname;
    move_uploaded_file($upload['tmp_name'], $path_copy);
    $p_img = $newname;
}

$sql = "INSERT INTO tbl_product (p_name, type_id, p_detail, p_price, p_img)
        VALUES ('$p_name', '$type_id', '$p_detail', '$p_price', '$p_img')";

$result = mysqli_query($con, $sql);

mysqli_close($con);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Add Successfully');";
    echo "window.location = 'product.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error. Please try again.');";
    echo "window.location = 'product.php'; ";
    echo "</script>";
}
?>
