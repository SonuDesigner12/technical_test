let fnameError = document.getElementById('fname-error');
let lnameError = document.getElementById('lname-error');
let dobError = document.getElementById('dob-error');
let addressError = document.getElementById('address-error');
let phoneError = document.getElementById('phone-error');
let emailError = document.getElementById('email-error');
let passwordError = document.getElementById('password-error');
let validationError = document.getElementById('validation-error');


function validateFname() {
    let fname = document.getElementById('fname').value;

    if(fname.length == 0) {
        fnameError.innerHTML = "first name should be required";
        document.getElementById('fname').style.borderColor = "red";
        return false;

    }
    else if(fname.length < 3) {
        fnameError.innerHTML = "write minimum 3 char of name";
        document.getElementById('fname').style.borderColor = "red";
        return false;

    }
    else {
        fnameError.innerHTML = ""
        document.getElementById('fname').style.borderColor = "green";
        return true;
    }
}

function validateLname() {
    let lname = document.getElementById('lname').value;

    if(lname.length == 0) {
        lnameError.innerHTML = "last name should be required";
        document.getElementById('lname').style.borderColor = "red";
        return false;

    }
    else if(lname.length < 3) {
        lnameError.innerHTML = "write minimum 3 char";
        document.getElementById('lname').style.borderColor = "red";
        return false;

    }
    else {
        lnameError.innerHTML = ""
        document.getElementById('lname').style.borderColor = "green";
        return true;
    }
}

function validateDOB() {
    let dob = document.getElementById('dob').value;

    if(dob.length == 0) {
        dobError.innerHTML = "dob name should be required";
        document.getElementById('dob').style.borderColor = "red";
        return false;
    }
    else if(dob < 18) {
        dobError.innerHTML = "person not able to resister";
        document.getElementById('dob').style.borderColor = "red";
        return false;   
    }
    else {
        dobError.innerHTML = "";
        document.getElementById('dob').style.borderColor = "green";
        return true;
    }


}

function validateAddress() {
    let address = document.getElementById('address').value;

    if(address.length == 0) {
        addressError.innerHTML = "address should be required";
        document.getElementById('address').style.borderColor = "red";
        return false;
    }
    else {
        addressError.innerHTML = "";
        document.getElementById('address').style.borderColor = "green";
        return true;
    }
}

function validatePhone() {
    let phone = document.getElementById('phone').value;

    if(phone.length == 0) {
        phoneError.innerHTML = "phone should be required";
        document.getElementById('phone').style.borderColor = "red";
        return false;
    }
    else if(phone.length != 10) {
        phoneError.innerHTML = "only 10 digits phone mumber required";
        document.getElementById('phone').style.borderColor = "red";
        return false;

    }
    else {
        phoneError.innerHTML = "";
        document.getElementById('phone').style.borderColor = "green";
        return true;
    }
}

function validateEmail() {
    let email = document.getElementById('email').value;

    if(email.length == 0) {
        emailError.innerHTML = "email should be required";
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
    else if(email.indexOf('@') <= 0) {
        emailError.innerHTML = "Invalid email";
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
    else if(email.lastIndexOf('.') !== email.length - 4 && email.lastIndexOf('.') !== email.length - 3) {
        emailError.innerHTML = "Invalid email dot";
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
    else {
        emailError.innerHTML = "";
        document.getElementById('email').style.borderColor = "green";
        return true;
    }
}

function validatePassword() {
    let password = document.getElementById('password').value;

    if(password.length == 0) {
        passwordError.innerHTML = "Password should be required";
        document.getElementById('password').style.borderColor = "red";
        return false;
    }
    else if(password.length < 6) {
        passwordError.innerHTML = "write minimum 6 char long";
        document.getElementById('password').style.borderColor = "red";
        return false;
    }
    else {
        passwordError.innerHTML = "";
        document.getElementById('password').style.borderColor = "green";
        return true;
    }

}


function validateForm() {
    if(!validateFname() || !validateLname() || !validateDOB() || !validateAddress() || !validatePhone() || !validateEmail() || !validatePassword()) {

        validationError.innerHTML = "some error in this form so fix it";
        setTimeout(() => {
            validationError.innerHTML = "";
        }, 3000);
        // alert("form not validate");
        return false;

    }
    else {
        validationError.innerHTML = "";
        // alert("form validate");
    }
}



