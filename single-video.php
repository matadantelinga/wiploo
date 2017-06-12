<?php include"header.php"; ?>

<section id="single-video" class="vertical-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9">
				
				<div class="video-content width-100">
					<!--video code goes here-->
						<img src="assets/images/video-dummy.jpg" class="width-100">
					<!--end-->
					
				</div>
				<h3 class="news-title font-size-16">Dummy video title goes here</h3>
				<hr />
				<p class="video-description">Lorem ipsum here you can write the description about the video, just make it short and simple cuz people bored to read the long content.</p>
				<p><strong>Share :</strong> Facebook | Twitter | Google+</p>
				<p><strong>Uploaded By :</strong>&nbsp; Ucup tompel</p>
				<p><strong>Category :</strong> <a href="#">Fashion</a></p>
				<hr />
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="right-sidebar-container">
					<div class="section-title-container">
						<h4 class="section-title header-font">Other Video</h4>
						<hr class="red-line-bg margin-left-60">
					</div>
				</div>
				<?php include"other-video.php"; ?>
			</div>
			
		</div>
		
	

    </div>

</section>
<!--Vertical banner ads-->
            <?php include"vertical-banner-ads.php"; ?>

	 <!--
            ==================================================
            Related posts Section Start
            ================================================== -->
            <section id="related-post-container" class="vertical-padding" >
            	<div class="container">
            			<div class="col-md-12 vertical-padding">
            				<div class="section-title-container">
            					<h4 class="center-section-title header-font">Featured Video</h4>
            					<hr class="center-red-line-bg">
            				</div>
            			</div>
                	<?php include"related-video-content.php"; ?>
                </div>
            </section>  
	
 <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="cta-container" class="vertical-padding dark-green-bg">
                <?php include"cta-content.php"; ?>
            </section>  
<?php include"footer.php"; ?>