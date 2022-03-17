<?php
    session_start();
    include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
</head>

<body id="page-top">
    <?php
    include "head.php";
    ?>
    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col text-center">
                <p class="regis">Sign up to receive special promotions.</p>
            </div>
        </div>
        <div class="container p-5 ">
            <div class="row">
                <div class="col colftn">
                    <div class="row">
                        <p class="ftn">Firstname</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg" type="text" name="firstname" id="firstname">
                    </div>
                </div>
                <div class="col colltn">
                    <div class="row">
                        <p class="ltn">Lastname</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg" type="text" name="lastname" id="lastname">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col colemail">
                    <div class="row">
                        <p class="em">Email</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg" type="email" name="email" id="email">
                    </div>
                </div>
                <div class="col coluser">
                    <div class="row">
                        <p class="urn">Username</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg" type="text" name="username" id="username">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col colpass">
                    <div class="row">
                        <p class="paw">Password</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg" type="password" name="password" id="password">
                    </div>
                </div>
                <div class="col colconpass">
                    <div class="row">
                        <p class="conpaw">ConfirmPassword</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg" type="password" name="conpassword" id="conpassword">
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="checkbox" name="SpecialOfferStatus" id="SpecialOfferStatus" value="1" class="check"
                    style="width:20px; zoom:1.2;" />
                <p class="send">Email special offers and promotions.</p>
            </div>
            <div class="row">
                <div class="col text-center sen">
                    <span
                        style="border-bottom:#4682B4 solid 1.5px;">oopooooooooopppppppoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo</span>
                </div>
            </div>
            <!--buttonregister-->
            <div class="row">
                <input type="Submit" name="reg_user" value="Register" class="button buttonsub">
            </div>


            <div class="row">
                <div class="col small text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
            </div>
            <div class="row">
                <div class="col smal text-center">
                    <a class="small" href="login.php">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </form>
    <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>




</body>

</html>