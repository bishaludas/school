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
			<div class="col-md-4">
				<div class="footer-title">Map</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8650.207117956807!2d85.3254630254148!3d27.673203166218613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6da0dfc28cd32f00!2sChi+Chi+Grills!5e0!3m2!1sen!2snp!4v1536206581220" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!-- MAP -->

		</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center border-top py-3">
					<div> &copy; <?php echo date('Y') ." Bishaludash.com.np"; ?></div>				
				</div>
			</div>
		</div>
	</div>
</section>



<script src="<?php echo url_for('/vendors/js/jQuery.min.js') ?>"></script>
<script src="<?php echo url_for('/vendors/js/popper.min.js') ?>"></script>
<script src="<?php echo url_for('/vendors/js/bootstrap.min.js') ?>"></script>	
<script src="<?php echo url_for('/vendors/js/navbar-fixed.js') ?>"></script>	
<script src="<?php echo url_for('/resources/js/main.js') ?>"></script>	

</body>
</html>