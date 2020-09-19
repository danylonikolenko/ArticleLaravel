<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>


    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/preload.js')}}"></script>


</head>
<body>


<main class="contentPage">
    <nav class="nav" >
        <a href="{{ url("/")}}"><p style="color: white; font-size: 20px">Technology blog</p></a>
        <?php
        if(Session::has('logged_user')){
            $name = Session::get('logged_user');
            echo " <div id=\"myAccount\" >$name</div>";
        }else{
            echo " <div class='logIn' >Log in</div>";
        }
        ?>
    </nav>

    @include("myAccountModal")
    @include("articleAddModal")
    @include("loginModal")
    @include("registrationModal")
    @include("changeArticle")



    <div class="main-article">

        <div class="article-page">

            @foreach($article as $val)

                @if(Session::get('logged_user')=="admin")
                    <form style="position: relative"  method="POST" action="{{ url("changeArticle/$val->id") }}">
                        {{csrf_field()}}
                        <a href="{{ url("deleteArticle/$val->id")}}"><img  class="closeIco" src="{{asset('img/cancel-512.png')}}"></a>
                        <input class='articleTitleInput' name="titleArticleUpdate" value="{{$val->tittle}}" >
                        <img  class='imgArticleShow' src={{ asset('storage/'.$val->image) }}>
                        <textarea class='outputArticle-pageInput' name="txtInput">{{$val->text}}</textarea>
                        <button class="changeBut1" type="submit" >Change</button>
                    </form>
                 @else
                    <div class='articleTitle' >{{$val->tittle}}</div>
                    <img  class='imgArticleShow' src={{ asset('storage/'.$val->image) }}>
                    <p class='outputArticle-page'>{{$val->text}}<p>
                 @endif

                <div class='articleAuthor'>{{$val->author}}</div>
                <div class='articleDate'  >{{$val->date}}</div>

            @endforeach




        </div>


    </div>
</main>
<div class="commentBlock" >


    @foreach($comments as $val)
    <div class="commentShow" >
        @if(Session::get('logged_user')=="admin")
         <form  method="POST" action="{{ url("changeComment/$val->id_comment")}}">
             {{csrf_field()}}
        <a href="{{ url("deleteComment/$val->id_comment")}}"><img  class="closeIco" src="{{asset('img/cancel-512.png')}}"></a>
        @endif

        <div class='commentName' >{{$val->name}}</div>
        <div class='commentDate'   >{{$val->date_comments}}</div>

        @if(Session::get('logged_user')=="admin")
           <input type="text" name="commentChangeTxt" class='commentOutputChange' value="{{trim($val->text_comment)}}" >
           <button type="submit" class="changeButCom">Change</button>
            </form>
        @else
            <output class='commentOutput'>{{$val->text_comment}}</output>
        @endif
    </div>
    @endforeach



    @if(Session::has('logged_user'))

         <p style='margin: 20px; font-size: 24px; font-weight: bolder'>Write your opinion! </p>
        <form method="POST" action="/addComment/">
            {{csrf_field()}}
            <div style="display: grid; margin-top: 30px; padding-bottom: 40px">
                <textarea class="com-txar-opin" type="text" placeholder="Your opinion :)" name="text_comment" ></textarea>
{{--                <input class="count_likes" type="hidden" name="count_likes">--}}
                <input class="hidIdAr" name="articleIdCom" type="hidden" value="{{$id_article}}">
                <input class="subbut" type="submit" value="Save" name="submit" style="width: 20%; margin-left: 15px; margin-bottom: 30px" /><br />

            </div>
        </form>

    @else
        <p style='margin: 20px; font-size: 24px; font-weight: bolder'>You have to be log in system to write comments!</p>;
    @endif



{{--<script>--}}
{{--    var modalAccount = document.getElementById('account');--}}
{{--    var closeAccount = document.getElementsByClassName("closeAccount")[0];--}}
{{--    $('#myAccount').click(function(){--}}

{{--        modalAccount.style.display = "block"--}}
{{--    });--}}
{{--    closeAccount.onclick = function () {--}}
{{--        modalAccount.style.display = "none";--}}
{{--    };--}}

{{--    var modal = document.getElementById('myModal');--}}
{{--    var span = document.getElementsByClassName("close")[0];--}}

{{--    $('#writearticle').click(function(){--}}

{{--        modal.style.display = "block"--}}
{{--    });--}}
{{--    span.onclick = function () {--}}
{{--        modal.style.display = "none";--}}
{{--    };--}}
{{--    window.onclick = function (event) {--}}
{{--        if(event.target == modal){--}}
{{--            modal.style.display = "none";--}}
{{--        }--}}
{{--    };--}}

{{--    var modalLog = document.getElementById("myLog");--}}
{{--    var closeLog = document.getElementsByClassName("closeLog")[0];--}}

{{--    $('.logIn').click(function(){--}}

{{--        modalLog.style.display = "block";--}}

{{--    });--}}
{{--    closeLog.onclick = function () {--}}
{{--        modalLog.style.display = "none";--}}

{{--    };--}}
{{--    window.onclick = function (event) {--}}
{{--        if(event.target == modalLog){--}}
{{--            modalLog.style.display = "none";--}}
{{--        }--}}
{{--    };--}}

{{--    var modalReg =document.getElementById("myReg");--}}
{{--    var closeReg = document.getElementsByClassName("closeReg")[0];--}}

{{--    $('.goReg').click(function(){--}}

{{--        modalReg.style.display = "block";--}}



{{--    });--}}
{{--    closeReg.onclick = function () {--}}
{{--        modalReg.style.display = "none";--}}

{{--    };--}}
{{--    window.onclick = function (event) {--}}
{{--        if(event.target == modalReg){--}}
{{--            modalReg.style.display = "none";--}}

{{--        }--}}
{{--    };--}}
{{--</script>--}}



</div>

<footer  >
    <!-- Copyright -->
    <div class="footer-content">

        <p   style="text-align: center; color: white; margin-top: 10px; font-size: 14px">tel: +380999302216</p>
    </div>

</footer >
<script src="{{URL::asset('/js/script.js')}}"></script>
</body>
</html>
