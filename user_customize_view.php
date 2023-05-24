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
                        $sql_products = "SELECT item_id, item_name, item_desc, item_file, item_price
                        FROM products
                        WHERE item_status = 'A' AND cat_id = '{$cat['cat_id']}'";

                        $stmt_products = $db->prepare($sql_products);
                        $stmt_products->execute();
                        $products = $stmt_products->fetchAll(PDO::FETCH_ASSOC);
                    ?>
            </div>
        </div>

        </div>
    </div>
    


</body>
    <script src="js/bootstrap.js"></script>

</html>