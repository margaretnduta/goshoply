<?php
// Start the session to access the cart
session_start();

// Redirect if the cart is empty
if (empty($_SESSION['cart'])) {
    echo "<script>alert('Your cart is empty!'); window.location.href='home.html';</script>";
    exit();
}

// Handle the checkout form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process checkout (store order in a database, etc.)
    $_SESSION['cart'] = []; // Empty the cart after successful checkout
    echo "<script>alert('Thank you for your purchase!'); window.location.href='order-confirmation.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Go-shoply homepage</title>
  <link rel="stylesheet" href="checkout.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuLNguRJlcleGuri-h9hQ5ZsPuygm2jKJ6Lg&s">
</head>

<body>
  <header>
    <h1>Go-shoply mart</h1>
    <nav>
      <ul>
        <li><a id="navbar" href="about.php">About</a></li>
        <li><a id="navbar" href="contact.php">Contact</a></li>
        <li><a href="login.html"><img src="upload/log in.jpeg" id="icon"></a></li>
        <li><a href="cart.php"><img src="upload/shopping basket.jpeg" id="icon"></a></li>
        <li><a id="navbar" href="categories.php">Products</a></li>
      </ul>
    </nav>
  </header>
  <main>
        <h2>Enter Shipping Information</h2>
        <form method="post" action="checkout.php">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="address">Shipping Address:</label>
            <input type="text" id="address" name="address" required><br>

            <label for="payment">Payment Method:</label>
            <select id="payment" name="payment">
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
            </select><br>

            <button type="submit">Complete Purchase</button>
        </form>
    </main>
    <footer class="footer">
  <div class="footer-container">
    <!-- Section for Quick Links -->
    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="products.html">Products</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="terms.html">Terms & Conditions</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Follow Us</h4>
      <ul class="social-links">
        <li><a href="https://facebook.com" target="_blank"><img id="social-logo" src="upload/facebook logo.jpeg"></a></li>
        <li><a href="https://instagram.com" target="_blank"><img id="social-logo" src="upload/instagram logo.jpeg"></a></li>
        <li><a href="https://twitter.com" target="_blank"><img id="social-logo" src="upload/x logo.jpeg"></a></li>
        <li><a href="https://linkedin.com" target="_blank"><img id="social-logo" src="upload/linkedin logo.jpeg"></a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Contact Us</h4>
      <p>Email: <a href="mailto:support@go-shoplystore.com">go-shoplystore@gmail.com</a></p>
      <p>Phone: 0716052342</p>
      <p>Address: Moi avenue, Nairobi, Kenya</p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2025 Go-shoply Store. All rights reserved.</p>
  </div>
</footer>