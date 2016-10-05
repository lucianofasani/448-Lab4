function validateFields(){

    var email = document.forms["myForm"]["email"].value;
    var pass = document.forms["myForm"]["password"].value;
    var pokeball = document.forms["myForm"]["pokeball"].value;
    var potion = document.forms["myForm"]["potion"].value;
    var rareCandy = document.forms["myForm"]["rareCandy"].value;

    if(pokeball < 0 || potion < 0 || rareCandy < 0){
        alert("You can't have a negative quantity of an item.");
        return false;
    }

    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if(atpos < 1 || dotpos<atpos+2 || dotpos+2>=email.length){
        alert("Not a valid e-mail address");
        return false;
    }

    if(pass == "" || pass == null) {
        alert("You must enter a password");
        return false;
    }
    
}
