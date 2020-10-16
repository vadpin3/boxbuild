<?php

  define('ROOT_PATH', $_SERVER['DOCUVENT_ROOT']);
  define('PATH_SRC', ROOT_PATH . '/src/');
  define('PATH_TPL', ROOT_PATH . '/templates/');

  $dataFiles=[];

  $dataFiles[]= PATH_SRC . 'database.php';
  $dataFiles[]= PATH_SRC . 'model.php';
  $dataFiles[]= PATH_SRC . 'controller.php';

  foreach($baseFiles as $key => $value) {
    include_once($value);
  }
?>