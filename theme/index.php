<!doctype html>
<html lang="en">
	<head>
		<title>Spigot - Zen RSS Reader</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="icon" type="image/png" ref="<?php echo the_favicon(); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300|Roboto+Slab:300' rel='stylesheet' />
		<link href="<?php echo the_stylesheet(); ?>" rel="stylesheet" />
	</head>
	<body>
		<div class="wrap" role="main">
			<ul class="clean-list">
				<?php while(have_feed()) : thefeed() ?>
						<li class="item">
							<article role="article">
								<header>
									<a href="<?php echo the_link(); ?>"><h1><?php echo the_title(); ?></h1></a>
									<p class="date"><?php echo the_date(); ?></p>
								</header>

								<?php echo the_description(); ?>

							</article>
						</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<footer role="contentinfo">
			<div class="pagination"><?php pagination(); ?></div>
			<a href="https://github.com/Codingbean/Spigot">Spigot</a>
		</footer>
	</body>
</html>
