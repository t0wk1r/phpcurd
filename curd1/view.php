<?php
include('config.php');

$outputsql = "SELECT * FROM student";

$finaloutputsql = mysqli_query($conn, $outputsql);
?>

<html>

<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
    </tr>



    <?php

    if ($finaloutputsql == TRUE) {
        while ($data =  mysqli_fetch_assoc($finaloutputsql)) {
            $id =   $data['ID'];
            $fullname =   $data['fullname'];
            $address = $data['address'];
            $email = $data['email'];
    ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $fullname; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $email; ?></td>
                <td><a href="edit.php?edit_id=<?php echo $id; ?>">Edit</a> || <a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
            </tr>
    <?php
        }
    }

    ?>

</table>

</html>