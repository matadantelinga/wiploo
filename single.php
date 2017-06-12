<?php include"header.php"; ?>

<section id="single-article" class="vertical-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-9 cl-sm-9">
				<div class="single-article-container">
					<h1 class="news-title header-font">Single Article Title Goes Here</h1>
					<p class="news-date"> Date, May 06th 2017</p>
					<p class="news-category">Category : <a href="#">Travelling</a></p>
					<div class="clearfix"></div>
					
					<hr/>

					<div class="news-image">
						<img src="assets/images/dummy.jpg" class="img-responsive" alt="dummy news image">
					</div>
					<div class="news-full-content">
						<p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>
						<p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>
					</div>
					<!--Share Button Wudget Will Goes Here-->
					<hr/>
					<!--Credits Section-->
					<p><strong>Share :</strong> Facebook | Twitter | Google+</p>
					<p><strong>Author :</strong>&nbsp; Ucup tompel</p>
					
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="right-sidebar-container">
					<div class="section-title-container">
						<h4 class="section-title header-font">Popular Post</h4>
						<hr class="red-line-bg margin-left-60">
					</div>
				</div>
				<?php include"sidebar-content.php"; ?>
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
            					<h4 class="center-section-title header-font">Related Post</h4>
            					<hr class="center-red-line-bg">
            				</div>
            			</div>
                	<?php include"related-content.php"; ?>
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