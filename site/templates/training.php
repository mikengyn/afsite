<?php
$arg1 = $page->program_1();
$tags1 = explode(',', $arg1);

$arg2 = $page->program_2();
$tags2 = explode(',', $arg2);


$arg3 = $page->program_3();
$tags3 = explode(',', $arg3);

$arg4 = $page->program_4();
$tags4 = explode(',', $arg4);

$arg5 = $page->program_5();
$tags5 = explode(',', $arg5);

$arg6 = $page->program_6();
$tags6 = explode(',', $arg6);

$arg7 = $page->program_7();
$tags7 = explode(',', $arg7);
?>

<?php snippet('header') ?>

<div id="side-splash">
    <div id="splashcontent">

        <div class="row">
            <div class="large-12 medium-12 columns large-centered text-center">

                <h1><?php echo $page->title()?></h1>

            </div>
        </div>
    </div>
</div>


<div class="content-wrapper">
    <div class="content-text">
        <div class="row">
            <div class="large-4 columns">
                <br>
                <h4 class="intro"><?php echo $page->header()?></h4>
            </div>
            <div class="large-8  columns">

                <p>
                    <?php echo $page->intro()?>
                </p>
            </div>
        </div>


        <?php if ($page->program_1_title() != "") { ?>

        <div class="row training-method">
            <div class="large-4 columns">
                <h4><?php echo $page->program_1_title()?></h4>
            </div>
            <div class="large-8  columns">
                <div class="training">

                        <ul>
                            <?php
                            foreach($tags1 as $tag): ?>
                            <li>
                                    <?php echo $tag ?>
                            </li>
                            <?php endforeach ?>
                        </ul>


                </div>
            </div>
        </div>


        <?php } ?>


        <?php if ($page->program_2_title() != "") { ?>
        <div class="row training-method">
            <div class="large-4 columns">
                <h4><?php echo $page->program_2_title()?></h4>
            </div>
            <div class="large-8  columns">
                <div class="training">

                    <ul>
                        <?php
                            foreach($tags2 as $tag): ?>
                        <li>
                            <?php echo $tag ?>
                        </li>
                        <?php endforeach ?>
                    </ul>


                </div>
            </div>
        </div>

        <?php } ?>



        <?php if ($page->program_3_title() != "") { ?>

        <div class="row training-method">
            <div class="large-4 columns">
                <h4><?php echo $page->program_3_title()?></h4>
            </div>
            <div class="large-8  columns">
                <div class="training">

                    <ul>
                        <?php
                            foreach($tags3 as $tag): ?>
                        <li>
                            <?php echo $tag ?>
                        </li>
                        <?php endforeach ?>
                    </ul>


                </div>
            </div>
        </div>


        <?php } ?>


        <?php if ($page->program_4_title() != "") { ?>

        <div class="row training-method">
            <div class="large-4 columns">
                <h4><?php echo $page->program_4_title()?></h4>
            </div>
            <div class="large-8  columns">
                <div class="training">

                    <ul>
                        <?php
                            foreach($tags4 as $tag): ?>
                        <li>
                            <?php echo $tag ?>
                        </li>
                        <?php endforeach ?>
                    </ul>


                </div>
            </div>
        </div>


        <?php } ?>

        <!--optionals-->

        <?php if ($page->program_5_title() != "") { ?>

        <div class="row training-method">
            <div class="large-4 columns">
                <h4><?php echo $page->program_5_title()?></h4>
            </div>
            <div class="large-8  columns">
                <div class="training">

                    <ul>
                        <?php
                            foreach($tags5 as $tag): ?>
                        <li>
                            <?php echo $tag ?>
                        </li>
                        <?php endforeach ?>
                    </ul>


                </div>
            </div>
        </div>

        <?php } ?>

        <?php if ($page->program_6_title() != "") { ?>

        <div class="row training-method">
            <div class="large-4 columns">
                <h4><?php echo $page->program_6_title()?></h4>
            </div>
            <div class="large-8  columns">
                <div class="training">

                    <ul>
                        <?php
                            foreach($tags6 as $tag): ?>
                        <li>
                            <?php echo $tag ?>
                        </li>
                        <?php endforeach ?>
                    </ul>


                </div>
            </div>
        </div>

        <?php } ?>


        <?php if ($page->program_7_title() != "") { ?>

        <div class="row training-method">
            <div class="large-4 columns">
                <h4><?php echo $page->program_7_title()?></h4>
            </div>
            <div class="large-8  columns">
                <div class="training">

                    <ul>
                        <?php
                            foreach($tags7 as $tag): ?>
                        <li>
                            <?php echo $tag ?>
                        </li>
                        <?php endforeach ?>
                    </ul>


                </div>
            </div>
        </div>

        <?php } ?>


        <div class="row full-width text-center">
            <a href="mailto:<?php echo $site->email()?>">
                <span class="btn-talk">Let's Talk</span>
            </a>
        </div>

        <div class="row"></div>

    </div>
</div>


<?php snippet('footer') ?>

<script>
    $(document).ready(function () {

        var image = "<?php echo $page->images()->find('personal_training_main.jpg')->url() ?>"
        var urlString = "url('"+image+"')";

        document.getElementById("side-splash").style.backgroundImage = urlString;

    });
</script>

</body>
</html>
