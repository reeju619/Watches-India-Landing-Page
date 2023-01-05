function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
} 

// Defining a function to validate form 
function validateFormtwo() {
    // Retrieving the values of form elements 
    var nametwo = document.getElementById('nametwo').value;
    var numbertwo = document.getElementById('numbertwo').value;
    var emailtwo = document.getElementById('emailtwo').value;
 

    // Defining error variables with a default value
    var nameerr = numbererr = emailerr = true;
    
    // Validate name
    if(nametwo == "") {
        printError("nameerr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(nametwo) === false) {
            printError("nameerr", "Please enter a valid name");
        } else {
            printError("nameerr", "");
            nameerr = false;
        }
    }

    if(numbertwo == "") {
        printError("numbererr", "Please enter your phone number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(numbertwo) === false) {
            printError("numbererr", "Please enter a valid 10 digit phone number");
        } else{
            printError("numbererr", "");
            numbererr = false;two
        }
    }
    
    // Validate email address
    if(emailtwo == "") {
        printError("emailerr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(emailtwo) === false) {
            printError("emailerr", "Please enter a valid email address");
        } else{
            printError("emailerr", "");
            emailerr = false;
        }
    }
    

    
   
    // Prevent the form from being submitted if there are any errors
    if((nameerr || numbererr || emailerr) == true) {
       return false;
    } else {

        // alert(dataPreview);
    }
};


