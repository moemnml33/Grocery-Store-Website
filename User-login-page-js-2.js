//Constants declaration
var loginForm = document.querySelector("#login-form");
var emailInput = document.querySelector("#email-input");
// const passwordInput = document.querySelector("#password-input");
// const user = [];
var forgotPassword = document.querySelector(".forgot-password-button");
//Submit event
loginForm.addEventListener("submit", function(e) {
    //Prevent default
    e.preventDefault();
    //Flow control
    if (!emailInput.value.includes("@")){
        redColor("email-label");
        redBorder("email-input");
        makeVisible("at-missing");
    } 
    else {
        blackColor("email-label");
        blackBorder("email-input");
        hide("at-missing");
    }
});
//Forgot password event
forgotPassword.addEventListener("click", function(e){
    e.preventDefault();
    window.alert("A reset link was sent to your email, don't forget it next time!");
});
//input alert functions
function redBorder(element) {
    document.getElementById(element).style.borderColor = "red";
}
function blackBorder(element) {
    document.getElementById(element).style.borderColor = "black";
}
function redColor(element) {
    document.getElementById(element).style.color = "red";
}
function blackColor(element) {
    document.getElementById(element).style.color = "black";
}
//Make visible + hide functions
function makeVisible(element) {
    document.getElementById(element).style.visibility = "visible";
}
function hide(element) {
    document.getElementById(element).style.visibility = "hidden";
}

// if (passwordInput.value!==password) {
    //     redColor("password-label");
    //     redBorder("password-input");
    //     makeVisible("wrong-password-span");
    // } else {
    //     blackColor("password-label");
    //     blackBorder("password-input");
    //     hide("wrong-password-span");
    // }
    // if (emailInput.value.includes("@")&&passwordInput.value===password){
    //     var user = [emailInput.value, passwordInput.value];
    //     console.log(user);
    // }