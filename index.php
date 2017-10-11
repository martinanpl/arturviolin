<?php
if (empty($_SERVER['QUERY_STRING'])) {
  $name="index";
} else {
  $name=basename($_SERVER['QUERY_STRING']);
}
$file="pl/".$name.".html";
$error404="404.html";
if (is_readable($file)) {
  include 'header.php';
  include $file;
  include 'footer.php';
} else {
  include 'header.php';
  readfile($error404);
  include 'footer.php';
  exit;
}
?>
