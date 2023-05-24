<?php
    include_once "conn_db.php";
    include("user_customize_func.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" 
	content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cake Customization Form</title>
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

.step {
    display: none;
}

.summary {
    margin-top: 20px;
}

.progress-bar {
    transition: width 0.3s ease-in-out;
}

.options {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.options .form-check-input {
    display: none;
}

.next-btn,
.prev-btn {
    margin-top: 10px;
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
    ?>
<body>

<div class="container">
  <h1>Cake Customization Form</h1>
  <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="progressBar">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 100%"></div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card mt-3 border border-dark" style="background-color: pink;">
        <div class="card-body">
          <h3 class="card-title mb-4">Step 1: Select Category</h3>
          <div class="row">
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="cake" value="cake" onchange="updateProgressBar(20, 'category')">
                <label class="form-check-label" for="cake">
                  <img class="image-size border border-dark" src="images/cake4.jpg" alt="Cake">
                  <div class='text-center'>Cake</div>
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="bento" value="bento" onchange="updateProgressBar(20, 'category')">
                <label class="form-check-label" for="bento">
                  <img class="image-size border border-dark" src="images/cake4.jpg" alt="Cake">
                  <div class='text-center'>Bento Cake</div>
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="cupcake" value="cupcake" onchange="updateProgressBar(20, 'category')">
                <label class="form-check-label" for="cupcake">
                  <img class="image-size border border-dark" src="images/cake4.jpg" alt="Cake" >
                  <div class='text-center'>Cupcake</div>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-3 border border-dark" style="background-color: pink;">
        <div class="card-body">
          <h3 class="card-title mb-4">Step 2: Select Shape, Size, and Layer</h3>
          <div class="row">
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="shape" id="shape1" value="shape1" onchange="updateProgressBar(20, 'shape')">
                <label class="form-check-label" for="shape1">
                  <img class="image-size border border-dark" src="images/cake4.jpg" alt="Shape 1">
                  <div class='text-center'>Shape 1</div>
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="shape" id="shape2" value="shape2" onchange="updateProgressBar(20, 'shape')">
                <label class="form-check-label" for="shape2">
                  <img class="image-size border border-dark" src="images/cake4.jpg" alt="Shape 2">
                  <div class='text-center'>Shape 2</div>
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="shape" id="shape3" value="shape3" onchange="updateProgressBar(20, 'shape')">
                <label class="form-check-label" for="shape3">
                  <img class="image-size border border-dark" src="images/cake4.jpg" alt="Shape 3" >
                  <div class='text-center'>Shape 3</div>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional card sections -->

    </div>
  </div>
</div>
           


</body>
    <script src="js/bootstrap.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <script>
  const selectedCards = {};

  function updateProgressBar(value, cardType) {
    if (!selectedCards[cardType]) {
      const progressBar = document.getElementById('progressBar');
      const currentWidth = parseInt(progressBar.getAttribute('aria-valuenow'));
      const newWidth = currentWidth + value;
      progressBar.setAttribute('aria-valuenow', newWidth);
      progressBar.style.width = newWidth + '%';

      selectedCards[cardType] = true;
    }
  }
</script>

</html>


