<?php session_start();

if (isset($_SESSION['is_login']) === false) {
    echo "<script>
    alert('กรุณาล็อคอินก่อนเข้าใช้งาน');
    window.location.href = 'index.php';
    </script>";
}
if(!isset($_GET['datestart']) || !isset($_GET['dateend'])){
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'เกิดข้อผิดพลาด',
        html: 'ข้อมูลวันไม่ถูกต้อง <br>กรุณาลองใหม่อีกครั้ง',
    }).then(()=>{
        window.history.back();
    })
    </script>";
    exit();
}
// echo $_GET['datestart'];
$diff = date_diff(date_create($_GET['datestart']),date_create($_GET['dateend']));
// print_r($diff->format('%R%a'));exit();
if($diff->format('%R%a') <= 0){
    echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script><br>';
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'เกิดข้อผิดพลาด',
        html: 'ข้อมูลวันไม่ถูกต้อง <br>กรุณาลองใหม่อีกครั้ง',
    }).then(()=>{
        window.history.back();
    })
    </script>";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>bookroom</title>

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
    include "head book.php";
    include "server.php";
    $strSQL = "SELECT price FROM room WHERE id_room = $_GET[id_room] ";
    // echo $strSQL;
    $objQuery = mysqli_query($conn, $strSQL);

    $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
    // print_r($objResult);exit();
    ?>
    <div class="left">
        <a href="bookroom.php">
            <i class="fas fa-angle-left fasleft"></i>
        </a>
    </div>
    <p class="guest">Guest Details</p>
    <div class="sticky ">
        <p class="stay">Your Stay</p>
        <div class="row chin">
            <p>Check-In : <?= $_GET['datestart'] ?> </p>
        </div>
        <div class="row chout">
            <p>Check-Out : <?= $_GET['dateend'] ?></p>
        </div>
        <div class="row occ">
            <p>Occupancy :
                <?php if (isset($_GET['numAdults']) && $_GET['numAdults'] > 0) {
                    echo $_GET['numAdults'] . ' Adult(s) &nbsp;';
                }

                if (isset($_GET['numChildren']) && $_GET['numChildren'] > 0) {
                    echo $_GET['numChildren'] . ' Children(s)';
                }
                ?></p>
        </div>

        <div class="row">
            <div class="col text-center" style="margin-top: -27px; ">

                <div style="border-bottom:#aba8a880 solid 1.5px;  width: 40vh; height: 20px; margin: auto;"></div>
            </div>
        </div>
        <div class="row total">
            Total Price : &nbsp;<p id="price"></p> &nbsp; THB
        </div>
        <div class="row total">
            <button class="btn btn-secondary" id="confirm_book">Confirm This Reservation</button>
            <button class="btn btn-secondary" hidden id="loading"><i class="fa fa-spinner fa-spin"></i> Loading</button>
        </div>
    </div>
    <div class="card carddetailbook" style="width: 18rem;">
        <p class="infor">Guest Information</p>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control from1" value="<?= $_SESSION['firstname'] ?>"
                    placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control from2" value="<?= $_SESSION['lastname'] ?>"
                    placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="row">
            <div class="col text-center borderdetail">
                <div style="border-bottom:#aba8a880 solid 1.5px;  width: 40vh; margin: auto;"></div>

            </div>
        </div>
        <div class="row pay">
            <p class="payment">Payment Information</p>
        </div>
        <div class="row payat">
            <p>* Pay at the accommodation</p>
        </div>
    </div>
    <div class="card policies">
        <p class="poli">Policies :</p>
        <div class="row in">
            <div class="col ininn">
                <p class="inin">Check-in</p>
                <div class="row ">
                    <p class="after">After 2:00 PM</p>
                </div>
            </div>
            <div class="col">
                <p class="out">Check-out</p>
                <div class="row">
                    <p class="before">Before 12:00 PM</p>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="cancel">Cancel Policy </p>
        </div>
        <div class="row rowcan">
            <li> Cancellation fee of full night charge with taxes will apply if cancelled 7 days prior to arrival.</li>
        </div>
        <div class="row rowfor">
            <li>For No-show and shorten stay, the reservation will be subject to full payment inclusive of taxes <br>for
                room reserved.</li>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
    if ($('#night').val()) {
        var price = (Number((<?= $objResult['price']; ?>))) * $('#night').val() * 17 / 100 + (Number((
            <?= $objResult['price']; ?>))) * $('#night').val()
        // var result = (price * 7) / 100 + (Number((<?= $objResult['price']; ?>))) * $('#night').val()
        // console.log(result)
        $('#price').val(price)
        $('#price').html(' ' + price)
        // alert($('#price').val())
    }
    $("#confirm_book").click(() => {
        $('#confirm_book').attr('disabled', true);
        $('#confirm_book').attr('hidden', true);
        $('#loading').attr('hidden', false);
        axios.post('controller?f=booking', {
            date_start: '<?= $_GET['datestart'] ?>',
            date_end: '<?= $_GET['dateend'] ?>',
            room: <?= $_GET['id_room'] ?>
        }).then(({
            data
        }) => {
            if (data.status == 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'แจ้งเตือน',
                    html: "บันทึกข้อมูลเรียบร้อย"
                }).then(() => {
                    window.location.href = 'index'
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: data.data,
                })
            }
            $('#confirm_book').attr('disabled', false);
            $('#confirm_book').attr('hidden', false);
            $('#loading').attr('hidden', true);
        }).catch((error) => {
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด',
                text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
            }).then(() => {
                $('#confirm_book').attr('disabled', false);
                $('#confirm_book').attr('hidden', false);
                $('#loading').attr('hidden', true);
            })

        })

    })
    </script>