$(function() {
    $('.activator').click(function(){
        $('#overlay').fadeIn('fast',function(){
            $('#box').animate({'top':'2%'},500);
        });
    });
    $('#boxclose').click(function(){
        $('#box').animate({'top':'-100%'},500,function(){
            $('#overlay').fadeOut('fast');
        });
    });
});
