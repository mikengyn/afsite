<?php snippet('header_home') ?>

<div id="side-splash">
    <div id="splashcontent">

        <div class="row">
            <div class="large-12 medium-12 columns large-centered text-center">

                <h1>
                    <?php echo $page->title() ?>
                </h1>

            </div>
        </div>
    </div>
</div>


<div class="content-wrapper" id="about-animate">
    <div class="content-text">

        <div class="row">
            <div class="large-4 columns">
                <h3>
                    <?php echo $page->secondaryHeader1() ?>
                </h3>
            </div>
            <div class="large-7 large-offset-1 columns">
                <p>
                    <?php echo $page->contactContent() ?>
                </p>
            </div>
        </div>


        <!-- contact form-->
        <form class="contact-form" id="ajax-contact" role="form" method="POST" action="mailer.php">
            <div class="row">
                <div class="large-6 columns">
                        <input class="join-input" id="first_name" name="first_name" required type="text" placeholder="First Name" />
                </div>
                <div class="large-6 columns">
                    <input class="join-input" id="last_name" name="last_name" required type="text" placeholder="Last Name" />
                </div>

            </div>

            <!--subject-->
            <div class="row">
                <div class="large-12 columns">
                    <input class="join-input" id="email" name="email" required type="email" placeholder="Email" />
                </div>
            </div>

            <!--subject-->
            <div class="row">
                <div class="large-12 columns">
                    <input class="join-input" id="subject" name="subject" required type="text" placeholder="Subject" />
                </div>
            </div>

            <!--subject-->
            <div class="row">
                <div class="large-12 columns">
                    <textarea cols="30" rows="5" placeholder="Message" id="message" name="message"></textarea>
                </div>
            </div>


            <div class="row">
                <div class="large-6 columns">

                    <input type="submit" class="input-submit" value="Submit your inquiry">
        </form>
                    </div>

                <div id="form-messages" class="large-6 columns text-center">

                </div>

            </div>


        <!-- end contact form-->


        <div class="row">
            <div class="large-4 columns">
                <h3>
                    <?php echo $page->secondaryHeader2() ?>

                </h3>
            </div>
            <div class="large-7 large-offset-1 columns">

                <p><a href="<?php echo $site->instagram()?>">Instagram</a></p>

                <p><a href="<?php echo $site->facebook()?>">Facebook</a></p>

                <p><a href="mailto:<?php echo $site->email()?>"><?php echo $site->email()?></a></p>
            </div>

        </div>

        <div class="row">
            <div class="large-offset-5 large-7 columns">
            <p>
                <?php echo $page->info() ?>

            </p>
                </div>
        </div>
            </div>





</div>


<div id="joinModal" class="reveal-modal xlarge" data-reveal aria-labelledby="modalTitle" aria-hidden="false"
     role="dialog">

    <div class="reveal-modal-inner">

        <h3 id="modalTitle">Join our newsletter</h3>

        <p class="lead">Subscribe to any Axisfocal updates</p>


        <div id="mc_embed_signup">
            <form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                  class="validate join-form" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">

                    <div class="mc-field-group">

                        <input type="email" value="" placeholder="Email address" name="EMAIL"
                               class="required email join-input" id="mce-EMAIL">
                    </div>
                    <div class="mc-field-group hide-for-small">
                        <input type="text" value="" name="FNAME" class="join-input" id="mce-FNAME"
                               placeholder="First Name" autocomplete="off">
                    </div>
                    <div class="mc-field-group hide-for-small">
                        <input type="text" value="" name="LNAME" class="join-input" id="mce-LNAME"
                               placeholder="Last Name" autocomplete="off">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                              name="b_d5cb536ebea5d2f6912a0dc8d_84b115f879"
                                                                                              tabindex="-1" value="">
                    </div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe"
                                              id="mc-embedded-subscribe" class="btn"></div>
                </div>

            </form>


            <a class="close-reveal-modal" aria-label="Close">&#215;</a>

        </div>
    </div>

</div>

<?php snippet('footer') ?>

<?php echo js('assets/js/polyfiller/polyfiller.js') ?>
<?php echo js('assets/js/app.js') ?>

<script>

    webshim.activeLang('en');
    webshims.polyfill('forms');
    webshims.cfg.no$Switch = true;

    $(document).ready(function () {


        var image = "<?php echo $page->images()->find('main.jpg')->url() ?>"
        var urlString = "url('" + image + "')";

        document.getElementById("side-splash").style.backgroundImage = urlString;

        $('#about-animate').addClass('animated fadeIn');

    });

</script>


</body>
</html>
