<?php
    require_once "../config/connect.php";
    mysqli_query($connect, "DELETE FROM `array`");

    $size = $_POST['size'];
    for ($i = 0; $i != $size; $i++){
        $rand = rand(0, 100000);
        mysqli_query($connect, "INSERT INTO `array` (`id`, `arr_key`, `value`) VALUES (NULL, '$i', '$rand')");
    }
?>
