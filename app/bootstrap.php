<?php

require_once "config/config.php";
session_start();

function Autoloader($class) {
  $paths = [
      APPROOT."/libraries/",
      APPROOT."/services/",
      APPROOT."/models/",
      APPROOT."/controllers/"
  ];


  foreach ($paths as $path) {
      $file = $path . $class . '.php';
      if (file_exists($file)) {
          require_once $file;
      }
  }
}


spl_autoload_register('Autoloader');


$init = new Core();