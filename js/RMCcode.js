$(function (){
    $("#search-bar").autocomplete({
        source: function(request, response){
            $.ajax({
                url: 'http://localhost/ratemycaf/processes/autocomplete-process.php',
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

//Refresh Captcha
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(
		0,img.src.lastIndexOf("?")
		)+"?rand="+Math.random()*1000;
}
