
function formcheck()
{
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var age=document.getElementById("age").value;
    var email=document.getElementById("email").value;
    var address=document.getElementById("address").value;
    var pass=document.getElementById("pass").value;
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if(fname.length<3 || fname=="")
    {
        document.getElementById("message").innerHTML="First name can not be empty or too small .";
        return false;
    } 
    if(lname=="" || lname.length<3)
    {
        document.getElementById("message").innerHTML="Last name can not be empty or too small .";
        return false;
    }
    if(age=="")
    {
        document.getElementById("message").innerHTML="Please insert your age";
        return false;
    }
    if(email=="")
    {
        document.getElementById("message").innerHTML="Please enter email properly.";
        return false;
    }
    if(!reg.test(email)){
        document.getElementById("message").innerHTML="Please enter email properly..";
        return false;
    }
    if(address=="")
    {
        document.getElementById("message").innerHTML="Address can not be empty.";
        return false;
    }
    if(pass.length<7)
    {
        document.getElementById("message").innerHTML="Please enter more than 6 characters password";
        return false;
    }
}


