//Form Validation
function validate_form ( ){
    valid = true;

    //firstName validation
    var error = document.querySelector(".error, .firstName");
    if (document.reservationForm.firstName.value == "")
    {
        alert ( "Ju lutemi mbusheni fushen Emri:" );
        document.reservationForm.firstName.focus();
        error.innerHTML = "Plotesojeni fushen!";
        error.className = "error active";
        return valid = false;
    }
    else{
        error.innerHTML = "";
        error.className = "error";
    }
    //email validation
    var email = document.getElementById("email").value;
    var regexEmail = /^\w+([\.-1]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email == ""){
        alert ( "Please fill in the email box." );
        error.className = "error active";
        email.focus();
        return valid = false;
    }
    if(!(regexEmail.test(email))){
        alert("Please fill the correct email address,exmp: 'user@user.exmp");
        email.focus();
        return valid = false;
    }
    //date validation
    var resDate = document.getElementById("date").value;
    var today = new date();
    if (!(Date.parse(resDate) <= Date.parse(today))){
        alert ("Enter a valid date");
        return valid = false;
    }
    //phone validation

    var regexPhone = /^\(?\d{3}\)?-?\s*\d{3}\s*-?\d{3}$/;
    var phone = document.getElementById(tel).value;
    if(phone.value = ""){
        alert("Please fill the phone number box");
        return valid = false;
    }
    if(!(regexPhone.test(phone))&& phone[0] != 0){
        alert("Shenoni nje number te vlefshem");
        return valid = false;
    }

    //select Option validation

    if ( document.contactForm.guests.selectedIndex == 0 )
    {
        alert ( "Please select how many persons." );
        return valid = false;
    }

    var time = document.getElementById(time).value;
    if(time.value==""){
        alert("Please select the time of reservation");
        time.focus();
        return valid = false;
    }
    return valid;
}
