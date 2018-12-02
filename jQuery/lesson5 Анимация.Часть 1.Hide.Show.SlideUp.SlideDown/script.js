
//hideA()
//showA()

//$(".anim").click(function () {
//    $(this).hide("slow");
//});

//$(".anim").hide('slow',function () {
//    alert("Hello!!");
//});

//slideDown()
//slideUp()
//slideToggle()

//$("#stick").click(function () {
//    $("#hide").slideDown('slow')
//});

function changeClass() {
    $(this).prev().toggleClass('active')
}
$(function () {
    $('article h2').click(function () {
        $(this).next().slideToggle();
        $(this).toggleClass('active');
    });
});