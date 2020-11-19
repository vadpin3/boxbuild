<?php
require_once('helpers.php');
require('connect.php');
$u_id = $_SESSION['id'];

$con = mysqli_connect('localhost', 'root', 'root', 'itog');
$sqlProj = "SELECT * FROM `project`";          
$resultProj = mysqli_query($con, $sqlProj);
$rowsProj = mysqli_fetch_all($resultProj, MYSQLI_ASSOC);

$sqlttt = "SELECT * FROM `task`";
$resulttt = mysqli_query($con, $sqlttt);
$rowsttt = mysqli_fetch_all($resulttt, MYSQLI_ASSOC);


$resull = mysqli_query($con, $sqlttt);
$task_arr = mysqli_fetch_all($resull, MYSQLI_ASSOC);

?>

