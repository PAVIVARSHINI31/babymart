<?php
session_start();

// 🔹 Products array
$products = [
    ["id"=>1, "name"=>"Dress", "price"=>500, "category"=>"dress", "img"=>"images/dress1.jpeg"],
    ["id"=>2, "name"=>"Dress", "price"=>700, "category"=>"dress", "img"=>"images/dress2.jpeg"],
    ["id"=>3, "name"=>"Dress", "price"=>700, "category"=>"dress", "img"=>"images/dress3.jpeg"],
    ["id"=>4, "name"=>"Dress", "price"=>700, "category"=>"dress", "img"=>"images/dress4.jpeg"],

    ["id"=>5, "name"=>"Carry Bag", "price"=>1200, "category"=>"bag", "img"=>"images/care1.jpeg"],
    ["id"=>6, "name"=>"Carry Bag", "price"=>1200, "category"=>"bag", "img"=>"images/care2.jpeg"],
    ["id"=>7, "name"=>"Carry Bag", "price"=>1200, "category"=>"bag", "img"=>"images/care3.jpeg"],
    ["id"=>8, "name"=>"Carry Bag", "price"=>1200, "category"=>"bag", "img"=>"images/care4.jpeg"],
    ["id"=>9, "name"=>"Carry Bag", "price"=>1200, "category"=>"bag", "img"=>"images/care5.jpeg"],
    ["id"=>10, "name"=>"Carry Bag", "price"=>1200, "category"=>"bag", "img"=>"images/care6.jpeg"],
    ["id"=>11, "name"=>"Carry Bag", "price"=>1200, "category"=>"bag", "img"=>"images/care7.jpeg"],
    ["id"=>12, "name"=>"Carry Bag", "price"=>1200, "category"=>"bag", "img"=>"images/care8.jpeg"],
    

    

    ["id"=>13, "name"=>"Feed & Gear", "price"=>800, "category"=>"pampers", "img"=>"images/feed1.jpeg"],
    ["id"=>14, "name"=>"Feed & Gear", "price"=>800, "category"=>"pampers", "img"=>"images/feed2.jpeg"],
    ["id"=>15, "name"=>"Feed & Gear", "price"=>800, "category"=>"pampers", "img"=>"images/feed3.jpeg"],
     ["id"=>16, "name"=>"Feed & Gear", "price"=>800, "category"=>"pampers", "img"=>"images/feed4.jpeg"],
    ["id"=>17, "name"=>"Feed & Gear", "price"=>800, "category"=>"pampers", "img"=>"images/feed5.jpeg"],
    ["id"=>18, "name"=>"Feed & Gear", "price"=>800, "category"=>"pampers", "img"=>"images/feed6.jpeg"],


    ["id"=>19, "name"=>"Toys", "price"=>800, "category"=>"toys", "img"=>"images/toy1.jpeg"],
    ["id"=>20, "name"=>"Toys", "price"=>800, "category"=>"toys", "img"=>"images/toy2.jpeg"],
     ["id"=>21, "name"=>"Toys", "price"=>800, "category"=>"toys", "img"=>"images/toy3.jpeg"],
     ["id"=>22, "name"=>"Toys", "price"=>800, "category"=>"toys", "img"=>"images/toy.jpeg"],


];

// 🔹 Category filter
$category = isset($_GET['cat']) ? $_GET['cat'] : '';
$showProducts = $products;

if($category != "") {
    $showProducts = array_filter($products, function($p) use($category){
        return $p['category'] == $category;
    });
}

// 🔹 Handle Add to Cart
if(isset($_GET['add'])) {
    $id = $_GET['add'];
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
    $_SESSION['cart'][] = $id;
    header("Location: ".$_SERVER['PHP_SELF'].( $category ? "?cat=$category" : "" ));
    exit;
}

// 🔹 Handle Wishlist
if(isset($_GET['like'])) {
    $id = $_GET['like'];
    if(!isset($_SESSION['wishlist'])) $_SESSION['wishlist'] = [];
    if(!in_array($id, $_SESSION['wishlist'])) {
        $_SESSION['wishlist'][] = $id;
    }
    header("Location: ".$_SERVER['PHP_SELF'].( $category ? "?cat=$category" : "" ));
    exit;
}

// 🔹 Counts
$cartCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
$likeCount = isset($_SESSION['wishlist']) ? count($_SESSION['wishlist']) : 0;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="newstyle.css">

    <style>
        body { font-family: Arial, sans-serif; 
    		background-color:#E0F7FA;}
        h2 { text-align: center;
	 }
        .counts { text-align:center; margin-bottom: 20px; }

        .products-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .product-card {
            width: 23%;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            box-sizing: border-box;
        }
        .product-card img {
            width: 100%;
            height: auto;
        }
        .btn {
            display: inline-block;
            margin: 5px 2px;
            padding: 5px 10px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .like-btn {
            background: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: gray;
        }
        .liked { color: red; }
        @media(max-width:768px){ .product-card{ width:48%; } }
        @media(max-width:480px){ .product-card{ width:100%; } }
    </style>
</head>
<body>
 <header>
    <h1>Baby Mart</h1>
    <nav>
      <a href="front.php">Home</a>
      <a href="prod.php">Products</a>
      <a href="categories.php">categories</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>


<h2><?php echo $category ? ucfirst($category)." Products" : "All Products"; ?></h2>
<p class="counts">
    🛒 Cart: <?php echo $cartCount; ?> | ❤ Likes: <?php echo $likeCount; ?>
</p>

<div class="products-container">
<?php
foreach($showProducts as $item) {
    $liked = isset($_SESSION['wishlist']) && in_array($item['id'], $_SESSION['wishlist']);
    ?>
    <div class="product-card">
        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
        <h3><?php echo $item['name']; ?></h3>
        <p>₹<?php echo $item['price']; ?></p>
        <a class="btn" href="?<?php echo $category ? "cat=$category&" : "" ?>add=<?php echo $item['id']; ?>">Add to Cart</a>
        <a class="btn <?php echo $liked ? 'liked' : ''; ?>" href="?<?php echo $category ? "cat=$category&" : "" ?>like=<?php echo $item['id']; ?>">❤</a>
    </div>
    <?php
}
?>
</div>

</body>
</html>