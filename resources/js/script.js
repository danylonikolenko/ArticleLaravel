


$(".changeBut1").click(function(){

    var idArticle = $(this).parent().find($(".hiddenIdArticle")).val();
    // alert(idArticle);
    $.ajax({
        type:'POST',
        url: '/showArticleUpdate',
        data: {idArt : idArticle},
        success: function(data){
            // $('.results').html(data);
            alert(idArticle);
        }

    });



    $('#myModalChange').show();
    $("#myModalChange").css("display", "block");
});
var spanChange = document.getElementsByClassName("closeChange")[0];
spanChange.onclick = function () {

    $('#myModalChange').hide();

};

var modalAccount = document.getElementById('account');
var closeAccount = document.getElementsByClassName("closeAccount")[0];
$('#myAccount').click(function(){

    modalAccount.style.display = "block"
});
closeAccount.onclick = function () {
    modalAccount.style.display = "none";
};

var modal = document.getElementById('myModal');
var span = document.getElementsByClassName("close")[0];

$('#writearticle').click(function(){

    modal.style.display = "block"
});
span.onclick = function () {
    modal.style.display = "none";
};
window.onclick = function (event) {
    if(event.target == modal){
        modal.style.display = "none";
    }
};

var modalLog = document.getElementById("myLog");
var closeLog = document.getElementsByClassName("closeLog")[0];

$('.logIn').click(function(){

    modalLog.style.display = "block";

});
closeLog.onclick = function () {
    modalLog.style.display = "none";

};
window.onclick = function (event) {
    if(event.target == modalLog){
        modalLog.style.display = "none";
    }
};

var modalReg =document.getElementById("myReg");
var closeReg = document.getElementsByClassName("closeReg")[0];

$('.goReg').click(function(){

    modalReg.style.display = "block";



});
closeReg.onclick = function () {
    modalReg.style.display = "none";

};
window.onclick = function (event) {
    if(event.target == modalReg){
        modalReg.style.display = "none";

    }
};


