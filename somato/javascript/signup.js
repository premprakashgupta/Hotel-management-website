$(document).ready(function(){
    $('#submit').click(function(){
        $('#signup').hide();
            $('#signout').show();
        }
                       
        $('#signout').click(function(){
        $('#signup').show();
            $('#signout').hide();
        }             
});

