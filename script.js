let user= document.querySelector("#user");
let cross= document.querySelector("#cross");
let cross2= document.querySelector("#cross2");
let signup= document.querySelector("#signup");
let login= document.querySelector("#login");



signup.addEventListener("click",()=>{
    document.querySelector(".form-container2").classList.add("active");
    document.querySelector(".form-container").classList.remove("active");
    user.disabled=true;
});

login.addEventListener("click",()=>{
    document.querySelector(".form-container").classList.add("active");
    document.querySelector(".form-container2").classList.remove("active");
    user.disabled=false;

});

user.addEventListener("click",()=>{
    document.querySelector(".form-container").classList.add("active");
});

cross.addEventListener("click",()=>{
    document.querySelector(".form-container").classList.remove("active");
})

cross2.addEventListener("click",()=>{
    document.querySelector(".form-container2").classList.remove("active");
    user.disabled=false;
});

// code below is used to use submit.php code without leaving index.html

var Signup=document.querySelector("#Signup");

function SignupForm() {
    var xxh = new XMLHttpRequest();
    var link = "signup.php";
    var form = new FormData(document.getElementById('submitForm'));

    xxh.open("POST", link, true);
    xxh.onreadystatechange = function () {
        if (xxh.readyState === 4 && xxh.status === 200) {
            document.getElementById('response1').innerText = xxh.responseText;
        }
    };
    xxh.send(form);
}

Signup.addEventListener("click",()=>{
    console.log("clicked");
    SignupForm();
})
