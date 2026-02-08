<?php
session_start();

$id = $_GET['id'];

if (!isset($_SESSION['wishlist'])) {
  $_SESSION['wishlist'] = [];
}

if (!in_array($id, $_SESSION['wishlist'])) {
  $_SESSION['wishlist'][] = $id;
}

header("Location: wishlist.php");
exit;