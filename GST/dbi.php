
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home page</title>
    <link rel="stylesheet" href="navbar.css"><title>Login Page</title>
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
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Business Name</th>
                    <th scope="col">Business Type</th>
                    <th scope="col">GSTIN Number</th>
                    <th scope="col">Pan Number</th>
                    <th scope="col">Account Number</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include('database connection.php');
                $query = pg_query($con, "select * from business_information ");


                while ($inx = pg_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td> <?php echo $inx['business_name']; ?> </td>
                        <td><?php echo $inx['description']; ?></td>
                        <td><?php echo $inx['gstin']; ?></td>
                        <td><?php echo $inx['pan_no']; ?></td>
                        <td><?php echo $inx['account_no']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        
</body>

</html>