//ive been using this tutorial to help me: https://www.webslesson.info/2021/06/javascript-autocomplete-textbox-from-database-using-php-ajax.html

function loaddata(query){
    if(query.length > 2){
        var form_data = new FormData();
        form_data.append('query', query);
        var ajax_req = new XMLHttpRequest();

        ajax_req.open('POST', 'autocomplete-process.php');
        ajax_req.send(form_data);
        ajax_req.onreadystatechange = function(){
            if(ajax_req.readyState == 4 && ajax_req.status == 200){
                var response = JSON.parse(ajax_req.responseText);
                var html = '<div class="list-group">';
                if (response.length > 0){
                    for(var count = 0; count < response.length; count++){
                        html += '<a href="#" class="list-group-item list-group-item-action">'+response[count].post_title+'</a>';
                    }
                }
                else{
                    html += '<a href="#" class="list-group-item list-group-item-action disabled"> No Data Found </a>';
                }
                html += '<div>';
                document.getElementById('autosuggestions').innerHTML = html;

            }
        }
    }
    else{
        document.getElementById('autosuggestions').innerHTML = '';
    }
}