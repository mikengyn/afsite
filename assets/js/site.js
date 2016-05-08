
$(window).load(function () {
    $('#status').fadeOut('slow');
    $('#preloader').delay(350).fadeOut('slow');
});
$(document).foundation();

$(document).ready(function () {

    $("a").each(function () {
        if (this.hostname != document.location.hostname) this.target = "_blank";
    });

});


$(window).scroll(function(){
    $("#splashcontent").css("opacity", 1 - $(window).scrollTop() / 300);

    $("#logo-small").css("opacity", 1 - $(window).scrollTop() / 50);
});


$(document).ready(function() {

    $('#joinModal').data('revealInit').close_on_background_click = false
    $('#joinModal').data('revealInit').close_on_esc = false

    $('#joinModal').bind('closed', function() {
        $('body').unbind('touchmove')
        document.getElementById("mc-embedded-subscribe-form").reset();

    });

    var joinModalOpen = false;
        $('.small-join-btn').click(function() {

            if (!joinModalOpen) {

                joinModalOpen = true
                $('#splash button').addClass('button-fixed');
                $('#button-wrapper button').addClass('close');

                $('html, body').addClass('fix-body');
                $('body').bind('touchmove', function (e) {
                    e.preventDefault()
                })

            }

            else{
                this.classList.remove('close');
                joinModalOpen = false;

                $('.menu').removeClass('openmenu');
                $('html, body').removeClass('fix-body');
                $('body').unbind('touchmove')
            }

    });


    $('.lines-button').click(function(e)
    {
        // Special stuff to do when this link is clicked...

        // Cancel the default action
        e.preventDefault();
    });

    var anchor = document.querySelectorAll('#button-wrapper button');

    [].forEach.call(anchor, function (anchor) {
        var open = false;
        anchor.onclick = function (event) {
            event.preventDefault();

            if (joinModalOpen){
                $('#splash button').removeClass('button-fixed');
                this.classList.remove('close');
                joinModalOpen = false
                $('.menu').removeClass('openmenu');
                $('html, body').removeClass('fix-body');
                $('body').unbind('touchmove')

                $('#joinModal').foundation('reveal', 'close');
            }


            else if (!open) {
                $('#splash button').addClass('button-fixed');
                this.classList.add('close');
                open = true;
                $('.menu').addClass('openmenu');

                // change inner html to white logo
                document.getElementById("logo-small").innerHTML = '<a href="http://axisfocal.com"><img src="assets/img/header_logo_white.png"></a>';

                $('.lines-button').css("background-color", "rgba(0, 0, 0, 0)");

                //$('html, body').addClass('fix-body');
                $('body').bind('touchmove', function (e) {
                    e.preventDefault()
                })
            }
            else {
                $('.lines-button').css("background-color", "rgba(0, 0, 0, 0.3)");

                $('#splash button').removeClass('button-fixed');
                this.classList.remove('close');
                open = false;

                document.getElementById("logo-small").innerHTML = '<a href="http://axisfocal.com"><img src="assets/img/header_logo.png"></a>';

                $('.menu').removeClass('openmenu');
                $('html, body').removeClass('fix-body');
                $('body').unbind('touchmove')
            }
        }
    });
});