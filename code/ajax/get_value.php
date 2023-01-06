<?php
    require_once "../config/connect.php";

    $arr_key = $_POST['arr_key'];
    $element = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM `array` WHERE `arr_key` = '$arr_key'"));
    echo $element[2];
?>
