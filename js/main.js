/* Variables */

function backup() {
    window.history.back();
}

$('#hamburger-menu').click(function(){
    $("#hamburger-menu").css("display","none");
    $("header").css("position","fixed");
    $("#close-menu").css("display","block");
    $("#bottom-nav").css("height","100%");
});
$('#close-menu').click(function(){
    $("#hamburger-menu").css("display","block");
    $("header").css("position","relative");
    $("#close-menu").css("display","none");
    $("#bottom-nav").css("height","1px");
});