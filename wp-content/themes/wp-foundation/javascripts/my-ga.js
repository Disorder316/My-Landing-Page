/*

Adds a click event to any HTML element with the 'data-ga-string' attribute.

ex: <a href="#" data-ga-string="Main Navigation | Click | /Background">click it</a>

*/


var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-22050465-1']);
_gaq.push(['_setDomainName', 'none']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();


$(document).ready(function(){
    $('*[data-ga-string]').click(function(e){
        e.preventDefault();
        ga_vars = $(this).attr('data-ga-string').split('|');
        _gat._getTrackerByName()._trackEvent(ga_vars[0], ga_vars[1], ga_vars[2]);
    })
});

function testGaStrings(a,b,c) {
    console.log('a = ' + a);
    console.log('b = ' + b);
    console.log('c = ' + c);
    console.log("\n");
}


