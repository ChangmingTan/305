document.getElementById("form").onsubmit = validate;

function validate() {
    // create a flag variable
    let valid = true;

    // clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //check name input
    let name = document.getElementById("name").value;
    if (name === "") {
        let errName = document.getElementById("errName");
        errName.style.visibility = "visible";
        valid = false;
    }

    //check email input
    let email = document.getElementById("email").value;
    let reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    if (email === "") {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    } else if (!reg.test(email)) { //only checks @ and .: email.indexOf("@") === -1 || email.indexOf(".") === -1
        let errEmail = document.getElementById("errEmail");
        errEmail.textContent = "Email must contain \"@\" and \".\""
        errEmail.style.visibility = "visible";
        valid = false;
    }


    //check password input
    let password = document.getElementById("password").value;
    if (password === "") {
        let errPassword = document.getElementById("errPassword");
        errPassword.style.visibility = "visible";
        valid = false;
    } else if (password.length < 8) {
        let errPassword = document.getElementById("errPassword");
        errPassword.textContent = "Please make sure your password has at least 8 characters";
        errPassword.style.visibility = "visible";
        valid = false;
    }

    //check confirm password input
    let confirmPassword = document.getElementById("confirmPassword").value;
    if (confirmPassword === "") {
        let errConfirmPassword = document.getElementById("errConfirmPassword");
        errConfirmPassword.style.visibility = "visible";
        valid = false;
    } else if (confirmPassword !== password) {
        let errConfirmPassword = document.getElementById("errConfirmPassword");
        errConfirmPassword.textContent = "Passwords do not match";
        errConfirmPassword.style.visibility = "visible";
        valid = false;
    }

    // check terms checkbox
    let terms = document.getElementById("terms");
    if (terms.checked === false) {
        let errTerms = document.getElementById("errTerms");
        errTerms.style.visibility = "visible";
        valid = false;
    }

    return valid;
}
