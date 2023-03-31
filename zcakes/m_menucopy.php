<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ZCAKES Home Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <style>
  /* Style for the links */
  .thumb a {
    color: blue;
    text-decoration: none;
  }
  
  /* Style for the links when hovered */
  .thumb a:hover {
    color: red;
    text-decoration: underline;
  }
  
  /* Style for the labels */
  .thumb p {
    font-size: 14px;
    color: black;
    text-align: center;
  }
</style>
</head>
<body class="landing-page">
  <section>
    <header>
      <div class="left-section">
        <a href="home.php" class="home-link"><img src="images/zcakes logo.png" alt="zcakes logo" class="logo"></a>
        <ul>
          <li><a href="home.php">HOME</a></li>
          <li><a href="m_menu.php">MENU</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">FEATURED</a></li>
        </ul>
      </div>
      <div class="right-section">
        <ul>
          <li><a href="l_logout.php" class="login-button">Log Out</a></li>
        </ul>
      </div>
      <div class="toggle" onclick="toggleMenu();"></div>
      <ul class="navigation">
        <li><a href="home.php">HOME</a></li>
        <li><a href="m_menu.php">MENU</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">FEATURED</a></li>
        <li><a href="#">LOGIN</a></li>
        <li><a href="#">REGISTER</a></li>
        </ul>
    </header>
    <div class="content">
      <div class="textBox">
        <h2>Design a cake of your own. Only <br>with <span>ZCAKES</span></h2>
      </div>
      <div class="imgBox">
        <img src="images/1cakes.png" alt="cake" class="zcakes">
      </div>
    </div>
    <ul class="thumb">
  <li>
    <a href="m_cakes.php">
      <img src="images/thumbc1.png" alt="thumb1" onclick="imgSlider('images/1cakes.png')">
      <p>Cakes</p>
    </a>
  </li>
  <li>
    <a href="m_boucakes.php">
      <img src="images/thumbc2.png" alt="thumb2" onclick="imgSlider('images/2boucakes.png')">
      <p>Boucakes</p>
    </a>
  </li>
  <li>
    <a href="m_layeredcake.php">
      <img src="images/thumbc3.png" alt="thumb3" onclick="imgSlider('images/3layered cake.png')">
      <p>Layered Cake</p>
    </a>
  </li>
  <li>
    <a href="m_cupcakes.php">
      <img src="images/thumbc4.png" alt="thumb4" onclick="imgSlider('images/4cupcakes.png')">
      <p>Cupcakes</p>
    </a>
  </li>
  <li>
    <a href="m_bento.php">
      <img src="images/thumbc5.png" alt="thumb5" onclick="imgSlider('images/5bento.png')">
      <p>Bento</p>
    </a>
  </li>
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