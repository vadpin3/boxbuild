<?php
  function searchData(&$database, $url_key) {
    foreach ($database['pages'] as $key => $value) {
      if ($value['url_key'] == $url_key){
        return $value;
      }
    }
    return false;
  }
?>