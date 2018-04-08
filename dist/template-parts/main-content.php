<section class="container main-content">
	<div class="col-sm-offset-1 col-sm-6 icon">
		<img class="img-responsive" src="wp-content/themes/24data/dist/img/FrontEndSkillsAssessmentIcon.png" alt="icon image">
		<h1>This Icon Has Been Minified</h1>
	</div>
	<div class="col-sm-4 form-section">
		<h1>This is the Form</h1>
		<form name="leadForm" action="submit.php" method="post">
			<div class="form-group" id="firstName">
				<input type="text" class="form-control" id="inputFirstName" placeholder="Your First Name *" maxlength="20" required>
				<p id="error-message-first-name"></p>
			</div>
			<div class="form-group" id="lastName">
				<input type="text" class="form-control" id="inputLastName" placeholder="Your Last Name *" maxlength="20" required>
				<p id="error-message-last-name"></p>
			</div>
			<div class="form-group" id="zipCode">
				<input type="text" class="form-control" id="inputZipCode" placeholder="Your Zip Code *" pattern="[0-9]{5}" required>
				<p id="error-message-zipcode"></p>
			</div>
			<div class="form-group" id="phone">
				<input type="tel" class="form-control" id="inputPhone" placeholder="Contact Phone *" pattern="^[0-9\-\+\s\(\)]*$" required>
				<p id="error-message-phone"></p>
			</div>
			<div class="form-group" id="email">
				<input type="email" class="form-control" id="inputEmail" placeholder="Your Email *" required>
				<p id="error-message-email"></p>
			</div>
			<div class="checkbox">
				<label class="disclaimer" id="checkbox">
					<input type="checkbox" required> I hereby consent to receive emails, text messages and other electronic communications at the telephone and email listed above.
					<p id="error-message=checkbox"></p>
				</label>
			</div>
			<div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default form-submit-btn" onclick="validateForm()">Submit</button>
			</div>
		</form>
	</div>
</section>

