/*
Global Actions Sheet

  Author:   Author Name
  Date:     DAY - MONTH - YEAR
  Project:  Project Name

*/

//Smooth Scroll

$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });
});

//Timing ends

var end = new Date();
var endTime = end.getTime();
var timeTaken = end - start;
console.log('Execution time is : ' + timeTaken);