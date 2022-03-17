<?php
@session_start();
include "server.php";
?>
<style>
body {
    font-family: 'Prompt', sans-serif !important;
}
</style>

<head>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/test.css?v=53" rel="stylesheet">


    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">

</head>
<nav class="navbar navbar-expand navbar-light bg-white jobbar fixed-top static-top shadow" id="HeaderZ">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>




    <!-- Topbar Navbar -->

    <div class="collapse navbar-collapse topbar" id="navbarNavDropdown">
        <div class="logo1">
            <img src="/hotel/images/logo.jpg" class="imagelogo1" id="Headerlogo">

            <div class="telo">
                <p class="hdt" id="Headertextlogo">Calisa village</p>
                <p class="resort1" id="Headertextresort">resort</p>
            </div>

        </div>


        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->

            <!-- <li class="nav-item ">
            <a href="javascript:void(0)">Gallery</a>
            <a href="javascript:void(0)">Attraction</a>
            <a href="javascript:void(0)">Facilities</a>
            <a href="accom.php">Accommodacations</a>
            <a class="active" href="save_register">Home</a>
        </li> -->


            <?php 
                $strSQL = "SELECT * FROM type_room WHERE type_room.status = 'on'";
                $objQuery = mysqli_query($conn, $strSQL);
                $tbl = array();
                while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)){
                    array_push($tbl,$objResult['name']);
                };
            ?>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index">Home</a>
                </li>
                <li class="nav-item dropdown" style="margin-top: 20px;">
                    <a class="nav-link dropbtn newcolor underline-animation">Accommodacations</a>
                    <div class="dropdown-menu2" aria-labelledby="navbarDropdownMenuLink">
                        <?php if(isset($tbl)) { ?>
                        <a href="room?name=<?= $tbl[0]; ?>" class="dropdown-item underline-anime"
                            style="margin-top: 8px; font-size:1.0106rem;">
                            Standard Room</a>
                        <a class="dropdown-item  underline-anime1" href="room?name=<?= $tbl[1]; ?>"
                            style="margin-top: 3px; font-size:1.0106rem; ">GrandSuperior Room</a>
                        <a class="dropdown-item  underline-anime2" href="room?name=<?= $tbl[2]; ?>"
                            style="margin-top: 3px; font-size:1.0106rem">GrandDeluxe Room</a>
                        <a class="dropdown-item  underline-anime3" href="room?name=<?= $tbl[3]; ?>"
                            style="margin-top: 3px; font-size:1.0106rem">Suite Room</a>
                        <?php } ; ?>
                    </div>
                </li>
                <li class="nav-item" style="margin-top: 20px;">
                    <a class="nav-link newcolor2  underline-animation" href="facilities">Facilities</a>
                </li>
                <style>
                .dropdown-toggle::after {
                    display: none !important;
                }
                </style>
                <li class="nav-item dropdown " style="margin-top: 20px;">
                    <a class="nav-link dropbtn newcolor3 " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Event <i class="fa fa-angle-down p-1 " aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item undermeet" style="margin-top: 8px; font-size:1.016rem;"
                            href="Meeting">Meeting</a>
                        <a class="dropdown-item underwed" style="margin-top: 3px; font-size:1.016rem;"
                            href="Wedding">Wedding</a>
                    </div>
                </li>

                </li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
                <li class="nav-item dropdown  show" style="margin-top: 20px;">
                    <a class="nav-link dropdown-toggle newcolor" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage <i class="fa fa-angle-down p-1" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="manage?type=type">ประเภทของห้อง</a>
                        <a class="dropdown-item" href="manage?type=room">ห้อง</a>
                        <a class="dropdown-item" href="manage?type=order">การจองห้อง</a>
                    </div>
                </li>
                <?php } ?>
                <div class="topbar-divider d-none d-sm-block"></div>


                <!-- <li class="nav-item no-arrow login">
                <a class="nav-link  login"  id="exampleModal" role="button" data-toggle="modal" data-target="#exampleModal" >
                    <span class="mr-2 d-none d-lg-inline login p-2 rounded-sm ">Log in</span>

                </a> -->
                <!-- Button trigger modal -->
                <?php if (isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
                    //    echo $_SESSION['firstname']+' '+ $_SESSION['lastname'];
                ?>


                <!-- <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?> -->

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span
                            class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?></span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown" style="
    height: 48px;
    margin-top: 20px;
    width: 29px;
">

                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

                <?php } else { ?>
                <li class="nav-item" style="margin-top: 20px;">
                    <a class="nav-link newcolorlogin" data-toggle="modal" data-target="#exampleModal">
                        login</a>
                </li>
                <?php } ?>
            </ul>


            <!--             
            <div class="modal fade" id="exampleModal" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
                <form id="login_form">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content ">
                            <div class="modal-header" style="display: block;">
                                <p class="goto" id="exampleModalLabel">Log in to Calisa Village Resort.</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -102px;
    font-size: 3.1rem;
    font-weight: 100;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <p class="eoru">Username</p>
                                </div>
                                <div class="row">
                                    <input class="form-control form-control-lg form-control-head colemail" required
                                        type="text" name="username" id="username">
                                </div>
                                <div class="row">
                                    <p class="paw2">Password</p>
                                </div>
                                <div class="row">
                                    <input class="form-control form-control-lg form-control-head colemail" required
                                        type="password" name="password" id="password">
                                </div>
                                <div class="row">
                                    <p class="forget">Forgot password or change password</p><a href="" class="Click"
                                        style="font-weight:bold; text-decoration:underline; ">Click here</a>
                                </div>
                                <div class="row signfo">
                                    <p class="dont">No account yet?<a href="formregister.php" class="signup"
                                            style="font-weight:bold; text-decoration:underline;">Sign up</a>
                                    <p class="sig">to receive special from the hotel </p>
                                    </p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="close_login" class="btn btn-default"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" name="sign_sub" id="btn_login" class="button buttonsign">Sign
                                    In</button>
                                <button class="btn btn-secondary" hidden id="loading_login"><i
                                        class="fa fa-spinner fa-spin"></i> Loading</button>

                            </div>
                </form>
            </div>
    </div>







    </div>
    </div>

</nav>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ออกจากระบบ</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">กด "Logout" เพื่อยืนยันที่จะออกจากระบบ</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script>
function resizeHeader() {
    let header = document.getElementById("HeaderZ")
    if (window.scrollY > 0) {
        header.classList.add('schooooo')
    } else {
        header.classList.remove('schooooo')
    }
}
window.addEventListener("scroll", resizeHeader)
</script>
<script>
function resizeHeader() {
    let header = document.getElementById("Headerlogo")
    if (window.scrollY > 0) {
        header.classList.add('logo')
    } else {
        header.classList.remove('logo')
    }
}
window.addEventListener("scroll", resizeHeader)
</script>
<script>
function resizeHeader() {
    let header = document.getElementById("Headertextlogo")
    if (window.scrollY > 0) {
        header.classList.add('texthead')
    } else {
        header.classList.remove('texthead')
    }
}
window.addEventListener("scroll", resizeHeader)
</script>
<script>
function resizeHeader() {
    let header = document.getElementById("Headertextresort")
    if (window.scrollY > 0) {
        header.classList.add('textre')
    } else {
        header.classList.remove('textre')
    }
}
window.addEventListener("scroll", resizeHeader)
</script>

<style>
.jobbar {
    height: 7.565rem !important;
    width: 1275px !important;
    background-color: red;
    transition: height 0.25s cubic-bezier(0, 0, 0.47, -0.09);
}

.schooooo {
    height: 5.575rem !important;

}

.navbar {
    padding: 0 !important;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown:hover .dropdown-menu2 {
    display: block;
}


.imagelogo1 {
    width: 175px;
    padding: 1px;
    margin-left: 136px;
    border-radius: 0;
    /* margin-left: 54px; */
    /* margin-block-start: 61px; */
    /* margin-inline-start: 20px; */
    margin-top: -39px;
    height: 84px;
    transition: height 0.25s cubic-bezier(0, 0, 0.47, -0.09);
}

.logo {
    width: 144px;
    height: 67px;
    margin-top: -29px;
    margin-left: 130px !important;
}

.resort1 {
    margin-left: 206px;
    margin-top: -26px;
    font-family: system-ui;
    letter-spacing: 1px;
    font-size: 0.857rem;
}

.hdt {
    letter-spacing: 3px;
    margin-left: 161px;
    margin-top: -8px;
    font-family: math;
    font-size: 0.999rem;
}

.texthead {
    margin-left: 148px !important;
    font-size: 14px !important;
    margin-top: -5px;
}

.textre {
    margin-top: -26px;
    font-size: 11px;
    margin-left: 190px;
}
</style>
<script>
$("#login_form").submit((e) => {
    e.preventDefault()
    $('#btn_login').attr('disabled', true);
    $('#btn_login').attr('hidden', true);
    $('#close_login').attr('hidden', true);
    $('#loading_login').attr('hidden', false);
    axios.post('controller?f=login', {
        username: $('#username').val(),
        password: $('#password').val(),
    }).then(({
        data
    }) => {
        if (data.status == 200) {
            window.location.reload()
        } else {
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด',
                text: data.data,
            })
        }
        $('#btn_login').attr('disabled', false);
        $('#btn_login').attr('hidden', false);
        $('#loading_login').attr('hidden', true);
        $('#close_login').attr('hidden', false);
    }).catch((error) => {
        Swal.fire({
            icon: 'error',
            title: 'เกิดข้อผิดพลาด',
            text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
        }).then(() => {
            $('#btn_login').attr('disabled', false);
            $('#btn_login').attr('hidden', false);
            $('#loading_login').attr('hidden', true);
            $('#close_login').attr('hidden', false);
        })

    })
})
</script>