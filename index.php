<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Baby Mart</title>
    <link rel="stylesheet" href="newstyle.css">
    <style>
.banner img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #FFDAB9;   /* cute pastel border */
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

</style>

    
     </head>
<body>

<!-- ===== Header ===== -->
<header>
    <div class="logo">👶 Baby Mart</div>
    <nav>
        <a href="prod.php">Products</a>
        <a href="categories.php">Category</a>
        <a href="contact.php">Contact</a>
         <a href="cart.php"  ">cart🛒</a>

    <a href="whish.php" >❤️</a>



    </nav>
</header>

<!-- ===== Banner ===== -->
<section class="banner">
    <img src="images/logo.jpeg" align="left" >

    <h1>New Born Baby Products</h1>
    <p>Safe • Soft • Comfortable</p>
    <a href="prod.php" class="btn">SHOP NOW</a>
    

        </section>
     
<img src="images/photo.jpeg" width="100%">
<section id="categories" class="category-section">
  <h2 class="section-title" >Shop By Category</h2>
  <p class="section-sub">Choose the best for your baby</p>

  <div class="category-grid">

    <a href="prod.php?cat=dress" class="category-card">
      <img src="images/dress.jpeg" alt="Baby Dress">
      <div class="overlay">
        <h3>Baby CLOTHING</h3>
      </div>
    </a>

    <a href="prod.php?cat=bag" class="category-card">
      <img src="images/care.jpeg" alt="Carry Bag">
      <div class="overlay">
        <h3>BABY CARE & GEAR</h3>
      </div>
    </a>

    <a href="prod.php?cat=pampers" class="category-card">
      <img src="images/feed.jpeg"alt="Pampers">
      <div class="overlay">
        <h3>FEEDING & CARE</h3>
      </div>
    </a>
    
    <a href="prod.php?cat=toys" class="category-card">
      <img src="images/toys.jpeg" alt="toys">
      <div class="overlay">
        <h3>TOYS</h3>
      </div>
    </a>
   <?php
// Start PHP
// Include products array
include('product.php'); // Make sure this file exists and contains $products

// Pick 4 random products for featured section
$totalProducts = count($products);
$randomCount = min(4, $totalProducts);
$randomKeys = array_rand($products, $randomCount);

$featuredProducts = [];
if($randomCount == 1){
    $featuredProducts[] = $products[$randomKeys];
} else {
    foreach($randomKeys as $key){
        $featuredProducts[] = $products[$key];
    }
}
?>
   <section id="featured">
  <h2 style="color:blue;">Featured Products</h2>

  <div class="products">
    <?php foreach($featuredProducts as $item): ?>
        <div class="card">
            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
            <h3><?php echo $item['name']; ?></h3>
            <p>₹<?php echo $item['price']; ?></p>
            
        </div>
    <?php endforeach; ?>
  </div>

  <a href="prod.php" class="btn">View All Products</a>
</section>
<br>
<p style="
    text-align: center; 
    font-size: 16px; 
    color: #555; 
    font-style: italic; 
    margin: 20px 0 15px 0;
">
    🫂Thank you for visiting 👼Baby Mart! 💕 Wishing happy smiles😍 to your little ones!🐣
</p>
  </div>
   <!-- ===== Footer ===== -->
<footer>
    <p>© 2026 Baby Mart</p>
    <p>Email: babymart@gmail.com | Phone: +91 98765 43210</p>
</footer>

</body>
</html>