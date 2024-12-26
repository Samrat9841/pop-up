let login= document.querySelector("#login");
let cross= document.querySelector("#cross");

login.addEventListener("click",()=>{
    document.querySelector(".form-container").classList.add("active");
});

cross.addEventListener("click",()=>{
    document.querySelector(".form-container").classList.remove("active");
});