document.getElementById("guestform").onsubmit = validate;   // no () because no excuse after hit button

function validate() {

    // creat a flag variable
    let valid = true;

    // clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    // First and last name are required
    // check first name
    let first = (document.getElementById("fname").value).trim();
    if (first === "") {
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    // check last name
    let last = (document.getElementById("lname").value).trim();
    if (last === "") {
        let errLname = document.getElementById("errLname");
        errLname.style.visibility = "visible";
        valid = false;
    }

    // check email
    // Email address, if supplied, must contain an @ symbol and a dot (.)
    // If the user checks the mailing list checkbox, then email address is required
    let email = (document.getElementById("email").value).trim();
    let maillingList = document.getElementById("checkbox").checked;
    let reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    let errEmail = document.getElementById("errEmail");
    if (email === "" && maillingList) {
        errEmail.textContent = "Email address is required for the mailing";
        errEmail.style.visibility = "visible";
        valid = false;
    } else if (email !== "" && maillingList && !reg.test(email)) {
        errEmail.textContent = "Email address must contain an @ symbol and a dot (.)";
        errEmail.style.visibility = "visible";
        valid = false;
    } else if (email !== "" && !reg.test(email)) {
        errEmail.textContent = "Email address must contain an @ symbol and a dot (.)";
        errEmail.style.visibility = "visible";
        valid = false;
    }

    // LinkedIn address, if supplied, must start with "http" and end with ".com"
    let linkedinurl = (document.getElementById("linkedinurl").value).trim();
    if (linkedinurl !== "" && (!linkedinurl.startsWith("http") || !linkedinurl.endsWith(".com"))) {
        let errLinkedinurl = document.getElementById("errLinkedinurl");
        errLinkedinurl.style.visibility = "visible";
        valid = false;
    }

    // How we met answer is required
    let meet = document.getElementById("meet").value;
    let other = (document.getElementById("other").value).trim();
    if (meet === "none") {
        let errMeet = document.getElementById("errMeet");
        errMeet.style.visibility = "visible";
        valid = false;
    } else if (meet === "other" && other === "") {
        // if how we met is "other", then other(please specify) is required
        let errOther = document.getElementById("errOther");
        errOther.style.visibility = "visible";
        valid = false;
    }

    return valid;
}

// email format buttons (HTML, text) are only visible when the mailing list checkbox is checked
$("#errFormat").hide();
$("#checkbox").click(function () {
    if ($(this).is(":checked")) {
        $("#emailFormat").show();
        $("#errFormat").show();
    } else {
        $("#emailFormat").hide();
        $("#errFormat").hide();
    }
});

// the "Other (please specify)" textbox is only visible when "Other" is selected from the "How we met" dropdown list
$("#meet").change(function () {
    if ($(this).val() === "other") {
        $("#ifother").show();
    } else {
        $("#ifother").hide();
    }
});