<?php
    include('db.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_query = "SELECT * FROM resister WHERE email = '$email'";
    $runSelectQuery = mysqli_query($conn, $select_query);

    $data = mysqli_num_rows($runSelectQuery);

    if($data > 0) {

        echo    '<script>
                  alert("Email already exist.");
                  window.location.href = "index.html";
                </script>'; 

    }
    else {
        $insert_query = "INSERT INTO `resister`(`fname`, `lname`, `dob`, `address`, `phone`, `email`, `password`) 
        VALUES 
        ('$fname','$lname','$dob','$address','$phone','$email','$password')";

        $insert_query_run = mysqli_query($conn, $insert_query);

        if($insert_query_run) {
            echo    '<script>
                        alert("Resistration Done");
                        window.location.href = "login.html";
                    </script>'; 

        }

    }

    

?>