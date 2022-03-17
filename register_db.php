<?php
    session_start();
    include('server.php');
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $conpassword = mysqli_real_escape_string($conn, $_POST['conpassword']);

        if(empty($firstname)) {
            array_push($errors, "Firstname is required");
        }
        if(empty($lastname)) {
            array_push($errors, "Lastname is required");
        }
        if(empty($email)) {
            array_push($errors, "Email is required");
        }
        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
        if($password != $conpassword){
            array_push($errors, "The two password do not match");
        }

        $user_check_query = "SELECT * FROM member WHERE username = '$username' OR email ='$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result) { //if user exists
            if($result['username'] === $username){
                array_push($errors, "Username already exists");
            }
            if($result['email'] === $email){
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0){
            $password = md5($password);

            $sql ="INSERT INTO member (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else{
            foreach ($errors as $key => $value) {
                echo "<script>alert('$value')</script>";
            }
           
        }
    }

?>