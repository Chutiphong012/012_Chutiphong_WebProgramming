
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


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AromaBliss Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Home.css">
    <link rel="stylesheet" href="css/style-allpd.css?v=<?php echo time(); ?>">
    <?php include('backend/h.php'); ?>
    
  </head>
  <body>
    <!-- ////////////////////////   Navbar   //////////////////////////// -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="images/logo-brand.svg" alt="Logo" width=80" class="d-inline-block align-text-top ms-4">
      <a class="navbar-brand" href="#">Aromabliss</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownShop" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Shop
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownShop">
            <a class="dropdown-item" href="showaromacandle.php">Aroma candle</a>
            <a class="dropdown-item" href="showreeddiffuser.php">Reed Diffuser</a>
            <a class="dropdown-item" href="showsachet.php">Sachet</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="showallproducts.php">All Products</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="backend/admin_control.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
              </svg>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownUser">
            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="#">Register</a>
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3"
              viewBox="0 0 16 16">
              <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </nav>
<!-- ////////////////////////   Navbar   //////////////////////////// -->
<div class="container">
<!-- ////////////////////////   Title   //////////////////////////// -->
<div class="row">
  <div class="col-md-4">

  <img src="p_img/pic_t_07.jpg" width="100%" class="mt-5">
</div>
<div class="col-md-6 mt-3">
    <div class="Title1">
        <h1 id="text">Discover Ousr</h1>
        <h1 id="text">New Collection</h1>
        <h5 id="text2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora odit ipsum maiores natus dicta voluptates a sunt iusto tempore</h5>
        <button class="buy-now-btn mt-5"onclick="window.location.href='showallproducts.php'">Show More</button>

    </div>
  </div>

</div>
<div class="Title2">
    <h1 id="headtitle2">Browse The Range</h1>
    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>

    <div class="imgtitle">

    <div id="img"><img src="img/pic_t_07.jpg" alt="">
        <h2>Aroma Candle</h2></div>
    <div id="img"><img src="img/pic_k_01.jpg" alt="">
        <h2>Reed Diffuser</h2></div>
    <div id="img"><img src="img/pic_b_01.jpg" alt="">
        <h2>Sachet</h2></div>
    
</div>
</div>

<!-- ////////////////////////   Title   //////////////////////////// -->
</div>
<!-- ////////////////////////   Products   //////////////////////////// -->

<div class="products">
      <h1 id="headtitle3">Our Products</h1>
      <div class="container" id="boxproducts">
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
</div>


<button class="show-more-btn" onclick="window.location.href='showallproducts.php'">Show More</button>




<!-- ////////////////////////   Products   //////////////////////////// -->

<!-- ////////////////////////   Footer   //////////////////////////// -->
<?php include('footer.html'); ?>

<!-- ////////////////////////   Footer   //////////////////////////// -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+h">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

  </body>
</html>