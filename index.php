<?php
	$page="home.php";
	$slider=true;
	$aside=true;
	if(isset($_GET['P'])){
		$P=$_GET['P'];
	switch($P){
		case "shop":
			$page="shop.php";
			$slider=false;
			break;
		case "contact":
			$page="contact.php";
			$slider=false;
			$aside=false;
			break;
	}
}
?>
<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<?php include "include/head.php" ?>

	<body>
	<?php include "include/header.php"?>
	<?php if($slider) include "include/slider.php"?>

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">
					<?php if($aside) include "include/aside.php"?>
					<?php include $page?>

				</div>
			</div>
		</div>
		<!-- End Product Section --> 
		<?php include "include/section.php"?>
		<?php include "include/product.php"?>
		<?php include "include/blog.php"?>
		<?php include "include/footer.php"?>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
