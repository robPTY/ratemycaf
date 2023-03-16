$(function (){
    $("#search-bar").autocomplete({
        source: function(request, response){
            $.ajax({
                url: 'http://localhost/ratemycaf/autocomplete-process.php',
                type:'GET',
                dataType:'json',
                success:function(data){
                    var results = $.ui.autocomplete.filter(data, request.term);
                    response(results)
                }
            })
        }
    });
});