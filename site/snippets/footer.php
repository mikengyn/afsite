<footer>
    <div class="hide-for-small">
        <div class="row">
            <div id="footer-content">


                <div class="large-2 medium-3 columns">
                    <ul>
                        <li>
                            <img src="<?php echo  $site->images()->find('header_logo_white.png')->url() ?>" />
                        </li>
                    </ul>
                </div>

                <div class="large-3 medium-4 columns large-offset-2 medium-offset-1 ">
                    <ul>
                        <a href="mailto:<?php echo $site->email()?>" target="_blank"><i class="fa fa-envelope"></i></a>
                        <a href="<?php echo $site->facebook()?>"><i class="fa fa-facebook-square"></i></a>
                        <a href="<?php echo $site->instagram()?>"><i class="fa fa-instagram"></i></a>
                    </ul>
                </div>

                <div class="large-3 medium-4 columns large-offset-1 right">

                    <a href="<?php echo $site->find('contact')->id() ?>">
                        <span class="btn">Contact AXISFOCAL</span>
                    </a>
                </div>


            </div>
        </div>
    </div>


    <!--copy-->
    <div class="hide-for-small">
        <div class="row">
            <div class="large-8 medium-8 columns copyright">
                <?php echo $site->copyright()->kirbytext()  ?>
            </div>
        </div>
    </div>


    <div class="show-for-small">

        <div class="row">
            <div class="small-6 small-offset-3 columns text-center footer-mobile join">

                <ul>
                    <li>
                        <img style="margin-left:-7px" src="<?php echo  $site->images()->find('header_logo_white.png')->url() ?>" />
                    </li>
                </ul>
            </div>
        </div>




        <div class="row">

            <div class="small-12 columns social-media-mobile footer-mobile">
                <ul><li>
                    <a href="mailto:<?php echo $site->email()?>" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="<?php echo $site->facebook()?>"><i class="fa fa-facebook-square"></i></a>
                    <a href="<?php echo $site->instagram()?>"><i class="fa fa-instagram"></i></a>
                </li></ul>
            </div>
        </div>


        <div class="hide-for-small">
            <div class="row">
                <div class="small-12 columns text-center footer-mobile join">
                    <ul>
                        <li>
                            <a class="small-join-btn" href="<?php echo $site->find('contact')->id() ?>"><span class="btn">Contact AXISFOCAL</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="small-12 columns copyright text-center">
                <li> <?php echo $site->copyright()->kirbytext()  ?></li>
            </div>
        </div>

    </div>


</footer>

<?php echo js('assets/js/foundation.min.js') ?>
<?php echo js('assets/js/site.js') ?>


