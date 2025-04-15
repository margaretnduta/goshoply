<?php
if (isset($_POST['submit'])) {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "go shoply e-commerce";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data and sanitize it
    $name = htmlspecialchars($_POST['name']);
    $price = htmlspecialchars($_POST['price']);
    $description = htmlspecialchars($_POST['description']);

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        $imageExt = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
        
        // Allowed image extensions
        $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];
        
        if (in_array($imageExt, $allowedExts)) {
            // Generate a unique file name to avoid conflicts
            $newImageName = uniqid() . "." . $imageExt;
            
            // Set the upload directory
            $uploadDir = "uploads/";
            $uploadFile = $uploadDir . $newImageName;

            // Ensure the "uploads" directory exists and is writable
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Create directory if it doesn't exist
            }

            // Check file size (example: max 5MB)
            if ($imageSize > 5 * 1024 * 1024) {
                echo "File size is too large. Maximum allowed size is 5MB.";
            } else {
                // Move the uploaded file to the server
                if (move_uploaded_file($imageTmpName, $uploadFile)) {
                    // Prepare SQL query to insert data into the database
                    $stmt = $conn->prepare("INSERT INTO `fashion products` (name, price, description, image_url) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $name, $price, $description, $newImageName);
                    
                    // Execute the query
                    if ($stmt->execute()) {
                        echo "Product uploaded successfully!";
                    } else {
                        echo "Error: " . $stmt->error;
                    }

                    $stmt->close();
                } else {
                    echo "Error uploading image.";
                }
            }
        } else {
            echo "Invalid image type. Only JPG, JPEG, PNG, GIF allowed.";
        }
    } else {
        echo "No image selected or error with the file.";
    }

    // Close the database connection
    $conn->close();
}
?>

<form action="upload_product.php" method="POST" enctype="multipart/form-data">
    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name" required><br><br>
    
    <label for="price">Price:</label>
    <input type="text" name="price" id="price" required><br><br>
    
    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea><br><br>
    
    <label for="image">Image:</label>
    <input type="file" name="image" id="image" required><br><br>
    
    <button type="submit" name="submit">Upload Product</button>
</form>
