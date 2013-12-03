<html>
	<head>
		<title>:: Spigot ::</title>
		<link rel="stylesheet" type="text/css" href="<?php echo the_stylesheet(); ?>">
	</head>
	<body>
		<div class="wrap">
			<?php while(have_feed()) : thefeed() ?>
					<div class="item">
						<a href="<?php echo the_link(); ?>"><h1><?php echo the_title(); ?></h1></a>
						<h2><?php echo the_date(); ?></h2>
						<p>
							<?php echo the_description(); ?>
						</p>
					</div>
			<?php endwhile; ?>
		</div>
		<footer>
			Spigot
		</footer>
	</body>
</html>