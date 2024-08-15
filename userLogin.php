<?php

    session_start();

    include("db.php");

    $email = $_GET['email'];
    $password = $_GET['password'];

    $select_data = "SELECT * FROM resister WHERE email = '$email' AND password = '$password'";

    $run_query = mysqli_query($conn, $select_data);

    $data = mysqli_fetch_assoc($run_query);

    if($data > 0) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['fname'] = $data['fname'];
        $_SESSION['lname'] = $data['lname'];
        $_SESSION['email'] = $data['email'];
        echo '<script>
                alert("Login successfull");
                window.location.href = "dashboard.php";
             </script>'; 
    }
    else {
        echo '<script>
                alert("Login unsuccessfull");
                window.location.href = "login.html";
             </script>'; 
    }

?>