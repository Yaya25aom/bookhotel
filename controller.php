<?php
session_start();
include('server.php');
if (isset($_GET['f'])) {
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);

    if ($_GET['f'] == 'booking') {
        $date_start = $data['date_start'];
        $date_end = $data['date_end'];
        $user = isset($_SESSION['u_id']) ? $_SESSION['u_id'] : '';
        $room = $data['room'];
        if (empty($date_start)) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณาใส่วันเริ่มพัก']);
            exit();
        }
        if (empty($date_end)) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณาใส่วันสุดท้ายที่พัก']);
            exit();
        }
        if (empty($room)) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณาเลือกห้อง']);
            exit();
        }
        if (empty($user)) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณา Login']);
            exit();
        }
        $diff = date_diff(date_create($date_start),date_create($date_end));
        if($diff->format('%R%a') <= 0){
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลวันไม่ถูกต้อง <br> กรุณาลองใหม่อีกครั้ง']);
            exit();
        }
        $query = "SELECT price FROM room WHERE id_room = $room ";
        $objQuery = mysqli_query($conn, $query);
        $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

        $price = $diff->d * $objResult['price'];

        $sql = "INSERT INTO order_room 
        (room_id, member_id, datestart, dateend,price)
        VALUES ($room, $user, '$date_start', '$date_end',$price)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $sql = "UPDATE room SET status = 'off'
                    WHERE id_room = $room ";
            $objQuery = mysqli_query($conn, $sql);
            if($objQuery){
                echo json_encode(['status' => 200, 'message' => 'success']);
            }else{
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะทำงาน']);  
            }
        } else {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะทำงาน']);
        }
    }
    if ($_GET['f'] == 'login') {
        $username = mysqli_real_escape_string($conn, $data['username']);
        $password = mysqli_real_escape_string($conn, $data['password']);
        $_SESSION['is_login'] = false;
        if (empty($username)) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณากรอก Username']);
            exit();
        }
        if (empty($password)) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณากรอก Password']);
            exit();
        }
        $password = md5($password);
        $query = "SELECT * FROM member WHERE username = '$username' AND password ='$password' ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            //     print_r($row);
            // exit();
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['u_id'] = $row['UserID'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['success'] = "You are now logged in";
            echo json_encode(['status' => 200, 'message' => 'success', 'data' => '']);
        } else {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'Wrong username/password']);
            exit();
        }
    }
    if ($_GET['f'] == 'getdata') {
        if (!isset($_GET['type'])) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'การค้นหาไม่ถูกต้อง']);
            exit();
        }
        if ($_GET['type'] == 'type') {
            if (!isset($_GET['id_type'])) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'การค้นหาไม่ถูกต้อง']);
                exit();
            }
            $strSQL = "SELECT * FROM type_room WHERE id_type = $_GET[id_type]";
            $objQuery = mysqli_query($conn, $strSQL);
            if ($objQuery) {
                $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                echo json_encode(['status' => 200, 'message' => 'success', 'data' => $objResult]);
            } else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ไม่พบข้อมูล/เกิดข้อผิดพลาดขณะค้นหา']);
            }
        }
        else if ($_GET['type'] == 'room') {
            if (!isset($_GET['id_room'])) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'การค้นหาไม่ถูกต้อง']);
                exit();
            }
            $strSQL = "SELECT *,type_room.name as type_room_name FROM room inner join type_room on room.type_room = type_room.id_type WHERE id_room = $_GET[id_room]";
            $objQuery = mysqli_query($conn, $strSQL);
            if ($objQuery) {
                $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                echo json_encode(['status' => 200, 'message' => 'success', 'data' => $objResult]);
            } else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ไม่พบข้อมูล/เกิดข้อผิดพลาดขณะค้นหา']);
            }
        }
        else if ($_GET['type'] == 'order') {
            if (!isset($_GET['id_order'])) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'การค้นหาไม่ถูกต้อง']);
                exit();
            }
            $strSQL = "SELECT order_room.*,concat_ws(' ',member.firstname,member.lastname) as name_cus, DATEDIFF(dateend, datestart) as datediff 
            FROM order_room 
            inner join member on member.UserID = order_room.member_id WHERE id_order = $_GET[id_order]";
            $objQuery = mysqli_query($conn, $strSQL);
            if ($objQuery) {
                $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                echo json_encode(['status' => 200, 'message' => 'success', 'data' => $objResult]);
            } else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ไม่พบข้อมูล/เกิดข้อผิดพลาดขณะค้นหา']);
            }
        }
    }
    if ($_GET['f'] == 'editdata') {
        if (!isset($_GET['type'])) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'การค้นหาไม่ถูกต้อง']);
            exit();
        }
        if ($_GET['type'] == 'type') {
            if (!isset($_POST['edit_text_head_type']) || !isset($_POST['edit_type_bed']) || !isset($_POST['edit_size_start']) || !isset($_POST['edit_wifi']) || !isset($_POST['edit_people'])
                || !isset($_POST['edit_price_start']) || !isset($_POST['edit_status']) || !isset($_FILES['edit_head_pic']) || !isset($_FILES['edit_buttom_pic']) || !isset($_POST['id_type_edit'])
            ) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();
            }
            $addfile_head = '';
            $addfile_buttom = '';
            if(!empty($_FILES['edit_head_pic']['name']) && $_POST['hide_edit_head_pic'] != 'images/'.$_FILES['edit_head_pic']['name']){
                
                $addfile_head = ",head_pic = 'images/".$_FILES['edit_head_pic']['name']."'";
                if (!move_uploaded_file($_FILES["edit_head_pic"]["tmp_name"], "images/" . $_FILES["edit_head_pic"]["name"])) {
                    echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึกไฟล์ภาพด้านบน ']);
                    exit();
                }

            }
            
            if(!empty($_FILES['edit_buttom_pic']['name']) &&  $_POST['hide_edit_buttom_pic'] != 'images/'.$_FILES['edit_buttom_pic']['name']){
                $addfile_buttom = ",buttom_pic = 'images/".$_FILES['edit_buttom_pic']['name']."'";
                if (!move_uploaded_file($_FILES["edit_buttom_pic"]["tmp_name"], "images/" . $_FILES["edit_buttom_pic"]["name"])) {
                    echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึกไฟล์ภาพด้านล่าง ']);
                    exit();
                }
            }

            $sql =  "UPDATE type_room SET name = '$_POST[edit_text_head_type]', 
             type_bed = '$_POST[edit_type_bed]',
             size_start = $_POST[edit_size_start], 
             wifi = '$_POST[edit_wifi]', 
             people = $_POST[edit_people], 
             price_start = $_POST[edit_price_start], 
             status = '$_POST[edit_status]', 
             text = '$_POST[edit_text]' $addfile_head $addfile_buttom
             WHERE type_room.id_type = '$_POST[id_type_edit]' ";
            $objQuery = mysqli_query($conn, $sql);
            if ($objQuery) {
                echo json_encode(['status' => 200, 'message' => 'success']);
            } else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึก']);
            }
        }
        else if ($_GET['type'] == 'room') {
            if (!isset($_POST['id_room']) || !isset($_POST['edit_text_head_room']) || !isset($_POST['edit_type_room']) || !isset($_POST['edit_price_room']) || !isset($_POST['edit_size_room'])
                || !isset($_POST['edit_status_room']) ) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();
            }
            $sql =  "UPDATE room SET id_room = '$_POST[edit_text_head_room]', 
             type_room = '$_POST[edit_type_room]',
             price = $_POST[edit_price_room], 
             status = '$_POST[edit_status_room]', 
             size = $_POST[edit_size_room]
             WHERE id_room = '$_POST[id_room]' ";
            //  echo $sql;exit();
            $objQuery = mysqli_query($conn, $sql);
            // echo $sql;exit();
            if ($objQuery) {
                echo json_encode(['status' => 200, 'message' => 'success']);
            } else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึก']);
            }

        }else if ($_GET['type'] == 'order') {
            if (!isset($_POST['edit_room_order']) || !isset($_POST['order_date_start']) || !isset($_POST['order_date_end']) || !isset($_POST['edit_price_order']) || !isset($_POST['edit_status_pay_order'])
                || !isset($_POST['edit_status_order']) || !isset($_POST['id_order_edit'])) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();
            }
            $sql =  "UPDATE order_room SET room_id = '$_POST[edit_room_order]', 
             datestart = '$_POST[order_date_start]',
             dateend = '$_POST[order_date_end]', 
             price = '$_POST[edit_price_order]', 
             payment_status = '$_POST[edit_status_pay_order]',
             status = '$_POST[edit_status_order]'
             WHERE id_order = '$_POST[id_order_edit]' ";
            //  echo $sql;exit();
            $objQuery = mysqli_query($conn, $sql);
            // echo $sql;exit();
            if ($objQuery) {
                echo json_encode(['status' => 200, 'message' => 'success']);
            } else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึก']);
            }

        }
    }
    if ($_GET['f'] == 'adddata') {
        if (!isset($_GET['type'])) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'การค้นหาไม่ถูกต้อง']);
            exit();
        }
        if ($_GET['type'] == 'type') {
            if (
                !isset($_POST['add_text_head_type']) || !isset($_POST['add_type_bed']) || !isset($_POST['add_size_start']) || !isset($_POST['add_wifi']) || !isset($_POST['add_people'])
                || !isset($_POST['add_price_start']) || !isset($_POST['add_status']) || !isset($_FILES['add_head_pic']) || !isset($_FILES['add_buttom_pic']) || !isset($_POST['add_text'])
            ) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();
            } else {

                $sql =  "INSERT INTO type_room (name, type_bed, size_start, wifi, people, price_start, status, head_pic, buttom_pic, text)
                 VALUES ('$_POST[add_text_head_type]', '$_POST[add_type_bed]', $_POST[add_size_start], '$_POST[add_wifi]', $_POST[add_people], $_POST[add_price_start], 
                 '$_POST[add_status]'," . " 
                'images/" . $_FILES['add_head_pic']['name'] . "',
                'images/" . $_FILES['add_buttom_pic']['name'] . "',
                '$_POST[add_text]')";
                // echo $sql;exit();
                $objQuery = mysqli_query($conn, $sql);
                if ($objQuery) {
                    if (move_uploaded_file($_FILES["add_head_pic"]["tmp_name"], "images/" . $_FILES["add_head_pic"]["name"])) {
                        if (move_uploaded_file($_FILES["add_buttom_pic"]["tmp_name"], "images/" . $_FILES["add_buttom_pic"]["name"])) {
                            echo json_encode(['status' => 200, 'message' => 'success']);
                        } else {
                            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึกไฟล์ 2 ']);
                        }
                    } else {
                        echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึกไฟล์ 1 ']);
                    }
                } else {
                    echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึกข้อมูล']);
                }
            }
        }
        else if ($_GET['type'] == 'room') {
            if (
                !isset($_POST['add_text_head_room']) || !isset($_POST['add_type_room']) || !isset($_POST['add_price_room']) || !isset($_POST['add_size_room']) || !isset($_POST['add_status_room'])            
            ) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();
            } else {

                $sql =  "INSERT INTO room (id_room, type_room, price,size,status )
                 VALUES ('$_POST[add_text_head_room]', $_POST[add_type_room], $_POST[add_price_room], $_POST[add_size_room], '$_POST[add_status_room]' )";
                // echo $sql;exit();
                $objQuery = mysqli_query($conn, $sql);
                if ($objQuery) {                 
                     echo json_encode(['status' => 200, 'message' => 'success']);                      
                } else {
                    echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะบันทึกข้อมูล']);
                }
            }
        }
        else if($_GET['type']=='order'){
            $date_start = $_POST['date_start'];
            $date_end = $_POST['date_end'];
            $user = isset($_POST['name_cus_add']) ? $_POST['name_cus_add'] : '';
            $room = $_POST['room'];
            if (empty($date_start)) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณาใส่วันเริ่มพัก']);
                exit();
            }
            if (empty($date_end)) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณาใส่วันสุดท้ายที่พัก']);
                exit();
            }
            if (empty($room)) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณาเลือกห้อง']);
                exit();
            }
            if (empty($user)) {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'กรุณา Login']);
                exit();
            }
            if(!isset($_POST['add_status_pay_order'])|| !isset($_POST['add_status_order'])){
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();
            }

            $diff = date_diff(date_create($date_start),date_create($date_end));
            if($diff->format('%R%a') <= 0){
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลวันไม่ถูกต้อง <br> กรุณาลองใหม่อีกครั้ง']);
                exit();
            }
            $query = "SELECT price FROM room WHERE id_room = $room ";
            $objQuery = mysqli_query($conn, $query);
            $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
    
        
            $sql = "INSERT INTO order_room 
            (room_id, member_id, datestart, dateend,price,payment_status,status)
            VALUES ($room, $user, '$date_start', '$date_end',$_POST[price],'$_POST[add_status_pay_order]','$_POST[add_status_order]')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $sql = "UPDATE room SET status = 'off'
                        WHERE id_room = $room ";
                $objQuery = mysqli_query($conn, $sql);
                if($objQuery){
                    echo json_encode(['status' => 200, 'message' => 'success']);
                }else{
                    echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะทำงาน']);  
                }
            } else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะทำงาน']);
            }
        }
    }
    if ($_GET['f'] == 'deletedata') {
        if (!isset($_GET['type'])) {
            echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'การค้นหาไม่ถูกต้อง']);
            exit();
        }
        if ($_GET['type'] == 'type') {
            if (!isset($_GET['id_type'])){
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();  
            }

            $sql = "DELETE FROM type_room WHERE id_type = $_GET[id_type]";
            // echo $sql;
            $objQuery = mysqli_query($conn, $sql);
            if ($objQuery) {
                echo json_encode(['status' => 200, 'message' => 'success']);
            }else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะลบข้อมูล']);
            }
        }
        else if ($_GET['type'] == 'room') {
            if (!isset($_GET['id_room'])){
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();  
            }

            $sql = "DELETE FROM room WHERE id_room = $_GET[id_room]";
            // echo $sql;
            $objQuery = mysqli_query($conn, $sql);
            if ($objQuery) {
                echo json_encode(['status' => 200, 'message' => 'success']);
            }else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะลบข้อมูล']);
            }
        }
        else if ($_GET['type'] == 'order') {
            if (!isset($_GET['id_order'])){
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'ข้อมูลที่ส่งมาไม่ครบ']);
                exit();  
            }

            $sql = "DELETE FROM order_room WHERE id_order = $_GET[id_order]";
            // echo $sql;
            $objQuery = mysqli_query($conn, $sql);
            if ($objQuery) {
                echo json_encode(['status' => 200, 'message' => 'success']);
            }else {
                echo json_encode(['status' => 400, 'message' => 'error', 'data' => 'เกิดข้อผิดพลาดขณะลบข้อมูล']);
            }
        }

    }

}
