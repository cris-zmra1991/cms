<?php
require 'res/php/app_top.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="res/css/semantic.min.css">
    <link rel="stylesheet" href="res/css/main.css">
  </head>
  <body>
  <?php require 'views/nav/main_nav.php'; ?>
  <?php if (!isset($_GET['section'])) {
    require 'views/home.php';
  } ?>
  <script src="res/js/semantic.min.js"></script>
  <script src="res/js/jquery.min.js"></script>
  </body>
</html>
