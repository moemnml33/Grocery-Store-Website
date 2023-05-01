//Qty select+add to cart
var qtySelect = document.querySelector("#qty-select");
var qtyTypeSelect = document.querySelector("#qty-type-select");
var addToCart = document.querySelector("#add-to-cart-button");
var badge = document.getElementById("badge");
var productName = document.querySelector("#product-name")
var productPriceUn = document.querySelector("#product-price-un");
var productPriceLb = document.querySelector("#product-price-lb");
var totalSpan = document.getElementById("total-span");
var price = document.getElementById("price");
var prodDescriptionButton = document.querySelector("#prod-description-button");
var totalQtySelectedUn = 0;
var totalQtySelectedLb = 0;
var i = 0;
//quantity plus type selected event
qtySelect.addEventListener("change", function(e) {
    //Prevent default
    e.preventDefault();
    //Flow control
    if (qtyTypeSelect.value==="units"){
        price.innerHTML = "Price: " + (qtySelect.value*parseFloat(productPriceUn.innerHTML)).toFixed(2) + "$";
    }
    if  (qtyTypeSelect.value==="pounds"){
        price.innerHTML = "Price: " + (qtySelect.value*parseFloat(productPriceLb.innerHTML)).toFixed(2) + "$"
    }
    //Save last selected option with local storage
    localStorage.setItem("savedQtySelect", qtySelect.value);
});
qtyTypeSelect.addEventListener("change", function(e) {
    //Prevent default
    e.preventDefault();
    //Flow control
    if (qtyTypeSelect.value==="units"){
        price.innerHTML = "Price: " + (qtySelect.value*parseFloat(productPriceUn.innerHTML)).toFixed(2) + "$";
    }
    if  (qtyTypeSelect.value==="pounds"){
        price.innerHTML = "Price: " + (qtySelect.value*parseFloat(productPriceLb.innerHTML)).toFixed(2) + "$"
    }
    //Save last selected option with local storage
    localStorage.setItem("savedQtyTypeSelect", qtyTypeSelect.value);
});
// //Add to cart event
// addToCart.addEventListener("click", function(e) {
//     //Prevent default
//     e.preventDefault();
//     //Flow control
//     if (qtyTypeSelect.value==="units") {
//         //name, qty, price
//         totalQtySelectedUn += parseInt(qtySelect.value);
//         totalSpan.innerHTML = (parseFloat(totalSpan.innerHTML)+(qtySelect.value*parseFloat(productPriceUn.innerHTML))).toFixed(2) + "$";
//         //Save info in an array specific for UN
//         var productPropertiesUn = [productName.innerHTML, totalQtySelectedUn, parseFloat(productPriceUn.innerHTML), qtyTypeSelect.value];
//     }
//     if  (qtyTypeSelect.value==="pounds") {
//         //name, qty, price
//         totalQtySelectedLb += parseInt(qtySelect.value);
//         totalSpan.innerHTML = (parseFloat(totalSpan.innerHTML)+(qtySelect.value*parseFloat(productPriceLb.innerHTML))).toFixed(2) + "$";
//         //Save info in an array specific for LB
//         var productPropertiesLb = [productName.innerHTML, totalQtySelectedLb, parseFloat(productPriceLb.innerHTML), qtyTypeSelect.value];
//     }
//     //Save total price in local storage
//     localStorage.setItem("totalSaved", totalSpan.innerHTML);
// });
//Product description event
prodDescriptionButton.addEventListener("click", function(e) {
    //Prevent default
    e.preventDefault();
    var prodDescriptionDiv = document.getElementById("prod-description-div");
    //Show/Hide
    if (prodDescriptionDiv.style.display === "block") {
        prodDescriptionDiv.style.display = "none";
    }
    else prodDescriptionDiv.style.display = "block";
});
//Input remains the same even after refresh, stored in local session
window.onload = function(e) {
    //Prevent default
    e.preventDefault();
    //Get values saved in local storage
    qtySelect.value = localStorage.getItem("savedQtySelect");
    qtyTypeSelect.value = localStorage.getItem("savedQtyTypeSelect");
    totalSpan.value = localStorage.getItem("totalSaved");
    //Flow control
    if (qtyTypeSelect.value!==null&&qtyTypeSelect.value==="units") {
        //Display saved price and total, case unit
        price.innerHTML = "Price: " + (qtySelect.value*parseFloat(productPriceUn.innerHTML)).toFixed(2) + "$";
        totalSpan.innerHTML = (parseFloat(totalSpan.value)).toFixed(2) + "$";
    }
    if (qtyTypeSelect.value!==null&&qtyTypeSelect.value==="pounds") {
        //Display saved price and total, case pound
        price.innerHTML = "Price: " + (qtySelect.value*parseFloat(productPriceLb.innerHTML)).toFixed(2) + "$";
        totalSpan.innerHTML = (parseFloat(totalSpan.value)).toFixed(2) + "$";
    }
};
