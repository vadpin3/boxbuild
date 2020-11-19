<?php
require('connect.php');
require_once('helpers.php');
$u_id = $_SESSION['id'];


$sqlProj = "SELECT * FROM project";          
$resultProj = mysqli_query($con, $sqlProj);
$rowsProj = mysqli_fetch_all($resultProj, MYSQLI_ASSOC);

$sqlttt = "SELECT * FROM task";
$resulttt = mysqli_query($con, $sqlttt);
$rowsttt = mysqli_fetch_all($resulttt, MYSQLI_ASSOC);

$errors = [];
$rules = [
    'title' => function() {
        return validateFilled('title');
    },
    'deadline' => function() {
        return is_date_valid('deadline');
    }
];

$form = $_POST;

if (!empty($form['deadline']) && ($form['deadline'] < date('Y-m-d'))) {
    $errors['lastDate'] = 'Дата уже прошла';
}

if (isset($_POST['task-btn'])) {
    foreach ($_POST as $key => $value) {
        if (isset($rules[$key])) {
            $rule = $rules[$key];
            $errors[$key] = $rule();
        }
    }
    $errors = array_filter($errors);
    if (!count($errors)) {
        $title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
        $id_project = $_POST['project_id'];
        $date = NULL;
        if ($_POST['deadline']) {
            $date = $_POST['deadline'];
        }
        $filename = NULL;
        if (isset($_FILES['link'])) {
            $filename = $_FILES['link']['name'] .'_'.time();
            $file_path = __DIR__ . '/uploads/';
            move_uploaded_file($_FILES['link']['tmp_name'], $file_path . $filename);
        }
        $sql = "INSERT INTO `task` (`title`, `link`, `deadline`, `user_id`, `project_id`)
        VALUES  (?, ?, ?, ?, ?)";
        $stmt = db_get_prepare_stmt($con, $sql, [$title,$filename, $date, $u_id, $id_project]);
        $result = mysqli_stmt_execute($stmt);
        if($result) {
            header("Location: /index.php?id=$id_project");
        }
    }
}

$add = include_template('add-task.php',['rowsttt' => $rowsttt, 'rowsProj' => $rowsProj, 'errors' => $errors]);
$layout = include_template('layout.php',['user_name' => $_SESSION['name'], 'content' => $add, 'title' => 'Добавление задачи']);

print($layout);
?>
