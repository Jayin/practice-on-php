<html>
<header>
	<title><?php echo $website_title ?></title>
</header>

<body>
	<h2><?php echo  $title ?></h2>
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