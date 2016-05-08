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
                    <blockquote>The business of business is relationships; the business of life is human connection <br><br>Robin
                        Sharma
                    </blockquote>
                </h3>
            </div>
            <div class="large-7 large-offset-1 columns">
                <p>Time is constantly moving and our lives are always growing and changing. These moments of growth are
                    usually the moments that define us; events that evoke the beauty of life in it’s simplest form.
                </p>

                <p>Axis Focal Wedding Photography is a collective of young creatives who are dedicated to creating
                    memories. We are passionate about love and emotion at its purest form. We are dedicated to building
                    strong relationships with our clients, to ensure that we understand what’s important to you and to
                    create amazing work together. We are inspired by the uniqueness of each couple, and believe that the
                    very same uniqueness is what helps motivate us to create something new and amazing, every single
                    time.</p>
            </div>
        </div>

        <div class="row">
            <div class="large-4 columns">
                <h3>Work with us</h3>
            </div>
            <div class="large-7 large-offset-1 columns">
                <p>
                    We would love the chance to hear your story and work with you to capture the special moments in your
                    life. Whether it’s intimate moments, time spent with guests, or just the little details that make
                    your wedding unique to you, Axis Focal will be working along side you to capture those special
                    memories.
                </p>

                <p>We can’t wait to be a part of your journey.</p>
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
                <h3>Neil &nbsp;
                    <small><a href="http://instagram.com/wongtons0up">@wongtons0up</a></small>
                </h3>
                <p>Born in Hong Kong, Neil moved to Calgary with his family at the age of two. He is currently a
                    management student at the University of Lethbridge (Calgary campus) with a concentration in
                    marketing. Neil’s interest in photography began in high school, where he picked up his first camera
                    and took it with him on a trip to Europe. It was there that he gained a strong enthusiasm for travel
                    and photography. Growing up, Neil was strongly influenced by music and art. After years of study,
                    Neil became intrigued with the raw and powerful emotion of wedding photography and capturing the
                    essence of a simple moment in time that can be remembered forever.</p>
            </div>
        </div>


        <div class="row">
            <div class="large-4 columns">

                <img id="thomas" src="<?php echo $page->images()->find('thomas.jpg')->url() ?>">

            </div>
            <div class="large-7 large-offset-1 columns">
                <h3>Thomas &nbsp;
                    <small><a href="http://instagram.com/thethms">@thethms</a></small>
                </h3>
                <p>Thomas is an experienced photographer specializing in portraits, lifestyle, and wedding photography.
                    Formally trained at Alberta College of Art and Design, Thomas takes a stylistic and candid approach
                    to his work. He enjoys the simple pleasures in life such as creating photographs and travelling the
                    world to expand his horizons. Thomas’s passion for the art of wedding photography stems from the
                    belief that every person has an amazing story to share. When it comes to weddings and the unity of
                    two strangers, what shines through is the beauty and richness of their two separate stories becoming
                    one. This is the motivation he uses to make sure he captures consistently high quality photographs,
                    every single time.</p>
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
            <form action="//pushxpull.us12.list-manage.com/subscribe/post?u=d5cb536ebea5d2f6912a0dc8d&amp;id=84b115f879"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
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
