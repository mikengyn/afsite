<?php snippet('header_home') ?>

<?php echo js('assets/js/imagesloaded.pkgd.min.js') ?>
<?php echo js('assets/js/masonry.pkgd.min.js') ?>

<?php echo css('assets/css/photoswipe.css') ?>
<?php echo css('assets/css/default-skin.css') ?>

<div id="side-splash">
    <div id="splashcontent">

        <div class="row">
            <div class="large-12 medium-12 columns large-centered text-center">

                <h1>Portfolio</h1>

            </div>
        </div>
    </div>
</div>


<div class="row">

    <div class="grid portfolio-gallery">
        <div class="grid-sizer"></div>

        <?php foreach($page->images() as $pic): ?>

        <?php if ($pic->filename() != "main.jpg") { ?>

        <div class="grid-item">
            <a href="<?php echo $pic->url() ?>" data-size="<?php echo $pic->width() ?>x<?php echo $pic->height() ?>">
            <img src="<?php echo $pic->url() ?>"/>
        </a>

        </div>
        <?php } endforeach ?>

    </div>
</div>



<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"> </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"> </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

</div>


<div id="joinModal" class="reveal-modal xlarge"  data-reveal aria-labelledby="modalTitle" aria-hidden="false" role="dialog">

    <div class="reveal-modal-inner">

        <h3 id="modalTitle">Join our newsletter</h3>
        <p class="lead">Subscribe to any Axisfocal updates</p>


        <div id="mc_embed_signup">
            <form action="//pushxpull.us12.list-manage.com/subscribe/post?u=d5cb536ebea5d2f6912a0dc8d&amp;id=84b115f879" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate join-form" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">

                    <div class="mc-field-group">

                        <input type="email" value="" placeholder="Email address" name="EMAIL" class="required email join-input" id="mce-EMAIL">
                    </div>
                    <div class="mc-field-group hide-for-small">
                        <input type="text" value="" name="FNAME" class="join-input" id="mce-FNAME"  placeholder="First Name" autocomplete="off">
                    </div>
                    <div class="mc-field-group hide-for-small">
                        <input type="text" value="" name="LNAME" class="join-input" id="mce-LNAME"  placeholder="Last Name" autocomplete="off">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d5cb536ebea5d2f6912a0dc8d_84b115f879" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn"></div>
                </div>

            </form>


            <a class="close-reveal-modal" aria-label="Close">&#215;</a>

        </div>
    </div>

</div>

<?php snippet('footer') ?>


<?php echo js('assets/js/photoswipe-ui-default.min.js') ?>
<?php echo js('assets/js/photoswipe.min.js') ?>
<?php echo js('assets/js/jquery.photoswipe.js') ?>

<script>

    // external js: masonry.pkgd.js, imagesloaded.pkgd.js

    // delay the time it takes to relayout the page
    $(window).load(function(){

        setTimeout(function(){

            var grid = document.querySelector('.grid');

            var msnry = new Masonry(grid, {
                itemSelector: '.grid-item',
                gutter: 16,
                percentPosition: true,
                hiddenStyle: { opacity: 0 },
                visibleStyle: { opacity: 1 }
            });

            imagesLoaded(grid).on('progress', function () {
                // layout Masonry after each image loads
                msnry.layout();
                $('.grid').animate({'opacity':1});


            });

        },200);



    })

</script>

<script>
    // init with options
    $('.portfolio-gallery').photoswipe({
        bgOpacity: 0.95,
        loop: true
    });

    $(document).ready(function () {

        var image = "<?php echo $page->images()->find('main.jpg')->url() ?>"
        var urlString = "url('"+image+"')";

        document.getElementById("side-splash").style.backgroundImage = urlString;

    });

</script>



</body>
</html>
