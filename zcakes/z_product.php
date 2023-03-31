<?php include_once "conn_db.php"; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Add Product</title>
    <style>
        body {
            background: linear-gradient(to right, #C77C8D, #FF8E97, #FFAC9A, #C77C8D);
            background-attachment: fixed;
            overflow: auto; /* or overflow: scroll; */
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
            height: 100%
        }
        .nav-link {
            color: white;
            font-size: larger;
            font-weight: 600;
            font-family: 'Times New Roman', Times, serif;
        }
        .nav-link:hover{
            text-shadow: 0 0 20px white;
        }
        .nav-item {
            margin-right: 30px;
        }
        .blur {
            backdrop-filter: blur(3px);
            background-color: rgba(255, 255, 255, 0.5);
        }
        input[type=email], input[type=password], input[type=text], input[type=number] {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid black;
            color: black;
        }
        input[type=email]::placeholder, input[type=password]::placeholder, input[type=text]::placeholder, input[type=number]::placeholder {
            color: black;
        }
        table.table-bordered, table.table-bordered th, table.table-bordered td {
            color: black;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent mb-3">
        <div class="container mt-3">
            <a class="navbar-brand" href="#" style="color: black; font-size: 20px; font-weight: 600; font-family: Georgia, 'Times New Roman', Times, serif;">
                <img src="images/zcakes logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top me-2">
                ZCAKES ADMINS DASHBOARD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto" style="font-weight: bolder;">
                    <li class="nav-item">
                        <a class="nav-link active" href="z_users.php">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="z_product.php">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="z_order_record.php">Order Records</a>
                    </li>
                    
                    <!-- <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#logoutModal">Log Out</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-3 blur bg-transparent border border-white" style="color: white;text-align: center;"> <!-- adding product, z_item_add.php -->
                <h2 class="mt-3 mb-3">Add Product</h2>
                <?php
                     if(isset($_GET['new_record'])){
                            switch($_GET['new_record']){
                                case "added": echo "<div class='alert alert-success'>product Added.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>product Not Added</div>";
                                      break;
                                        
                            }
                       }
                ?>
                <form action="z_product_insert.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="item_name" placeholder="Item Name" name="item_name" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="number" class="form-control" id="item_price" placeholder="Item Price" name="item_price" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="file" id="item_image" placeholder="Item Image" name="item_image" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control"  placeholder="Item Description" id="item_desc" name="item_desc" required>
                    </div>
                    <div class="form-group mb-4">
                        <select class="form-control" id="item_cat" placeholder="Category ID" name="item_cat" required>
                        <option value="" disabled selected>Select an Item Category</option>
                            <?php
                            // Query the database to get the list of categories
                                $sql = "SELECT cake_id, cake_categ FROM zcake_category";
                                $stmt = $db->prepare($sql);
                                $stmt->execute();
                                $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                // Loop through the categories and create an option element for each
                                foreach($categories as $category) {
                                    echo '<option value="'.$category['cake_id'].'">'.$category['cake_categ'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                        <button type="submit" class="btn btn-primary float-start mb-3 mt-3">Submit</button>
                </form>
            </div>
            <div class="col-9 blur bg-transparent border border-white" style="color: white;"> <!-- Displaying the list of products -->
                <h2 class="mt-3">List of Products</h2>
                <div class="container-fluid">
                    <?php 
                    echo "<hr>";
                        $small_size = 200;
                        
                        // Query the database to get the products and their images
                        $sql = "SELECT p.item_id, p.item_name, p.item_desc, p.item_file, pr.item_price
                            FROM products p
                            INNER JOIN pricing pr ON p.item_id = pr.item_id";
                        $stmt = $db->prepare($sql);
                        $stmt->execute();
                        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    ?>

	                <div class="row">
		                <?php foreach ($products as $product) : ?>
			                <div class="col-md-3 border border-white">
                                <div class="product mt-2 ">
                                    <img style="border: solid green 2px; max-width: 100%;" src="<?php echo "img/" . $product['item_file']; ?>" alt="<?php echo $product['item_name']; ?>" width="<?php echo $small_size; ?>">
                                    <div class="overlay">
                                        <div class="caption" style="text-align: center;">
                                            <h3><?php echo $product['item_name']; ?></h3>
                                            <p><?php echo $product['item_desc']; ?></p>
                                            <p>Price: <?php echo $product['item_price']; ?></p>

                                            <!-- </form>
                                                <form action="z_product_update.php" method="post" style="display: inline-block;">
                                                <input type="hidden" name="item_id" value="<?php echo $product['item_id']; ?>">
                                                <button type="submit" class="btn btn-outline-primary">Update</button>
                                            </form> -->
                                            <?php echo "<td> <a class='btn btn-outline-danger mb-3' style='display: inline-block; margin-right: 40px;' href='z_product_delete.php?item_id=". $product['item_id'] ."'> Delete </a> </td>"; ?>
                                            <?php echo "<td> <a class='btn btn-outline-success mb-3' style='display: inline-block;' href='z_product_update.php?item_id=". $product['item_id'] ."'> Update </a> </td>"; ?>
					                    </div>
				                    </div>
			                    </div>
                            </div>
		                <?php endforeach; ?>
	                </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>