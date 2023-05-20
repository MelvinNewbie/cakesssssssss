<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>ZCAKES Landing Page</title>
    <style>
        body {
            /* background: linear-gradient(to right, #C77C8D, #FF8E97, #FFAC9A, #C77C8D); */
            background-image: url("images/bgg.jpg");
            /* background-attachment: fixed; */
            /* overflow: auto; */
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
            height: 100%
        }
        .navbar-nav li a {
            color: black !important;
        }
        .content
        {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .content .textBox
        {
            position: relative;
            max-width: 600px;
        }
        .content .textBox h2
        {
            color: black;
            font-size: 4em;
            font-weight: 1.2em;
            font-weight: 400;
            font-family: sans-serif;
        }
        .content .textBox h2 span
        {
            color: deeppink;
            font-size: 1.2em;
            font-weight: bolder;
            font-style: italic;
            font-family: 'Poppins';
        }
        .content .textBox p
        {
            color: black;
            font-family: Arial, sans-serif;
            text-align: justify;
            letter-spacing: 1px;
        }
        
        .content .imgBox
        {
            width: 600px;
            display: flex;
            justify-content: flex-end;
            padding-right: 50px;
            margin-top: 15px;
        }
        .content .imgBox img
        {
          max-width: 450px;
        }
        .thumb
        {
            position: absolute;
            left: 50%;
            bottom: 20px;
            transform: translateX(-50%);

            display: flex;
        }
        .thumb li
        {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            cursor: pointer;
            transition: 0.5s;
        }
        .thumb li:hover {
            transform: translateY(-15px);
        }

        .thumb li img
        {
            max-width: 60px;
        }
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
    </style>
</head>
<body>
    <!-- navigation bar function, filename: user_navbar_func.php-->
    <?php
        include 'user_navbar_func.php';
        renderCustomNavbar();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 mt-5">
                <div class="content">
                    <div class="textbox">
                        <h2 class="ms-5 mb-3">Design a cake of your own. Only <br>with <span>ZCAKES</span></h2>
                            <p>Welcome to ZCakes, your local home-based cake shop specializing in custom-made cupcakes and cakes!
                                We create unique and personalized cakes and cupcakes that are perfect for any occasion. From birthdays 
                                and weddings to baby showers and holidays! So why settle for generic store-bought cakes when you can have 
                                a custom-made dessert that reflects your individual style and taste? Come taste the difference and let us 
                                sweeten your day at ZCakes!
                            </p>
                        </div>
                    </div>
                <div class="text-center" style="border-radius: 15px;">
                    <a class="btn btn-dark mx-auto text-wrap bg-black me-5" href="m_menu.php">Order Now!</a>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <div class="imgBox">
                    <img src="images/1cakes.png" alt="cake" class="zcakes">
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <ul class="thumb">
                    <li> <img src="images/thumbc1.png" alt="thumb1" onclick="imgSlider('images/1cakes.png')"></li>
                    <li> <img src="images/thumbc2.png" alt="thumb2" onclick="imgSlider('images/2boucakes.png')"></li>
                    <li> <img src="images/thumbc3.png" alt="thumb3" onclick="imgSlider('images/3layered cake.png')"></li>
                    <li> <img src="images/thumbc4.png" alt="thumb4" onclick="imgSlider('images/4cupcakes.png')"></li>
                    <li> <img src="images/thumbc5.png" alt="thumb5" onclick="imgSlider('images/5bento.png')"></li>
                </ul>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

    <div class="container-fluid bg-white mt-5">
        <div class="row">
        <div class="col-sm-1"></div>
            <div class="col-sm-3 text-center">
                <div class="contact-info">
                    <h5>CONTACT US</h5>
                    <p>Phone: 0916 352 0506<br>
                    Email: <a href="mailto:suzethbuizacam@gmail.com">suzethbuizacam@gmail.com</a></p>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="social-media">
                    <h5>FOLLOW US</h5>
                    <a href="https://web.facebook.com/Zcakesalbay" target="_blank"><img src="images/facebook.png" alt="Facebook"></a>
                    <a href="https://www.instagram.com/zcakes_albay" target="_blank"><img src="images/instagram.png" alt="Instagram"></a>
                    <a href="https://www.tiktok.com/@zcakes_albay" target="_blank"><img src="images/tiktok.png" alt="Tiktok"></a>
                </div> 
            </div>
            <div class="col-sm-3 text-center">
                <div class="location">
                   <h5>LOCATION</h5>
                    <p>Austero Street, Iraya Sur, <br>
                    Oas, Albay, Philippines, 4505</p>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

</body>
<script type="text/javascript">
    function imgSlider(anything){
      document.querySelector('.zcakes').src = anything;
    }
    function toggleMenu()
    {
      var menuToggle = document.querySelector('.toggle');
      menuToggle.classList.toggle('active')
      if (menuToggle.classList.contains('active')) 
      {
        // Show the close icon
        menuToggle.style.backgroundImage = 'url(images/close.png)';
      } else 
      {
        // Show the menu icon
        menuToggle.style.backgroundImage = 'url(images/menu.png)';
      }
      var navigation = document.querySelector('.navigation')
      navigation.classList.toggle('active')
      }
</script>

<script src="js/bootstrap.js"></script>
</html>