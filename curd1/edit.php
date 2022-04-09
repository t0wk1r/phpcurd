<?php

include('config.php');

if (isset($_REQUEST['edit_id'])) {
    $id = $_REQUEST['edit_id'];


    $editsql = "SELECT * FROM student WHERE id= $id";

    $finaleditsql = mysqli_query($conn, $editsql);

    $data = mysqli_fetch_assoc($finaleditsql);
    $fullname = $data['fullname'];
    $address = $data['address'];
    $email = $data['email'];
}

if (isset($_POST['edit'])) {
    $id = $_REQUEST['edit_id'];
    $fullname = $_REQUEST['fullname'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    $updatesql = "UPDATE student SET fullname='$fullname', address='$address', email='$email'  WHERE id=$id ";

    $finalupdatesql = mysqli_query($conn, $updatesql);

    if ($finalupdatesql == TRUE) {
        header('location:view.php');
        echo "data Update";
    } else {
        echo "data Not Update";
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" style="width: 500px;margin: auto;">
        <label>Name</label><br>
        <input type="text" name="fullname" value="<?php echo  $fullname; ?>"><br><br>
        <label>Address</label><br>
        <input type="text" name="address" value="<?php echo  $address; ?>"><br><br>
        <label>Email</label><br>
        <input type="email" name="email" value="<?php echo  $email; ?>"><br><br>
        <input type="text" name="edit_id" value="<?php echo $id ?>" hidden>
        <input type="submit" name="edit" value="Update">


    </form>
</body>

</html>