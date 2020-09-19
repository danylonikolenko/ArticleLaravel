//
//
//
// $('.subbutReg').click(function() {
//     //login
//     if (document.getElementById('username').value == '') {
//         document.getElementById('username').style.borderBottom = '2px red solid';
//         document.getElementById('usernameErro').innerHTML="";
//         document.getElementById('usernameErro').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your login!!!</div>";
//
//     }
//     if(document.getElementById('username').value != '')
//     {
//         document.getElementById('username').style.borderBottom = '2px black solid';
//         document.getElementById('usernameError').innerHTML="";
//
//     }
//     //email
//     if ($('#email').val() == '') {
//         document.getElementById('email').style.borderBottom = '2px red solid';
//         document.getElementById('emailError').innerHTML="";
//         document.getElementById('emailError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your email!!!</div>";
//
//     }
//     if(document.getElementById('email').value != '')
//     {
//         document.getElementById('email').style.borderBottom = '2px black solid';
//         document.getElementById('emailErrorr').innerHTML="";
//
//
//     }
//     //numer
//     $(document).ready(function() {
//         document.getElementById('numerTelef').bind("change keyup input click", function() {
//             if (this.value.match(/[^0-9]/g)) {
//                 this.value = this.value.replace(/[^0-9]/g, '');
//             }
//         });
//
//     });
//     if (document.getElementById('numerTelef').value == '') {
//         document.getElementById('numerTelef').style.borderBottom = '2px red solid';
//         document.getElementById('numerError').innerHTML="";
//         document.getElementById('numerError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write  your number!!!</div>";
//
//     }
//     if(document.getElementById('numerTelef').value != '')
//     {
//         document.getElementById('numerTelef').style.borderBottom = '2px black solid';
//         document.getElementById('numerError').innerHTML="";
//
//     }
//     //password1
//     if (document.getElementById('pass1').value == '') {
//         document.getElementById('pass1').style.borderBottom = '2px red solid';
//         document.getElementById('pass1Error').innerHTML="";
//         document.getElementById('pass1Error').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Imagine something!</div>";
//
//     }
//     else if(document.getElementById('pass1').value.length<8){
//         document.getElementById('pass1').style.borderBottom = '2px red solid';
//         document.getElementById('pass1Error').innerHTML="";
//         document.getElementById('pass1Error').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Password must have 8 symbols or more!!!</div>";
//     }
//     if(document.getElementById('pass1').value != '' && document.getElementById('pass1').value.length>8 )
//     {
//         document.getElementById('pass1').style.borderBottom = '2px black solid';
//         document.getElementById('pass1Error').innerHTML="";
//
//     }
//     //pass2
//     if (document.getElementById('pass2').value != document.getElementById('pass1').value) {
//         document.getElementById('pass2').style.borderBottom = '2px red solid';
//         document.getElementById('pass2Error').innerHTML="";
//         document.getElementById('pass2Error').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Incorrect password!!!!</div>";
//
//     }
//     if($('#pass2').val() == $('#pass1').val())
//     {
//         document.getElementById('pass2').style.borderBottom = '2px black solid';
//         document.getElementById('pass2Error').innerHTML="";
//     }
// });
//
//
//
//
//
//
//
// var modalAccount = document.getElementById('account');
// var closeAccount = document.getElementsByClassName("closeAccount")[0];
// $('#myAccount').click(function(){
//
//     modalAccount.style.display = "block"
// });
// closeAccount.onclick = function () {
//     modalAccount.style.display = "none";
// };
//
// var modal = document.getElementById('myModal');
// var span = document.getElementsByClassName("close")[0];
//
// $('#writearticle').click(function(){
//
//     modal.style.display = "block"
// });
// span.onclick = function () {
//     modal.style.display = "none";
// };
// window.onclick = function (event) {
//     if(event.target == modal){
//         modal.style.display = "none";
//     }
// };
//
// var modalLog = document.getElementById("myLog");
// var closeLog = document.getElementsByClassName("closeLog")[0];
//
// $('.logIn').click(function(){
//
//     modalLog.style.display = "block";
//
// });
// closeLog.onclick = function () {
//     modalLog.style.display = "none";
//
// };
// window.onclick = function (event) {
//     if(event.target == modalLog){
//         modalLog.style.display = "none";
//     }
// };
//
// var modalReg =document.getElementById("myReg");
// var closeReg = document.getElementsByClassName("closeReg")[0];
//
// $('.goReg').click(function(){
//
//     modalReg.style.display = "block";
//
//
//
// });
// closeReg.onclick = function () {
//     modalReg.style.display = "none";
//
// };
// window.onclick = function (event) {
//     if(event.target == modalReg){
//         modalReg.style.display = "none";
//
//     }
// };
//
//
