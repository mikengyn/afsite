<footer>
    <div class="hide-for-small">
        <div class="row">
            <div id="footer-content">


                <div class="large-2 medium-3 columns">
                    <ul>
                        <li>
                            <img src="content/LHCLogo.png"/>
                        </li>
                    </ul>
                </div>

                <div class="large-3 medium-4 columns large-offset-2 medium-offset-1 ">
                    <ul>
                     <li><a href="https://legalhustleclothing.com/shop/product-category/adults">Adults</a></li>
                     <li><a href="https://legalhustleclothing.com/shop/product-category/littlehustlersclothing/">Little Hustlers</a></li>
                     <li><a href="mailto:info@legalhustleclothing.com">Contact</a></li>
                    </ul>
                </div>


                <div class="large-3 medium-4 columns large-offset-1 right">
                       <a href="mailto:info@legalhustleclothing.com" target="_blank"><i class="fa fa-envelope"></i></a>
                        <a href="<?php echo $site->facebook()?>"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/legalhustleinc"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $site->instagram()?>"><i class="fa fa-instagram"></i></a>
                </div>


            </div>
        </div>
    </div>


    <!--copy-->
    <div class="hide-for-small">
        <div class="row">
            <div class="large-8 medium-8 columns copyright">
                <?php echo $site->copyright()->kirbytext() ?>
            </div>
        </div>
    </div>


    <div class="show-for-small">

        <div class="row">
            <div class="small-6 small-offset-3 columns text-center footer-mobile join">

                <ul>
                    <li>
                        <img src="content/LHCLogo.png" />
                    </li>
                </ul>
            </div>
        </div>



        <div class="row">

            <div class="small-12 columns social-media-mobile footer-mobile">
                <ul>
                    <li>
                   <a href="mailto:info@legalhustleclothing.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                     <a href="<?php echo $site->facebook()?>"><i class="fa fa-facebook"></i></a>
                                     <a href="https://twitter.com/legalhustleinc"><i class="fa fa-twitter"></i></a>
                                     <a href="<?php echo $site->instagram()?>"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
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
                <li> <?php echo $site->copyright()->kirbytext() ?></li>
            </div>
        </div>

    </div>


</footer>
