<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo(); ?>">
	<title>Front Page</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	

	<h1>Learning Redux: Slides</h1>

	<?php 
	global $julfiker;
	$items = $julfiker['hi_er_tajul_testi'];
	echo "<pre>";
	print_r($items);
	echo "</pre>";
	?>

	<?php foreach ($items as $key => $value): ?>
		
		<h4><?php echo $value['title']." <br/>"; ?></h4>
		<img src="<?php echo $value['thumb']; ?>" alt="">

	<?php endforeach ?>


	<?php wp_footer(); ?>
</body>
</html>