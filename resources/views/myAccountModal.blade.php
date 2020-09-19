<div id = "account" class="modalAccount" >
    <form method="POST" action="" >
        <div class="account-content ">
            <span class="closeAccount" style="position: absolute; top: 0; right: 0; margin: 8px;">&times;</span>

            <p><h3 style="color: black;text-align: center">Your account</h3></p>
            <p style="font-size: 20px;font-weight: normal; color: black; width: 30%; margin-left: auto;margin-right: auto;text-align: center;">
                Login:
                <?php
                $name = Session::get('logged_user');
                echo $name;
                ?>
            </p>

            @if(Session::get('logged_user')=="admin")

            <a href="{{ url("/showUser")}}"><p style="font-weight: bolder; text-align: center; font-size: 16px"> Show all users</p></a>
            @endif



            <a  href="{{ url("logout")}}" style='color: black; font-size: 20px; font-weight: bolder;position: absolute; bottom: 0; margin-left: 230px;margin-bottom: 20px'>Exit</a>
        </div>
    </form>
</div>
