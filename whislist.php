<?php
session_start();
include "product.php";
?>

<h2>Your Wishlist</h2>
<a href="front.php">← Back to Home</a>
<hr>

<?php
if (empty($_SESSION['wishlist'])) {
  echo "Wishlist is empty";
  exit;
}

foreach ($products as $p) {
  if (in_array($p['id'], $_SESSION['wishlist'])) {
    echo "
      <div style='border:1px solid #ccc; padding:10px; margin:10px;'>
        <img src='{$p['image']}' width='100'><br>
        <b>{$p['name']}</b><br>
        ₹{$p['price']}<br>
        <a href='add_to_cart.php?id={$p['id']}'>Move to Cart</a>
      </div>
    ";
  }
}
?>