<?php
    require_once "../config/connect.php";
    $arr_key_1 = $_POST['arr_key_1'];
    $arr_key_2 = $_POST['arr_key_2'];

    $element_1 = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM array WHERE arr_key = '$arr_key_1'"));
    $element_2 = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM array WHERE arr_key = '$arr_key_2'"));
    $tmp = $element_2[2];
    mysqli_query($connect, "UPDATE array SET `value`='$element_1[2]' WHERE arr_key = '$arr_key_2'");
    mysqli_query($connect, "UPDATE array SET `value`='$tmp' WHERE arr_key = '$arr_key_1'");
?>
