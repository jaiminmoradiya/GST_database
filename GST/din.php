<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home page</title>
    <link rel="stylesheet" href="navbar.css">
    <title>Login Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">Goods And Services Tax</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="1">
                    <a class="nav-link" href="dbi.php">Business Information</a>
                </li>
                <li class="nav-item" id="1">
                    <a class="nav-link" href="dcre.php">Credit Leadger</a>
                </li>
                <li class="nav-item" id="1">
                    <a class="nav-link" href="din.php">Invoice</a>
                </li>
                <li class="nav-item" id="1">
                    <a class="nav-link" href="dre.php">Returns</a>
                </li>
                <li class="nav-item" id="1">
                    <a class="nav-link" href="dpro.php">Product List</a>
                </li>
                <li class="nav-item" id="1">
                    <a class="nav-link" href="dp.php">Personal Information</a>
                </li>
                <li class="nav-item" id="1">
                    <a class="nav-link" href="dsi.php">State Income</a>
                </li>
                <li class="nav-item" id="1">
                    <a class="nav-link" href="login.php">Login/Sign in</a>
                </li>


            </ul>
            <!-- <ul>

                <a href="login.php"><button class=" btn btn-primary btn-lg" style="font-size:20px"> Logout</button></a>
            </ul>  -->

        </div>
    </nav>
        <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Invoice Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Buyer GSTIN</th>
                    <th scope="col">Supplier GSTIN</th>
                    <th scope="col">Place Of Supply</th>
                    <th scope="col">Supplier State</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Tax Amount</th>
                    <th scope="col">Total Amount</th>
                    <th> #operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include('database connection.php');
                $query = pg_query($con, "select * from invoice ");


                while ($inx = pg_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td> <?php echo $inx['invoice_no']; ?> </td>
                        <td><?php echo $inx['date']; ?></td>
                        <td><?php echo $inx['buyer_gstin']; ?></td>
                        <td><?php echo $inx['supplier_gstin']; ?></td>
                        <td><?php echo $inx['place_of_supply']; ?></td> 
                        <td><?php echo $inx['supplier_state']; ?></td>
                        <td><?php echo $inx['product_id']; ?></td>
                        <td><?php echo $inx['quantity']; ?></td>
                        <td><?php echo $inx['tax_amount']; ?></td>
                        <td><?php echo $inx['total_amount']; ?></td>
                        <td><a href="upin.php?id=<?php echo $inx['invoice_no'];?>" data-toggle="tootltip" data-placement="top" title><button type="submit"class="btn btn-primary btn-lg" name="update_data">Edit/Update</button></a></td>

                    </tr>
                <?php
                }
                ?>


            </tbody>
        </table>





</body>

</html>