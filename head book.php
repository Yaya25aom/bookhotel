<head>
    <style>
    body {
        font-family: 'Prompt', sans-serif !important;
    }

    html {
        font-family: 'Prompt', sans-serif !important;
    }
    </style>
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

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/test.css?v=59" rel="stylesheet">

    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">

</head>
<!-- <div class="row ">
    <div class="col-fluid imgbook">
        <img style="width: 100%;" src="https://be-cms-api.synxis.com/assets/chain/24447/hotel/6962/fileStorage/image/hero3.jpg">
    </div>
</div> -->
<div class="logo">
    <img src="https://i.pinimg.com/564x/57/6e/1a/576e1a254f0c8456617c69f034a4abd5.jpg" style="
    width: 148px;
    margin-left: 85px;
    border-radius: 50%;
    margin-top:14px;
">
</div>
<div class="texlogo">
    <p>poooooo</p>
</div>
<div class="textlogo">
    <p>CALISA VILLAGE</p>
</div>
<div class="resort">
    <p style="
    margin-left: 134px;
    letter-spacing: 2px;
    margin-top: -20px;
    /* font-family: inherit; */
    position: relative;
    font-size: 0.74rem;
    font-weight: 600;
    color: #2d6652cc;
">resort</p>
</div>
<div class="Calisa">
    <p>Calisa village resort</p>
</div>
<div class="row thai">
    <p>323/2-3 Moo 2 Kuiburi,Prachuap Khiri Khan,Thailand 77150</p>
</div>
<div class="row homein">
    <a href="index.php">
        <p class="homeindex">Home</p>
    </a>
</div>
<div class="stepbook">
    <div class="lect">
        <div class="selectroom">
            <p class="sel">1</p>
        </div>
        <p class="sel1">Select Date & Room </p>
    </div>
    <div class="step">
        <div class="to">
            <p>- </p>
        </div>
        <div class="num">
            <p class="number2">2</p>
        </div>
        <div class="confirm">
            <p>Confirmation</p>
        </div>
    </div>
</div>
<div id="navbar" style="margin-top: 114px;">
    <nav class="navbar navbar-expand navbar-light navbarhead topbar topbarbook fixed-top static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>




        <!-- Topbar Navbar -->
        <div class="collapse navbar-collapse topbar navbarhead " id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->

                <!-- <li class="nav-item ">
            <a href="javascript:void(0)">Gallery</a>
            <a href="javascript:void(0)">Attraction</a>
            <a href="javascript:void(0)">Facilities</a>
            <a href="accom.php">Accommodacations</a>
            <a class="active" href="save_register">Home</a>
        </li> -->
                <form action="bookroom" method="get">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <p class="checkin">Check-in</p>
                                    </div>
                                    <div class="row">
                                        <input type="hidden" name="name" value="<?php echo  $_GET['name']; ?>">
                                        <input placeholder="dd-mm-yyyy" class="form-control form-control-lg formhead"
                                            min='<?=date("Y-m-d") ?>' style="padding:5px" type="date" name="datestart"
                                            id="datestart">
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="row">
                                        <p class="checkout">Check-out</p>
                                    </div>
                                    <div class="row">
                                        <input placeholder="dd-mm-yyyy" class="form-control form-control-lg formheadout"
                                            min='<?php $tomorrow = new DateTime('tomorrow'); echo $tomorrow->format('Y-m-d'); ?>'
                                            style="padding:5px" type="date" name="dateend" id="dateend">
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="row">
                                        <p class="night">Night</p>
                                    </div>
                                    <div class="row">
                                        <input class="form-control form-control-lg formheadnight text-center"
                                            style="padding:5px" disabled readonly type="text" id="night" name="night"
                                            value="0">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <button type="submit" class="btn btn-outline-light btnbooknow">Check
                                            Availability</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>

    </nav>
</div>
<!-- <div class=" hero-image_image" style="background-image: url(&quot;https://be-cms-api.synxis.com/assets/chain/24447/hotel/6962/fileStorage/image/hero3.jpg&quot;);height: 545px;transform: translateY(0px);"></div>
<div class="herodetail">
    <p class="app_modalTitle hero-image_hotelName">Soori Bali</p>
    <p class="hero-image_address"><span><span class="hero-image_addressLine">Banjar Dukuh, Desa Kelating, Kerambitan, Tabanan, Bali, Indonesia, 82161</span></span></p>
    <p class="hero-image_phone"><a href="tel:62-361-8946388">62-361-8946388</a></p>
    <p class="hero-image_website"><a href="http://www.sooribali.com" target="_blank" rel="noopener noreferrer">www.sooribali.com</a></p>
</div>
<div class="message-text">Dear Guests,
 <br>
 <br>
Please note that due to Covid-19, some hotel facilities or services may not be available to guests for a period of time
<br> 
<p></p>
</div>
<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script> -->
<script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>

<script>
// window.onscroll = function() {
//     myFunction()
// };

// var navbar = document.getElementById("navbar");
// var sticky = navbar.offsetTop;

// function myFunction() {
//     if (window.pageYOffset >= sticky) {
//         navbar.classList.add("stic")
//     } else {
//         navbar.classList.remove("stic");
//     }
// }
if ('<?= empty($_GET['datestart']) ? '' : $_GET['datestart'] ?>' != '' &&
    '<?=  empty($_GET['dateend']) ? '' : $_GET['dateend']  ?>' != '') {
    $('#datestart').val('<?= empty($_GET['datestart']) ? '' : $_GET['datestart'] ?>')
    $('#dateend').val('<?= empty($_GET['dateend']) ? '' : $_GET['dateend'] ?>')
    var dateStart = dayjs($('#datestart').val())
    var dateEnd = dayjs($('#dateend').val())
    $('#night').val(dateEnd.diff(dateStart, 'day'))
}

$("#datestart").change(() => {
    if ($('#datestart').val() != '' && $('#dateend').val() != '') {
        var dateStart = dayjs($('#datestart').val())
        var dateEnd = dayjs($('#dateend').val())
        $('#night').val(dateEnd.diff(dateStart, 'day'))
    }

});
$("#dateend").change(() => {
    if ($('#datestart').val() != '' && $('#dateend').val() != '') {
        var dateStart = dayjs($('#datestart').val())
        var dateEnd = dayjs($('#dateend').val())
        $('#night').val(dateEnd.diff(dateStart, 'day'))
    }
});
</script>