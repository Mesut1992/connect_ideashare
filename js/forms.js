function formhash(form, password) {
    //Login 
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
 
    // Finally submit the form. 
    form.submit();
}
 
function regformhash(form, uid, email, password, conf) {
    
    //Register
    // Check each field has a value
    if (uid.value === ""        || 
          email.value === ""     || 
          password.value === ""  || 
          conf.value === "") {
 
        alert('You must provide all the requested details. Please try again');
        return false;
    }
 
    //re = /^\w+$/; 
    //var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
 
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert("Your password and confirmation do not match. Please try again");
        form.password.focus();
        return false;
    }
    //Check HTML Validation 
    /*
    var $theForm = $(this).closest('form');
    $('theForm').filter(':input').each(function(){
    if (( typeof($theForm[0].checkValidity) == "function" ) && !$theForm[0].checkValidity()) {
     return;
    }
});*/


    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";
 
    // Finally submit the form. 
    form.submitButton.click();   
    return true;
}