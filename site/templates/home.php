<?php snippet('header_home') ?>

<div id="splash">
    <div id="splashcontent">

        <div class="row">
        <div class="large-12 medium-12 columns large-centered text-center">

            <h1> <?php echo $page->header() ?> </h1>
            <h2>  <?php echo $page->caption() ?> </h2>


        </div>
    </div>
    </div>
</div>


<!-- CONTENT -->
<div class="index-wrapper">
    <div class="row">

        <h1> <?php echo $page->secondary() ?> </h1>
        <h2> <?php echo $page->secondary_caption() ?> </h2>


     </div>


    <div class="row" style="margin-top:60px;margin-bottom:80px">
        <div class="large-12 medium-12 columns large-centered text-center">
            <a href="<?php echo $site->find('contact')->id() ?>">
                <span class="btn-talk"><?php echo $page->calltoActionText() ?></span>
            </a>
        </div>
    </div>

    <div class="feature-thumbnails">
        <div class="row">
            <div class="large-6 medium-6 columns">
                <a href="about" class="project-thumbnail">
                    <img src="<?php echo $site->images()->find('1.jpg')->url() ?>" alt="" />
                    <div class="project-hover-wrapper">
                        <div class="project-hover">
                            <h1>About us</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="large-6 medium-6 columns">
                <a href="portfolio" class="project-thumbnail">
                    <img src="<?php echo $site->images()->find('2.jpg')->url() ?>" alt="" />
                    <div class="project-hover-wrapper">
                        <div class="project-hover">
                            <h1>View Portfolio</h1>
                        </div>
                    </div>
                </a>
            </div>

</div>
    </div>


    </div>

<?php snippet('footer_home') ?>

<!-- NEWSLETTER MODAL -->
<div id="joinModal" class="reveal-modal xlarge"  data-reveal aria-labelledby="modalTitle" aria-hidden="false" role="dialog">

    <div class="reveal-modal-inner">

        <h3 id="modalTitle">Join our newsletter</h3>
        <p class="lead">Subscribe to any Axisfocal updates</p>


        <!--<div id="mc_embed_signup">-->
            <!--<form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate join-form" target="_blank" novalidate>-->
                <!--<div id="mc_embed_signup_scroll">-->

                    <!--<div class="mc-field-group">-->

                        <!--<input type="email" value="" placeholder="Email address" name="EMAIL" class="required email join-input" id="mce-EMAIL">-->
                    <!--</div>-->
                    <!--<div class="mc-field-group hide-for-small">-->
                        <!--<input type="text" value="" name="FNAME" class="join-input" id="mce-FNAME"  placeholder="First Name" autocomplete="off">-->
                    <!--</div>-->
                    <!--<div class="mc-field-group hide-for-small">-->
                        <!--<input type="text" value="" name="LNAME" class="join-input" id="mce-LNAME"  placeholder="Last Name" autocomplete="off">-->
                    <!--</div>-->
                    <!--<div id="mce-responses" class="clear">-->
                        <!--<div class="response" id="mce-error-response" style="display:none"></div>-->
                        <!--<div class="response" id="mce-success-response" style="display:none"></div>-->
                    <!--</div> &lt;!&ndash; real people should not fill this in and expect good things - do not remove this or risk form bot signups&ndash;&gt;-->
                    <!--<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d5cb536ebea5d2f6912a0dc8d_84b115f879" tabindex="-1" value=""></div>-->
                    <!--<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn"></div>-->
                <!--</div>-->

            <!--</form>-->


            <!--<a class="close-reveal-modal" aria-label="Close">&#215;</a>-->

        <!--</div>-->
    </div>

</div>

<?php echo js('assets/js/foundation.min.js') ?>
<!--<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = []; window.ftypes = [];fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>-->
<script>

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

    $(window).scroll(function() {

        $("#splashcontent").css("opacity", 1 - $(window).scrollTop() / 450);

        $("#logo-small").css("opacity", 1 - $(window).scrollTop() / 50);
    });

    $(document).ready(function () {

        var joinModalOpen = false;

        $('#joinModal').data('revealInit').close_on_background_click = false
        $('#joinModal').data('revealInit').close_on_esc = false

        $('#joinModal').bind('closed', function() {
            $('.menu').removeClass('openmenu');
            $('html, body').removeClass('fix-body');
            $('body').unbind('touchmove')
            joinModalOpen = false
        });


        $('.small-join-btn').click(function() {

            if (!joinModalOpen) {

                joinModalOpen = true

                $('html, body').addClass('fix-body');
                $('body').bind('touchmove', function (e) {
                    e.preventDefault()
                })
            }

            else{
                joinModalOpen = false;

                $('.menu').removeClass('openmenu');
                $('html, body').removeClass('fix-body');
                $('body').unbind('touchmove')
            }

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
                    document.getElementById("logo-small").innerHTML = '<a href="http://axisfocal.com"><img src="<?php echo  $site->images()->find('header_logo_white.png')->url() ?>"></a>';


//                    $('html, body').addClass('fix-body');
                    $('body').bind('touchmove', function (e) {
                        e.preventDefault()
                    })
                }
                else {
                    $('#splash button').removeClass('button-fixed');
                    this.classList.remove('close');
                    open = false;
                    document.getElementById("logo-small").innerHTML = '<a href="http://axisfocal.com"><img src="<?php echo  $site->images()->find('header_logo.png')->url() ?>"></a>';

                    $('.menu').removeClass('openmenu');
                    $('html, body').removeClass('fix-body');
                    $('body').unbind('touchmove')
                }
            }
        });
    });
</script>

</body>
</html>
