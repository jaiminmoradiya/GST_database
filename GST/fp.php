<?php session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Insertinvoice page</title>
    <link rel="stylesheet" href="navbar.css">
</head>

<body>



    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">

                <div class="col-lg-10">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="upp.php" method="post">

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">GSTIN Number</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="gstin">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">username</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="un">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Enter New Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" name="p">
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary btn-lg   " name="update">UPDATE</button> 
                                   <h1>OR</h1>
                                    <a href="login.php"> <button  class="btn btn-primary btn-lg " name="update">Log in</button> </a>
                                    </center>   
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>