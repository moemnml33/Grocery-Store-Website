<?php 
//Dont report error 
error_reporting (E_ALL ^ E_NOTICE);
//Initialize variables
$product_name = $_POST['product_name'];
$qty = $_POST['qty'];
$qty_type_select = $_POST['qty_type_select'];
$price_un = $_POST['price_un'];
$price_lb = $_POST['price_lb'];
// $product_img = $_POST['product_img'];
//Set prices to 0 if they werent initialized 
if (!isset($_SESSION['price_un'])) {
    $_SESSION['price_un'] = 0;
}
if (!isset($_SESSION['price_lb'])) {
    $_SESSION['price_lb'] = 0;
}
//Set image to ull if it wasnt initialized
// if (!isset($product_img)) {
//     $product_img = null;
// }
if (isset($_POST['qty'])) {
    //if qty type is units 
    if ($_POST['qty_type_select'] == 'units') {
        $_SESSION['price_un'] += $price_un*$qty;
    }
    //if qty type is pounds
    if ($_POST['qty_type_select'] == 'pounds') {
        $_SESSION['price_lb'] += $price_lb*$qty;
    }
    //Increment qty
    $_SESSION['qty'] += $qty;
    //Set total price
    $_SESSION['total_price'] = $_SESSION['price_un']+$_SESSION['price_lb'];
    //Create product array, update with each add to cart click
    $_SESSION['cart']=array('product_name'=>$product_name, 
                            'qty'=>$_SESSION['qty'], 
                            'total_price'=>$_SESSION['total_price'],
                            );
    //Check contents of created array
    // var_dump($_SESSION['cart']);
}
?>