<?php
session_start();
include('server.php');
// print_r($_POST);
// exit();
$errors = array();
if (isset($_POST['sign_sub'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $_SESSION['is_login'] = false;
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
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
            $_SESSION['success'] = "You are now logged in";
            header("location: index.php");
        } else {
            echo "<script>
        alert('Wrong username/password');
        window.location.href = 'index.php';
        </script>";
        }
    }
}
