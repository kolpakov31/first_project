
function getParentTag(node,tag) {//Найти ближайшего родителя по tagName. Здесь мы движемся вверх, пока не встретим родителя, у которого тег = нашему заданному tag
    if (node) {
        return (node.tagName == tag) ? node :
            getParentTag(node.parentElement,tag);
    }
    return null;
}
function getRow(e) {
    var row = getParentTag(e.target,'TR');
    if (!row) {return;}
    //row.focus();
}
//document.getElementById('data').addEventListener('click', getRow);
function dataTrClicked(event) {

   console.log(event.target.parentNode.getAttribute('data-rnn'));
   searchTest(event.target.parentNode.getAttribute('data-rnn'));
   searchZa(event.target.parentNode.getAttribute('data-n_nakl'));
}
$(document).ready(function() {
    $('.main').find('tr').on('click', dataTrClicked);
});
function searchTest(rnn){
    $.ajax({
        type:"POST",
        data:"rnn=" + rnn +"&act=phone",
        url:"ajax.php",
        dataType:"html",
        success:function(data) {
            $('#search_phone').html(data);
        }
    });
    $.ajax({
        type:"POST",
        data:"rnn=" + rnn +"&act=s_plat",
        url:"ajax.php",
        dataType:"html",
        success:function(data) {
            $('#search_s_plat').html(data);
        }
    });
}
function searchZa(n_nakl) {
    $.ajax({
        type: "POST",
        data: "n_nakl=" + n_nakl + "&act=a12",
        url: "ajax.php",
        dataType: "html",
        success: function (data) {
            $('#search_a12').html(data);
        }
    });
}









