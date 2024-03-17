<?php
session_start();
//1. Connect Database
include 'backend/condb.php';


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1; //เลขหน้าที่แสดงข้อมูล
}

$itemsPerPage = 9;  // จำนวนข้อมูลที่จะแสดงข้อมูลต่อหน้า
$start = ($page - 1) * $itemsPerPage; //เลขเริ่มต้น

//Query total products
$sql_total = "SELECT COUNT(*) AS total FROM tbl_product"; // Adjust table name accordingly
$result = $con->query($sql_total);
$row = $result->fetch_assoc();
$row_total = $row['total'];
$page_total = ceil($row_total / $itemsPerPage);

// Modify your SQL query to include the join with tbl_type
$sql2 = "SELECT p.*, t.type_name FROM tbl_product AS p JOIN tbl_type AS t ON p.type_id = t.type_id LIMIT $start, $itemsPerPage"; // Adjust table names accordingly
$result2 = $con->query($sql2);

$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AromaBliss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/logo_aromabliss_crop.png">

    <!--  Custom CSS -->
    <link rel="stylesheet" href="css/style-allpd.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- menubar -->
    <?php include 'navbar_font.php'; ?>
    <!-- Header image -->
    <div class="thumbnail-head-img my-5 ">
        <div class="blur">
            <div class="text-center heading-shop">
                <h1>All Products</h1>
                <div class="text-direct">
                    <a href="Home.php" //ใส่ลิ้งหน้าแรก
                        class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                    <a href="showallproducts.php"
                        class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Shop</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                    <a href="showallproducts.php"
                        class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">All
                        Products</a>
                </div>
            </div>
        </div>
    </div>

    <!-- show all products -->
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-5">
            <?php
            while ($rs = $result2->fetch_assoc()) {
                ?>
                <div class="col d-flex justify-content-around">
                    <div class="card">
                        <img src="p_img/<?php echo $rs['p_img'] ?>" class="card-img-top" alt="products-img">
                        <div class="card-body d-flex flex-column">
                            <h4>
                                <?php echo $rs['p_name'] ?>
                            </h4>
                            <p class="card-text"><?php echo $rs["type_name"]; ?></p>
                            <p class="card-text">Price : <span><?php echo $rs['p_price'] ?></span> </p>
                            <div class="d-flex justify-content-center mt-auto">
                                <a href="#" target="_blank" class="btn-viewdetail">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                } 
                ?>
        </div>
    </div>

    <!-- pagination -->
    <div class="pagination">
        <?php include 'pagination.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>