<?php
include_once "conn_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_id = $_POST["cat_id"];
    $shape = $_POST["shape"];
    $size = $_POST["size"];
    $flavor = $_POST["flavor"];
    $frosting = $_POST["frosting"];
    
    $dedication = mysqli_real_escape_string($conn, $_POST['item_desc']);
  
    $user_id = $_SESSION['user_id'];
  
    // Perform the database query to insert the values
    $sql = "INSERT INTO z_details (user_id, category_id, shape_id, cake_size_id, flavor_id, frosting_id, dedication)
            VALUES ('$user_id', '$category_id', '$shape', '$size', '$flavor', '$frosting', '$dedication')";
          
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect to user_customize_view.php
        header("Location: user_customize_view.php");
        exit; // Make sure to exit after redirecting
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }
  
    // Close the database connection
     mysqli_close($conn);
}
?>
