function formvalidation(){
    var email=document.getElementById("email").value;
    var mobile=document.getElementById("mobile").value;

    if(email.indexOf('@')<=0){
        alert("invalid email"); return false;
    }
    else if(email.charAt(email.length-4)!='.'){
        alert("invalid email"); return false;
    }
    else if(!(email.substr(-10)=="@gmail.com"))
    {
        alert("invalid email"); return false;
    }
    else if(mobile.length<10 || mobile.length>10)
    {
        alert("only 10 digit allowed"); return false;
    }
    else if(isNaN(mobile))
    {
        alert("charcetr not allowed"); return false;
    }
    return true;
}