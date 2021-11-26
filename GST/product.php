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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">HSN Code</th>
                <th scope="col">Price</th>
                <th scope="col">IGST Tax Rate</th>
                <th scope="col">CGST Tax Rate</th>
                <th scope="col">SGST Tax Rate</th>
            </tr>
        </thead>
        <tbody>

            <?php
    include('database connection.php');
    $query = pg_query($con,"select * from gst_system.product_information NATURAL JOIN gst_system.product_rate where gstin='$_SESSION[username]'");

    
    while($inx=pg_fetch_assoc($query))
    {
    ?>
            <tr>
                <td> <?php echo $inx['prouct_id']; ?> </td>
                <td><?php echo $inx['product_name'];?></td>
                <td><?php echo $inx['hsn'];?></td>
                <td><?php echo $inx['price'];?></td>
                <td><?php echo $inx['igst_rate'];?></td>
                <td><?php echo $inx['cgst_rate'];?></td>
                <td><?php echo $inx['sgst_rate'];?></td>
            </tr>
            <?php
        }
?>


        </tbody>
    </table>












    </div>
</body>

</html>