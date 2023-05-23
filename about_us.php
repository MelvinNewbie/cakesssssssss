<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" 
	content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
	<title>About Us</title>
	<style>
        body {
            background-image: url("images/bgg.jpg");
            background-size: cover;
            background-position: flex;
            background-repeat: repeat;
            height: 100%
        }
		    .navbar-nav li a {
            color: black !important;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px;
        }

        
        /* css - bottom part START here(contacts, follow us, and location) */
        .social-media a img {
            transform: scale(0.5);
            margin: 10px;
        }
        .container-fluid * {
            font-family: "Times New Roman", Times, serif;
            font-size: medium;
            margin-top: 5px;
        }
        .container-fluid h5{
            font-weight: bolder;
        }
        /* css - bottom part ENDS here(contacts, follow us, and location) */
  </style>	
</head>
<body>

    <!-- navigation bar function, filename: user_navbar_func.php-->
    <?php
        include 'user_navbar_func.php';
        renderCustomNavbar();
    ?>

        <div class="container"
             style="padding-top: 10px;">
                <div class="row">
                  <div div class="col-1"></div>
                  <div class="col-12" 
                     style="background-color:#F99B7D; 
                            border-radius:20px; 
                            color: black; 
                            text-align: center;">
                  <h2 class="mb-4">About Us</h2>
                  <p>In ZCakes, we offer a platform for customers to create their own custom cakes, selecting everything from the size, shape, and flavor of the cake to the decorations and frosting. Our system allows for endless possibilities and creativity, giving customers the freedom to design a cake that perfectly suits their needs and tastes.</p>
                  <h4 class="mb-4">What We Sell</h4>
                  <p> At our website, we sell customized cakes. Customers can choose from a variety of cake flavors, sizes, shapes, and decorations, creating a unique cake that's perfect for any occasion. We also offer add-ons like custom cake toppers, candles, and other accessories to make the cake even more special.</p>
                  <h4 class="mb-4">How Our System Works</h4>
                  <p>Our system is easy to use - customers can simply visit our website and choose the customization options they want for their cake. They can select the cake size, shape, flavor, frosting, and decorations. Once they're happy with their chosen designs, they can place the order and we'll take care of the rest!</p>
                  <h4 class="mb-4">Our Target Market</h4>
                  <p>Our target market is anyone who loves cake and wants a customized cake that's perfect for their needs. We cater to a wide range of events and occasions, including birthdays, weddings, baby showers, graduations, and more. Whether you're looking for a simple cake for a small gathering or an elaborate cake for a big event, we've got you covered.</p>
                  <h4 class="mb-4">Delivery and Scope</h4>
                  <p> We do not offer delivery for our products, instead we offer the option of pickup at our location. A customer should need to come to the shop personally and pick-up their cakes at the date of product pick-up. Our delivery scope currently covers only the Municipality of Oas, but we are looking to expand our reach in the future.
                  </p>
                  </div> 
                    <div class="col-2"></div>
                </div>
          </div>
    
    <!-- Contact us function, filename: user_navbar_func.php-->
    <?php 
        renderContactSection(); 
    ?>
</body>
</html>