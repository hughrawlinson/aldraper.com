<?php
include("http://www.aldraper.com/head.php");
include("http://www.aldraper.com/nav.php");
?>
<!-- include content here -->
<div class="container content">
	<div class="row">
		<div class="span9">
		<h1>Contact</h1>
		<form action="contact.php" method="post">
			<table>
				<tr><td width="45px"><p>Name: </p></td><td><input type="text" name="name" /></td></tr>
				<tr><td width="45px"><p>E-Mail: </p></td><td><input type="text" name="e-mail" /></td></tr>
				<tr><td width="45px"><p>Subject: </p></td><td><input type="text" name="subject" /></td></tr>
			</table>
			<script type="text/javascript">
				var RecaptchaOptions = {
					theme : 'clean'
				};
			</script>
			<script type="text/javascript"
				src="http://www.google.com/recaptcha/api/challenge?k=6LeQ8NMSAAAAAJJS-ijg0VF_jBQ_ZyXny8Zkna-C">
			</script>
			<noscript>
				<iframe src="http://www.google.com/recaptcha/api/noscript?k=6LeQ8NMSAAAAAJJS-ijg0VF_jBQ_ZyXny8Zkna-C"
					height="300" width="500" frameborder="0"></iframe><br>
				<textarea name="recaptcha_challenge_field" rows="3" cols="40">
				</textarea>
				<input type="hidden" name="recaptcha_response_field"
					value="manual_challenge">
			</noscript>
			<p>Content</p>
			<textarea name="content" style="height:450px;" class="span9">
			</textarea>
			<input type="submit" class="btn-primary" value="Submit" />
		</form>
		</div>
		<?php
			include("http://www.aldraper.com/sidebar.php");
		?>
	</div>
<?php
include("http://www.aldraper.com/footer.php");
?>