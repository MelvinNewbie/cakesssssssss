<?php
    include_once "conn_db.php";

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" 
	content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cake Customization View</title>
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

.image-size{
    width: 100px; 
    height: 100px;"
}
</style>

</head>
<?php
        include 'user_navbar_func.php';
        renderCustomNavbar();

        include("user_customize_func.php");
    ?>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <h2 class="mt-3" style="background-color: pink; text-align: center; font-family:'Times New Roman', Times, serif;">View Customize</h2>
                <div class="container-fluid">
                    <?php 
                        $user_id = $_SESSION['user_id'];

                        $z_details = "SELECT
                        d.details_id AS details_id,
                        d.user_id,
                        d.category_id,
                        d.total_price AS total,
                        s.cake_shape AS shape,
                        sz.cake_size AS size,
                        f.cake_flavor AS flavor,
                        fr.cake_frosting AS frosting,
                        cs.cupcake_size AS cupcake_size,
                        cc.cupcake_filling AS cupcake_filling,
                        d.design_inspo,
                        d.dedication as dedication,
                        d.date_added,
                        f.flavor_price,
                        fr.frosting_price,
                        cs.cc_size_price,
                        cc.filling_price,
                        sz.size_price,
                        s.shape_price,
                        u.user_id,
                        c.item_category AS cat_name
                      FROM
                        z_details d
                        LEFT JOIN z_category c ON d.category_id = c.category_id
                        LEFT JOIN z_shape s ON d.shape_id = s.shape_id
                        LEFT JOIN z_size sz ON d.cake_size_id = sz.cake_size_id
                        LEFT JOIN z_flavor f ON d.flavor_id = f.flavor_id
                        LEFT JOIN z_frosting fr ON d.frosting_id = fr.frosting_id
                        LEFT JOIN z_cc_size cs ON d.cupcake_size_id = cs.cupcake_size_id
                        LEFT JOIN z_cc_filling cc ON d.cc_filling_id = cc.cc_filing_id
                        LEFT JOIN z_user u ON d.user_id = u.user_id

                        WHERE u.user_id = '$user_id';
                       
                    ";

                        $stmt_products = $db->prepare($z_details);
                        $stmt_products->execute();
                        $customize= $stmt_products->fetchAll(PDO::FETCH_ASSOC);

                        echo "<table class='table table-bordered'>";
                        echo "<thead>";
                            echo "<th>Category Name</th>";
                            echo "<th>Cake Shape</th>";
                            echo "<th>Cake Size</th>";
                            echo "<th>Cake Flavor</th>";
                            echo "<th>Cake Frosting</th>";
                            echo "<th>Dedication</th>";
                            echo "<th>Total</th>";
                            echo "<th>Remove</th>";
                        echo "</thead>";
                    foreach($customize as $key => $row){
                        echo "<tr>";
                            echo "<td>" . $row['cat_name'] . "</td>";
                            echo "<td>" . $row['shape'] . "</td>";
                            echo "<td>" . $row['size'] . "</td>";
                            echo "<td>" . $row['flavor'] . "</td>";
                            echo "<td>" . $row['frosting'] . "</td>";
                            echo "<td>" . $row['dedication'] . "</td>";
                            echo "<td>Php " . $row['total'] . "</td>";
                            echo "<td><a class='btn btn-danger' href='user_customize_remove.php?details_id=". $row['details_id'] ."'> Remove </a> </td>";
                        echo "</tr>";
                        }
                        echo "</tr>";
                        echo "<td colspan='7'><strong>Grand Total: </strong>Php </td>";           
                        echo '<td><a class="btn btn-success me-5" href="m_checkout.php">Checkout</a></td>';                 
                        echo "</tr>";
                        echo "</table>";
                    ?>
                

            </div>
        </div>

        </div>
    </div>
    


</body>
    <script src="js/bootstrap.js"></script>

</html>