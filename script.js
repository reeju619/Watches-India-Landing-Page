function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
} 

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.getElementById('name').value;
    var number = document.getElementById('number').value;
    var email = document.getElementById('email').value;
 

    // Defining error variables with a default value
    var nameErr = numberErr = emailErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }

    if(number == "") {
        printError("numberErr", "Please enter your phone number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(number) === false) {
            printError("numberErr", "Please enter a valid 10 digit phone number");
        } else{
            printError("numberErr", "");
            numberErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    

    
   
    // Prevent the form from being submitted if there are any errors
    if((nameErr || numberErr || emailErr) == true) {
       return false;
    } else {

        // alert(dataPreview);
    }
};


