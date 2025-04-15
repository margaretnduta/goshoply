<?php
// Start the session to access order and cart data
session_start();

// Check if there's an active order
if (!isset($_SESSION['order']) || empty($_SESSION['order'])) {
    // If no order, redirect to homepage
    header('Location: home.html');
    exit();
}

// Retrieve order details from session (this could be stored in a database in real applications)
$order = $_SESSION['order'];
unset($_SESSION['order']); // Clear the order session after confirmation

// Retrieve cart items (to show order summary)
$cartItems = $_SESSION['cart'];
$totalPrice = 0;
foreach ($cartItems as $item) {
    $totalPrice += $item['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="confirmation.css">
</head>
<body>

<header>
    <h1>Go-Shoply Mart - Order Confirmation</h1>
</header>

<main>
    <div class="confirmation-container">
        <h2>Thank you for your purchase!</h2>
        <p>Your order has been successfully placed. Below are your order details:</p>

        <!-- Order details -->
        <div class="order-details">
            <h3>Order Summary:</h3>
            <ul>
                <?php
                foreach ($cartItems as $item) {
                    echo "<li>{$item['name']} - \$" . number_format($item['price'], 2) . "</li>";
                }
                ?>
            </ul>
            <p><strong>Total: $<?php echo number_format($totalPrice, 2); ?></strong></p>
        </div>

        <!-- Shipping Information -->
        <div class="shipping-info">
            <h3>Shipping Information:</h3>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($order['address']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($order['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($order['phone']); ?></p>
        </div>

        <!-- Confirmation Message -->
        <p>Your order is being processed and will be shipped to the address above. You will receive an email with the tracking details once your order is dispatched.</p>

        <!-- Return to Home -->
        <p><a href="home.html">Return to Home</a></p>
    </div>
</main>

<footer>
    <p>&copy; 2025 Go-Shoply Store. All rights reserved.</p>
</footer>

</body>
</html>
