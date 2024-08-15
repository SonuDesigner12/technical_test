<?php
    session_start();
    $id = $_SESSION['id'];
    include("db.php");

    $select_data = "SELECT * FROM resister WHERE id = '$id'";
    $result = mysqli_query($conn, $select_data);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>My Website</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h2>Welcome, <?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></h2>
        <button class="btn logout-btn"><a href="logout.php">Logout</a></button>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['fname']; ?></td>
                    <td><?php echo $data['lname']; ?></td>
                    <td><?php echo $data['dob']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><button class="btn edit-btn"><a href="edit.php?id=<?php echo $data['id']; ?>">Edit Data</a></button></td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 My Website. All rights reserved.</p>
            <ul>
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#terms">Terms of Service</a></li>
                <li><a href="#support">Support</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
