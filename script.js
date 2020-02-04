$(document).ready(function(){
    $.ajax({
        url: 'ajaxfile.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
                var len = response.length;
                    $('.username').text(response.username);
                    $('.name').text(response.name);
                    $('.email').text(response.email);
            }
    });
});