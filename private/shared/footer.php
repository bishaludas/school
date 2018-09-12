<!-- footer -->
<section class="footer top-logo">
	<div class="footer-overlay">
		<div class="container">
		<div class="row py-5">
			<div class="col-md-4">
				<div class="footer-title">उपयोगी लिङ्कहरू</div>
				<ul class="footer-list">
					<li><i class="ion-arrow-right-b"></i>&nbsp;&nbsp;<a target="_blank" href="http://nepal.gov.np/">नेपाल सरकार</a></li>
					<li><i class="ion-arrow-right-b"></i>&nbsp;&nbsp;<a target="_blank" href="http://moe.gov.np/index.php">शिक्षा मन्त्रालय</a></li>
					<li><i class="ion-arrow-right-b"></i>&nbsp;&nbsp;<a target="_blank" href="http://www.doe.gov.np/">शिक्षा विभाग</a></li>
					<li><i class="ion-arrow-right-b"></i>&nbsp;&nbsp;<a target="_blank" href="http://www.neb.gov.np/">राष्ट्रिय परीक्षा बोर्ड</a></li>
					<li><i class="ion-arrow-right-b"></i>&nbsp;&nbsp;<a target="_blank" href="http://ctevt.org.np/">सिटिईभिटी सानोठिमी, भत्तपुर</a></li>
					<li><i class="ion-arrow-right-b"></i>&nbsp;&nbsp;<a target="_blank" href="http://www.psc.gov.np/">लोक सेवा आयोग</a></li>
					<li><i class="ion-arrow-right-b"></i>&nbsp;&nbsp;<a target="_blank" href="https://www.tsc.gov.np/">शिक्षा सेवा आयोग</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="footer-title">सम्पर्क ठेगाना</div>
				<ul class="footer-list">
					<?php ContactFooter($con); ?>
				</ul>
			</div>

			<!-- Map -->
			<div class="col-md-4 map">
				<div class="footer-title">Map</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2954.744372478177!2d82.27145555013514!3d28.46954629810476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39bd5500c134c6e5%3A0xd9a048f3e70ce1f7!2sBagchaur+Municipality!5e1!3m2!1sen!2snp!4v1536692450363" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!-- MAP -->

		</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center border-top py-3">
					<div> &copy; <?php echo date('Y') ."  जनकल्याण नमुना माध्यमिक विद्यालय"; ?></div>				
				</div>
			</div>
		</div>
	</div>
</section>



<script src="<?php echo url_for('/vendors/js/jQuery.min.js') ?>"></script>
<script src="<?php echo url_for('/vendors/js/popper.min.js') ?>"></script>
<script src="<?php echo url_for('/vendors/js/bootstrap.min.js') ?>"></script>	
<script src="<?php echo url_for('/vendors/js/navbar-fixed.js') ?>"></script>	
<script src="<?php echo url_for('/vendors/js/slick.js') ?>"></script>	
<script src="<?php echo url_for('/vendors/js/ekko-lightbox.js') ?>"></script>	
<script src="<?php echo url_for('/resources/js/main.js') ?>"></script>	
</body>
</html>