
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            padding: 20px;
        }

        .cart-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        .subtotal {
            font-weight: bold;
        }

        .grand-total {
            font-size: 24px;
            margin-top: 20px;
            font-weight: bold;
        }

        .btn-cancel {
            margin-right: 10px;
        }

        .btn-proceed {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- navigation bar function, filename: user-navbar.php-->
    <?php
        include 'user_navbar_func.php';
        renderCustomNavbar();
    ?>

    <h1 class="text-center">Shopping Cart</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php
                // Check if the cart session variable exists and if it's not empty
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    $cartItems = $_SESSION['cart'];
                    $grandTotal = 0;

                    // Display the cart items
                    foreach ($cartItems as $item) {
                        $productId = $item['product_id'];
                        $productName = $item['product_name'];
                        $productPrice = $item['product_price'];
                        $quantity = $item['quantity'];
                        $subtotal = $productPrice * $quantity;
                        $grandTotal += $subtotal;
                        // Display the product details and quantity for each item in the cart
                        echo "<div class='cart-item'>";
                        echo "<h4>$productName</h4>";
                        echo "<p>Price: $productPrice</p>";
                        echo "<p>Quantity: $quantity</p>";
                        echo "<p>Subtotal: $subtotal</p>";
                        echo "<form action='remove_from_cart.php' method='POST'>";
                        echo "<input type='hidden' name='product_id' value='$productId'>";
                        echo "<input class='btn btn-danger btn-sm' type='submit' value='Remove'>";
                        echo "</form>";
                        echo "</div>";
                    }

                    // Display the grand total
                    echo "<div class='subtotal'>Grand Total: $grandTotal</div>";

                    // Add cancel and proceed buttons
                    echo "<div class='text-center'>";
                    echo "<button class='btn btn-secondary btn-cancel'>Cancel</button>";
                    echo "<button class='btn btn-success btn-proceed'>Proceed</button>";
                    echo "</div>";
                } else {
                    // Display a message if the cart is empty
                    echo "<p>Your cart is empty.</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
