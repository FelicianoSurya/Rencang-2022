$(document).ready(function(){
    $('#dropdownToggle').hover(function(){
        $('#dropdownMenu').show();
    }, function(){
        $('#dropdownMenu').hide();
    });

    $('#dropdownToggle').click(function(){
        $('#dropdownMenu').show();
    });

    $('#dropdownMenu').hover(function(){
        $('#dropdownMenu').show();
    }, function(){
        $('#dropdownMenu').hide();
    });

    $('.dropdown-item').hover(function(){
        $(this).css('color', '#FFF3E1');
    }, function(){
        $(this).css('color', '#388177');
    });

    url = window.location.pathname;
    filename = url.substring(url.lastIndexOf('/')+1).split('.');
    $('#' + filename[0]).addClass("active");
});