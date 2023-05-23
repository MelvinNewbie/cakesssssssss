<?php
include_once "conn_db.php";

if(isset($_POST['add_to_cart']) || isset($_POST['buy_now'])){
    $user_id = $_SESSION['user_id'];
    $item_id = $_POST['product_id'];
    $item_qty = $_POST['product_qty'];

    if(isset($_POST['customize'])){ // Check if "customize" option is selected
        $redirect_url = "./user_customize.php?item_id=$item_id&item_qty=$item_qty&user_id=$user_id";
    } elseif(isset($_POST['add_to_cart'])){
        $redirect_url = "./user_addcart.php?item_id=$item_id&item_qty=$item_qty&user_id=$user_id";
    } else {
        $redirect_url = "./user_checkout.php?item_id=$item_id&item_qty=$item_qty&user_id=$user_id";
    }

    header("Location: " . $redirect_url);
    exit();
}
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
</style>

</head>
<?php
        include 'user_navbar_func.php';
        renderCustomNavbar();
    ?>
<body>


    <div class="container">
        <h1>Cake Customization Form</h1>
        <div id="progress-bar" class="progress">
            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
        </div>
        <form id="cake-form">
            <!-- Step 1: Select Category -->
            <div id="step1" class="step">
                <h3>Step 1: Select Category</h3>
                <div class="category-options">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" value="cake" id="category-cake">
                        <label class="form-check-label" for="category-cake">
                            <img src="cake-photo.jpg" alt="Cake"> Cake
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" value="cupcake" id="category-cupcake">
                        <label class="form-check-label" for="category-cupcake">
                            <img src="cupcake-photo.jpg" alt="Cupcake"> Cupcake
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" value="bento" id="category-bento">
                        <label class="form-check-label" for="category-bento">
                            <img src="bento-photo.jpg" alt="Bento Cake"> Bento Cake
                        </label>
                    </div>
                </div>
                <button type="button" class="btn btn-primary next-btn">Next</button>
            </div>

            <!-- Step 2: Select Shape, Size, and Layer (for Cake) -->
            <div id="step2-cake" class="step">
                <h3>Step 2: Select Shape, Size, and Layer</h3>
                <div id="shape-options" class="options">
                    <!-- Shape options for cake -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shape" value="round" id="shape-round">
                        <label class="form-check-label" for="shape-round">
                            <img src="round-photo.jpg" alt="Round"> Round
                        </label>
                    </div>
                </div>
                <div id="size-options" class="options">
                    <!-- Size options for cake -->
                </div>
                <div id="layer-input" class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Layers</span>
                    </div>
                    <input type="number" class="form-control" name="layers" min="1" max="10" step="1">
                </div>
                <button type="button" class="btn btn-primary prev-btn">Previous</button>
                <button type="button" class="btn btn-primary next-btn">Next</button>
            </div>

            <!-- Step 2: Select Flavor, Filling, and Size (for Cupcake) -->
            <div id="step2-cupcake" class="step">
                <h3>Step 2: Select Flavor, Filling, and Size</h3>
                <div id="flavor-options" class="options">
                    <!-- Flavor options for cupcake -->
                </div>
                <div id="filling-options" class="options">
                    <!-- Filling options for cupcake -->
                </div>
                <div id="size-options" class="options">
                    <!-- Size options for cupcake -->
                </div>
                <button type="button" class="btn btn-primary prev-btn">Previous</button>
                <button type="button" class="btn btn-primary next-btn">Next</button>
            </div>
        <!-- Step 2: Select Size (for Bento Cake) -->
        <div id="step2-bento" class="step">
            <h3>Step 2: Select Size (for Bento Cake)</h3>
            <div id="size-options-bento" class="options">
                <!-- Size options for bento cake -->
            </div>
            <button type="button" class="btn btn-primary prev-btn">Previous</button>
            <button type="button" class="btn btn-primary next-btn">Next</button>
        </div>

        <!-- Step 3: Select Flavor and Frosting (for Cake) -->
        <div id="step3-cake" class="step">
            <h3>Step 3: Select Flavor and Frosting</h3>
            <div id="flavor-options-cake" class="options">
                <!-- Flavor options for cake -->
            </div>
            <div id="frosting-options-cake" class="options">
                <!-- Frosting options for cake -->
            </div>
            <button type="button" class="btn btn-primary prev-btn">Previous</button>
            <button type="button" class="btn btn-primary next-btn">Next</button>
        </div>

        <!-- Step 3: Select Frosting (for Cupcake) -->
        <div id="step3-cupcake" class="step">
            <h3>Step 3: Select Frosting</h3>
            <div id="frosting-options-cupcake" class="options">
                <!-- Frosting options for cupcake -->
            </div>
            <button type="button" class="btn btn-primary prev-btn">Previous</button>
            <button type="button" class="btn btn-primary next-btn">Next</button>
        </div>

        <!-- Step 4: Upload Photo, Dedication, and Quantity -->
        <div id="step4" class="step">
            <h3>Step 4: Upload Photo, Dedication, and Quantity</h3>
            <div class="form-group">
                <label for="photo">Upload Design Photo:</label>
                <input type="file" class="form-control-file" id="photo" accept="image/*">
            </div>
            <div class="form-group">
                <label for="dedication">Dedication:</label>
                <textarea class="form-control" id="dedication" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="100" step="1">
            </div>
            <button type="button" class="btn btn-primary prev-btn">Previous</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <div id="order-summary" class="summary">
        <!-- Order summary here -->
    </div>
    <div id="checkout" class="step">
        <h3>Checkout</h3>
        <p>Payment and checkout process goes here.</p>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    var currentStep = 1;
    var totalSteps = $('.step').length;
    var orderSummary = {};

    function updateProgressBar() {
        var progress = ((currentStep - 1) / (totalSteps - 1)) * 100;
        $('#progress-bar .progress-bar').css('width', progress + '%');
    }

    function showStep(stepNumber) {
        $('.step').hide();
        $('#step' + stepNumber).show();
        updateProgressBar();
    }

    function goToNextStep() {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    }

    function goToPreviousStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }

    function handleCategorySelection() {
        var selectedCategory = $('input[name="category"]:checked').val();
        if (selectedCategory === 'cake') {
            showStep(2);
        } else if (selectedCategory === 'cupcake') {
            showStep(2);
            showStep(3);
        } else if (selectedCategory === 'bento') {
            showStep(3);
        }
    }

    function updateOrderSummary() {
        orderSummary = {}; // Reset order summary

        // Step 1: Category
        var category = $('input[name="category"]:checked').val();
        orderSummary.category = category;

        // Step 2: Shape, Size, and Layer (for Cake)
        if (category === 'cake') {
            var shape = $('input[name="shape"]:checked').val();
            var size = $('input[name="size"]:checked').val();
            var layers = parseInt($('#layer-input input').val());

            orderSummary.shape = shape;
            orderSummary.size = size;
            orderSummary.layers = layers;
        }

        // Step 2: Flavor, Filling, and Size (for Cupcake)
        if (category === 'cupcake') {
            var flavor = $('input[name="flavor"]:checked').val();
            var filling = $('input[name="filling"]:checked').val();
            var size = $('input[name="size"]:checked').val();

            orderSummary.flavor = flavor;
            orderSummary.filling = filling;
            orderSummary.size = size;
        }

        // Step 2: Size (for Bento Cake)
        if (category === 'bento') {
            var size = $('input[name="size-bento"]:checked').val();
            orderSummary.size = size;
        }

        // Step 3: Flavor and Frosting (for Cake)
        if (category === 'cake' || category === 'bento') {
            var flavor = $('input[name="flavor-cake"]:checked').val();
            var frosting = $('input[name="frosting-cake"]:checked').val();

            orderSummary.flavor = flavor;
            orderSummary.frosting = frosting;
        }

        // Step 3: Frosting (for Cupcake)
        if (category === 'cupcake') {
            var frosting = $('input[name="frosting-cupcake"]:checked').val();
            orderSummary.frosting = frosting;
        }

        // Step 4: Upload Photo, Dedication, and Quantity
        var photo = $('#photo').val();
        var dedication = $('#dedication').val();
        var quantity = parseInt($('#quantity').val());
        orderSummary.photo = photo;
    orderSummary.dedication = dedication;
    orderSummary.quantity = quantity;

    // Generate order summary HTML
    var html = '<h3>Order Summary</h3>';
    html += '<p><strong>Category:</strong> ' + orderSummary.category + '</p>';

    if (orderSummary.category === 'cake') {
        html += '<p><strong>Shape:</strong> ' + orderSummary.shape + '</p>';
        html += '<p><strong>Size:</strong> ' + orderSummary.size + '</p>';
        html += '<p><strong>Layers:</strong> ' + orderSummary.layers + '</p>';
    } else if (orderSummary.category === 'cupcake') {
        html += '<p><strong>Flavor:</strong> ' + orderSummary.flavor + '</p>';
        html += '<p><strong>Filling:</strong> ' + orderSummary.filling + '</p>';
        html += '<p><strong>Size:</strong> ' + orderSummary.size + '</p>';
    } else if (orderSummary.category === 'bento') {
        html += '<p><strong>Size:</strong> ' + orderSummary.size + '</p>';
    }

    html += '<p><strong>Flavor:</strong> ' + orderSummary.flavor + '</p>';
    html += '<p><strong>Frosting:</strong> ' + orderSummary.frosting + '</p>';
    html += '<p><strong>Photo:</strong> ' + orderSummary.photo + '</p>';
    html += '<p><strong>Dedication:</strong> ' + orderSummary.dedication + '</p>';
    html += '<p><strong>Quantity:</strong> ' + orderSummary.quantity + '</p>';

    $('#order-summary').html(html);
}

$('#category-cake, #category-cupcake, #category-bento').change(function() {
    handleCategorySelection();
    updateOrderSummary();
});

$('input[name="shape"], input[name="size"], #layer-input input').change(function() {
    updateOrderSummary();
});

$('input[name="flavor"], input[name="filling"], input[name="size"], input[name="size-bento"], input[name="flavor-cake"], input[name="frosting-cake"], input[name="frosting-cupcake"]').change(function() {
    updateOrderSummary();
});

$('#photo, #dedication, #quantity').on('input', function() {
    updateOrderSummary();
});

$('.next-btn').click(function() {
    goToNextStep();
});

$('.prev-btn').click(function() {
    goToPreviousStep();
});

$('#cake-form').submit(function(event) {
    event.preventDefault();
    // Process form submission or display order summary
    // Example: Show order summary in the summary div
    updateOrderSummary();
    goToNextStep();
});

showStep(currentStep);
});
</script>
<script src="script.js"></script>
</html>


