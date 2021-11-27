<?php
session_start();
?>
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
        </div>
    </nav>
    <div>
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <img src="https://miro.medium.com/max/6310/1*rzemMy7oTieFwuv9OUlNZA.jpeg" class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form action="login_process.php" method="post">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="username">
                                <label for="floatingInput">username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="password">
                                <label for="floatingPassword">password</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">
                                        Remember me
                                    </label>
                                </div>
                                <a href="fp.php" class="text-body">Forgot password?</a>
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                    Login</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php" class="link-danger">
                                        Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>