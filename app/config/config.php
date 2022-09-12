<?php
  // DB Params
  session_start();
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'task');
  define('admin','Ponnamma');
  define('password','9481');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/mvc/');
  // Site Name
  define('SITENAME', 'Employee details');