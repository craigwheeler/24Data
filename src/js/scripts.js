// validate form data
function validateForm() {
    // variables
    var inputFirstName = document.getElementById("inputFirstName");
    var firstName = document.getElementById("firstName");

    var inputLastName = document.getElementById("inputLastName");
    var lastName = document.getElementById("lastName");

    var inputZipCode = document.getElementById("inputZipCode");
    var zipCode = document.getElementById("zipCode");

    var inputPhone = document.getElementById("inputPhone");
    var phone = document.getElementById("phone");

    var inputEmail = document.getElementById("inputEmail");
    var email = document.getElementById("email");


    // functions created to test input form fields
    if (!inputFirstName.checkValidity()) {
        document.getElementById("error-message-first-name").innerHTML = "Please enter your first name up to 20 characters";
        firstName.classList.add("has-error");
    } else if (inputFirstName.checkValidity()) {
        firstName.classList.remove("has-error");
        document.getElementById("error-message-first-name").style.display = "none";
    }

    if (!inputLastName.checkValidity()) {
        document.getElementById("error-message-last-name").innerHTML = "Please enter your last name up to 20 characters";
        lastName.classList.add("has-error");
    } else if (inputLastName.checkValidity()) {
        lastName.classList.remove("has-error");
        document.getElementById("error-message-last-name").style.display = "none";
    }

    if (!inputZipCode.checkValidity()) {
        document.getElementById("error-message-zipcode").innerHTML = "Please enter your zip code using only numbers";
        zipCode.classList.add("has-error");
    } else if (inputZipCode.checkValidity()) {
        zipCode.classList.remove("has-error");
        document.getElementById("error-message-zipcode").style.display = "none";
    }

    if (!inputPhone.checkValidity()) {
        document.getElementById("error-message-phone").innerHTML = "Required telephone format (xxx) xxx-xxxx";
        phone.classList.add("has-error");
    } else if (inputPhone.checkValidity()) {
        phone.classList.remove("has-error");
        document.getElementById("error-message-phone").style.display = "none";
    }

    if (!inputEmail.checkValidity()) {
        document.getElementById("error-message-email").innerHTML = "Required email address";
        email.classList.add("has-error");
    } else if (inputEmail.checkValidity()) {
        email.classList.remove("has-error");
        document.getElementById("error-message-email").style.display = "none";
    }

}