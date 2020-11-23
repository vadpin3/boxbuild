<?php
if(!isset($_SESSION)) {
    session_start();
}

$con = mysqli_connect('localhost', 'root', 'root', 'itog');

if($con==false) {
    print("Ошибка" . mysqli_connect_error());
}

mysqli_set_charset($con, 'utf8');
?>