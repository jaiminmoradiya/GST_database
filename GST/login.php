<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Document</title>
</head>

<body>

<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">GST</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://www.studyfry.com/wp-content/uploads/Emblem-of-India.png" class="img-fluid"
                        alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="login_process.php" method="post">
          
                        <!-- Email input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="username"
                                placeholder="username">
                            <label for="floatingInput">username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" name="password"
                                placeholder="password">
                            <label for="floatingPassword">password</label>
                        </div>
                        <div class="d-flex justify-content-around align-items-center mb-4">


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block my-4"
                                name="login">Login</button>

                    </form>
                </div>

            </div>
        </div>
    </section>


</body>

</html>