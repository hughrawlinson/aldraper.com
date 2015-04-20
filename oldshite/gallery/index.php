<?php
include("http://www.aldraper.com/head.php");
include("http://www.aldraper.com/nav.php");
?>
<!-- include content here -->
<div class="container content">
	<div class="row">
		<?php
		$files = scandir("/usr/local/pem/vhosts/171133/webspace/httpdocs/gallery");
		
		echo $files;
		?>
	</div>
<?php
include("http://www.aldraper.com/footer.php");
?>