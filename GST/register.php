<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #a1c4fd;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
        }

        .bg-indigo {
            background-color: #4835d4;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }
    </style>
    
    <title>New User</title>
</head>

<body>
    
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <form action="creacc.php" method="post">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault01">First name</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" name="fn" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Middle name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="Middle name" value="Otto" name="mn" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" name="ln" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Date Of Birth</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="yyyy-mm-dd" name="dob" aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Gender</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationDefaultUsername"  name="g" aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                </div>
                                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" name="un" aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                </div>
                                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Password" name="p" aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Mobile Number</label>
                            <input type="text" class="form-control" id="validationDefault03" placeholder="10 digits" name="mobileno" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault04">Email</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="abc@gmail.com" name="email" required>
                        </div>

                    </div>
                    
                    <hr>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Business name</label>
                            <input type="text" class="form-control" id="validationDefault03" placeholder="abs limited..." name="bn" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault04">Business Type</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="Manufacture,Retailer..." name="bt" required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault03">Aadhar number</label>
                            <input type="text" class="form-control" id="validationDefault03" placeholder="12 digit" name="an" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault04">Pan Number</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="Pan nuber" name="pan" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault04">Account Number</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="Bank Account Number" name="ac" required>
                        </div>

                    </div>
                   
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault03">City</label>
                            <input type="text" class="form-control" id="validationDefault03" placeholder="City" name="c" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault04">State</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="State" name="s" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault05">Zip</label>
                            <input type="text" class="form-control" id="validationDefault05" placeholder="6 digit" name="pc" required>
                        </div>
                    </div>
                    <hr>
                    <center><button class="btn btn-primary btn-lg" type="submit" name="register">Register</button>
                    <h1>OR  </h1>
                   <a href="login.php" <button  class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button></a></center>
                </form>
            </div>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 