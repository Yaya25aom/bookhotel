<?php

include('server.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>คาลิซ่า วิลเลจ รีสอร์ท โรงแรม รีสอร์ท ทีพักติดทะเล กุยบุรี,ประจวบคีรีขันธ์ ที่เป็นส่วนตัว สุดพิเศษ สะดวกสบาย ครบครันทุกอย่าง ห้องประชุม สัมนา จัดงานแต่ง ใกล้สถานที่ท่องเที่ยวที่โดดเด่น|calisa village resort excusive hotel resort accomiecatiom in kuiburi in Prachuapkhirikhan, Private Residences, comfortable Conference,Seminar,Meeting and Wedding</title>

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<style>
    html {
        font-family: 'Prompt', sans-serif !important;
    }

    .loader {
        border: 16px solid #f3f3f3;
        /* Light grey */
        border-top: 16px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<body id="page-top">
    <?php
    include "head.php";
    $type_edit = '';
    if (!isset($_GET['type'])) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'แจ้งเตือน',
                html: "กรุณาเลือกประเภทการจัดการ"
            })
        </script>
    <?php }
    if ($_GET['type'] == 'type') {
        $type_edit = 'ประเภทห้อง';
        $strSQL = "SELECT id_type,name,type_bed,text,status FROM type_room ";
        $objQuery = mysqli_query($conn, $strSQL);
    } else if ($_GET['type'] == 'room') {
        $type_edit = 'ห้อง';
        $strSQL = "SELECT *,type_room.name as type_room_name FROM room inner join type_room on room.type_room = type_room.id_type ";
        $objQuery = mysqli_query($conn, $strSQL);
    } else if ($_GET['type'] == 'order') {
        $type_edit = 'Order ลูกค้า';
        $strSQL = "SELECT order_room.*,concat_ws(' ',member.firstname,member.lastname) as name_cus, DATEDIFF(dateend, datestart) as datediff 
        FROM order_room 
        inner join member on member.UserID = order_room.member_id";
        $objQuery = mysqli_query($conn, $strSQL);
    }
    ?>

    <div class="container-fluid ">
        <div class="row">
            <div  class="col-10 text-left"><h1 class="h3 m-2 p-2 text-gray-800">การจัดการข้อมูล </h1></div>
            <?php if ($_GET['type'] == 'type') { ?>
            <div  class="col-2 text-right m-auto"><button class="btn btn-success" onclick="add_info_type()">เพิ่มข้อมูล </button></div>
            <?php } ?> 
            <?php if($_GET['type'] == 'room') { ?>
            <div  class="col-2 text-right m-auto"><button class="btn btn-success" onclick="add_info_room()">เพิ่มข้อมูล </button></div>
            <?php } ?> 
            <?php if($_GET['type'] == 'order') { ?>
            <div  class="col-2 text-right m-auto"><button class="btn btn-success" onclick="add_info_order()">เพิ่มข้อมูล </button></div>
            <?php } ?> 
        </div>
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?= $type_edit; ?></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <?php if ($_GET['type'] == 'type') { ?>
                                    <th>ชื่อประเภทห้อง</th>
                                    <th>ประเภทที่นอน</th>
                                    <th>สถานะ</th>
                                <?php } ?> 
                                <?php if($_GET['type'] == 'room') { ?>
                                    <th>หมายเลขห้อง</th>
                                    <th>ประเภทห้อง</th>
                                    <th>ราคา</th>
                                    <th>ขนาดห้อง</th>
                                    <th>สถานะ</th>
                                <?php } ?> 
                                <?php if($_GET['type'] == 'order') { ?>
                                    <th>หมายเลขห้อง</th>
                                    <th>ชื่อลูกค้า</th>
                                    <th>วันเริ่มเข้าพัก</th>
                                    <th>วันพักวันสุดท้าย</th>
                                    <th>ระยะเวลา</th>
                                    <th>ราคา</th>
                                    <th>สถานะการจ่ายตัง</th>
                                    <th>สถานะ Order</th>
                                <?php } ?> 

                                <th>การจัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) { ?>
                                <tr>
                                    <?php if ($_GET['type'] == 'type') { ?>
                                        <td><?= $objResult['name'] ?></td>
                                        <td><?= $objResult['type_bed'] ?></td>
                                        <td><?= $objResult['status'] ?></td>
                                        <td>
                                            <button type="button" onclick="get_info_type(<?= $objResult['id_type'] ?>)" class="btn btn-info">ดูข้อมูล</button>
                                            <button type="button" onclick="edit_info_type(<?= $objResult['id_type'] ?>)" class="btn btn-warning">แก้ไข</button>
                                            <button type="button" onclick="delete_type(<?= $objResult['id_type'] ?>)" class="btn btn-danger">ลบ</button>
                                        </td>
                                    <?php } ?>
                                    <?php if ($_GET['type'] == 'room') { ?>
                                        <td><?= $objResult['id_room'] ?></td>
                                        <td><?= $objResult['type_room_name'] ?></td>
                                        <td><?= $objResult['price'] ?></td>
                                        <td><?= $objResult['size'] ?></td>
                                        <td><?= $objResult['status'] ?></td>
                                        <td>
                                            <button type="button" onclick="get_info_room(<?= $objResult['id_room'] ?>)" class="btn btn-info">ดูข้อมูล</button>
                                            <button type="button" onclick="edit_info_room(<?= $objResult['id_room'] ?>)" class="btn btn-warning">แก้ไข</button>
                                            <button type="button" onclick="delete_room(<?= $objResult['id_room'] ?>)" class="btn btn-danger">ลบ</button>
                                        </td>
                                    <?php } ?>
                                    <?php if ($_GET['type'] == 'order') { 
                                        if($objResult['payment_status']==0){
                                            $objResult['payment_status'] = '<span class="badge badge-pill badge-warning">รอชำระเงิน</span>';
                                        }else if($objResult['payment_status']==1){
                                            $objResult['payment_status'] = '<span class="badge badge-pill badge-success">ชำระเงินเรียบร้อย</span>';
                                        }else{
                                            $objResult['payment_status'] = '<span class="badge badge-pill badge-danger">ยกเลิก/ผิดพลาด</span>';
                                        }

                                        if($objResult['status']==1){
                                            $objResult['status'] = '<span class="badge badge-pill badge-success">ใช้งาน</span>';
                                        }else{
                                            $objResult['status'] = '<span class="badge badge-pill badge-danger">ยกเลิกการใช้งาน</span>';
                                        }

                                        ?>
                                        <td><?= $objResult['room_id'] ?></td>
                                        <td><?= $objResult['name_cus'] ?></td>
                                        <td><?= date_format(date_create($objResult['datestart']),'d/m/Y') ?></td>
                                        <td><?= date_format(date_create($objResult['dateend']),'d/m/Y') ?></td>
                                        <td><?= $objResult['datediff'].' วัน' ?></td>
                                        <td><?= $objResult['price'].' บาท' ?></td>
                                        <td><?= $objResult['payment_status'] ?></td>
                                        <td><?= $objResult['status'] ?></td>
                                        <td>
                                            <button type="button" onclick="edit_info_order(<?= $objResult['id_order'] ?>)" class="btn btn-warning">แก้ไข</button>
                                            <button type="button" onclick="delete_order(<?= $objResult['id_order'] ?>)" class="btn btn-danger">ลบ</button>
                                        </td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <?php   include 'view/modal_manage_type.php' ;
            include 'view/modal_manage_room.php' ;
            include 'view/modal_manage_order.php'; ?> 


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        let get_info_type = (id) => {
            $('#info_type').modal('show')
            $('#info_type_loading').attr('hidden', false);
            $('#data_info_type').attr('hidden', true);
            $('#head_infotype').attr('hidden', true);
            axios.get('controller?f=getdata&type=type&id_type=' + id).then(({
                data: {
                    data
                }
            }) => {
                $('#info_head_type').html(data.name)
                $('#type_bed').html(data.type_bed)
                $('#size_start').html(data.size_start)
                $('#wifi').html(data.wifi)
                $('#people').html(data.people)
                $('#price_start').html(data.price_start)
                $('#status').html(data.status)
                $('#head_pic').attr('src', data.head_pic)
                $('#buttom_pic').attr('src', data.buttom_pic)
                $('#text').val(data.text)
                $('#info_type_loading').attr('hidden', true);
                $('#data_info_type').attr('hidden', false);
                $('#head_infotype').attr('hidden', false);
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
        }

        let get_info_room = (id) => {
            $('#info_room').modal('show')
            $('#info_room_loading').attr('hidden', false);
            $('#data_info_room').attr('hidden', true);
            $('#head_inforoom').attr('hidden', true);
            axios.get('controller?f=getdata&type=room&id_room=' + id).then(({
                data: {
                    data
                }
            }) => {
                $('#info_head_room').html(data.id_room)
                $('#type_room').html(data.type_room_name)
                $('#price_room').html(data.price)
                $('#size_room').html(data.size)
                $('#status_room').html(data.status)          
                $('#info_room_loading').attr('hidden', true);
                $('#data_info_room').attr('hidden', false);
                $('#head_inforoom').attr('hidden', false);
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
                })

            })
        }

        let edit_info_type = (id) => {
            $('#edit_type').modal('show')
            $('#edit_type_loading').attr('hidden', false);
            $('#data_edit_type').attr('hidden', true);
            $('#head_edittype').attr('hidden', true);
            $('#save_edit_type').attr('disabled', true);
            axios.get('controller?f=getdata&type=type&id_type=' + id).then(({ data: {data} }) => {
                $('#id_type_edit').val(data.id_type)
                $('#edit_head_type').html(data.name)
                $('#edit_text_head_type').attr('value',data.name)
                $('#edit_type_bed').attr('value',data.type_bed)
                $('#edit_size_start').attr('value',data.size_start)
                $('#edit_people').attr('value',data.people)
                $('#edit_price_start').attr('value',data.price_start)
                $('#edit_status').attr('value',data.status)
                $('#edit_head_pic').attr('value',data.head_pic)
                $('#edit_buttom_pic').attr('value',data.buttom_pic)
                $('#edit_head_pic').text(data.head_pic)
                $('#edit_buttom_pic').text(data.buttom_pic)
                $('#hide_edit_head_pic').attr('value',data.head_pic)
                $('#hide_edit_buttom_pic').attr('value',data.buttom_pic)
                $('#show_edit_head_pic').attr('src', data.head_pic)
                $('#show_edit_buttom_pic').attr('src', data.buttom_pic)
                $('#edit_text').val(data.text)
                $('#edit_type_loading').attr('hidden', true);
                $('#data_edit_type').attr('hidden', false);
                $('#head_edittype').attr('hidden', false);
                $('#save_edit_type').attr('disabled', false);

                $('select[id="edit_status"] option[value="' + data.status + '"]').attr('selected', 'selected');
                $('select[id="edit_wifi"] option[value="' + data.wifi + '"]').attr('selected', 'selected');
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
                }).then(() => {
                    $('#edit_type').modal('hide')
                })

            })
        }

        let edit_info_room = (id) => {
            $('#edit_room').modal('show')
            $('#edit_room_loading').attr('hidden', false);
            $('#data_edit_room').attr('hidden', true);
            $('#head_editroom').attr('hidden', true);
            $('#save_edit_room').attr('disabled', true);
            axios.get('controller?f=getdata&type=room&id_room=' + id).then(({ data: {data} }) => {
                $('#id_room_edit').attr('value',data.id_room)
                $('#edit_head_room').html(data.id_room)
                $('#edit_text_head_room').attr('value',data.id_room)
                $('#edit_type_room').attr('value',data.type_room)
                $('#edit_price_room').attr('value',data.price)
                $('#edit_size_room').attr('value',data.size)
                $('#edit_status_room').attr('value',data.status)
               
                $('#edit_room_loading').attr('hidden', true);
                $('#data_edit_room').attr('hidden', false);
                $('#head_editroom').attr('hidden', false);
                $('#save_edit_room').attr('disabled', false);

                $('select[id="edit_status_room"] option[value="' + data.status + '"]').attr('selected', 'selected');
                $('select[id="edit_type_room"] option[value="' + data.type_room + '"]').attr('selected', 'selected');
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
                }).then(() => {
                    $('#edit_room').modal('hide')
                })

            })
        }

        let edit_info_order = (id) => {
            $('#edit_order').modal('show')
            $('#edit_order_loading').attr('hidden', false);
            $('#data_order_room').attr('hidden', true);
            $('#head_orderroom').attr('hidden', true);
            $('#save_order_room').attr('disabled', true);
            axios.get('controller?f=getdata&type=order&id_order=' + id).then(({ data: {data} }) => {
                $('#id_order_edit').attr('value',data.id_order)
                $('#name_cus').attr('value',data.name_cus)
                $('#edit_room_order').attr('value',data.room_id)
                $('#order_date_start').attr('value',data.datestart)
                $('#order_date_end').attr('value',data.dateend)
                $('#edit_price_order').attr('value',data.price)
               
                $('#edit_order_loading').attr('hidden', true);
                $('#data_edit_order').attr('hidden', false);
                $('#head_editorder').attr('hidden', false);
                $('#save_edit_order').attr('disabled', false);

                $('#edit_room_order').attr('value',data.room_id)
                $('select[id="edit_room_order"] option[value="' + data.room_id + '"]').attr('selected', 'selected');
                $('select[id="edit_status_pay_order"] option[value="' + data.payment_status + '"]').attr('selected', 'selected');
                $('select[id="edit_status_order"] option[value="' + data.status + '"]').attr('selected', 'selected');
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
                }).then(() => {
                    $('#edit_room').modal('hide')
                })

            })
        }


        let add_info_type = () => {
            $('#add_type').modal('show')  
        }
        let add_info_room = () => {
            $('#add_room').modal('show')  
        }
        let add_info_order = () => {
            $('#add_order').modal('show')  
        }

    
        $("#from_edit_type").submit((e) => {
        e.preventDefault()
        $('#save_edit_type').attr('disable',true)
        let myForm = document.getElementById('from_edit_type');
        let formData = new FormData(myForm);      
          axios({
            method: "post",
            url: "controller?f=editdata&type=type",
            headers: { "Content-Type": "multipart/form-data" },
            data: formData,
          }).then(({data})=>{
            $('#save_edit_type').attr('disable',false)
            if (data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html :"บันทึกข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: data.data,
                    })
                }
            })
        })

        $("#from_edit_room").submit((e) => {
        e.preventDefault()
        $('#save_edit_room').attr('disable',true)
        let myForm = document.getElementById('from_edit_room');
        let formData = new FormData(myForm);      
          axios({
            method: "post",
            url: "controller?f=editdata&type=room",
            headers: { "Content-Type": "multipart/form-data" },
            data: formData,
          }).then(({data})=>{
            $('#save_edit_room').attr('disable',false)
            if (data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html :"บันทึกข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: data.data,
                    })
                }
            })
        })

        $("#from_edit_order").submit((e) => {
        e.preventDefault()
        $('#save_edit_order').attr('disable',true)
        let myForm = document.getElementById('from_edit_order');
        let formData = new FormData(myForm);      
          axios({
            method: "post",
            url: "controller?f=editdata&type=order",
            headers: { "Content-Type": "multipart/form-data" },
            data: formData,
          }).then(({data})=>{
            $('#save_edit_order').attr('disable',false)
            if (data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html :"บันทึกข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: data.data,
                    })
                }
            })
        })

        $("#from_add_type").submit((e) => {
        e.preventDefault()
        $('#save_add_type').attr('disable',true)
        let myForm = document.getElementById('from_add_type');
        let formData = new FormData(myForm);          
          axios({
            method: "post",
            url: "controller?f=adddata&type=type",
            headers: { "Content-Type": "multipart/form-data" },
            data: formData,
          }).then(({data})=>{
            $('#save_add_type').attr('disable',false)
            if (data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html :"บันทึกข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: data.data,
                    })
                }
            })
        })

        $("#from_add_room").submit((e) => {
        e.preventDefault()
        $('#save_add_room').attr('disable',true)
        let myForm = document.getElementById('from_add_room');
        let formData = new FormData(myForm);          
          axios({
            method: "post",
            url: "controller?f=adddata&type=room",
            headers: { "Content-Type": "multipart/form-data" },
            data: formData,
          }).then(({data})=>{
            $('#save_add_room').attr('disable',false)
            if (data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html :"บันทึกข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: data.data,
                    })
                }
            })
        })

        $("#from_add_order").submit((e) => {
        e.preventDefault()
        $('#save_add_order').attr('disable',true)
        let myForm = document.getElementById('from_add_order');
        let formData = new FormData(myForm);          
          axios({
            method: "post",
            url: "controller?f=adddata&type=order",
            headers: { "Content-Type": "multipart/form-data" },
            data: formData,
          }).then(({data})=>{
            $('#save_add_order').attr('disable',false)
            if (data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html :"บันทึกข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: data.data,
                    })
                }
            })
        })

        let delete_type = (id) => {
            axios.get('controller?f=deletedata&type=type&id_type=' + id).then(({data}) => {
                if(data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html : "ลบข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'แจ้งเตือน',
                        html : data.data,
                    })
                }
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
                })
            })
        }

        let delete_room = (id) => {
            axios.get('controller?f=deletedata&type=room&id_room=' + id).then(({data}) => {
                if(data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html : "ลบข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'แจ้งเตือน',
                        html : data.data,
                    })
                }
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
                })
            })
        }

        let delete_order = (id) => {
            axios.get('controller?f=deletedata&type=order&id_order=' + id).then(({data}) => {
                if(data.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'แจ้งเตือน',
                        html : "ลบข้อมูลเรียบร้อย"
                    }).then(()=>{
                        window.location.reload()
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'แจ้งเตือน',
                        html : data.data,
                    })
                }
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถเชื่อมต่อ Internet ได้',
                })
            })
        }
    </script>
</body>