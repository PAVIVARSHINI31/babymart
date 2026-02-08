<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Baby Mart</title>
  <style>
    /* Basic Reset */
    * {margin:0; padding:0; box-sizing:border-box; font-family: Arial, sans-serif;}
    body {background:lavender; color:#333;}

    /* Header */
    header {background:#ff7aa2; padding:20px; text-align:center;}
    header h1 {color:#fff; margin-bottom:10px;}
    nav a {
      color:#fff; text-decoration:none; margin:0 15px; font-weight:bold;
    }
    nav a:hover {text-decoration:underline;}

    /* Contact Section */
    .contact-section {max-width:900px; margin:40px auto; padding:0 20px;}
    .contact-section h2 {color:#ff69b4; margin-bottom:10px;}
    .contact-section p {margin-bottom:20px;}
    .contact-info p {margin-bottom:10px; font-weight:bold;}

    /* Form Styling */
    form {display:flex; flex-direction:column; gap:15px; margin-bottom:30px;}
    form label {font-weight:bold;}
    form input, form textarea {
      padding:10px; border:1px solid #ccc; border-radius:5px; width:100%;
    }
    form button {
      width:150px; padding:10px; background:#ff69b4; color:#fff; border:none; border-radius:5px;
      cursor:pointer; font-weight:bold;
    }
    form button:hover {background:#ff1493;}

    /* Map */
    .map iframe {width:100%; height:400px; border:0; border-radius:5px;}

    /* Footer */
    footer {text-align:center; padding:20px; background:#ffb6c1; color:#fff; margin-top:40px;}
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>Baby Mart</h1>
    <nav>
      <a href="front.php">Home</a>
      <a href="prod.php">Products</a>
      <a href="categories.php">categories</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <!-- Contact Section -->
  <section class="contact-section">
    <h2>Contact Us</h2>
    <p>We would love to hear from you! Fill out the form below or reach us directly.</p>

    <!-- Contact Info -->
    <div class="contact-info">
      <p>📍 <strong>Address:</strong> 123 Baby Street, Coimbatore, India</p>
      <p>📞 <strong>Phone:</strong> +91 9876543210</p>
      <p>✉️ <strong>Email:</strong> support@babymart.com</p>
    </div>

    <!-- Contact Form -->
    <form action="contact-form-handler.php" method="post">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>

      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>

      <button type="submit">Send Message</button>
    </form>

    <!-- Google Map -->
    <div class="map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.123456789!2d76.9536!3d11.0168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859a0b9abcd%3A0xabcdef123456789!2sBaby%20Mart%2C%20Coimbatore!5e0!3m2!1sen!2sin!4v1671234567890" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    &copy; 2026 Baby Mart. All rights reserved.
  </footer>

</body>
</html>