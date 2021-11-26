<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home page</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="logout process.php">Logout <span class="sr-only"></a>
                </li>
                
            </ul>
        </div>
    </nav>

    <?php
    include('database connection.php');
    $query = pg_query($con,"select * from gst_system.business_information where gstin='$_SESSION[username]'");
    $row = pg_fetch_array($query);
?>

<div class="container-fluid">
        <table class="table">
            <tr>
                <th scope="col">Business Name</th>
                <td><?php echo $row['business_name']; ?></td>
            </tr>
            <tr>
                <th scope="col">GSTIN Number</th>
                <td><?php echo $row['gstin']; ?></td>
            </tr>
            <tr>
                <th scope="col">Pan Number</th>
                <td><?php echo $row['pan_no']; ?></td>
            </tr>
            <tr>
                <th scope="col">Business Type</th>
                <td><?php echo $row['description']; ?></td>
            </tr>

        </table>
    </div>


</body>

</html>