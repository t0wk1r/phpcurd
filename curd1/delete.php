<?php
include('config.php');


$rcv = $_REQUEST['id'];


$deletesql = "DELETE FROM student WHERE ID = $rcv";

$fianlltsql = mysqli_query($conn, $deletesql);


if ($fianlltsql == TRUE) {
    echo "data delete";
    header("Location: view.php?deleted");
}
