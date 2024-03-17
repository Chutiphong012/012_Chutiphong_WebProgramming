<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
//2. query ข้อมูลจากตาราง
$query = "
SELECT * FROM tbl_product as p 
INNER JOIN tbl_type as t ON p.type_id=t.type_id 
ORDER BY p.p_id DESC";
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
?>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script>    
$(document).ready(function() {
    $('#productTable').DataTable({
        "aaSorting": [[0, 'desc']], // เรียงตาม ID แบบลำดับหลังมาก่อน
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // กำหนดจำนวนแถวต่อหน้า
    });
});
</script>
<table id="productTable" class="display table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>type</th>
            <th>name</th>
            <th>detail</th>
            <th>price</th>
            <th>img</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row["p_id"]; ?></td>
                <td><?php echo $row["type_name"]; ?></td>
                <td><?php echo $row["p_name"]; ?></td>
                <td><?php echo $row["p_detail"]; ?></td>
                <td><?php echo $row["p_price"]; ?></td>
                <td align="center"><img src="../p_img/<?php echo $row['p_img']; ?>" width="100"></td>
                <td><a href="product.php?act=edit&ID=<?php echo $row['p_id']; ?>" class="btn btn-warning btn-xs">แก้ไข</a></td>
                <td><a href="product_del_db.php?ID=<?php echo $row['p_id']; ?>" onclick="return confirm('Do you want to delete this record? !!!')" class="btn btn-danger btn-xs">ลบ</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php mysqli_close($con); ?>
