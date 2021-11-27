<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="submit_return.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">GSTIN Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="gstin" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <!-- <div class="col"><label>Month</label>
                                    <input type="text" class="form-control" name="month" placeholder="First name">
                                </div> -->
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Month</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="month"aria-describedby="emailHelp" >
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Finicial_year</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="year">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Your Registred State</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="state">
                                </div>

                                <button type="submit" class="btn btn-primary" name="add"> Submit Return</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>