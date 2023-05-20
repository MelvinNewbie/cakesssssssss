
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
        .navbar-nav li a {
            color: black !important;
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
        include_once 'conn_db.php';
        
        include 'user_navbar_func.php';
        renderCustomNavbar();
    ?>

    <h1 class="text-center">Shopping Cart</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <?php
    // Display the contents of the cart that the user ordered, m_displaycart.php
    echo "<hr>";
    if (!empty($_SESSION['cart'])) { // check if the cart is not empty
        echo "<table class='table table-bordered'>";    
        echo "<thead>";             
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Subtotal</th>";
        echo "<th>Action</th>";

        // Fetch all the item details from the database

        $total = 0; // initialize total variable
                        foreach ($_SESSION['cart'] as $product_id => $item_qty) {          
                            // Get the details of the item from the database
                            $query = "SELECT product_id, product_name, product_price
                                FROM z_feat_products
                                WHERE product_id = ?";
                        
                            $stmt = $db->prepare($query);
                            $stmt->execute([$product_id]);
                            $result = $stmt->fetch(PDO::FETCH_ASSOC);

                            // Calculate the subtotal for the item
                            $subtotal = $item_qty * $result['product_price'];
                            // Add the subtotal to the total amount
                            $total += $subtotal;

                            // Display a row for the item in the cart
                            echo '<tr>';
                            echo '<td>' . $result['product_name'] . '</td>';
                            echo '<td>' . $item_qty . '</td>';
                            echo '<td>' . $subtotal . '</td>';
                            echo '<td><a class="btn btn-danger" href="user_addcart.php?remove=' . $product_id . '">Remove</a></td>';
                            echo '</tr>';
                        }

                        // Add a button to the bottom of the cart

                        echo "<tr>";
                        echo "<td colspan='3'><strong>Total Amt: </strong>Php " . $total . "</td>";           
                        echo '<td><a class="btn btn-success me-5" href="checkout.php">Checkout</a></td>';                 
                        echo "</tr>";
                        echo "</tbody>";
                        echo "</table>";
                    } else {
                        // Display a message if the cart is empty
                        echo "<hr>";
                        echo "<table class='table table-bordered'>";    
                        echo "<thead>";             
                        echo "<th>Item Name</th>";
                        echo "<th>Item Qty.</th>";
                        echo "<th>Subtotal</th>";   
                        echo "<th>Action</th>";

                        echo "<p>Your cart is currently empty, Place an order.</p>";
                    }
    ?>


            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
