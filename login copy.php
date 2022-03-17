<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
</head>

<body id="page-top">
    <?php
    include "head.php";
    ?>
    <form action="register.db.php">
        <div class="row">
            <div class="col text-center">
                <p class="goto">Log in to Calisa Village Resort.</p>
            </div>
        </div>

        <div class="container loginform">
            <div class="row">
                <div class="col colemail">
                    <div class="row">
                        <p class="eoru">Email or Username</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg" type="textoremail" name="emailorusername" id="emailorusername">
                    </div>
                </div>
                <div class="col colconpass">
                    <div class="row">
                        <p class="paw">Password</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg" type="password" name="password" id="password">
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="forget">Forgot password or change password</p><a href="" class="Click" style="font-weight:bold; text-decoration:underline; ">Click here</a>
            </div>
            <div class="row">
                <div class="col text-center sen">
                    <span style="border-bottom:#4682B4 solid 1.5px;">oopoooooooooooooopppppppoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo</span>
                </div>
            </div>
            <!--buttonsignin-->
            <div class="row">
                <input type="submit" name="Submit" value="Sign In" class="button buttonsign">
            </div>
            <div class="row">
                <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
            </div>
            <div class="row">
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
            </div>
            <div class="row signfo">
                <p class="dont">No account yet?<a href="formregister.php" class="signup" style="font-weight:bold; text-decoration:underline;">Sign up</a>
                <p class="sig">to receive special from the hotel </p>
                </p>
            </div>
        </div>
      




    </form>
</body>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script>
    $('#myModal').on('shown.bs.modal', function(e) {
        $('#myInput').trigger('focus')
        $('#myModal').modal('show')
    });
</script>