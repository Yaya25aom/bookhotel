<?php 

include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/style.css">
    <title>รีสอร์ท โรงแรม</title>
</head>

<body id="page-top">
    <?php
    include "head.php";
    ?>

    <div class="container-fluid p-0 m-0">
        <div id="carouselExampleIndicators" class="carousel slide row" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active h-100 w-100">
                    <img style="width: 100%; height:100%;"
                        src="https://i.pinimg.com/originals/4a/7b/fd/4a7bfd279020ad5ce8c33db7b4ed7d96.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item h-100 w-100">
                    <img style="width: 100%; height:100%;"
                        src="https://i.pinimg.com/originals/4a/7b/fd/4a7bfd279020ad5ce8c33db7b4ed7d96.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item h-100 w-100">
                    <img style="width: 100%; height:100%;"
                        src="https://i.pinimg.com/originals/90/9e/bc/909ebc63d8e9eafc7ce0e748c2d30934.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item h-100 w-100">
                    <img style="width: 100%; height:100%;"
                        src="https://i.pinimg.com/originals/90/9e/bc/909ebc63d8e9eafc7ce0e748c2d30934.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row p-3 ">
            <div class="col text-center">
                <p class="headh2">WELCOME TO<br>"CALISA VILLAGE RESORT"</p>
                <p class="ou">Our accommodations are excellent for a trip with friends, family or as a couple <br>Most
                    importantly, it is very suitable for organizing activities.</p>
                <p class="text1-1">calisa hotel on the beach by the sea set on an area of 30 acres,located in Prachuap
                    khiri khan.Drive about 10 minutes to the outstanding attractions </p>
                <p class="text1">Our hotel comes with various facilities for instance Relaxing room,meeting
                    room,reception,The restaurant both inside and outside on the beach,
                <p class="text1">spa massage,swimming pool,fitness room and In addition, our hotel also has a transfer
                    service from the airport to the accommodation or if you want</p>
                <p class="text1">to go to places in the province,we also have a transfer service</p>
            </div>

        </div>
        <div class="container ">
            <div class="row">
                <div class="col text-center bl">
                    <span
                        style="border-bottom:#4682B4 solid 1.5px;">oopooooooooopppppppoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo</span>
                </div>
            </div>
        </div>

        <div class="row  ">
            <div class="col text-center ">
                <h2 class="heead2"> OUR ROOM</h2>
            </div>
        </div>
        <div class="container-fluid room ">
            <div class="row  head3">

                <?php include "server.php"; 
        $strSQL = "SELECT * FROM type_room WHERE type_room.status = 'on'";
        $objQuery = mysqli_query($conn, $strSQL);
        while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) { ?>
                <!-- 
                    <div class="col-3">
                    <a href="GrandSuperior Room ">
                        <div class="row">
                            <div class="picpic">
                                <img style="width:100%; height:100%;" src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/245792329.webp?k=ea1ec417592da621a74d31d6405010af57069dfbafa72b3a2139547081de249e&o=" class="" alt="..."></img>
                            </div>
                        </div>
                    </a>
                    <div class="row text-center p-2">
                        <a href="GrandSuperior Room" class="col text-center our">
                            <div class="col ">
                                <p class="name">Grand Superior Room</p>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col text-center border-right">
                            <p class="size">22</p>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">SIZE</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">M2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center border-right">
                            <p class="size">2</p>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">MAX</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">ADULTS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <p class="size">1</p>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">MAX</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">CHILDREN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row price">
                        <a href="GrandSuperior Room" class="col text-center txt_link ">
                            <div class="col ">
                                <span style="border-bottom: black solid  2px;">BOOK NOW FROM ฿3200</span>

                            </div>
                        </a>
                    </div>

                </div> -->



                <div class="col-3">
                    <a href="room?name=<?= $objResult['name']; ?>">
                        <div class="row">
                            <div class="picpic">
                                <img style="width:100%; height:100%; " src="<?= $objResult['buttom_pic']; ?>" class=""
                                    alt="..."></img>
                            </div>
                        </div>
                    </a>
                    <div class="row text-center p-2">
                        <a href="room?name=<?= $objResult['name']; ?>" class="col text-center our">
                            <div class="col text-center our">
                                <p class="name"><?= $objResult['name']; ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="row m-0 ">
                        <div class="col text-center border-right m-0">
                            <p class="size"><?= $objResult['size_start']; ?></p>
                            <div class="row p-0">
                                <div class="col text-center">
                                    <p class="mall">SIZE</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">M2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col border-right text-center">
                            <p class="size"><?= $objResult['people']; ?></p>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">MAX</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">ADULTS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col  text-center">
                            <p class="size">1</p>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">MAX</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="mall">CHILDREN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row price ">

                        <a href="room?name=<?= $objResult['name']; ?>" class="col text-center txt_link ">
                            <div class="col ">
                                <span style="border-bottom: black solid  2px;">BOOK NOW FROM
                                    ฿<?= $objResult['price_start']; ?></span>

                            </div>
                        </a>
                    </div>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row backgr p-4">
            <div class="col text-center">
                <div class="row p-2">
                    <div class="col p-2">
                        <h2 class="headhead2">Nearby places</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col p-0">
                        <p class="textca">calisa hotel Prachuap khiri khan<br>drive about 10 minutes to the outstanding
                            attractions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-carousel mt-5">
        <div class="travel1">
            <img style="width: 100%; height:100%;"
                src="https://huahinpocketguide.com/wp-content/uploads/2019/08/MonsoonValley_06.jpg">
        </div>
        <div class="travel">
            <img style="width: 100%; height:100%;"
                src="http://hs.pbru.ac.th/royalcoast/wp-content/uploads/2019/12/%E0%B8%A7%E0%B8%99%E0%B8%AD%E0%B8%B8%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B2%E0%B8%93%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5-24.jpg">
        </div>
        <div>
            <img style="width: 119%; height:100% " src="http://travel.mthai.com/app/uploads/2012/12/venezia3.jpg">
        </div>
        <div>
            <img style="width: 100%; height:100% "
                src="https://tamtidcheevitpeebah.com/wp-content/uploads/2020/07/0-1.jpg">
        </div>
        <div>
            <img style="width: 100%; height:100% " src="https://pbs.twimg.com/media/EWvfzDsXYAQrHdD.jpg">
        </div>
    </div>
    <div class="container mt-2">
        <div class="row ">
            <div class="col text-center">
                <h2 class="head2-1"> HOTEL FACILITIES</h2>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <p class="text">The Cavalli Casa Resort has prepared various services to support every customer. If
                    there is any other service requested, please inform us during your booking or the time you check in.
                </p>
            </div>
        </div>
    </div>
    </div>
    <div class="row p-2">
        <div class="col text-center ">
            <img style="max-width:100%" src="https://image.makewebeasy.net/makeweb/0/gNse0VuI4/2500/2019_07_21.png">
        </div>
    </div>
    <br>
    <div class="container-fluid p-0">
        <div class="row p-5 back">
            <div class="col text-left">
                <h2 class="headd2">MEETING ROOM</h2>
                <p style="margin-top:-48px;">Our hotel provides meeting rooms, seminars and parties with more than 10
                    meeting rooms accommodating
                    up to 1,000 participants. All meeting rooms are beautifully decorated, fully equipped, modern, airy,
                    comfortable with views of the lawn and garden that gives a feeling of relaxation while meeting.

                    Every seminar or party we can arrange the event as required with smiling service and delicious food.
                    Our team is ready to take care of every step of the event and would like to be a part that makes
                    every guest impressed.</p>
            </div>
            <div class="col text-right tex">
                <img style="max-width:100%"
                    src="https://i.pinimg.com/564x/6c/86/21/6c86218989fadd82accf7587393be883.jpg">
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col text-center">
            <h2 class="hh2">WEDDING&EVENT</h2>
        </div>
    </div>
    <!-- <div class="container-fluid p-0">
        <div class="col-fluid">
            <div class="row p-3 "> -->
    <!-- <div class="col text-left">
                    <h2 class="headd2">MEETING ROOM</h2>
                </div> -->
    <div class="owl-carousel owlnear ">
        <div>
            <img style="width:100%; height:100%;"
                src="https://i.pinimg.com/564x/36/78/bb/3678bb0fcc6f440ba545f7565b57c761.jpg">
        </div>
        <div class="centerimg">
            <img style="width:52%;" src="https://i.pinimg.com/564x/d0/83/c4/d083c438bfaf9eaec2f479fd0d43d632.jpg">
        </div>
        <div class="wed">
            <img style="width:60%; height:100%; "
                src="https://mlh08gnthbva.i.optimole.com/jjD78gU-B1_BSnxA/w:auto/h:auto/q:auto/https://korostudio.com/wp-content/uploads/2020/10/montien-riverside-hotel-wedding-reception-2021-44.jpg">
        </div>
    </div>
    <br>
    <div class="container wedd">
        <div class="row p-1">
            <div class="col text-center">
                <p class="tt1">Our hotel offers a package of engagements and weddings. For couples looking for a venue,
                    our hotel has banquet rooms which can accommodate</p>
                <p class="tt1">from 40 - 1,000 persons with packages for you covering the entire decor, equipment
                    including food and beverage. Whether it is a buffet or Chinese food</p>
                <p class="tt1">you could choose according to your budget. Every package our hotel offers completed
                    preparation with an experienced team ready to make your special day</p>
                <p class="tt1">in a memory forever.</p>
            </div>
        </div>
    </div>

    </div>
    </div>
    <footer id="footer mt-5">
        <?php include "accom.php";?>
    </footer>
</body>


<!-- Bootstrap core JavaScript-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="owlcarousel/dist/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});
</script>