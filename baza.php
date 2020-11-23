<?php
require_once('helpers.php');
require('connect.php');


$u_id = $_SESSION['id'];

$project = "SELECT * FROM project WHERE user_id = $u_id";
$result_project = mysqli_query($con, $project);
$project_array = mysqli_fetch_all($result_project, MYSQLI_ASSOC);


$tasks = "SELECT * FROM task WHERE user_id = $u_id";
$result_tasks = mysqli_query($con, $tasks);
$task_array = mysqli_fetch_all($result_tasks, MYSQLI_ASSOC);


if (isset($_GET['id']) && $_GET['id']) {
    $id_project = mysqli_real_escape_string($con, intval($_GET['id']));
    $tasks .= " AND `project_id` = '$id_project' ";
}

$result_task = mysqli_query($con, $tasks);
$task_arr = mysqli_fetch_all($result_task, MYSQLI_ASSOC);
?>
