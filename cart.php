<?php
session_start();
include "product.php";
?>

<h2>Your Cart</h2>
<a href="front.php">← Back to Home</a>
<hr>

<?php
if (empty($_SESSION['cart'])) {
  echo "Cart is empty";
  exit;
}

foreach ($products as $p) {
  if (in_array($p['id'], $_SESSION['cart'])) {
    echo "
      <div style='border:1px solid #ccc; padding:10px; margin:10px;'>
        <img src='{$p['img']}' width='100'><br>
        <b>{$p['name']}</b><br>
        ₹{$p['price']}
      </div>
    ";
  }
}
?>