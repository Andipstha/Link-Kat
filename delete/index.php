<?php
require "../db.php";

if (isset ($_GET['uid'])) {
    $uid = $_GET['uid'];

    $sql = "DELETE FROM `urls` WHERE `uid` = '$uid'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: /");
    } else {
        echo "Error deleting URL";
    }
}