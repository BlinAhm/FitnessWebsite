function heh(){
    alert("Too bad :(");
}

let isAlpha=/^[a-zA-Z\s]+$/;
let isEmail=/^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
let isPassword=/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[\W]).{6,})\S$/;

function signUp(){
    var sName=document.getElementById('sName').value;
    var sLName=document.getElementById('sLName').value;
    var sEmail=document.getElementById('sEmail').value;
    var sPassword=document.getElementById('sPassword').value;
    var sCPassword=document.getElementById('sCPassword').value;
    if(!(isAlpha.test(sName))){
        document.getElementById("labelName").innerHTML="Name is invalid!";
    }
    if(!(isAlpha.test(sLName))){
        document.getElementById("labelLName").innerHTML="Last name is invalid!";
    }
}

function signIn(){
    if(document.getElementById('SIemail').value===sEmail && document.getElementById('SIpassword').value===sPassword){
        alert("good");
        location.href = "Home.html";
    }
}
