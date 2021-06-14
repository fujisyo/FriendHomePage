$(function(){
    $('a[href^=#]').click(function(){
        var href = $(this).attr('href');
        var target = $(href == '#scroll-top' || href == '' ? 'html' : href)
        var position = target.offset().top;
        $('html,body').animate({scrollTop:position}, 400, 'swing');
    })
})