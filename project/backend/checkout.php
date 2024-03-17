<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
      }
      .header{
        margin-top: 60px;
      }

      .form-section {
        margin-bottom: 30px;
      }

      .form-section label {
        font-weight: bold;
      }

      .form-section input[type="text"],
      .form-section textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }

      .form-section select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }

      .form-section .btn-dark {
        width: 100%;
        padding: 10px;
        font-size: 18px;
        border-radius: 5px;
      }

      .form-section .total {
        font-size: 24px;
        margin-top: 20px;
      }
      </style> 
</head>
<body>
  <img src="images/Untitled.png" alt="" style="width: 100%; height: auto;">
  <div class="container">
    <form action="" class="justify-content-center">

        <div class="row">
          <div class="col-sm-6">
            <div style="flex: 1;padding: 3%;" class="form-section">
              <h1>Billing details</h1>
              <div class="mb-3 d-flex">
                <div style="flex: 1;">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first-name" name="first-name" placeholder="">
                </div>
                <div style="flex: 1; margin-left: 10px;">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last-name" name="last-name" placeholder="">
                </div>
              </div>
              <div class="mb-3">
                <label for="company" class="form-label">Company Name (Optional)</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="">
              </div>
              <div class="mb-3">
                <label for="country" class="form-label">Country/Region</label>
                <select class="form-select" id="country" name="country">
                  <option value="thailand">Thailand</option>
                  <option value="usa">USA</option>
                  <option value="uk">UK</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Street address</label>
                <textarea class="form-control" id="address" name="address" rows="4" placeholder=""></textarea>
              </div>      
              <div class="mb-3">
                <label for="city" class="form-label">Town/City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="">
              </div>
              <div class="mb-3">
                <label for="zip-code" class="form-label">ZIP code</label>
                <input type="text" class="form-control" id="zip-code" name="zip-code" placeholder="">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="">
              </div> 
            </div>
          </div>
          
          <div class="col-sm-6 justify-content-center ps-5 header">
            <div style="flex: 1; padding: 3%;" class="form-section col-5">
              <label for="product" class="form-label">Product</label>
              <p>Asgaard * 1</p>
              <p>Subtotal</p>
              <p class="total">Total</p>
              <button type="button" class="btn btn-warning">Place order</button>
            </div>
          </div>
        </div>
    </form>
  </div>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
