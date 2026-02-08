<!DOCTYPE html>
<html>
<head>
  <title>Categories</title>
<link rel="stylesheet" href="newstyle.css">

<style>
 header {background:#ff7aa2; padding:20px; text-align:center; }


body {
      margin:0;

      font-family: Arial, sans-serif;
      padding:0;
      background-color:lavender;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .categories {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* 2 columns */
      gap: 20px; /* space between cards */
      max-width: 600px; /* center container */
      margin: 0 auto;
    }

    .cat-card {
      display: block;
      text-align: center;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
      text-decoration: none;
      color: #333;
    }

    .cat-card img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 10px;
      transition: transform 0.3s;
    }

    .cat-card h3 {
      margin: 10px 0;
    }

    .cat-card:hover {
      transform: translateY(-5px);
    }

    .cat-card:hover img {
      transform: scale(1.05);
    }

    /* Responsive */
    @media(max-width:480px) {
      .categories {
        grid-template-columns: 1fr; /* 1 column on mobile */
      }
    }
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


<h2 style="text-align:center;">Product Categories</h2>

<div class="categories">

  <a href="prod.php?cat=dress" class="cat-card">
    <img src="images/dress.jpeg"">
    <h3>Baby Dress</h3>
  </a>

  <a href="prod.php?cat=bag" class="cat-card">
    <img src="images/care.jpeg">
    <h3>Baby CARE AND GEAR</h3>
  </a>

  <a href="prod.php?cat=pampers" class="cat-card">
    <img src="images/feed.jpeg">
     <h3>FEEDING AND CARE</h3>
  </a>
  <a href="prod.php?cat=toys" class="cat-card">
    <img src="images/toys.jpeg">
    <h3>TOYS</h3>
  </a>


</div>

</body>
</html>