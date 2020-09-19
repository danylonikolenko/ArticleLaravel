<div id = "myReg" class="modalReg modal" >
    <form method="POST" action="/make/reg" id="regFormId" >
        {{csrf_field()}}
        <div class="reg-content modal-content" autocomplete="off"  >
            <span class="closeReg" style="position: absolute; top: 0; right: 0; margin: 8px;">&times;</span>

            <p><h3 style="color: black;text-align: center">Registration</h3></p>

            <input id="username" name="username" placeholder="login" value=""  style="border: none;font-size: 18px; text-align: center; border-bottom: 2px black solid;padding: 10px"><br />
            <div id="usernameError"></div>
            <input id="email" name="emailReg"type="email" value=""  placeholder="email" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="emailError"></div>
            <input id="numerTelef" name="numerTelef" value=""  placeholder="mobile number" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="numerError"></div>
            <input id="pass1" name="passReg1"type="password" placeholder="password" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="pass1Error"></div>
            <input id="pass2" name="passReg2"type="password" autocomplete="off"  placeholder="password again" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="pass2Error"></div>



            <input class="subbutReg" type="button" value="Ready" name="submit2" onclick="registrationFun()" >

        </div>
    </form>
</div>


<script>

        function registrationFun(){
            var username = false;
            var password = false;
            var password2 = false;
            var email = false;
            var num = false;


            if (document.getElementById('username').value == '') {
                document.getElementById('username').style.borderBottom = '2px red solid';
               // document.getElementById('usernameError').innerHTML="";
                document.getElementById('usernameError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your login!!!</div>";
                username = false;
            }
            if(document.getElementById('username').value != ''){

//REGEX
                    var letters = /^[A-Za-z]+$/;
                if(document.getElementById('username').value.match(letters)){
                    document.getElementById('username').style.borderBottom = "1px black solid";
                    document.getElementById('usernameError').innerHTML="";
                    username = true;

                }if(!document.getElementById('username').value.match(letters)){
                    document.getElementById('username').style.borderBottom = '2px solid red';
                    document.getElementById('usernameError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Only english letters in name!!!</div>";
                    username = false;

                }


                // document.getElementById('username').style.borderBottom = '2px black solid';
                // document.getElementById('usernameError').innerHTML="";

            }
            //email
            if (document.getElementById('email').value == '') {
                document.getElementById('email').style.borderBottom = '2px red solid';
                //document.getElementById('emailError').innerHTML="";
                document.getElementById('emailError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your email!!!</div>";
                email = false;
            }
            if(document.getElementById('email').value != '')
            {
                document.getElementById('email').style.borderBottom = '2px black solid';
                document.getElementById('emailError').innerHTML="";
                email = true;

            }
            //numer



            if (document.getElementById('numerTelef').value.length < 8 ) {
                document.getElementById('numerTelef').style.borderBottom = '2px red solid';
                //document.getElementById('numerError').innerHTML="";
                document.getElementById('numerError').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write  your number, more than 8!!!</div>";
                num = false;
            }
            if(document.getElementById('numerTelef').value.length > 8)
            {
                document.getElementById('numerTelef').style.borderBottom = '2px black solid';
                document.getElementById('numerError').innerHTML="";
                num = true;
            }
            //password1
            if (document.getElementById('pass1').value == '') {
                document.getElementById('pass1').style.borderBottom = '2px red solid';
               // document.getElementById('pass1Error').innerHTML="";
                document.getElementById('pass1Error').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Imagine something!</div>";
                password = false;
            }
             if(document.getElementById('pass1').value.length<8){
                document.getElementById('pass1').style.borderBottom = '2px red solid';
                document.getElementById('pass1Error').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Password must have 8 symbols or more!!!</div>";
                password = false;
             }
            if(document.getElementById('pass1').value != '' && document.getElementById('pass1').value.length>8 )
            {
                document.getElementById('pass1').style.borderBottom = '2px black solid';
                document.getElementById('pass1Error').innerHTML="";
                password = true;

            }
            //pass2
            if (document.getElementById('pass2').value != document.getElementById('pass1').value) {
                document.getElementById('pass2').style.borderBottom = '2px red solid';
                //document.getElementById('pass2Error').innerHTML="";
                document.getElementById('pass2Error').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Incorrect password!!!!</div>";
                password2 = false;
            }
            if(document.getElementById('pass2').value == document.getElementById('pass1').value)
            {
                document.getElementById('pass2').style.borderBottom = '2px black solid';
                document.getElementById('pass2Error').innerHTML="";
                password2 = true;
            }
            // alert(password);
            // alert(password2);
            // alert(username);
            // alert(num);
            // alert(email);
            if(password==true&&password2==true&&username==true&&num==true&&email==true){
                document.getElementById('regFormId').submit();
            }

        }

</script>
