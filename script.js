// Function to handle adding products to the cart
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        const productName = this.getAttribute('data-name');
        const productPrice = parseFloat(this.getAttribute('data-price'));

        addToCart(productName, productPrice);
    });
});

// Function to add product to the cart (store in localStorage)
function addToCart(name, price) {
    // Get the current cart from localStorage or initialize an empty array
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Add the new product to the cart array
    cart.push({ name, price });

    // Save the updated cart back to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Optionally, update the cart count on the page or display a message
    alert(`${name} has been added to the cart!`);
}
