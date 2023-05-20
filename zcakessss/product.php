<?php 
include_once "conn_db.php";


if(isset($_POST['add_to_cart']) || isset($_POST['buy_now'])){
    $user_id = $_SESSION['user_id'];
    $item_id = $_POST['product_id'];
    $item_qty = $_POST['product_qty'];
    
    if(isset($_POST['add_to_cart'])){
        $redirect_url = "./user_addcart.php?item_id=$item_id&item_qty=$item_qty&user_id=$user_id";
    } else {
        $redirect_url = "./user_checkout.php?item_id=$item_id&item_qty=$item_qty&user_id=$user_id";
    }
    
    header("Location: " . $redirect_url);
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Section</title>
    <link rel="stylesheet" href="user.visitor_product.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Products</title>
    <style>
        body {
            background-image: url("images/bgg.jpg");
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

        .bottom-part {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .bottom-part h2 {
            font-size: 60px;
            margin-bottom: 10px;
        }

        .bottom-part p {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6b6b;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #ff6b6b;
            color: black;
        }

        #product-cards h1 {
            text-align: center;
            font-weight: bold;
            background-color: pink;
            color: deeppink;
            text-shadow: 1px 1px 1px black;
            padding: 10px;
        }

        #product-cards h4 {
            font-weight: bold;
            margin-bottom: 15px;
            padding-bottom: 15px;
            color: black;
            border-bottom: 2px solid rgba(161, 109, 14, 1);
        }

        #product-cards .row {
            justify-content: center;
            margin-top: 20px;
        }

        #product-cards .col-md-6 {
            margin-bottom: 20px;
        }

        #product-cards .card {
            background-color: #FA9884;
            box-shadow: 0 0 6px black;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        #product-cards .card:hover {
            transform: translateY(-5px);
        }

        #product-cards .card-body {
            padding: 10px;
            text-align: center;
        }

        #product-cards .card-body h6 {
            font-size: 15px;
            color: black;
            font-weight: bold;
            margin-top: 10px;
        }

        .buy-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #ff6b6b;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .buy-button:hover {
            background-color: #ff6b6b;
            color: black;
        }
        /* Order Now button */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6b6b;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .button:hover{
            background-color: #ff6b6b;
            color: black;
        }
    </style>
</head>

<body>
    <!-- navigation bar function, filename: user-navbar.php-->
    <?php
        include 'user_navbar_func.php';
        renderCustomNavbar();
    ?>

    <section id="product-cards">
        <div class="container">
            <h1>FEATURED CAKES</h1>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/bento1.png" alt="">
                        <div class="card-body">
                            <h6>250.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Blue Bento" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="250.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/bento2.png" alt="">
                        <div class="card-body">
                            <h6>250.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento white" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="250.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/bento3.png" alt="">
                        <div class="card-body">
                            <h6>250.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Flower Bento" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="250.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/bento4.png" alt="">
                        <div class="card-body">
                            <h6>250.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="HBD Bento" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="250.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Cakes</h4>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/lay1.jpg" alt="">
                        <div class="card-body">
                            <h6>800.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento Cake 1" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="600.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/lay2.jpg" alt="">
                        <div class="card-body">
                            <h6>800.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento Cake 1" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="600.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/lay3.jpg" alt="">
                        <div class="card-body">
                            <h6>800.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento Cake 1" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="600.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/lay5.jpg" alt="">
                        <div class="card-body">
                            <h6>800.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento Cake 1" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="600.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Cupcakes</h4>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/cc8.png" alt="">
                        <div class="card-body">
                            <h6>800.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento Cake 1" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="600.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/cc9.png" alt="">
                        <div class="card-body">
                            <h6>800.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento Cake 1" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="600.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/cc10.png" alt="">
                        <div class="card-body">
                            <h6>800.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento Cake 1" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="600.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/cc11.png" alt="">
                        <div class="card-body">
                            <h6>800.00</h6>
                            <a href="#" class="buy-button" data-toggle="modal" data-target="#modal-bento"
                                data-name="Bento Cake 1" data-description="This is a delicious and beautifully decorated bento cake. It is perfect for any occasion and will delight your taste buds." data-price="600.00">Buy</a>
                            <a href="user_cart.php" class="buy-button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for all products -->
    <div class="modal fade" id="modal-bento" tabindex="-1" role="dialog" aria-labelledby="modal-bento-label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" alt="" id="modal-image">
                    <h4 class="modal-title" id="modal-bento-label"></h4>
                    <p id="modal-description"></p>
                    <p id="modal-price"></p>
                    <form>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" min="1" max="10" value="1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                    <button type="button" class="btn btn-danger">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-part">
            <h2>Only at ZCakes!</h2>
            <p>Don't wait to indulge in our irresistible cakes - click the order button now and treat yourself or someone special to a truly delicious experience!</p>
            <a href="order_now.php" class="button">Customize</a>
        </div>
    </div>


    <!-- Contact us function, filename: user_navbar_func.php-->
    <?php 
        renderContactSection(); 
    ?>


    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#modal-bento').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var name = button.data('name');
                var description = button.data('description');
                var price = button.data('price');
                var imageSrc = button.closest('.card').find('img').attr('src');

                var modal = $(this);
                modal.find('.modal-title').text(name);
                modal.find('#modal-description').text(description);
                modal.find('#modal-price').text('Price: $' + price);
                modal.find('#modal-image').attr('src', imageSrc);
            });
        });
    </script>
        
</body>

</html>
