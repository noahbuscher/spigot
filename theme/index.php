<html>
	<head>
		<title>Spigot</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,100,300,400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
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
			<div class="pagination"><?php pagination(); ?></div>
			<a href="https://github.com/Codingbean/Spigot">Spigot</a>
		</footer>
	</body>
</html>
