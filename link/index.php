<?php

require_once('../classes.php');
$db = new DowncodeDB();
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
if (empty($slug)) {
	$albums = $db->allAlbums();
	foreach ($albums as $album) {
		echo '<a href="' . htmlentities($album['slug'], ENT_QUOTES) . '">';
		echo htmlspecialchars($album['title']);
		echo '</a><br />' . PHP_EOL;
	}
	die();
}
$album = $db->albumForSlug($slug);
if ($album) {
	$longTitle = $album['title'];
	if (!empty($album['featuring'])) { $longTitle .= ' [feat. ' . $album['featuring'] . ']'; }
	$longTitle .= ' - by ' . $album['artist'];
	$releaseDateString = NULL;
	if (!empty($album['release_date'])) {
		$release = new DateTime($album['release_date']);
		$now = new DateTime();
		if ($now < $release) $releaseDateString = $release->format('l, F jS');
	}
}
else {
	header('HTTP/1.0 404 Not Found');
	readfile('../404.html');
	exit();
}
?><!DOCTYPE html><html class="no-js" lang="en-us"><head><meta charset="utf-8"><!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]--><title><?php echo htmlentities($longTitle); ?></title><meta name='description' content='<?php echo htmlentities($longTitle, ENT_QUOTES); ?>'><meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"><link rel="apple-touch-icon" href="icon.png"><link rel="stylesheet" href="/css/main.04132019.css"><!-- FB OG tags--><meta property='og:title' content='<?php echo htmlentities($longTitle, ENT_QUOTES); ?>'>
<meta property='og:description' content='Preview, download or stream <?php echo htmlentities($longTitle, ENT_QUOTES); ?>'>
<meta property='og:url' content='<?php echo htmlentities(curPageURL()); ?>'>
<meta property='og:type' content='article'>
<meta property='og:image' content='<?php echo baseURL() . '/album_art/' . htmlentities($album['imageName'], ENT_QUOTES); ?>'> <!-- 600 x 315 ideally 1200x630 --><!-- additional media--><!-- Twitter summary card meta tags--><meta name='twitter:url' value='<?php echo htmlentities(curPageURL()); ?>'>
<meta name='twitter:title' content='<?php echo htmlentities($longTitle, ENT_QUOTES); ?>'>
<meta name='twitter:description' content='Preview, download or stream <?php echo htmlentities($longTitle, ENT_QUOTES); ?>'>
<meta name='twitter:card' content='summary_large_image'>
<meta name='twitter:image' content='<?php echo baseURL() . '/album_art/' . htmlentities($album['imageName'], ENT_QUOTES); ?>'> <!-- square 144 up to 4000, 5 MB max --><link rel="stylesheet" href="link.css"></head><body><!--[if lt IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
<a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]--><header id="main-header"><h1 class="ir">Lorenzo Wood Music</h1><div class="logo"><div style="width:100%; height:4em; background-color:black"></div><input id="navigation" type="checkbox"><label class="hamburger" for="navigation"><div class="spinner diagonal part-1"></div><div class="spinner horizontal"></div><div class="spinner diagonal part-2"></div></label><nav class="page-menu"><ul><li><a href="/">Home</a></li><li><a href="/photos/">Photos</a></li><li><a href="/videos/">Videos</a></li><li><a href="/booking/">Booking</a></li></ul></nav></div></header><main><div><div id="prefpage"><div id="bg"><!-- Really we should have 640 square for good retina image.--><img src="../album_art/<?php echo htmlentities($album['imageName'], ENT_QUOTES); ?>", alt="<?php echo htmlentities($album['title'], ENT_QUOTES); ?>"></div><div class="imagecontainer" id="img" style="position:relative;"><img src="../album_art/<?php echo htmlentities($album['imageName'], ENT_QUOTES); ?>", alt="<?php echo htmlentities($album['title'], ENT_QUOTES); ?>"></div><div class="service-container sticky" id="header" style="z-index:9000; ;"><div class="header"><h1 class="artist"><?php echo htmlspecialchars($album['artist']); ?> <br> <?php echo htmlspecialchars($album['title']); ?><?php $featuring = $album['featuring']; if (!empty($featuring)) { echo ' (Featuring ' . htmlspecialchars($featuring) . ')'; } ?></h1><p class="where"><?php if ($releaseDateString) {	echo 'Releasing ' . htmlspecialchars($releaseDateString);
} else {
	echo 'Download and stream now';
}?></p></div><div class="arrow"></div></div><div class="service-container" id="service"><?php if ($album['itunes_id']) { ?>
<div class="service"><a class="img-btn redirect" href="https://geo.itunes.apple.com/us/album/<?php echo htmlentities($album['itunes_id'], ENT_QUOTES); ?>?app=itunes&amp;at=1000lKSp"><img class="service" src="../svg/iTunes_Store_Buy_Lockup_RGB_blk.svg" alt="iTunes"><span class="play"><?php echo $releaseDateString ? 'Pre-order' : 'Download'; ?></span></a></div>
<?php } if ($album['itunes_id'] && empty($releaseDateString)) { ?>
<div class="service"><a class="img-btn redirect" href="https://geo.itunes.apple.com/us/album/<?php echo htmlentities($album['itunes_id'], ENT_QUOTES); ?>?mt=1&app=music&amp;at=1000lKSp"><img class="service" src="../svg/Apple_Music_lockup_RGB_blk.svg" alt="Apple Music"><span class="play">Play</span></a></div>
<?php } if ($album['spotify_id']) { ?>
<div class="service"><a class="img-btn redirect" href="https://play.spotify.com/album/<?php echo htmlentities($album['spotify_id'], ENT_QUOTES); ?>"><img class="service" src="../svg/spotify-text.svg" alt="Spotify"><span class="play">Play</span></a></div>
<?php } if ($album['amazon_music_id']) { ?>
<div class="service"><a class="img-btn redirect" href="https://www.amazon.com/dp/<?php echo htmlentities($album['amazon_music_id'], ENT_QUOTES); ?>"><img class="service" src="../svg/amazon-music.svg" alt="Amazon Music"><span class="play">Play</span></a></div>
<?php } if ($album['google_play_id']) { ?>
<div class="service"><a class="img-btn redirect" href="https://play.google.com/store/music/album/<?php echo htmlentities($album['google_play_id'], ENT_QUOTES); ?>"><img class="service" src="../svg/google-play.svg" alt="Google Play"><span class="play">Download</span></a></div>
<?php } if ($album['youtube_music_id']) { ?>
<div class="service"><a class="img-btn redirect" href="https://music.youtube.com/browse/<?php echo htmlentities($album['youtube_music_id'], ENT_QUOTES); ?>"><img class="service" src="../svg/youtube-music.svg" alt="Youtube Music"><span class="play">Play</span></a></div><!-- can also watch at https://music.youtube.com/watch?v= + youtube_video_id -->
<?php } if ($album['youtube_video_id']) { ?>
<div class="service"><a class="img-btn redirect" href="https://www.youtube.com/watch?v=<?php echo htmlentities($album['youtube_video_id'], ENT_QUOTES); ?>"><img class="service" src="../svg/youtube.svg" alt="Youtube Music"><span class="play">Play</span></a></div>
<?php } if ($album['soundcloud_id']) { ?>
<div class="service"><a class="img-btn redirect" href="https://soundcloud.com/<?php echo htmlentities($album['soundcloud_id'], ENT_QUOTES); ?>"><img class="service" src="../svg/soundcloud.svg" alt="Soundcloud"><span class="play">Play</span></a></div>
<?php } if ($album['deezer_id']) { ?>
<div class="service"><a class="img-btn redirect" href="https://www.deezer.com/us/album/<?php echo htmlentities($album['deezer_id'], ENT_QUOTES); ?>"><img class="service" src="../svg/deezer.svg" alt="Deezer"><span class="play">Play</span></a></div>
<?php } if ($album['cd_id']) { ?>
<div class="service"><a class="img-btn redirect" href="<?php echo htmlentities($album['cd_id'], ENT_QUOTES); ?>"><img class="service" src="/img/cd100.png" alt="Buy CD"><span class="play">Buy</span></a></div>
<?php } ?></div></div></div></main><?php
$db->close();
?></body></html>