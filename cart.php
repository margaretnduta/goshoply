<?php
// Start the session to manage cart data across pages
session_start();

// Initialize the cart if it doesn't exist in the session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add an item to the cart
function addToCart($name, $price) {
    $_SESSION['cart'][] = ['name' => $name, 'price' => $price];
}

// Function to remove an item from the cart by its index
function removeFromCart($index) {
    array_splice($_SESSION['cart'], $index, 1);
}

// Function to clear the entire cart
function clearCart() {
    $_SESSION['cart'] = [];
}

// Function to calculate the total price of the cart
function calculateTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'];
    }
    return $total;
}

// Handle cart actions (add, remove, clear)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'add') {
        addToCart($_POST['name'], $_POST['price']);
    }
    if (isset($_POST['action']) && $_POST['action'] == 'remove') {
        removeFromCart($_POST['index']);
    }
    if (isset($_POST['action']) && $_POST['action'] == 'clear') {
        clearCart();
    }
}

// Retrieve cart items and calculate the total
$cartItems = $_SESSION['cart'];
$totalPrice = calculateTotal();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Go Shoply Cart</title>
  <link rel="stylesheet" href="cart.css">
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
   <h2>Your Shopping Cart</h2>
    <div class="cart-container">
      <table id="cart-table">
        <thead>
          <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="cart-items">
          <!-- Items will be dynamically inserted here -->
        </tbody>
      </table>
      <div class="cart-summary">
        <p>Total: <span id="total-price">$0.00</span></p>
        <button id="checkout-btn">Proceed to Checkout</button>
        <button id="clear-cart-btn">Clear Cart</button>
      </div>
    </div>
    <script>
// Function to display the cart
// Initialize the cart with some items (you can add dynamic items later)
let cart = [
  { name: "Laptop", price: 499.99 },
  { name: "Smartphone", price: 299.99 },
  { name: "Wireless Earbuds", price: 49.99 }
];

// Function to render cart items in the table
function renderCart() {
  const cartItemsContainer = document.getElementById('cart-items');
  const totalPriceElement = document.getElementById('total-price');

  cartItemsContainer.innerHTML = '';  // Clear the table before rendering
  let total = 0;

  cart.forEach((item, index) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${item.name}</td>
      <td>$${item.price.toFixed(2)}</td>
      <td><button class="remove-btn" data-index="${index}">Remove</button></td>
    `;
    cartItemsContainer.appendChild(row);
    total += item.price;
  });

  // Update the total price
  totalPriceElement.innerText = `$${total.toFixed(2)}`;
}

// Function to remove an item from the cart
function removeItem(index) {
  cart.splice(index, 1);
  renderCart();
}

// Function to clear the cart
function clearCart() {
  cart = [];
  renderCart();
}

// Function to proceed to checkout
function checkout() {
  if (cart.length === 0) {
    alert("Your cart is empty!");
  } else {
    alert("Proceeding to checkout...");
    // You can redirect to another checkout page if needed
  }
}

// Event listeners for actions
document.getElementById('cart-table').addEventListener('click', function(event) {
  if (event.target.classList.contains('remove-btn')) {
    const index = event.target.getAttribute('data-index');
    removeItem(index);
  }
});

document.getElementById('clear-cart-btn').addEventListener('click', clearCart);
document.getElementById('checkout-btn').addEventListener('click', checkout);

// Render the cart when the page loads
renderCart();

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
