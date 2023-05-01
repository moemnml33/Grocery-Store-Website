//Constants declaration
const firstName = document.querySelector(".first-name-input");
const lastName = document.querySelector(".last-name-input");
const address = document.querySelector(".address-input");
const postalCode = document.querySelector(".postal-code-input");
const email = document.querySelector(".email-input");
const confirmEmail = document.querySelector(".confirm-email-input");
const password = document.querySelector(".password-input");
const confirmPassword = document.querySelector(".confirm-password-input");
const personalInfoForm = document.querySelector("#personal-info-form");
//Submit event
personalInfoForm.addEventListener("submit", function(e) {
    //Prevent default
    e.preventDefault();
    //Flow control
    if (email.value!==confirmEmail.value) {
        redBorder("email-input");
        redBorder("confirm-email-input");
        redColor("email-label")
        redColor("confirm-email-label");
    }
    else {
        blackBorder("email-input");
        blackBorder("confirm-email-input");
        blackColor("email-label")
        blackColor("confirm-email-label");
    }
    if (password.value!==confirmPassword.value) {
        redBorder("password-input");
        redBorder("confirm-password-input");
        redColor("password-label");
        redColor("confirm-password-label");
    }
    else {
        blackBorder("password-input");
        blackBorder("confirm-password-input");
        blackColor("password-label");
        blackColor("confirm-password-label");
    }
    if (!email.value.includes("@")) {
        redBorder("email-input");
        redBorder("confirm-email-input");
        makeVisible("at-missing");
    }
    else {
        blackBorder("email-input");
        blackBorder("confirm-email-input");
        hide("at-missing");
    }
    if (email.value==confirmEmail.value&&password.value==confirmPassword.value&&email.value.includes("@")) {
        const user = [firstName.value, lastName.value, address.value, postalCode.value, email.value, password.value];
        console.log(user);
    }
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
