
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="check.css">
</head>
<body>
  <div class="container">
    <h1>Checkout</h1>

    <!-- Cart Items Section -->
    <div id="checkout-items">
      <h2>Your Cart</h2>
      <div id="cart-items"></div>
      <p><strong>Total Price: $<span id="total-price">0.00</span></strong></p>
    </div>

    <!-- Customer Information Form -->
    <div id="customer-info">
      <h2>Billing Information</h2>
      <form id="checkout-form">
        <div>
          <label for="name">Full Name</label>
          <input type="text" id="name" name="fullname" required />
        </div>
        <div>
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div>
          <label for="address">Shipping Address</label>
          <textarea id="address" name="address" required></textarea>
        </div>
        <label for="payment">Payment Method:</label>
    <select id="payment" name="payment">
        <option value="credit-card">Credit Card</option>
        <option value="paypal">PayPal</option>
    </select><br><br>
        <div>
          <button type="submit" id="place-order" onclick="location.href='check2.php' ">Place Order</button>
        </div>
      </form>
    </div>
  </div>

  <script >
    // checkout.js

// Function to get the current cart from localStorage
function getCart() {
    const cart = localStorage.getItem('cart');
    return cart ? JSON.parse(cart) : [];
  }
  
  // Function to display the cart items on the checkout page
  function displayCart() {
    const cart = getCart();
    const cartContainer = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');
  
    cartContainer.innerHTML = ''; // Clear previous items
    let totalPrice = 0;
  
    cart.forEach((item, index) => {
      const cartItem = document.createElement('div');
      cartItem.classList.add('cart-item');
      cartItem.innerHTML = `
        <span>${item.name} (x${item.quantity}) - $${(item.price * item.quantity).toFixed(2)}</span>
      `;
      cartContainer.appendChild(cartItem);
      totalPrice += item.price * item.quantity;
    });
  
    totalPriceElement.textContent = totalPrice.toFixed(2);
  }
  
  // Function to handle checkout form submission
  function handleCheckout(event) {
    event.preventDefault(); // Prevent form submission
  
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const address = document.getElementById('address').value;
  
    if (name && email && address) {
      alert`(Thank you for your order, ${name}! Your order will be shipped to: ${address})`;
      localStorage.removeItem('cart'); // Clear the cart after successful checkout
      window.location.href = 'home.php'; // Redirect to confirmation page
    } else {
      alert('Please fill in all the fields.');
    }
  }
  
  // Attach event listener to the checkout form
  if (document.getElementById('checkout-form')) {
    document.getElementById('checkout-form').addEventListener('submit', handleCheckout);
  }
  
  // Display cart items when the page loads
  if (document.getElementById('cart-items')) {
    displayCart();
  }

  </script>
</body>
</html>
