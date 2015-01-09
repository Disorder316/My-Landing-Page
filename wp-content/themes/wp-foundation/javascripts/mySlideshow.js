/***
  Modal slideshow with image zoom.

  Uses:
  	jquery.reveal.js
	jquery.anythingzoomer.js
	Simple jQuery Slideshow Script inspired by Jon Raasch (jonraasch.com)

	Alll three jquery utilities combined and modified by Jeramie Hendricks.

***/
var slide_count = 1;
var num_photos;
function slideSwitch(next) {

    var $active = $('#slideshow span.active');

    if ( $active.length == 0 ) $active = $('#slideshow span:last');

    if (next) {
        var $next =  $active.next().length ? $active.next(): $('#slideshow span:first');
        slide_count = $active.next().length ? slide_count+1 : 1;
    } else {
        var $next =  $active.prev().length ? $active.prev(): $('#slideshow span:last');
        slide_count = $active.prev().length ? slide_count-1 : num_photos;
    }

    $active.addClass('last-active');

    $next.css({
        opacity: 0.0
    })
    .addClass('active')
    .animate({
        opacity: 1.0
    }, 500, function() {
        $active.removeClass('active last-active az-large-inner').addClass('inactive');
        $('#slideshow-caption').html($('#slideshow span.active div.zoom div.small img').attr('data-desc'));
    });

    // update the slideshow counter
    $('#slideshow-count').html('image ' + slide_count + ' of ' + num_photos);

    // disable the "next" and "previous" buttons if it's the first or last photo
    if (slide_count < 2) {
        $('#slideshow-controls #back').removeClass('enabled_control').addClass('disabled_control');
    } else {
        $('#slideshow-controls #back').removeClass('disabled_control').addClass('enabled_control');
    }

    if (slide_count < num_photos) {
        $('#slideshow-controls #forward').removeClass('disabled_control').addClass('enabled_control');
    } else {
        $('#slideshow-controls #forward').removeClass('enabled_control').addClass('disabled_control');
    }

}// end slideSwitch()

$(document).ready(function() {
    // set the number of photos variable
    num_photos = $('#slideshow > span').length;
    // set the initial text for the slideshow count
    $('#slideshow-count').html('image ' + slide_count + ' of ' + num_photos);


    $('#myButton').click(function(e) {
        e.preventDefault();
        $('#myModal').reveal(	{
            animation: 'fade' /* fade, fadeAndPop, none */
        });
        $(".zoom").anythingZoomer({
            clone: true,
            edge: 10
        });
        slideSwitch(true);
    });

    $('#modal_btn').click(function(e) {
        e.preventDefault();
        slideSwitch(true);
        $(".zoom").anythingZoomer({
            clone: true,
            edge: 10
        });
    });

    $('#slideshow-controls #forward').click(function(e) {
        e.preventDefault();
        if (slide_count < num_photos) {
            slideSwitch(true);
        }
    });

    $('#slideshow-controls #back').click(function(e) {
        e.preventDefault();
        if (slide_count > 1) {
            slideSwitch(false);
        }
    });

});