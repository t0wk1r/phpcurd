<?php

include('config.php');

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];


    $inputsql = "INSERT INTO student(fullname,address,email) VALUES('$fullname','$address','$email')";

    $finalinput =  mysqli_query($conn, $inputsql);

    if ($finalinput == TRUE) {
        echo "submited";
    } else {
        echo "not Submited";
    }
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" style="width: 500px;margin: auto;">
        <label>Name</label><br>
        <input type="text" name="fullname"><br><br>
        <label>Address</label><br>
        <input type="text" name="address"><br><br>
        <label>Email</label><br>
        <input type="email" name="email"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>