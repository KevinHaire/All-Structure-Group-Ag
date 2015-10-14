<div class="contain pageContainer">
	<h1 class="pageHeader">Contact Us</h1>
	<p>Thank you for taking the time to review our ever growing company.  Please feel free to contact us directly should you have additional questions. We welcome the opportunity to provide you with competitive pricing and safe, quality workmanship.</p>
	<div class="contactFormContainer">
		<?php 
			if (isset($_GET['success'])) {
				include '_successMessage.php';
			} else {
				include '_contactForm.php';
			}
		?>
	</div>

	<div class="mapEmbed">
		<p class="center">
			3428-99 St. NW Suite # 216<br>
			Edmonton, AB, T6G 5X5 <br>
			Phone: 780-888-5518<br>
			<a href="info@allstructure.ca">info@allstructure.ca</a>
		</p>
	</div>

	<div style="clear:both;"></div>

	<!-- <h1 class="pageHeader" style="margin-top:2em;">Careers</h1>
	<div class="contactFormContainer">
		<?php
			if (isset($_GET['sentResume'])) {
				include '_successMessage.php';
			} else {
				include '_sendResume.php';
			}
		?>
	</div>

	<div class="mapEmbed">
		<p>All Structure Group Ltd is always looking for new talent. Please see below for current and future opportunities with ASG LTD.</p>
		<ul>
			<li>Project Manager’s</li>
			<li>Foreman</li>
			<li>Steel Erectors</li>
			<li>Metal Cladder’s/Roofers</li>
			<li>Labourers</li>
		</ul> 
	</div> -->

</div>