{{--<script src="{{URL::asset('/js/script.js')}}"></script>--}}

<div id = "myModal" class="modal" >

    <form id="addArticleModalId" method="POST" action="/add/article" enctype="multipart/form-data">
            {{csrf_field()}}
        <div class="modal-content">
            <span class="close" style="position: absolute; top: 0; right: 0; margin: 8px;">&times;</span>
            <p><h3>Write something new!</h3></p>
            <input id="title" name="tittle" placeholder="Title" style="border: none;font-size: 20px;border-bottom: 0.5px gray solid;width: 50%;margin-left: auto;margin-right: auto; text-align: center;padding: 5px">
            <div id="titleErrors"></div>
{{--            <input id="author" name="author" placeholder="Author" style="margin-top: 20px;border: none;border-bottom: 0.5px gray solid;width: 50%;margin-left: auto;margin-right: auto; text-align: center; padding: 5px">--}}
{{--            <div id="authorErrors"></div>--}}
            <textarea id="newArticleTxt" name="text" placeholder="New article is beginning..." style="margin-top: 20px;font-size: 18px; padding-bottom: 150px;font-family: 'Bookman Old Style'; font-weight: bolder; border: none; border-bottom: 0.5px gray solid;width: 95%;margin-left: auto;margin-right: auto; text-align: left; ; "></textarea>
            <div id="txtErrors"></div>
            <input id="nf" type="file" multiple name="image" style="margin-top: 10px">
            <input onclick="Validate()"  class="subbut" type="button" value="Save" name="submit1" /><br />
        </div>

    </form>

</div>



<script>

    var checkValidateArticleTitle = 1;
    var checkValidateArticleAuthor = 1;
    var checkValidateTxt = 1;

    function Validate() {


        if (document.getElementById('newArticleTxt').value=='')
        {

            document.getElementById('newArticleTxt').style.borderBottom = '2px solid red';
          document.getElementById('txtErrors').innerHTML="";
          document.getElementById('txtErrors').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write text!!!</div>";
            checkValidateTxt = 0;

        }
        if(document.getElementById('newArticleTxt').value != '')
        {
            document.getElementById('newArticleTxt').style.borderBottom = "1px black solid";
            document.getElementById('txtErrors').innerHTML="";
            checkValidateTxt = 1;

        }

        if (document.getElementById('title').value == '') {
            document.getElementById('title').style.borderBottom = '2px solid red';
            document.getElementById('titleErrors').innerHTML="";
            document.getElementById('titleErrors').innerHTML="<div  style='color: red; display: flex; justify-content: center; '>Write your title!!!</div>";
            checkValidateArticleTitle = 0;

        }
        if(document.getElementById('title').value != '')
        {
            document.getElementById('title').style.borderBottom = "1px black solid";
            document.getElementById('titleErrors').innerHTML="";
            checkValidateArticleTitle = 1;

        }



            if(checkValidateArticleTitle == 1&&checkValidateTxt==1){

                document.getElementById('addArticleModalId').submit();

            }
    }
</script>
