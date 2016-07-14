<?php snippet('header_home') ?>

<div id="side-splash">
    <div id="splashcontent">

        <div class="row">
            <div class="large-12 medium-12 columns large-centered text-center">

                <h1>About AxisFocal</h1>

            </div>
        </div>
    </div>
</div>


<div class="content-wrapper" id="about-animate">
    <div class="content-text">
        <div class="row">
            <div class="large-4 columns">
                <h3 class="intro">
                    <blockquote>
                        <?php echo $page->quote() ?>
                    </blockquote>
                </h3>
            </div>
            <div class="large-7 large-offset-1 columns">
                <p>
                    <?php echo $page->mainParagraph() ?>
                </p>


            </div>
        </div>

        <div class="row">
            <div class="large-4 columns">
                <h3> <?php echo $page->secondaryCaption() ?></h3>
            </div>
            <div class="large-7 large-offset-1 columns">

                <?php echo $page->secondaryText() ?>

            </div>
        </div>


        <div class="row">
            <hr>

            <br><br>

            <div class="large-12 medium-12 columns large-centered text-center">
                <h3>Meet the Photographers</h3><br>
            </div>

        </div>

    </div>

    <div class="content-text">
        <div class="row person">
            <div class="large-4 columns">

                <img id="neil" src="<?php echo $page->images()->find('neil.jpg')->url() ?>">

            </div>
            <div class="large-7 large-offset-1 columns">
                <h3><?php echo $page->person1Name() ?>
                    <small><a href="http://instagram.com/<?php echo $page->person1IG() ?>">@<?php echo $page->person1IG() ?></a></small>
                </h3>
                <p>

                    <?php echo $page->person1Body() ?>

                </p>
            </div>
        </div>


        <div class="row">
            <div class="large-4 columns">

                <img id="thomas" src="<?php echo $page->images()->find('thomas.jpg')->url() ?>">

            </div>
            <div class="large-7 large-offset-1 columns">
                <h3><?php echo $page->person2Name() ?>
                    <small><a href="http://instagram.com/<?php echo $page->person2IG() ?>">@<?php echo $page->person2IG() ?></a></small>
                </h3>
                <p>
                    <?php echo $page->person2Body() ?>

                </p>
            </div>
        </div>
    </div>

</div>


<div id="joinModal" class="reveal-modal xlarge" data-reveal aria-labelledby="modalpage" aria-hidden="false"
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

<script>
    $(document).ready(function () {


        var image = "<?php echo $page->images()->find('main.jpg')->url() ?>"
        var urlString = "url('" + image + "')";

        document.getElementById("side-splash").style.backgroundImage = urlString;

        $('#about-animate').addClass('animated fadeIn');

    });

</script>


</body>
</html>
