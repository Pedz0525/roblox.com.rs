<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <form action="index.php"  method="POST" class="login-box">

        <h2>Register New Student</h2>
        <div class="user-box">
            <input type="text" name="Lname" required=>
            <label>Last Name</label>
          </div>
          <div class="user-box">
            <input type="text" name="Fname" required>
            <label>First Name</label>
          </div>
          <div class="user-box">
            <input type="text" name="Mname" required>
            <label>Middle Name</label>
          </div>
          <div class="user-box">
            <input type="text" name="Address" required>
            <label>Address</label>
          </div>
          <div class="user-box">
            <input type="text" name="Cont" required>
            <label>Contact Number</label>
          </div>
          <div class="user-box">
            <input type="text" name="Email" required>
            <label>Email</label>
          </div>

          <input type="submit" name="" id="" class="btn"><br><br>
          <input type="reset" value="Clear Input" class="btn"><br><br>
          <a href="webpage.html" class="cancel">Cancel</a>

    </form>

 <script src="script.js"></script>
</body>



<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "root", "", "user");

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $Lname = $_POST['Lname'];
    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Address = $_POST['Address'];
    $Cont = $_POST['Cont'];
    $Email = $_POST['Email'];

    $sql = "INSERT INTO `register`(`Lname`, `Fname`, `Mname`, `Address`, `Cont`, `Email`)
            VALUES ('$Lname','$Fname','$Mname','$Address','$Cont','$Email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
