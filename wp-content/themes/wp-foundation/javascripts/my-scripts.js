$(document).ready( function() {

    $('#sales-reps').submit(function(e){
        e.preventDefault();
        $("#rep-display").html('one moment');
        the_data = $(this).serialize();

        $.ajax({
            type: "POST",
            cache: false,
            url: "/my-outside-wp/sales-reps/reps.php?action=getReps",
            data: the_data,
            success: function(content){
                var message = content;
                $("#rep-display").html(content);
            }
        });
    })

    $('#territory-list').change(function(){
        $('#sales-reps').submit();
    })

    if ($('#video-bullet-container').length > 0) {
        series10();
    }

    addTargetToPdfs();


});

// < series 10 video animations >
function series10() {
    // <li> elements
    $list_items = $('#video-bullet-container ul li');
    // <video> element
    $video = $('#video-elm');

    vid_path = '/wp-content/themes/wp-foundation/videos/series-10/';

    $list_items.hover(function(){
        if ($(this).attr('data-vid')) {
        //$(this).css('opacity', 1)
        }
    }, function(){
        if ($(this).attr('data-vid')) {
        //$(this).css('opacity', .5)
        }
    })

    vid = document.getElementById('video-elm');
    vid.addEventListener('canplay', vidLoaded, false);
    anim_len = 500;

    // handler that is called when the canplay event is fired
    function vidLoaded() {
        $video.animate({
            'opacity': 1
        },
        anim_len,
        'linear', function() {
            //console.log('made it');
            });
    }

    $list_items.click(function(){

        if ($(this).attr('data-vid')) {

            new_vid = vid_path + $(this).attr('data-vid');

            $video.animate({
                'opacity': 0
            },
            anim_len,
            'linear', function() {
                $video.attr('src', new_vid);
            });
        }
    });

} //</ series 10 video animations>


$(document).ready(function(){
    /**
    * Initialize the hash slider for the series 10 animations
    *
    * IMPORTANT: only for non-touch devices
    */

    anim_interval = 20;
    if (!Modernizr.touch){
        // Global vars needed for position and width
        sliderYdest = 0;
        sliderHdest = 28;
        animSpeed = .1;

        // only initialize the hash slider if there's a menu
        if ($('#main-nav-follower').length > 0) {
            initSlider($('#main-nav-follower'));
        //buildProxyMenuBG();
        }
    }
});

/*===============
 *
 *  Hash slider functions
 *
 ===============*/
function initSlider($el){

    $el.attr('data-hDest', $el.height());
    $el.attr('data-yDest', 0);
    // simulate onEnterFrame event
    setInterval(sliderListener, anim_interval, $el );
    // bind the mouseenter event to the links
    $list_items = $('#video-bullet-container ul li');
    $list_items.mouseover(function(e){
        $el.attr('data-hDest', $(e.currentTarget).height());
        $el.attr('data-yDest', $(e.currentTarget).offset().top - $('#video-bullet-container').offset().top);
    });
}


function sliderListener($el ) {
    yDest = parseFloat($el.attr('data-yDest'));
    hDest = parseFloat($el.attr('data-hDest'));
    current_y = parseFloat($el.offset().top - $('#video-bullet-container').offset().top);
    current_h = parseFloat($el.height());
    if (current_y != yDest) {
        current_y +=  (yDest - current_y) * .2;
        $el.css('top', current_y + 'px');
    }
    if (current_h != hDest) {
        current_h += (hDest - current_h) * .2;
        $el.height(current_h + 'px');
    }
}

function XX_sliderListener($el) {
    //sliderHdest = parseFloat;
    currentH = parseFloat($el.height() + 1);
    currentY = parseFloat($el.offset().top - $('#video-bullet-container').offset().top);


    if (currentH != sliderHdest) {
        currentH += (sliderHdest-currentH)*animSpeed;
        $el.height(currentH + 'px');
    //console.log(Math.abs(sliderHdest-currentH));
    }
    if (currentY != sliderYdest) {
        currentY += parseFloat((sliderYdest-currentY)*animSpeed);
        $el.css('top', currentY + 'px');
    }
}
/* End hash slider functions */


/*===============
 *
 * Start Proxy Menu
 *
 =============== */
$('.nav-bar>li.has-flyout').hover(function() {
    $(this).children('.flyout').slideDown(100);
    $(this).children('.proxy-flyout').slideDown(100);
}, function() {
    $(this).children('.flyout').slideUp(10);
    $(this).children('.proxy-flyout').fadeOut(10);
})





/*
*   ADD target="_blank" to all .PDF links
*
*
* */

function addTargetToPdfs() {
    if ($('a').length > 0) {
        $('a').each(
            function() {
                the_href = ($(this).attr('href') !== undefined) ? $(this).attr('href').toLowerCase() : '';
                if (the_href.indexOf('.pdf') !== -1) {
                    $(this).attr('target', '_blank');
                }
            });
    }
}