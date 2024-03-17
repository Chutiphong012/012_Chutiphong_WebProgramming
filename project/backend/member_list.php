<?php
include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');

$query = "SELECT * FROM tbl_member ORDER BY member_id ASC";
$result = mysqli_query($con, $query);

?>

<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'ASC']],
    //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
  });
} );
</script>

<table border="2" class="display table table-bordered" id="example1" align="center">
<thead>
<tr class="info">    
    <th>id</th>
    <th>m_user</th>
    <th>m_pass</th>
    <th>m_name</th>
    <th>m_email</th>
    <th>m_address</th>
    <th>edit</th>
    <th>delete</th>
</tr>
</thead>
<?php 
  while ($row_am = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $row_am['member_id']; ?></td>
    <td><?php echo $row_am['m_user']; ?></td>
    <td><?php echo $row_am['m_pass']; ?></td>
    <td><?php echo $row_am['m_name']; ?></td>
    <td><?php echo $row_am['m_email']; ?></td>
    <td><?php echo $row_am['m_address']; ?></td>
    <td><a href="member.php?act=edit&ID=<?php echo $row_am['member_id']; ?>" class="btn btn-warning btn-xs">แก้ไข</a></td>
    <td><a href="member_del_db.php?ID=<?php echo $row_am['member_id']; ?>" onclick="return confirm('Do you want to delete this record? !!!')" class='btn btn-danger btn-xs'>ลบ</a></td>
</tr>
<?php } ?>
</table>
