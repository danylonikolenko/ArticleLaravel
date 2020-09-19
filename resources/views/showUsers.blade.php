
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

    </nav>

    @include("myAccountModal")
    @include("articleAddModal")
    @include("loginModal")
    @include("registrationModal")
    @include("changeArticle")



    <div class="main-article">

        <div class="article-pageUser">

{{--            <div class="userShowTitle" >--}}
{{--                --}}
{{--                <p class="userField">Login</p>--}}
{{--                <p class="userField">Email</p>--}}
{{--                <p class="userField">Number</p>--}}
{{--                <p class="userField">Registration date</p>--}}
{{--                <p class="userField">Articles</p>--}}
{{--                <p style="text-align: right">Change</p>--}}
{{--                <p>Delete</p>--}}

{{--            </div>--}}


            @foreach($users as $val)
                <form method="POST" action="{{ url("changeUser/$val->id_user")}}">
                    {{csrf_field()}}
                            <div class="userShow">

                               <p class="userField">{{$val->login}}</p>

                                <input name="email" class="userField" value="{{$val->email}}">
                                <input name="number" class="userField" value="{{$val->number}}">

                                <p class="userField">{{$val->date_user}}</p>
                                <select class="selectArticles" onchange="window.location.href=this.options[this.selectedIndex].value">
                                    <option class="userField" >Articles:</option>
                                @foreach($usersWithArticles as $val1)
                                    @if($val->login==$val1->author)

                                            <option value="{{ url("articleShow/$val1->id")}}" class="userField">{{$val1->tittle}}&nbsp;{{$val1->id}}</option>

                                        @endif
                                    @endforeach
                                </select>
                                <button class="changeButUser" type="submit" >Change</button>
                                @if($val->login!="admin")
                                <a href="{{ url("deleteUser/$val->id_user")}}"><img  class="closeIco" src="{{asset('img/cancel-512.png')}}"></a>
                                    @else
                                    <p></p>
                                @endif
                            </div>

            </form>

            @endforeach




        </div>


    </div>
</main>


<footer  >
    <!-- Copyright -->
    <div class="footer-content">

        <p   style="text-align: center; color: white; margin-top: 10px; font-size: 14px">tel: +380999302216</p>
    </div>

</footer >
<script src="{{URL::asset('/js/script.js')}}"></script>
</body>
</html>
