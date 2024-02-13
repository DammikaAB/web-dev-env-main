<?php

/// simple html file validation

$title = "For validation exaple";
include "header.php";

?>
<form action="" method="post">

Name: <input type="text" name="fname" required minlength="3" maxlength="30" id=name> <br><br>
<span id="nameError"> <span>

Email: <input type="email" name="email"required id=emal><br><br>
<span id="emailError"> <span>

Password: <input type="password" name="password" required minlength="7" maxlength="20" id=password><br><br>
<span id="passwordError"> <span>

Age: <input type="number" name="age" min="18" max="100" id=age><br><br>
<span id="ageError"> <span>

<button type="submit" name="regSub">submit</button><br>

</form>


<script>
//function to validate name

function validateName() {
const name= document.getElimentByID("name").value;
const nameError = document.getElimentByID("nameError");

if (name.lenth <3 || name.length > 20){
nameError.innerHTML = "Name must be between 3 & 20 charaters";
return false;

else{
    nameError.innerHTML="";
    return true;
}

}

}


//function to validate Emal

function validateEmail(){
    const emal= document.getElimentByID("emal").value;
    onst nameError = document.getElimentByID("emailError");

    if (email==="" || email.includes("@")){

emailError.innerHTML = "Please enter valied Email adress";
return false;

else{
    emailError.innerHTML="";
    return true;
}

}


}


//function to validate Password

function validatePassword(){
    const password= document.getElimentByID("password").value;

}


//function to validate age

function validateAge(){
    const age= document.getElimentByID("age").value;
}

//event listeners for real time validation

document.getElementById("name").addEventListener("input",validateName)



    </script>


<?php
include "footer.php" ?>