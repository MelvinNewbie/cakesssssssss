<head>
    <?php include_once "conn_db.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Products</title>
    <style>
        body {
            background-image: url("images/bgg.jpg");
            background-attachment: fixed;
            overflow: auto; /* or overflow: scroll; */
            background-size: cover;
            background-position: flex;
            background-repeat: repeat;
            height: 100%;
        }

        .navbar-nav li a {
            color: black !important;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px;
        }
        tbody{
                position: relative;
                font-family: 'Arial Narrow', Arial, sans-serif;
                text-align: center;
                background-color: rgba(255, 255, 255, 0.5);     
            }
            thead {
                background-color: white;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                text-align: center;
            }

            h1 {
                font-family: 'Arial Narrow';
                text-align: center;
                letter-spacing: 5px;
            }
            .float-start {
                background-color: #007bff;
                color: #fff;
                border-color: #007bff;
                padding: 0.5rem 1rem;
                border-radius: 0.25rem;
                transition: all 0.3s ease;
            }

            .float-start:hover {
                background-color: #0069d9;
                color: #fff;
                border-color: #0062cc;
                text-decoration: none;
            }
    </style>
</head>
<body>
<body>
    <!-- navigation bar function, filename: user-navbar.php-->
    <?php
        include 'user_navbar_func.php';
        renderCustomNavbar();
    ?>
    <section class="container py-5">
    <div class="row mb-3">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Date Ordered</th>
                <th>Date Pickup</th>
                <th>Order Reference</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT o.order_id
                         , p.product_name
                         , o.order_qty
                         , (o.order_qty * p.product_price) AS amount
                         , o.date_ordered
                         , o.pickup_date
                         , o.ref_num
                         , o.order_status
                    FROM `z_orders` o
                    JOIN `z_products` p ON o.product_id = p.product_id
                    -- LEFT JOIN `z_order_summary` s ON o.summary_id = s.summary_id
                    WHERE o.user_id = $user_id";
            $result = query($conn, $sql);
            
            foreach($result as $key => $row) {
                $product_name = $row['product_name'];
                $order_qty = $row['order_qty'];
                $amount = $row['amount'];
                $date_ordered = $row['date_ordered'];
                $date_pickup = $row['pickup_date'];
                $ref_num = $row['ref_num'];
                $order_status = $row['order_status'];
                
                echo "
            <tr>
                <td>" . $product_name . "</td>
                <td>" . $order_qty . "</td>
                <td>" . $amount . "</td>
                <td>" . $date_ordered . "</td>
                <td>" . $date_pickup . "</td>
                <td>" . $ref_num . "</td>
                <td>" . $order_status . "</td>
            </tr>";
            }
            ?>
        </tbody>
        </table>
    </section>
</body>