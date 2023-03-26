<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ZCAKES Landing Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body class="landing-page">
  <section>
    <header>
      <div class="left-section">
        <a href="index.php" class="home-link"><img src="images/zcakes logo.png" alt="zcakes logo" class="logo"></a>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">MENU</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">FEATURED</a></li>
        </ul>
      </div>
      <div class="right-section">
        <ul>
          <li><a href="l_login.php" class="login-button">Login</a></li>
          <li><a href="r_register.php">Register</a></li>
        </ul>
      </div>
      <div class="toggle" onclick="toggleMenu();"></div>
      <ul class="navigation">
        <li><a href="#">HOME</a></li>
        <li><a href="#">MENU</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">FEATURED</a></li>
        <li><a href="#">LOGIN</a></li>
        <li><a href="#">REGISTER</a></li>
        </ul>
    </header>
    <div class="content">
      <div class="textBox">
        <h2>Design a cake of your own. Only <br>with <span>ZCAKES</span></h2>
        <p>Welcome to ZCakes, your local home-based cake shop specializing in custom-made cupcakes and cakes!
          We create unique and personalized cakes and cupcakes that are perfect for any occasion. From birthdays 
          and weddings to baby showers and holidays! So why settle for generic store-bought cakes when you can have 
          a custom-made dessert that reflects your individual style and taste? Come taste the difference and let us 
          sweeten your day at ZCakes!
        </p>
        <a href="">Order Now!</a>
      </div>
      <div class="imgBox">
        <img src="images/1cakes.png" alt="cake" class="zcakes">
      </div>
    </div>
    <ul class="thumb">
      <li> <img src="images/thumbc1.png" alt="thumb1" onclick="imgSlider('images/1cakes.png')"></li>
      <li> <img src="images/thumbc2.png" alt="thumb2" onclick="imgSlider('images/2boucakes.png')"></li>
      <li> <img src="images/thumbc3.png" alt="thumb3" onclick="imgSlider('images/3layered cake.png')"></li>
      <li> <img src="images/thumbc4.png" alt="thumb4" onclick="imgSlider('images/4cupcakes.png')"></li>
      <li> <img src="images/thumbc5.png" alt="thumb5" onclick="imgSlider('images/5bento.png')"></li>
    </ul>
  </section>
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
  <footer>
    <div class="contact-info">
      <h4>CONTACT US</h4>
      <p>Phone:    0916 352 0506</p>
      <p>Email:    <a href="mailto:suzethbuizacam@gmail.com">suzethbuizacam@gmail.com</a></p>
    </div>
    <div class="social-media">
      <h4>FOLLOW US</h4>
      <a href="https://web.facebook.com/Zcakesalbay" target="_blank"><img src="images/facebook.png" alt="Facebook"></a>
      <a href="https://www.instagram.com/zcakes_albay" target="_blank"><img src="images/instagram.png" alt="Instagram"></a>
      <a href="https://www.tiktok.com/@zcakes_albay" target="_blank"><img src="images/tiktok.png" alt="Tiktok"></a>
    </div>    
    <div class="location">
      <h4>LOCATION</h4>
      <p>Austero Street, Iraya Sur, <br>
        Oas, Albay, Philippines, 4505</p>
    </div>
  </footer>  
</body>
</html>