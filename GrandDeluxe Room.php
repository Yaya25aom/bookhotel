<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GrandDeluxe Room</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/test.css">

</head>

<body id="page-top">
    <?php
    include "head.php";
    ?>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xxl del">
                <img style="width: 100%; height:75%;"
                    src="https://www.anywhere.com/img-a/indonesia/destinations/tabanan/hotels/soori-bali/82499507.jpg">
            </div>
        </div>
        <div class="row stande p-5">
            <div class="col text-center border-right">
                <p class="roomstandard">Double Bed</p>
            </div>
            <div class="col text-center border-right">
                <p class="roomstandard">18m</p>
            </div>
            <div class="col text-center border-right">
                <p class="roomstandard">Free Wifi</p>
            </div>
            <div class="col text-center border-right">
                <p class="roomstandard">2 People</p>
            </div>
            <div class="col text-center">
                <p class="roomstandard">From 2700฿</p>
            </div>
        </div>
    </div>
    <div class="container imgstan">
        <div class="row ">
            <div class="col p-4">
                <img style="width: 95%; height:105%;"
                    src="https://d321ocj5nbe62c.cloudfront.net/imageRepo/7/0/125/639/643/IMG_00392_P.jpg">
            </div>
            <div class="col ">
                <p class="standard">Grand Superior Room</p><br>
                <p class="textstan">Grand Superior rooms offer the perfect place to unwind and enjoy a pleasant night’s
                    sleep.</p>
                <!-- <a href="#" class="btn btn-primary btn-stan rounded-0 me-md-2" role="button" data-bs-toggle="button">View More<i class="fas fa-arrow-right p-2 icon"></i></a> -->
                <!-- <a href=""button type="button" class="btn btn-primary btn-sm btn-stan rounded-0">View More<i class="fas fa-arrow-right p-2 icon"></i></button> -->
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container p-3 suite">
        <div class="row">
            <p class="facili">Room Facilities</p>
        </div>
        <div class="row p-2 img1-2">
            <div class="col  img1">
                <img style="width:90%" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/su_02_1.png">
            </div>
            <div class="col   img2">
                <img style="width:90%" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/su_03_1.png">
            </div>
        </div>
        <div class="row p-2">
            <div class="col img3">
                <img style="width:90%" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/su_04_3.png">
            </div>
            <div class="col img4">
                <img style="width:90%;" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/su_05_2.png">
            </div>
        </div>
        <a class="btn btn-primary btn-stan rounded-0 btn-lg btn-book" href="bookroom.php" role="button">Book Now</a>
    </div>
    <button type="button" class="btn btn-primary btn-loginlo noshadow" data-toggle="modal" data-target="#exampleModal">
        login
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <p class="goto" id="exampleModalLabel">Log in to Calisa Village Resort.</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p class="eoru">Username</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg form-control-head colemail" type="text"
                            name="username" id="username">
                    </div>
                    <div class="row">
                        <p class="paw2">Password</p>
                    </div>
                    <div class="row">
                        <input class="form-control form-control-lg form-control-head colemail" type="password"
                            name="password" id="password">
                    </div>
                    <div class="row">
                        <p class="forget">Forgot password or change password</p><a href="" class="Click"
                            style="font-weight:bold; text-decoration:underline; ">Click here</a>
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
                        <p class="dont">No account yet?<a href="formregister.php" class="signup"
                                style="font-weight:bold; text-decoration:underline;">Sign up</a>
                        <p class="sig">to receive special from the hotel </p>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" name="sign_sub" value="Sign In" class="button buttonsign">
                </div>
            </div>
        </div>



</body>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- <script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script> -->

</html>