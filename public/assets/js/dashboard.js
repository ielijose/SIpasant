$(function () {

    /* Display message header 
    setTimeout(function () {
        $('#chat-notification').removeClass('hide').addClass('animated bounceIn');
        $('#chat-popup').removeClass('hide').addClass('animated fadeIn');
    }, 5000);*/

    /* Hide message header 
    setTimeout(function () {
        $('#chat-popup').removeClass('animated fadeIn').addClass('animated fadeOut').delay(800).hide(0);
    }, 8000);*/

   

    function showTooltip(x, y, contents) {
        $('<div id="flot-tooltip">' + contents + '</div>').css({
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            color: '#fff',
            padding: '2px 5px',
            'background-color': '#717171',
            opacity: 0.80
        }).appendTo("body").fadeIn(200);
    };


});