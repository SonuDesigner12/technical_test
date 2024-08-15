<?php

    include("db.php");

    /* update data */
    $id = $_POST['id'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $dob = $_POST['dob'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];

   $update_data = "UPDATE `resister` SET 
                `fname`= '$fname',
                `lname`= '$lname',
                `dob`= '$dob',
                `address`= '$address',
                `phone`= '$phone'
                WHERE id = '$id' ";

    $run_update_query = mysqli_query($conn, $update_data);

    if($run_update_query) {
        echo "data update";
        echo '<script>
                alert("data update");
                window.location.href = "dashboard.php";
            </script>';
    }
    else {
        echo "data not update";
    }



?>