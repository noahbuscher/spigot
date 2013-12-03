<?php

/**
 * Constants
 */
$feeds = null;
$feed = null;
$feeds_count = 0;
$feeds_index = 0;

/**
 * Check if have feeds to loop through
 */
function have_feed() {
	global $feeds_index, $feeds, $feeds_count;
	$feeds = json_decode(file_get_contents(PATH . 'feeds.json'), true);

	$all_feeds = array();
	$reads = array();

	foreach ($feeds as $feed) {
		$feed_array = json_decode(json_encode((array)simplexml_load_file($feed, 'SimpleXMLElement', LIBXML_NOCDATA)), 1);
		$feed_items = $feed_array['channel']['item'];
		array_push($all_feeds, $feed_items);
	}

	for ($i = 0; $i < count($all_feeds); $i++) {
		$subs = $all_feeds[$i];
		for ($a = 0; $a < count($subs); $a++) {
			array_push($reads, $all_feeds[$i][$a]);
		}
	}

	$feeds = $reads;
	usort($feeds, "cmp");

	$feeds_count = count($feeds);

	if ($feeds && $feeds_index + 1 <= $feeds_count) {
		$feeds_index++;
		return true;
	} else {
		$feeds_count = 0;
		return false;
	}
}

/**
 * LOOP
 * Updates the feed object
 */
function thefeed() {
	global $feeds_index, $feed, $feeds, $feed_title;
	$feed = $feeds[$feeds_index - 1];
	return $feed;
}

function cmp($a, $b){

    $a = strtotime($a['pubDate']);
    $b = strtotime($b['pubDate']);

    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

/**
 * LOOP
 * Gets item title
 */
function the_title() {
	global $feed;
	return $feed['title'];
}

/**
 * LOOP
 * Gets item description
 */
function the_description() {
	global $feed;
	return (string) $feed['description'];
}

/**
 * LOOP
 * Gets item date
 */
function the_date() {
	global $feed;
	return date('m/d/y', strtotime($feed['pubDate']));
}

/**
 * LOOP
 * Gets item link
 */
function the_link() {
	global $feed;
	return $feed['link'];
}

?>