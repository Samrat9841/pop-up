// // code below is used to use submit.php code without leaving index.html

// var Signup=document.querySelector("#Signup");

// function SignupForm() {
//     var xxh = new XMLHttpRequest();
//     var link = "signup.php";
//     var form = new FormData(document.getElementById('submitForm'));

//     xxh.open("POST", link, true);
//     xxh.onreadystatechange = function () {
//         if (xxh.readyState === 4 && xxh.status === 200) {
//             var response = JSON.parse(xhr.responseText);
//             document.getElementById('response1').innerText = xxh.responseText;
//             alert(response.result);
//         }
//     };
//     xxh.send(form);

//     alert(result);
// }

// Signup.addEventListener("click",()=>{
//     console.log("clicked");
//     SignupForm();
// })
