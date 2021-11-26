<?php session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Insertinvoice page</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">Goods And Services Tax</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="credit leadger.php">Credit Leadger</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="invoice.php">Invoice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="return.php">Returns</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Product</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="logout process.php">Logout <span class="sr-only"></a>
        </li>
        <li class="nav-item dropdown">

        </li>
      </ul>
    </div>
  </nav>
  <form action="insert.php" method="post">
    <div class="form-raw">
      <div class="form-group ">
        <label for="inputEmail4">Invoice Number</label>
        <input type="text" class="form-control" id="inputEmail4" name="in" placeholder="invoice number" >
      </div>
      <div class="form-group ">
        <label for="inputEmail4">Date</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="yyyy-mm-dd" name="d">
      </div>
    </div>

    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="inputPassword4">Buyer GSTIN</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="GSTIN Number" name="bg">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Supplier GSTIN</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="GSTIN Number" name="sg">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress2">Place Of Supply</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="State Name" name="pos">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Supplier State</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="State Name" name="ss">
      </div>
    </div>
    <div class="form-row ">
      <div class="form-group col-md-6">
        <label for="inputAddress2">Product Id</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="1-100" name="pi">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Quantity</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="1-100" name="q">
      </div>
    </div>
    <div class="form-row ">
      <div class="form-group col-md-6">
        <label for="inputAddress2">Tax Amount</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="1-100" name="ta">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Total Amount</label>
        <input type="text" class="form-control" placeholder="1-100" name="toa">
      </div>
    </div>
    <center><button type="submit" class="btn btn-primary" name="Upload">Upload</button></center>
  </form>
</body>

</html>