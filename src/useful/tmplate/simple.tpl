<html>
<header>
	<title><?php echo $website_title ?></title>
</header>

<body>
	<h2><?php echo  $title ?></h2>
	<h2><?php echo  $title2 ?></h2>
	<h2><?php //echo  "这是注释部分，你看我不到" ?></h2>
	
	<!-- <h2><?php echo "这种方式注释也可以哦" ?></h2> -->
	<textarea>
		<?php echo $content ?>
	</textarea>
	<?php
		echo "<ol>";
		for($i=1;$i<=5;$i++){
			echo "<li><p>" . $i . "</p></li>";
		}
		echo "</ol>";

	?>
</body>
</html>
