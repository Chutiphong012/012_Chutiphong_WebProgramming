<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Custom Login & Register CSS -->

    <head>
      <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <!-- or -->
      <link rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>

    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
  <?php include('navbar_font.php'); ?>
  <div class="container mt-5">
    <div class="row">

  <div class="col-6" style="text-align: right;">
    <img src="p_img/pic_t_10.jpg" alt="" width="85%">
  </div>

    <div class="col-6">
      <main class="form-signin w-100 m-auto">
        <form>
          <h1 class="h3 mb-3 fw-normal">Username</h1>
      
          <div class="form-floating my-2">
            <input type="email" class="form-control" id="floatingInput" placeholder=" ">
            <label for="floatingInput">Enter your Username</label>
          </div>
          
              <h2 class="h3 mb-3 fw-normal">Password</h2>
          <div class="form-floating my-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Enter your Password</label>
          </div>
        </form>
      </main>
          

          <main class="form-signin w-100 m-auto">
       <form>
          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remember me
            </label>
          </div>
          <button class="btn btn-warning w-100 py-2" type="submit">Login</button>
          <p class="mt-5 mb-3 text-body-secondary">Don't have an account yet? <a href="register.html">Click here</a> to sign up</p>
        </form>
      </main>

      </div>
      </div>
  </div>
  <br><br>

      <?php include('footer.html'); ?>

     <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

