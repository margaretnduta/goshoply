<?php
session_start();
include 'dbconnection.php';
// Initialize the cart if not already initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add item to cart
function addToCart($itemId, $itemName, $itemPrice) {
    $item = [
        'id' => $itemId,
        'name' => $itemName,
        'price' => $itemPrice,
        'quantity' => 1 // Default quantity for new item is 1
    ];

    // Check if item already exists in the cart
    $found = false;
    foreach ($_SESSION['cart'] as &$cartItem) {
        if ($cartItem['id'] == $itemId) {
            // If the item already exists, just increment its quantity
            $cartItem['quantity']++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        // If item doesn't exist, add it to the cart
        $_SESSION['cart'][] = $item;
    }
}

// Check if the "add to cart" action was triggered
if (isset($_POST['action']) && $_POST['action'] == 'addToCart') {
    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];

    // Add item to the cart
    addToCart($itemId, $itemName, $itemPrice);
    echo json_encode(['status' => 'success', 'message' => 'Item added to cart']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Go-shoply homepage</title>
  <link rel="stylesheet" href="home.css" />
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
        <li><a href="login.php"><img src="upload/log in.jpeg" id="icon"></a></li>
        <li><a href="cart.php"><img src="upload/shopping basket.jpeg" id="icon"></a></li>
        <li><a id="navbar" href="categories.php">Products</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="advertisment">
      <p>Discover a world of endless possibilities where you can shop <br>
        for everything you need and more, all in one place. Find unbeatable deals,<br>
        exclusive products, and a shopping experience that's as exciting as it is convenient</p>
    </section>
    <section class="categories">
      <h2>Shop by categories...</h2>
      <div class="product-categories">
        <a href="home appliances.php">
          <div class="category">
            <img src="upload/home appliance.avif" alt="Home appliances" />
            <p>Home appliances</p>
          </div>
        </a>
        <a href="fashion.php">
          <div class="category">
            <img src="upload/fashion.avif" alt="clothes and jewellery" />
            <p>Clothes and jewellery</p>
          </div>
        </a>
        <a href="electronics.php">
          <div class="category">
            <img src="upload/electronics.avif" alt="electronics" />
            <p>Electronics</p>
          </div>
        </a>
      </div>
    </section>
    <div class="advertisement-container">
      <div class="advertisement">
        <a href="home appliances.php">
        <img src="upload/appliance advert.avif" alt="Ad 1"></a>
        <a href="home appliances.php">
        <img src="upload/home appliance advert.jpg" alt="Ad 3"></a>
         <a href="home appliances.php">
        <img src="upload/appliance advert.avif" alt="Ad 1"></a>
        <a href="Bodyproducts.php">
        <img src="upload/body product advert.avif" alt="Ad 2"></a>
        <a href="home appliances.php">
        <img src="upload/home appliance advert.jpg" alt="Ad 3"></a>
        <a href="Bodyproducts.php">
        <img src="upload/nivea advert.webp" alt="Ad 4"></a>
        <a href="home appliances.php">
        <img src="upload/appliance advert.avif" alt="Ad 1"></a>
      </div>
    </div>
    <section class="offers">
      <h2>Offers you cannot miss</h2>
      <div class="deals">
        <div class="offerproduct">
          <img src="upload/Samsung 40 kg washing machine.jpg" alt="Samsung 40KG washing machine">
          <p>Samsung 40KG washing machine</p>
          <h3 id="past-price">Was Kshs 100,000 </h3>
          <h3> Now Kshs 78,500</h3>
          <button class="add-to-cart">+</button>
        </div>
        <div class="offerproduct">
          <img src="upload/Samsung microwave.jpg" alt="Samsung 30L micri=owave">
          <p>Samsung 30L microwave</p>
          <h3 id="past-price">Was Kshs 45,000</h3>
          <h3> Now Kshs 30,000</h3>
          <button class="add-to-cart">+</button>
        </div>
        <div class="offerproduct">
          <img src="upload/nivea sunscreen.jpeg" alt="nivea sunscreen">
          <p>Nivea sunscreen 80spf</p>
          <h3 id="past-price">Was Kshs 2800 </h3>
          <h3> Now Kshs 2500 </h3>
          <button class="add-to-cart">+</button>
        </div>
        <div class="offerproduct">
          <img src="upload/maybelline lipsticks.jpeg" alt="Maybelline lip sticks">
          <p>Maybelline lipstick set</p>
          <h3 id="past-price">Was Kshs 5500 </h3>
          <h3> Now Kshs 4500</h3>
          <button class="add-to-cart">+</button>
        </div>
        <div class="offerproduct">
          <img src="upload/loreal pure clay.avif" alt="Loreal pure clay mask">
          <p>Loreal pure clay mask</p>
          <h3 id="past-price">Was Kshs 3500 </h3>
          <h3> Now Kshs 2500 </h3>
          <button class="add-to-cart">+</button>
        </div>
      </div>
  <script>document.querySelector('.add-to-cart').addEventListener('click', function() {
  alert('Item added to cart!');
});
</script>
    </section>
    <section class="ingredients">
      <div class="ingredients-container">
  <h3>Ingredients</h3>
  <div class="ingredients-list">
    <div class="ingredient-item">
      <img src="upload/ugali pembe flour.jpeg" alt="Flour">
      <h4>2kg Maize Flour</h4>
      <p class="price">Ksh 290</p>
      <button class="add-to-cart">+</button>
    </div>
    <div class="ingredient-item">
      <img src="upload/chapati flour.jpeg" alt="Flour">
      <h4>2kg Wheat Flour</h4>
      <p class="price">Ksh 290</p>
      <button class="add-to-cart">+</button>
    </div>
    <div class="ingredient-item">
      <img src="upload/kabras sugar.jpeg" alt="Sugar">
      <h4>Sugar</h4>
      <p class="price">Ksh 300</p>
      <button class="add-to-cart">+</button>
    </div>
    <div class="ingredient-item">
      <img src="upload/tropical heat paprika.jpeg" alt="paprika">
      <h4> Paprika</h4>
      <p class="price">Ksh 150</p>
      <button class="add-to-cart">+</button>
    </div>
    <div class="ingredient-item">
      <img src="upload/eggs.jpeg" alt="Eggs">
      <h4>Eggs</h4>
      <p class="price">Ksh 400</p>
      <button class="add-to-cart">+</button>
    </div>
    <div class="ingredient-item">
      <img src="upload/fesh fri.jpeg" alt="Eggs">
      <h4>Fresh Fri Vegetable oil 5L</h4>
      <p class="price">Ksh 1650</p>
      <button class="add-to-cart">+</button>
    </div>
    <div class="ingredient-item">
      <img src="upload/coconut milk.jpeg" alt="Eggs">
      <h4>Coconut milk</h4>
      <p class="price">Ksh 240</p>
      <button class="add-to-cart">+</button>
    </div>
  </div>
</div>
 </section>
  
</main>
</body>
<script>
let currentSlide = 0; // To keep track of the current slide
const images = document.querySelectorAll('.advertisement img');
const advertisement = document.querySelector('.advertisement');
const totalImages = images.length;

function slideImages() {
  currentSlide++;
  if (currentSlide >= totalImages) {
    currentSlide = 0; // Reset to the first image when it reaches the end
  }

  // Move the container by shifting it left according to the image's width
  advertisement.style.transform = `translateX(-${currentSlide * 100}%)`;
}

// Set an interval for the sliding effect (every 3 seconds)
setInterval(slideImages, 3000); // Change slide every 3 seconds
</script>
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
</body>
</html>