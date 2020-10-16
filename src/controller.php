<?php
  if($_SERVER['SCRIPT_NAME'] == '/index.php') {
      printPage('/index.php', $database);
  }
  elseif($_SERVER['SCRIPT_NAME'] == '/bytovka.php') {
    printPage('/bytovka.php', $database);
  }
  elseif($_SERVER['SCRIPT_NAME'] == '/catalog.php') {
    printPage('/catalog.php', $database);
  }

  function printPage($url_key, &$database){
    $data= searchData($database, '/index.php');
    if (!empty($data) && file_exists(PATH_TPL . $data['tpl'])) {
      include_once(PATH_TPL . $data['tpl']);
    }
    else{
      die('в базе данных нет данных для вызываемой страницы');
    }
  }
?>