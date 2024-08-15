<?php
    session_start();
    $id = $_SESSION['id']; 
    include("db.php");

    $show_data = "SELECT * FROM `resister` WHERE id = $id ";

    $show_query_run = mysqli_query($conn, $show_data);

    $data = mysqli_fetch_assoc($show_query_run);
    echo $data['id'];  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resistration Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form method="post" action="update.php">
        <h2>welcome, <?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></h2>

        <div class="form-control">
            <label for="fname">
                <input type="hidden" value="<?php echo $data['id'];  ?>" id="id" name="id" >
                Fname: <input type="text" value="<?php echo $data['fname'];  ?>" placeholder="enter Your first name" id="fname" name="fname" onkeyup="validateFname()" >
            </label>
            <span id="fname-error" class="error"></span>    
        </div>

        <div class="form-control">
            <label for="lname">
                Lname: <input type="text" value="<?php echo $data['lname'];  ?>" placeholder="enter Your last name" id="lname" name="lname" onkeyup="validateLname()" >
            </label>
            <span id="lname-error" class="error"></span>    
        </div>

        <div class="form-control">
            <label for="dob">
                Date of birth: <input type="number" value="<?php echo $data['dob'];  ?>" placeholder="enter Your name" id="dob" name="dob" onkeyup="validateDOB()" >
            </label>
            <span id="dob-error" class="error"></span>    
        </div>

        <div class="form-control">
            <label for="address">
                Address: <input type="text" value="<?php echo $data['address'];  ?>" placeholder="enter Your address" id="address" name="address" onkeyup="validateAddress()" >
            </label>
            <span id="address-error" class="error"></span>    
        </div>

        <div class="form-control">
            <label for="phone">
                Phone: <input type="number" value="<?php echo $data['phone'];  ?>" placeholder="enter Your phone number" id="phone" name="phone" onkeyup="validatePhone()" >
            </label>
            <span id="phone-error" class="error"></span>    
        </div>
        
        <input type="submit" name="update" value="Update Data">
    </form>


    <script src="js/script.js"></script>
</body>
</html>




