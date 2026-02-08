<?php
session_start();

$id = $_GET['id'];

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

if (!in_array($id, $_SESSION['cart'])) {
  $_SESSION['cart'][] = $id;
}

header("Location: cart.php");
exit;