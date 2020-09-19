<div id = "myLog" class="modalLog modal" >
    <form id="loginFormId" method="POST" action="/login">
        {{csrf_field()}}
        <div class="log-content modal-content">
            <span class="closeLog" style="position: absolute; top: 0; right: 0; margin: 8px;">&times;</span>

            <p><h3 style="color: black;text-align: center">Please, log in!</h3></p>

            <input id="logIn" name="login" placeholder="Login"value="" style="border: none;font-size: 18px; text-align: center; border-bottom: 2px black solid;padding: 10px"><br />
            <div id="errorsInp"></div>
            <input id="passLog" name="pass"type="password"  placeholder="Password" style="margin-top: 10px;font-size: 18px; border: none;text-align: center; border-bottom: 2px black solid ;padding: 10px"><br />
            <div id="errorsInpPass"></div>
            <div style="text-align: center; font-size:18px;bottom: 0;">


            </div>
            <input onclick="ValidateLog()" class="subbutLog" type="button" value="OK" name="submit2" /><br />
            <p style="text-align: center;font-size: 16px; font-weight: normal ">If you haven't acccount click here <span class="goReg" >"Registration"</span></p>

        </div>
    </form>
</div>





<script>

    function ValidateLog() {

        var checkName = false;
        var checkPass = false;


        if (document.getElementById('logIn').value == '') {
            document.getElementById('logIn').style.borderBottom = '2px solid red';
            document.getElementById('errorsInp').innerHTML="";
            document.getElementById('errorsInp').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your login!!!</div>";
            checkName = false;
        }
        if($('#logIn').val() != '')
        {
            document.getElementById('logIn').style.borderBottom = '2px black solid';
            document.getElementById('errorsInp').innerHTML="";
            checkName = true;
        }

        if (document.getElementById('passLog').value == '') {
            document.getElementById('passLog').style.borderBottom = '2px red solid';
            document.getElementById('errorsInpPass').innerHTML="";
            document.getElementById('errorsInpPass').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your password!!!</div>";
            checkPass = false;
        }else if(document.getElementById('passLog').value.length<8){
            document.getElementById('errorsInpPass').innerHTML="";
            document.getElementById('errorsInpPass').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Password must have 8 symbols or more!!!</div>";
            checkPass = false;

        }else
        {
            document.getElementById('errorsInpPass').innerHTML="";
            document.getElementById('passLog').style.borderBottom = '2px black solid';
           checkPass = true;

        }

        if(checkName && checkPass){
            document.getElementById('loginFormId').submit();
        }

    }
</script>
