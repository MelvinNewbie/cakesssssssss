<?php
include_once "conn_db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['details_id'])) {
    // Get the item ID from the form
    $details_id = $_POST['details_id'];
    $item_qty = $_POST['item_qty'];

    // If the item is already in the cart, update its quantity
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['details_id'] == $details_id) {
                $_SESSION['cart'][$key]['item_qty'] += $item_qty;
                header('Location: user_checkout.php');
                exit;
            }
        }
    }

    // Otherwise, add the item to the cart with a quantity of 1
    $cartItem = [
        'details_id' => $details_id,
        'item_qty' => $item_qty
    ];
    $_SESSION['cart'][] = $cartItem;

    // Redirect the user back to the order display page
    header('Location: user_checkout.php');
    exit;
}
?>