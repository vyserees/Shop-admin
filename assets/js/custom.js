$(document).ready(function(){

/*-----menu dropdown-----*/
$('.menu-drop').mouseenter(function(){
    $(this).children('.submenu').show();
});
$('.menu-drop').mouseleave(function(){
    $(this).children('.submenu').hide();
});
});