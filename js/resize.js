//Timing Starts
var start = new Date();
var startTime = start.getTime();

//Resizing
$(window).on('load', function () {
    $(window).resize(function () {
        var elem = $(this);
        var elemWidth = $(this).width();
        var elemHeight = $(this).height();



        if (elemWidth >= 993) {
            //Desktop

        } else {
            //Mobile 
        }
    });
    $(window).resize();
});