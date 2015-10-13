<div class="contain">
	<div class="<?php if (!empty($_POST)){echo 'displayNone';} ?>">
		<h1 class="center">Instant Quote!</h1>
		<p class="center">Fill out the form below to recieve an instant quote. The page will refresh and display your quote.</p>

		<form class="quoteForm" action="" method="POST" enctype="multipart/form-data">
			<input required name="name" type="text" placeholder="Full Name">
			<input required name="email" type="email" placeholder="Email Address">
			<input required name="phone" type="tel" placeholder="Phone Number">
			<input required name="style" type="text" placeholder="Building Style">
			<input required name="width" type="number" placeholder="Width in feet">
			<input required name="length" type="number" placeholder="Length in feet">
			<!-- <input name="height" type="number" placeholder="Height in feet"> -->
			<div class="quoteSelect">
				<select name="insulated" id="insulated">
					<option value="insulated">Insulated</option>
					<option value="notInsulated">Not Insulated</option>
				</select>
			</div>
			<input required name="location" type="text" placeholder="Location">
			<input type="submit">
		</form>
	</div>
	<div class="contain center padding">
		<?php include 'mail/_generateQuote.php'; ?>
	</div>

</div>