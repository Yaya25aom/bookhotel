<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>bookroom</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/test.css?v=54" rel="stylesheet">


</head>

<script>
function Alert(params) {
    let node = document.createElement("div");
    let textnode = document.createTextNode(params);
    node.appendChild(textnode);
    document.getElementById("DDD").appendChild(node);

}

function OpenImage(params) {
    window.open(params)
}
</script>

<style>
body {
    overflow-x: hidden;
}

.main {
    margin-left: 6%;
    margin-top: 26px;
    width: 87%;
    flex: 0 0 100%;
    height: 600px;
    background-color: #e7e9f13b;
}

.thumb-cards_cardSplit {
    background: #fff;
    border: 1px solid #d7d7d7;
    border-radius: 4px;
    overflow: hidden;
}

.thumb-cards_container {
    padding: 0 0.5rem 1rem;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.app_col-lg-4 {
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
    cursor: pointer;
}

.app_col-lg-8 {
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}

.app_col-md-8 {
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
}

.thumb-cards_cardHeader {
    display: block;
}

.app_heading1 {
    -webkit-font-feature-settings: 'dlig'0, 'liga'0, 'lnum'1, 'kern'1;
    font-feature-settings: 'dlig'0, 'liga'0, 'lnum'1, 'kern'1;
    margin: 0;
    color: #333;
    font-size: 1.2rem;
    font-weight: 400;
    /* font-family: myFirstFont; */
    text-transform: none;
    line-height: 1.3;
    margin-left: 2%
}

.thumb-cards_urgencyTriggerAndRoomInfo {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-top: 0.5rem;
}

.thumb-cards_roomShortDesc {
    margin-top: 1rem;
}

.pointer {
    cursor: pointer
}

.card {
    width: 50rem !important;
    margin-left: 10px !important;
    margin-top: 20px !important;
    height: 19rem !important;
}

.cardimg {
    margin-top: 20px !important;
    margin-left: 20px !important;
}

.cardname {
    margin-left: 280px;
    margin-top: -170px;
    /* font-family: myFirstFont; */
}

.cardtext {
    margin-left: 285px;
    margin-top: 25px;
    color: black;
}

.cardprice {
    margin-left: 620px;
    margin-top: 10px;
    /* font-family: myFirstFont; */
    color: black;
    font-weight: 500;
    font-size: 18px;
}

.colbook {
    margin-left: 770px;
    margin-top: -50px;
}

.bottom {
    color: white;
    margin-right: 9px;
    margin-top: 1px;
}

.thb {
    /* font-family: myFirstFont; */
    color: black;
    font-weight: 500;
    font-size: 18px;
    margin-left: 500px;
    margin-top: -27px;
}

.add {
    width: 87%;
    height: 67%;
    margin-left: -21px;
    margin-top: -16px;
    background-color: black !important;
    border: black !important;
}

.lgadd {
    margin-left: 700px;
    margin-top: -30px;
}

.rate {
    /* font-family: myFirstFont; */
    color: black;
    font-weight: 600;
    margin-left: 285px;
    margin-top: -43px;
}

.detail {
    /* font-family: myFirstFont; */
    color: black;
    font-weight: 600;
    margin-left: 287px;
    margin-top: 20px;
}

.panel-default>.panel-heading {
    color: #333;
    background-color: #ecdfdf;
    border-color: #ddd;
}

.accordion {
    background-color: black;
    color: #444;
    cursor: pointer;
    padding: 17px;
    /* width: 100%; */
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    height: 2px;
    transition: 0.4s;
    width: 796px !important;
    margin-left: 77px !important;
}

.active,
.accordion:hover {
    background-color: black !important;
}

.accordion:after {
    content: "\02C5";
    color: white;
    font-weight: 100 !important;
    float: right;
    margin-left: 5px;
    font-size: 16px;
    margin-top: -43px;
}

.active:after {
    content: "\02C4";
    margin-top: -43px;
    font-size: 16px;
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    width: 796px;
    margin-left: 77px;
    border: 1px solid;
    border-color: #c9bbbb94;
    border-radius: 2px 2px;
    height: 50px !important;
}

.sec {
    margin-top: -10px;
    color: white;
    font-size: 0.978rem !important;
}

.curser:hover {
    cursor: pointer;
}

.bestrate {
    margin-left: 24px;
    margin-top: -25px;
}

.checkcir {
    margin-top: 14px;
    margin-left: -2px;
}

.exroom {
    margin-left: 237px;
    margin-top: -40px;
}

.checkex {
    margin-top: -39px;
    margin-left: 212px;
}

.border-bottom-0 {
    border-bottom: 0 !important;
    width: 164px !important;
    margin-top: 50px !important;
    margin-left: 20px !important;
    height: 35px !important;
}

.borderbk {
    border: 1.2px solid black !important;
}

.btn:focus {
    outline: 0 !important;
    box-shadow: 0 0 0 0.2rem rgb(78 115 223 / 0%) !important;
}

ul.dropdown-menu.menushowclass.show {
    margin-left: -87px !important;
    border-radius: unset;
    height: 350px;
    width: 264px;
    margin-top: -900rem !important;
    inset: unset !important;
    transform: translate3d(0px, 0px, 0px) !important;
    top: 80px !important;
    z-index: 1050;
}

ul.sticky.show {
    position: sticky !important;
    padding: 5px;
    background-color: #ffffff;
}

nav.sticky {
    position: sticky;
    top: 85px;
    width: 28%;
    margin-left: 863px;
    height: 26rem;
    z-index: 1030;
    padding: 5px;
    background-color: #ffffff;
    border: 1px solid #030303;
}

a:hover {
    color: #858796 !important;
    text-decoration: unset !important;
}

a {
    color: #858796 !important;
    text-decoration: none !important;
    background-color: transparent !important;
}
</style>

<body id="page-top">
    <?php
    include "head book.php";
    include "server.php";
    ?>
    <ul class="dropdown-menu menushowclass sticky  " aria-labelledby="dropdownMenu2">
        <div class="row">
        </div>
    </ul>
    <div class=" hero-image_image"
        style="background-image: url(&quot;https://be-cms-api.synxis.com/assets/chain/24447/hotel/6962/fileStorage/image/hero3.jpg&quot;);height: 545px;transform: translateY(0px);">
    </div>
    <div class="herodetail">
        <p class="app_modalTitle hero-image_hotelName">Soori Bali</p>
        <p class="hero-image_address"><span><span class="hero-image_addressLine">Banjar Dukuh, Desa Kelating,
                    Kerambitan, Tabanan, Bali, Indonesia, 82161</span></span></p>
        <p class="hero-image_phone"><a href="tel:62-361-8946388">62-361-8946388</a></p>
        <p class="hero-image_website"><a href="http://www.sooribali.com" target="_blank"
                rel="noopener noreferrer">www.sooribali.com</a></p>
    </div>
    <div class="message-text">Dear Guests,
        <br>
        <br>
        Please note that due to Covid-19, some hotel facilities or services may not be available to guests for a period
        of time
        <br>
        <p></p>
    </div>
    <div class="row">
        <p class="select">Select a Room</p>

    </div>
    <button class="accordion">
        <p class="sec"> Privileges for Online Direct Booking</p>
    </button>
    <div class="panel">
        <i class='far fa-check-circle checkcir'></i>
        <div class="bestrate">
            <p class="bestrste"> Best Rate Guarantee</p>
        </div>

        <div class="extra">
            <p class="exroom">Extra Room Discount</p>
        </div>
        <div class="checkex">
            <i class='far fa-check-circle'></i>
        </div>
    </div>

    <?php
    include "server.php";
    


if(isset($_GET['name']) && isset($_GET['dateend']) && isset($_GET['datestart'])){
    if(isset($_GET['datestart']) && isset($_GET['dateend'])){
        $strSQL = 'SELECT type_room.*,room.price,room.id_room,order_room.id_order FROM room
        inner join type_room on room.type_room = type_room.id_type
        left JOIN order_room on order_room.room_id = room.id_room
        WHERE order_room.id_order is null and type_room.name = "'.$_GET['name'].'"
        or order_room.datestart != "'.$_GET['datestart'].'" and order_room.dateend != "'.$_GET['dateend'].'" and type_room.name = "'.$_GET['name'].'"'; 
    }else{
        $strSQL = 'SELECT type_room.*,room.price,room.id_room,order_room.id_order FROM room
        inner join type_room on room.type_room = type_room.id_type
        left JOIN order_room on order_room.room_id = room.id_room
        WHERE type_room.name = "'.$_GET['name'].'"';
    };

    $strSQL = 'SELECT type_room.*,room.price,room.id_room,order_room.id_order FROM room
    inner join type_room on room.type_room = type_room.id_type
    left JOIN order_room on order_room.room_id = room.id_room
    WHERE order_room.id_order is null and type_room.name = "'.$_GET['name'].'" or order_room.datestart != "'.$_GET['datestart'].'" and order_room.dateend != "'.$_GET['dateend'].'" and  type_room.name = "'.$_GET['name'].'"'; 

    $objQuery = mysqli_query($conn, $strSQL);
    // echo $strSQL;exit();
    $b=0;
}else{
    echo "<h1>โปรดกรอกข้อมูล</h1>";
}

if(isset($objQuery)){
    while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
    ?>


    <div class="main">
        <div class="cardcard">
            <div class="row">
                <div class="col">
                    <div class="cardimg">
                        <div onclick="OpenImage('<?php echo $new_array2[$b]['buttom_pic'] ?>')" class="app_col-lg-4">
                            <img style="height:100%; width:65%" src='<?php echo $objResult["buttom_pic"]; ?>' />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardname">
            <h2 class="app_heading1 pointer" id="DDD" onclick="Alert('<?php echo $objResult['name'] ?>')">
                <b><?php echo $objResult["name"]; ?></b>
            </h2>
        </div>
        <div class="col" style="width: 82%">
            <div class="cardtext">
                <?php echo $objResult["text"]; ?>
            </div>
        </div>
        <div class="col" style="
    width: 174px !important;
    height: 172px;
    margin-top: -103px;
    margin-left: 892px;
    background-color: #e6e6e6;
">
            <div class="row occ">
                <p class="occupancy" style="
    font-size: font-size: 0.327rem;
    font-size: 0.327rem;
    margin-top: 19px;
    color: #000000bd;
    font-weight: 600;
">OCCUPANCY SELECTED:</p>
            </div>
            <div class="row people" style="
    margin-left: 43px;
    letter-spacing: 4px;
    margin-top: -6px
">
                <i style="font-size: 18px;color: #13314bd9;" class="fas"></i>
                <i style="font-size: 18px;color: #13314bd9;" class="fas"></i>
                <i style="font-size: 18px;color: #13314bd9;" class="fas"></i>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?=$b?>" style="
    width: 93px;
    height: 36px;
    background-color: #f9fafc;
    border-radius: unset;
    color: #76a5b4;
    margin-top: 15px;
    margin-left: 28px;
">
                Modify
            </button>
        </div>
        <div class="row">
            <div class="col" style="
    width: -45px;
    margin-left: 925px;
    margin-top: -44px;
">
                <p style="
    font-size: 0.682rem;
">(MAX. 3 OCCUPANTS)</p>
            </div>
        </div>

        <!-- <img
            src="https://scontent.fbkk12-1.fna.fbcdn.net/v/t39.30808-6/220066386_1362917350772384_8372245431129691846_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=b9115d&_nc_eui2=AeGSP_9t_u42UmrHwIuJaR3r47f6hB3QhOrjt_qEHdCE6qWU0emBwfiMDWKOZu5j7BcnOifU04c1m01nNlC4dH_v&_nc_ohc=nTQUcgosDPEAX-jGx6_&_nc_zt=23&_nc_ht=scontent.fbkk12-1.fna&oh=00_AT81PUA4MC5Oxjj-AB_nquFslySW96epqH9A7Z_-x51fgw&oe=6212D8CD"> -->
        <!-- <div class="detail curser" data-toggle="modal" data-target="#Roomdetails">
            <span style="border-bottom: black solid  1px; ">Room details</span>
        </div> -->
        <!-- <div class="row">
            <div class="col text-right bottom">
                <div style="border-bottom:#4682B4 solid 1.5px; width: 75vh; height: 20px; margin-left: auto;"></div>
            </div>
        </div> -->

        <div class="borderbk curser border-bottom-0">
            <p class="text-center" style="
    font-size: 0.792rem;
    font-family: Lato,Arial,sans-serif;
    margin-top: 8px;
    font-weight: 100;
    color: #000000d4;
"> BEST FLEXIBLE RATE</p>
        </div>
        <div class="row">
            <div class="col text-center bottom">
                <div style="border-bottom: black solid 1.2px;width: 81%;margin-left: 184px;margin-top: -2px;"></div>
            </div>
        </div>
        <div class="row">
            <p style="
    font-size: 0.807rem;
    margin-top: 12px;
    margin-left: 31px;
    font-family: serif;
    letter-spacing: 0.3px;
    color: #000000bf;
">Calisa Kuiburi Village Best Flexible Rate.</p>
        </div>
        <div class="row" style="margin-top: -9px;">
            <div class="row">
                <div class="col-1 text-right" style="margin-top: -10px;">
                    <i style="font-size: 20px;margin-left: 765px;color: #6b99b0;/* margin-top: -9px; */"
                        class="far"></i>
                </div>
            </div>
            <div class="row">
                <p style="
    /* text-align: right; */
    margin-left: 807px;
    margin-top: -20px;
    font-size: 0.1rem;
    letter-spacing: 0.2px;
    color: #000000bf;
    font-weight: 500;
    /* font-family: unset; */
"> PAYMENT AT HOTEL</p>
            </div>
        </div>
        <div class="row">
            <!-- <i style="color: #6b99b0;font-size: 20px;margin-left: 930px;margin-top: -35px;" class="far"></i> -->
            <i style='font-size:19px; color:#6b99b0;margin-left: 929px;margin-top:-34px' class='far'>&#xf058;</i>
            <div class="col">
                <p style="
    font-size: 0.1rem;
    margin-top: -32px;
    color: #555555;
">SUBJECT TO 10% SERVICE CHARGE 7% GST </p>
            </div>
            <div class="row">
                <div class="col  bottom">
                    <div style="border-bottom: #0000000f solid 1.2px;width: 173vh;margin-left: 29px;margin-top: 7px;">
                    </div>
                </div>
                <div class="row">
                    <p style="
    margin-left: 55px;
    margin-top: 9px;
    font-size: 0.952rem;
    color: #000000b8;
    font-family: unset;
    letter-spacing: 0.2px;
">Accommodation Only</p>
                </div>
                <div class="row" style="
    margin-top: 36px;
    margin-left: -150px;
    background-color: chartreuse;
    width: 110px;
    height: 18px;
    background-color: #6d5f5d;

">
                    <p style="
    font-size: 0.071rem;
    margin-left: 3px;
    margin-top: 2px;
    color: #e6eeef;
">ONLY 2 ROOMS LEFT</p>
                    <div class="row">
                        <div class="col text-right" style="
    height: 37px;
    margin-left: 680px;
    margin-top: -52px;
    border-ra: slategray;
    border: solid 1px black;
    background-color: #f8f9fc;
    width: 139px;
    border-radius: 28px;
">
                            <p style="
    margin-right: 69px;
    margin-top: 6px;
    color: #000000d4;
">฿2480</p>
                        </div>
                    </div>
                    <div class="col text-right" style="
    width: 65px;
    height: 21px;
    margin-left: 672px;
    margin-top: -62px;
    background-color: #f9fafc;
">
                        <p style="
                        font-size: 0.751rem;
    margin-left: 4px;
    margin-top: 0px;
    color: #000000bf;
">UNLOCK</p>
                    </div>
                    <div class="col text-right" style="
    width: 20px;
    margin-top: -66px;
">
                        <i style="font-size: 11px;margin-left: 662px;/* margin-top: -71px; */color: #000000b5;"
                            class="fas"></i>
                    </div>

                    <div class="col" style="
    margin-left: 732px;
    margin-top: -45px;
    width: -4px;
    width: 69px;
    height: 21px;
    border: solid 1px;
    border-radius: 3px;
">
                        <p style="
    width: 83px;
    font-family: serif;
    font-size: 0.1rem;
    letter-spacing: -1px;
    margin-left: -12px;
    margin-top: 1px;
"><a href="">Book Direct Saving</a></p>
                    </div>

                    <div class="col text-right" style="
    margin-left: 819px;
    height: 34px;
    width: 69px;
    margin-top: -52px;
    background-color: #b7b9cc5c;
">
                        <div class="col" style="
    height: 6px;
">
                            <p style="
    font-size: 0.6rem;
    margin-top: 1px;
    font-family: Lato,Aria,sans-serif;
    color: #858796;
">-10.2%</p>
                        </div>
                        <p style="
    margin-left: -4px;
    font-size: 0.95rem;
    text-decoration: line-through;
    margin-top: 5px;
    color: #000000bd;
    font-family: 'Prompt', sans-serif !important;
    letter-spacing: 0.5px;
">฿3247</p>
                    </div>
                    <div class="col text-right" style="
    margin-left: 882px;
    margin-top: -52px;
">
                        <p style="
    letter-spacing: 0.6px;
    font-size: 1.499rem;
    font-family: Lato,Aria,sans-serif;
    color: #000000bf;
    width: 80px;
">฿ <?php echo $objResult["price"]; ?></p>
                    </div>
                    <div class="col text-right" style="
    margin-left: 980px;
    margin-top: -52px;
    /* color: coral; */
    /* border-radius: 5px; */
">
                        <button class="btn btn-primary" type="button" id="dropdownMenu2" data-toggle="modal"
                            data-target="#exampleModal_<?=$b?>" style="
    border-radius: unset;
    background-color: #6d5f5d;
    border: #6d5f5d;
">ADD</button>
                    </div>
                    <div class="row">
                        <div class="col  bottom">
                            <div
                                style="border-bottom: #0000000f solid 1.1px;width: 173vh;margin-left: -2px;margin-top: 0px;">
                            </div>
                        </div>
                        <div class="row">
                            <p style="
    margin-left: 24px;
    font-size: 0.952rem;
    color: #000000b8;
    letter-spacing: 0.2px;
    margin-top: 8px;
">Bed &amp; Breakfast</p>
                        </div>
                        <div class="row" style="
    background-color: #6d5f5d;
    width: 110px;
    height: 18px;
    margin-top: 31px;
    margin-left: -111px;
">
                            <p style="
    font-size: 0.071rem;
    margin-left: 3px;
    margin-top: 2px;
    color: #e6eeef;
">ONLY 2 ROOMS LEFT</p>
                        </div>
                        <div class="row">
                            <div class="col text-right" style="
    height: 37px;
    margin-left: 659px;
    margin-top: 14px;
    border-ra: slategray;
    border: solid 1px black;
    background-color: #f8f9fc;
    width: 139px;
    border-radius: 28px;
">
                                <p style="
    margin-right: 69px;
    margin-top: 6px;
    color: #000000d4;
    letter-spacing: -0.6px;
">฿3028</p>
                            </div>
                            <div class="col">
                                <p style="
    font-size: 0.751rem;
    color: #000000cc;
    margin-left: -146px;
    background-color: #f9fafc;
    width: 64px;
    margin-top: 5px;
    text-align: right;
">UNLOCK</p>
                            </div>
                        </div>
                        <div class="col text-right" style="
    /* width: 20px; */
    margin-right: 200px;
    margin-top: -51px;
">
                            <i style="font-size: 11px;margin-left: 324px;margin-top: -71px;color: #000000b5;"
                                class="fas"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="
    width: 69px;
    height: 21px;
    border: solid 1px;
    margin-left: 820px;
    border-radius: 4px;
    margin-top: -28px;
">
                            <p style="
    font-size: 10px;
    margin-top: 1px;
    margin-left: -12px;
    letter-spacing: -1px;
    width: 99px;
    font-family: serif;
"><a href="">Book Direct Saving</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="
    margin-left: 897px;
    width: 121px;
    margin-top: -37px;
">
                            <p style="
    font-size: 1.499rem;
    font-family: Lato,Aria,sans-serif;
    letter-spacing: 0.6px;
    color: #000000bd;
">฿ 3658</p>
                        </div>
                    </div>
                    <div class="col text-right" style="
    margin-left: 980px;
    margin-top: -52px;
    /* color: coral; */
    /* border-radius: 5px; */
">

                        <button class="btn btn-primary" type="button" id="dropdownMenu2" data-toggle="modal"
                            data-target="#exampleModal_<?=$b?>" style="
    border-radius: unset;
    background-color: #6d5f5d;
    border: #6d5f5d;
">ADD</button>
                    </div>

                    <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </button> -->
                    <!-- <nav class="navbar navbar-light bg-light ">
                                <div class="container-fluid">
                                    <span class="navbar-text">
                                        Navbar text with an inline element
                                    </span>
                                </div>
                            </nav>
                            <ul class="dropdown-menu menushowclass  sticky " aria-labelledby="dropdownMenu2">
                                <div class="row">
                                </div>
                            </ul>
                        </div>
                    </div> -->
                    <!-- <div class="col">
                            <i style="font-size: 11px;margin-left: 662px;/* margin-top: -71px; */color: #000000b5;">
                        </div> -->
                    <!-- <img
                            src="https://scontent.fbkk12-4.fna.fbcdn.net/v/t1.15752-9/252882441_279550574080857_7912356745902975556_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeE_1Xm6WEwc6tpZs_g0Dcvs4dMeBkZgdxHh0x4GRmB3EVLbWr6ji7h9O8XbPSg4dhOaD3xbKQmYlaZZFrOgVIW4&_nc_ohc=MBCXE2Rbs5kAX_r5khB&_nc_ht=scontent.fbkk12-4.fna&oh=03_AVKkz-Sr6xInRBIIpldf1zPuoaQJei_RfIPx0afBczGLsw&oe=62356C3B"> -->

                    <!-- <span class="border-bottom-0"></span> -->


                    <div class="col-lg-2 lgadd">
                        <!-- 
                        <button type="button" class="btn btn-primary btn-sm add noshadow" data-toggle="modal"
                            data-target="#exampleModal_<?=$b?>">
                            + Add </button> -->
                        <div class="modal fade" id="exampleModal_<?=$b?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form method="GET" id="formbook">
                                <input type="hidden" name="datestart" id="datestart"
                                    value="<?= empty($_GET['datestart']) ? '' : $_GET['datestart'] ?>">
                                <input type="hidden" name="dateend" id="dateend"
                                    value="<?= empty($_GET['dateend']) ? '' : $_GET['dateend']  ?>">
                                <input type="hidden" name="id_room" value="<?= $objResult["id_room"];?>">
                                <input type="hidden" name="name" value="<?= $_GET['name']; ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content contentbook">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="modal-body">
                                            <h2 class="app_heading1 pointer headnamemodal" id="DDD"> <b>
                                                    <?php echo $objResult["name"]; ?></b></h2>
                                            <p class="pricenight">Price / Night</p>
                                            <div class="price-night">
                                                THB &nbsp; <?php echo $objResult["price"]; ?>
                                            </div>
                                            <p class="max">MAX.2 Adults 1 Children</p>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="troladult">Adults</p>
                                                </div>
                                                <div class="col">
                                                    <p class="trolchildren">Children</p>
                                                </div>
                                            </div>
                                            <div class="row rowadult">
                                                <div class="col">
                                                    <div class="col-2 conde">
                                                        <button class="btn btn-outline-secondary btn-plus"
                                                            id="deAdults">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col colnum">
                                                        <input class="form control connum" type="number" min=0 value="0"
                                                            name="numAdults" id="numAdults">
                                                    </div>
                                                    <div class="col-2 conpush">
                                                        <button class="btn btn-outline-secondary btn-plus"
                                                            id="plusAdults">
                                                            <i class="fa fa-plus " aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="col">
                                                    <div class="col-2 colde2">
                                                        <button class="btn btn-outline-secondary btn-plus"
                                                            id="deAdults2">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col colnum">
                                                        <input class="form control connum2" type="number" min=0
                                                            value="0" name="numChildren" id="numChildren">
                                                    </div>
                                                    <div class="col conpush2">
                                                        <button class="btn btn-outline-secondary btn-plus"
                                                            id="plusAdults2">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-outline-dark btnaddadd">Booking</button>
                                            <button type="button" class="btn btn-outline-dark btnclose"
                                                data-dismiss="modal">close</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div> <?php
        $b++;
            }
        }
                ?>


    <div class="modal fade" id="Roomdetails" tabindex="-1" aria-labelledby="Roomdetails " aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
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
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
    </script>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    $("#deAdults").click((e) => {
        e.preventDefault()
        // alert('');
        var value = +$("#numAdults").val() - 1;
        if (value < 0) {
            value = 0;
        }
        $("#numAdults").val(value);
    });

    $("#formbook").submit((e) => {
        if ($('#datestart').val() == '' && $('#dateend').val() == '') {
            Swal.fire({
                icon: 'info',
                title: 'แจ้งเตือน',
                text: 'กรุณาเลือกวันที่เข้าพัก',
            })

            e.preventDefault()
        } else {
            $('#formbook').attr('action', 'detailbook');
        }

    })

    $("#plusAdults").click((e) => {
        e.preventDefault()
        var value = +$("#numAdults").val() + 1;
        if (value > 2) {
            value = 2;
        }
        $("#numAdults").val(value);
    });
    $("#deAdults2").click((e) => {
        e.preventDefault()
        var value = +$("#numChildren").val() - 1;
        if (value < 0) {
            value = 0;
        }
        $("#numChildren").val(value);
    });
    $("#plusAdults2").click((e) => {
        e.preventDefault()
        var value = +$("#numChildren").val() + 1;
        if (value > 2) {
            value = 2;
        }
        $("#numChildren").val(value);
    });
    </script>
    <script>
    var myDropdown = document.getElementById('myDropdown')
    myDropdown.addEventListener('show.bs.dropdown', function() {
        // do something...
    })
    </script>