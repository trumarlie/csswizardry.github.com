<?php
	/*
		ORIGINAL AUTHOR WAS HARRY, NOT DAN!!!1one
	*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Let it snow</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style type="text/css">
		
		<?php if(isset($_GET['time']) && $_GET['time'] == 'day') { ?>
		html{
			background:url(img/css/snow.png) bottom left repeat-x fixed #b4c8cc;
		}
		<?php } ?>

	
		<?php //Number of snowflakes -- you decide! ?>
		<?php $snowflakeCount = 65;  ?>


		<?php  for($i = 1; $i <= $snowflakeCount; $i++) { ?>
			.snowflake-<?php echo $i ?>{
				<?php  //Create a random number between one and ten: ?>
				-webkit-animation-duration:<?php echo (rand(10,100) / 10); ?>s;
				<?php  //Create a random number between 0.1 and 2: ?>
				font-size:<?php echo (rand(1,20) / 10); ?>em;
			}
		<?php } ?>
	</style>
</head>

<body>

	<div id="wrapper">
		<h1>Let it snow!</h1>
		<p><a href="/2010/12/let-it-snow/">Return to article.</a></p>
	</div>

	<div id="snow">
	<?php  for($i = 1; $i <= $snowflakeCount; $i++) { ?>
		<span class="snowflake snowflake-<?php echo $i; ?>" style="top:<?php echo rand(1,98); ?>%; left:<?php echo rand(1,98); ?>%"></span>
	<?php  } ?>
	</div>

</body>
</html>
