//$("a").click(function (event) {
//       alert("Hello")
//      // event.preventDefault();
//      // event.stopPropagation();
//    //Вместо этих двух строк можно использовать
//    return false;
//})

//$("header").click(function (event) {
//    alert("Hello 2!!!!")
//})

$('#quantity').keyup(function () {
    var Value = $(this).val();
    $('#msg').text(Value);
});


