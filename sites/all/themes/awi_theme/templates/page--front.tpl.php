<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
    </head>
    <body class=" main-body">
        <!-- start wrapper -->
        <div class="wrapper">
            <!-- start left-col -->
            <div class="left-col">
                <!-- start logo -->
                <div class="logo">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" alt="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>
                    <?php endif; ?>
                </div>
                <!-- end logo -->
                <div class="divider"></div>
                <?php if ($page['mission_left']): ?>
                    <?php print render($page['mission_left']); ?>
                <?php endif; ?>
            </div>
            <!-- end left-col -->
            <!-- start right-col -->
            <div class="right-col">
                <!-- start header -->
                <div class="header">
                    <!-- start search -->
                    <div class="search">
                        <form action="">
                            <input name="" type="text" class="input" />
                            <input name="" value="search" type="button" class="button" />
                        </form>
                    </div>
                    <!-- end search -->
                    <!-- start top-menu -->
                    <div class="top-menu">
                        <ul>
                            <li><a href="#">WHO WE ARE</a></li>
                            <li class="second"><a href="#">TAKE ACTION</a></li>
                            <li><a href="#">DONATE</a></li>
                        </ul>
                    </div>
                    <!-- end top-menu -->
                    <div class="clear"></div>
                    <div class="mobile-nav">Menu</div>
                    <div class="clear"></div>
                    <!-- start menu -->
                    <?php if ($main_menu): ?>
                        <div class="menu">
                            <?php
                            print theme('links__system_main_menu', array(
                                'links' => $main_menu,
                                'attributes' => array(
                                )
                            ));
                            ?>
                        </div> <!-- /#main-menu -->
                    <?php endif; ?>

                    <!-- end menu -->
                    <div class="clear"></div>      
                </div>
                <!-- end header -->
                <div class="slider-div">
                    <!-- start ninja-slider -->
                    <?php if ($page['featured_slider']): ?>
                        <div id="featured-slider">
                            <?php print render($page['featured_slider']); ?>
                        </div> <!-- End Featured Slider-->
                    <?php endif; ?>

                    <!-- end ninja-slider -->
                </div>
            </div>
            <!-- end right-col -->
            <!-- start animal-thumb -->
            <div class="animal-thumb">
                <ul>
                    <li>
                        <img src="<?php print drupal_get_path('theme', 'awi_theme'); ?>/images/Michael-Fivis.jpg" alt="Michael-Fivis" />
                        <div class="txt">ANIMALS IN LABORATORIES</div>
                    </li>
                    <li>
                        <img src="<?php print drupal_get_path('theme', 'awi_theme'); ?>/images/girlkitten.jpg" alt="girlkitten" />
                        <div class="txt">COMPANION ANIMALS</div>
                    </li>
                    <li>
                        <img src="<?php print drupal_get_path('theme', 'awi_theme'); ?>/images/Mike-Suarez.jpg" alt="Mike-Suarez" />
                        <div class="txt">FARM ANIMALS</div>
                    </li>
                    <li>
                        <img src="<?php print drupal_get_path('theme', 'awi_theme'); ?>/images/Scott-Portelli.jpg" alt="Scott-Portelli" />
                        <div class="txt">MARINE ANIMALS</div>
                    </li>
                    <li>
                        <img src="<?php print drupal_get_path('theme', 'awi_theme'); ?>/images/USFWSSoutheast.jpg" alt="USFWSSoutheast" />
                        <div class="txt">WILDLIFE</div>
                    </li>
                    <li>
                        <img src="<?php print drupal_get_path('theme', 'awi_theme'); ?>/images/Tom-Gill.jpg" alt="Tom-Gill" />
                        <div class="txt">OTHER PROGRAMS</div>
                    </li>
                </ul>
            </div>
            <!-- end animal-thumb -->
            <!-- start content -->
            <div class="content">
                <!-- start news -->
                <div class="news">
                    <h1>LATEST NEWS</h1>
                    <p>
                        Groups Oppose Resolutions Calling for Termination of Red Wolf Recovery Program in North Carolina
                        <span>Washington, DC—The Animal Welfare Institute (AWI), in collaboration with Defenders of Wildlife (Defenders), the Red Wolf Coalition (RWC), WildEarth Guardians, Born Free USA, the Endangered...</span>
                    </p>
                    <p>
                        Animal Welfare Groups Welcome Reps. Mike Fitzpatrick and Earl Blumenauer as New Co-Chairs of Bipartisan Congressional Animal Protection Caucus
                        <span>Washington, DC—The ASPCA® (The American Society for the Prevention of Cruelty to Animals®), the...</span>
                    </p>
                    <p>
                        NOAA to Officially List Lone Orca at Miami Seaquarium as Endangered
                        <span>Washington, DC—Today, the National Oceanic and Atmospheric Administration (NOAA) announced it will officially list Lolita, the lone orca at the Miami Seaquarium, as a member of the endangered Southern...</span>
                    </p>
                    <p>
                        NCWRC Violates Memorandum of Understanding with USFWS in Effort to Extinguish Last Wild Population of Red Wolves
                        <span>Raleigh, NC—On Thursday, January 29, the North Carolina Wildlife Resources Commission (NCWRC)...</span>
                    </p>
                    <p>
                        Second Phase of Five-Year "Deer Spay Project" Kicks Off in Fairfax City
                        <span>Washington, DC—Humane Deer Management, an organization established by Northern Virginia citizens dedicated to non-lethal control of the region's deer population, launched the second phase of its "Deer...</span>
                    </p>
                    <a href="#">More</a>
                </div>
                <!-- end news -->
                <!-- start img-block -->
                <div class="img-block">
                    <img src="<?php print drupal_get_path('theme', 'awi_theme'); ?>/images/fish.jpg" alt="fish" />
                    <a href="#">TAKE A LOOK INSIDE</a>
                </div>
                <!-- end img-block -->
            </div>
            <!-- end content -->
            <!-- start footer -->

            <div class="footer">
                <!-- start left -->
                <div class="left">
                    <?php if ($page['footer_links']): ?>
                        <?php print render($page['footer_links']); ?>
                    <?php endif; ?>
                    <div class="clear"></div>
                    <span><?php if ($page['footer_message']): ?>
                            <div id="featured-slider">
                                <?php print render($page['footer_message']); ?>
                            </div> <!-- End Featured Slider-->
                        <?php endif; ?></span>
                </div>
                <!-- end left -->
                <!-- start right -->
                <div class="right">
                    <?php if ($page['social_icons']): ?>
                        <?php print render($page['social_icons']); ?>
                    <?php endif; ?>
                </div>
                <!-- end right -->
            </div>
            <!-- end footer -->
        </div>
        <!-- end wrapper -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".mobile-nav").click(function() {
                    $(".menu").toggle(200);
                });
            });
        </script>

    </body>
</html>