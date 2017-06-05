<?php include"header.php"; ?>
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="breaking-news-section">
            <div class="container ">
                <div class="col-md-2 red-bg">
                    <span class="section-title">Breaking News :</span>
                </div>
                <div class="col-md-10 slider-title-content">
                    <ul class="breaking-news-slider">
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it</a></li>
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it 2</a></li>
                        <li><a href="#">Breaking News Title Goes Here, if you want to read just click it 3</a></li>
                    </ul>
                </div>
            </div>
        </section>
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <section id="main-slider-containers">
                <?php include "slider-content.php"; ?>
            </section>
            <!-- /slider -->
            <!--
            ==================================================
            LAtest News Section Start
            ================================================== -->
            <section id="main-content-containers" class="vertical-padding">
                 <?php include "latest-content.php"; ?>
            </section>
            <!--
            ==================================================
           Video and featured Section Start
            ================================================== -->
           <!-- /#feature & Video -->
            <section id="video-featured-container" class="vertical-padding">
                <?php include"video-featured-content.php"; ?>
            </section>  
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="cta-container" class="vertical-padding dark-green-bg">
                <?php include"cta-content.php"; ?>
            </section>  

    <?php include"footer.php"; ?>