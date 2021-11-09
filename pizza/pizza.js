document.getElementById("pizzaform").onsubmit = validate;   // no () because no excuse after hit button

function validate() {

    // create a flag variable
    let valid = true;

    // clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    // check first name
    let first = document.getElementById("firstName").value;
    if (first === "") {
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    // check last name
    let last = document.getElementById("lastName").value;
    if (last === "") {
        let errLname = document.getElementById("errLname");
        errLname.style.visibility = "visible";
        valid = false;
    }

    // check pickup or delivery
    let delivery = document.getElementById("delivery").checked;
    if (delivery) {
        // check address
        let address = document.getElementById("address").value;
        if (address === "") {
            let errAddress = document.getElementById("errAddress");
            errAddress.style.visibility = "visible";
            valid = false;
        }
    }

    // check toppings
    let toppings = document.getElementsByName("toppings[]");
    let toppingCount = 0;
    for (let i = 0; i < toppings.length; i++) {
        if (toppings[i].checked) {
            toppingCount++;
        }
    }

    if (toppingCount === 0) {
        let errToppings = document.getElementById("errToppings");
        errToppings.style.visibility = "visible";
        valid = false;
    }

    // check pizza size
    let size = document.getElementById("size").value;
    if (size === "none") {
        let errSize = document.getElementById("errSize");
        errSize.style.visibility = "visible";
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
