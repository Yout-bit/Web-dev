$(document).ready(function(){
$('#ulchanneldropdown').on('click', 'li a',function(){

    var inputValue = $(this).attr('value');

$.post('functions/playlist_table1.php', { value: inputValue },function(data,status){
    var targetDiv = document.getElementById('playlist_here');
    targetDiv.innerHTML = data;
        });
    });
    });