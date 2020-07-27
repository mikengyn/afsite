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

    <div class="feature-thumbnails">
        <div class="row">
            <div class="large-4 medium-4 columns">
                <a href="https://legalhustleclothing.com/shop/product-category/adults" class="project-thumbnail">
                    <img src="content/men.jpg" alt="" />
                    <div class="project-hover-wrapper hide-for-small">
                        <div class="project-hover">
                           <h1>View all Adults</h1>
                       </div>
                   </div>
               </a>
           </div>
           <div class="large-4 medium-4 columns">
            <a href="https://legalhustleclothing.com/shop/product-category/littlehustlersclothing" class="project-thumbnail">
                <img src="content/classic.jpg" alt="" />
                <div class="project-hover-wrapper hide-for-small">
                    <div class="project-hover">
                        <h1>Little Hustlers Clothing</h1>
                    </div>
                </div>
            </a>
        </div>
        <div class="large-4 medium-4 columns">
            <a href="" class="project-thumbnail">
              <img class="hide-for-small"src="content/newarrivals.jpg" alt="" />
              <img class="show-for-small" src="content/newarrivals_mobile.jpg" alt="" />
              <div class="project-hover-wrapper hide-for-small">
                <div class="project-hover">
                  <h1>Coming 2019</h1>
              </div>
          </div>
      </a>
  </div>
</div>
</div>
</div>

    <div class="shop-section container-fluid">
    <div class="row">
    <div class="large-3 medium-4 columns shop-item">
            <a href="<?php echo $site->product1link()?>">
            <img src="<?php echo $site->product1image()?>">
            <div class="caption">
                <li class="shop-product"><?php echo $site->product1()?></li>
            <li class="shop-price" ><?php echo $site->product1price()?></li>
            </div>
            </a>
           </div>

               <div class="large-3 medium-4 columns shop-item">
            <a href="<?php echo $site->product2link()?>">
            <img src="<?php echo $site->product2image()?>">
            <div class="caption">
            <li class="shop-product"><?php echo $site->product2()?></li>
            <li class="shop-price" ><?php echo $site->product2price()?></li>
            </div>            </a>
           </div>

               <div class="large-3 medium-4 columns shop-item">
            <a href="<?php echo $site->product3link()?>">
            <img src="<?php echo $site->product3image()?>">
            <div class="caption">
                <li class="shop-product"><?php echo $site->product3()?></li>
            <li class="shop-price" ><?php echo $site->product3price()?></li>
            </div>            </a>
           </div>

               <div class="large-3 medium-4 columns shop-item">
            <a href="<?php echo $site->product4link()?>">
            <img src="<?php echo $site->product4image()?>">
            <div class="caption">
                <li class="shop-product"><?php echo $site->product4()?></li>
            <li class="shop-price" ><?php echo $site->product4price()?></li>
            </div>            </a>
           </div>
</div>


<div class="row">

    <div class="large-3 medium-4 columns shop-item">
            <a href="<?php echo $site->product5link()?>">
            <img src="<?php echo $site->product5image()?>">
            <div class="caption">
                <li class="shop-product"><?php echo $site->product5()?></li>
            <li class="shop-price" ><?php echo $site->product5price()?></li>
            </div>
            </a>
           </div>

               <div class="large-3 medium-4 columns shop-item">
            <a href="<?php echo $site->product6link()?>">
            <img src="<?php echo $site->product6image()?>">
            <div class="caption">
            <li class="shop-product"><?php echo $site->product6()?></li>
            <li class="shop-price" ><?php echo $site->product6price()?></li>
            </div>            </a>
           </div>

               <div class="large-3 medium-4 columns shop-item">
            <a href="<?php echo $site->product7link()?>">
            <img src="<?php echo $site->product7image()?>">
            <div class="caption">
                <li class="shop-product"><?php echo $site->product7()?></li>
            <li class="shop-price" ><?php echo $site->product7price()?></li>
            </div>            </a>
           </div>

               <div class="large-3 medium-4 columns shop-item">
            <a href="<?php echo $site->product8link()?>">
            <img src="<?php echo $site->product8image()?>">
            <div class="caption">
                <li class="shop-product"><?php echo $site->product8()?></li>
            <li class="shop-price" ><?php echo $site->product8price()?></li>
            </div>            </a>
           </div>

</div><!-- end row -->
</div>


</div>
</div>

<?php snippet('footer_home') ?>

<!-- NEWSLETTER MODAL -->
<div id="joinModal" class="reveal-modal xlarge"  data-reveal aria-labelledby="modalTitle" aria-hidden="false" role="dialog">

    <div class="reveal-modal-inner">

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
                    document.getElementById("logo-small").innerHTML = '<a href="http://legalhustleclothing.com"><img src="content/LHCLogo_white.png"></a>';


//                    $('html, body').addClass('fix-body');
$('body').bind('touchmove', function (e) {
    e.preventDefault()
})
}
else {
    $('#splash button').removeClass('button-fixed');
    this.classList.remove('close');
    open = false;
    document.getElementById("logo-small").innerHTML = '<a href="http://legalhustleclothing.com"><img src="content/LHCLogo.png"></a>';

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
