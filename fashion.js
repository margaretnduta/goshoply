// Function to get the current cart from localStorage
function getCart() {
    const cart = localStorage.getItem('cart');
    return cart ? JSON.parse(cart) : [];
  }
  
  // Function to save the cart to localStorage
  function saveCart(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
  }
  
  // Function to add an item to the cart
  function addToCart(name, price) {
    const cart = getCart();
    const existingItem = cart.find(item => item.name === name);
    if (existingItem) {
      existingItem.quantity += 1; // Increment quantity if the item exists
    } else {
      cart.push({ name, price: parseFloat(price), quantity: 1 }); // Add new item
    }
    saveCart(cart);
    alert(`${name} has been added to the cart!`);

  }
  
  // Function to display the cart items on the cart page
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
        <span>${item.name} (x${item.quantity}) - KSh ${(item.price * item.quantity).toFixed(2)}</span>
        <button class="btn remove-item" data-index="${index}">Remove</button>
      `;
      cartContainer.appendChild(cartItem);
      totalPrice += item.price * item.quantity;
    });
  
    totalPriceElement.textContent = `Ksh ${totalPrice.toFixed(2)}`;

  
    // Attach event listeners to remove buttons
    document.querySelectorAll('.remove-item').forEach(button => {
      button.addEventListener('click', event => {
        const index = event.target.getAttribute('data-index');
        removeItemFromCart(index);
      });
    });
  }
  
  // Function to remove an item from the cart
  function removeItemFromCart(index) {
    const cart = getCart();
    cart.splice(index, 1); // Remove the item at the given index
    saveCart(cart);
    displayCart(); // Re-render the cart
  }
  
  // Attach event listeners to add-to-cart buttons (on product pages)
  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
      const name = button.getAttribute('data-name');
      const price = button.getAttribute('data-price');
      addToCart(name, price);
    });
  });
  
  // Display cart on the cart page
  if (document.getElementById('cart-items')) {
    displayCart();
  }
  
  // Checkout button functionality
  if (document.getElementById('checkout-button')) {
    document.getElementById('checkout-button').addEventListener('click', () => {
      alert('Proceeding to checkout!');
      localStorage.removeItem('cart'); // Clear the cart after checkout
      window.location.href = 'checkout.html'; // Redirect to checkout page
    });
  }
