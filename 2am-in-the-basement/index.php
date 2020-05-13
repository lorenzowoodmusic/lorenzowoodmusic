<?php
require_once('../classes/downcode.php');
$db = new DowncodeDB();
$release = $db->featuredRelease(2);

$now = new DateTime(isset($_GET['ymd']) ? $_GET['ymd'] : 'now');
$releaseDate = $now;	// default to now, so it should show up as released
if ($release) {
	$releaseDateString = NULL;
	if (!empty($release['release_date'])) {
		$releaseDate = new DateTime($release['release_date'], new DateTimeZone('America/New_York'));
		if ($now < $releaseDate) $releaseDateString = $releaseDate->format('l, F jS');
	}
	$oneMonthAgo = new \DateTime('1 month ago');
}
?><!DOCTYPE html><html class="no-js" lang="en-us"><head><meta charset="utf-8"><!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]--><title>2AM in the Basement — Official Site</title><meta name="description" content="2AM in the Basement is a side project of musician Lorenzo Wood featuring covers of songs by some of Lorenzo‘s favorite artists."><meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"><meta name="supported-color-schemes" content="light dark"><link href="https://fonts.googleapis.com/css?family=Montserrat:400,800&amp;display=swap" rel="stylesheet"><link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/avfivcfiwkvgmspufqrh/image/upload/lwm/apple-touch-icon.png"><link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/avfivcfiwkvgmspufqrh/image/upload/lwm/favicon-32x32.png"><link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/avfivcfiwkvgmspufqrh/image/upload/lwm/favicon-16x16.png"><link rel="stylesheet" href="/css/main.051220.css"><link rel="prefetch" href="//code.jquery.com"><link rel="prefetch" href="//img.youtube.com"></head><body class="2am"><!--[if lt IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
<a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]--><header class="covering" id="main-header"><div class="logo"><a class="filled active" href="/" style="color:pink"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1056" height="76.6" viewBox="0 0 792 57.45"><defs><path d="M31.75-33.25a16.23 16.23 0 012.83-.28c.42 0 .75.07.98.22.23.13.18.31-.14.53-.31.14-.58.32-.81.55a2.15 2.15 0 00-.81 1.7 330.62 330.62 0 00-.23 10.81c-.03 2.5-.07 4.82-.12 6.97l-.06 3.9c0 .87.21 1.83.64 2.87.43 1.04.56 1.83.38 2.37-.14.82-.2 1.3-.2 1.44v.47h.2c.27 0 .5-.05.68-.14.04-.04.15-.22.33-.53.05-.19.12-.3.2-.35-.27.23-.44.5-.53.81-.5.6-.8.9-.89.9-.23.17-.34.2-.34.06s-.09-.34-.27-.61c-.04-.1-.21-.14-.51-.14h-.85c-.27 0-.58-.06-.92-.18a.78.78 0 01-.58-.7c-.13-.32-.2-.89-.2-1.7v-3c0-1.18.03-2.41.1-3.7.07-1.3.1-2.55.1-3.77.19-2.27.2-4.3.04-6.1a18.6 18.6 0 00-.58-3.7c-.28-.63-.47-1.11-.58-1.45-.12-.34-.3-.45-.58-.31-.22 0-.63.4-1.22 1.18-.6.8-.98 1.26-1.15 1.4a7.05 7.05 0 00-.55 2.52v2.16l.6.43-3.87 7.26 4.08-6.05-2.84 5.44 1.62-2.05-1.15 1.5a18.42 18.42 0 00-1.5 1.97l-.5.97c-.12.22-.3.33-.52.33-.23 0-.29-.3-.17-.9.11-.62.05-.95-.17-1-.28-.05-.74.15-1.4.59-.65.43-1.25.48-1.79.15-.54-.44-1.24-1.45-2.08-3.01a46.47 46.47 0 00-2.62-4.33c-.45-.58-.95-1.34-1.5-2.27-.55-.93-1.08-1.82-1.6-2.65a31.83 31.83 0 00-1.5-2.22c-.47-.63-.79-.97-.97-1.02A1.96 1.96 0 007-26.05c-.4.1-.68.35-.81.75-.1.5-.14 1.34-.14 2.52s.1 2.11.28 2.8c.04.4.07 1.43.1 3.06.01 1.62.08 3.35.2 5.15.1 1.82.21 3.47.3 4.94.1 1.47.19 2.19.27 2.14.19-.05.28-.61.28-1.7V-10c0-1.3-.02-2.55-.07-3.7a5.69 5.69 0 01.2-2.28c.32-.59.62-1.29.89-2.1.27-.82.6-1.25 1.02-1.3.13 0 .25.64.34 1.91.09 1.26.15 2.68.17 4.25A166.7 166.7 0 0110-6.45c-.05.27-.2.63-.42 1.1-.22.44-.47.92-.74 1.41-.27.5-.63.89-1.06 1.19-.43.3-.9.35-1.39.17-1.04-.32-1.6-.6-1.67-.81a2.4 2.4 0 01.05-1.03 286.4 286.4 0 01.15-8.13c.07-1.92.13-3.72.17-5.4.05-1.68.12-2.68.2-2.99.15-.32.25-.8.29-1.43.04-.64.1-1.29.2-1.94a35.1 35.1 0 00.27-2.75c0-.19-.13-.5-.38-.96-.25-.45-.49-.94-.72-1.46a7.51 7.51 0 01-.47-1.49c-.08-.48.01-.83.29-1.06.21-.27.65-.04 1.3.69.67.71 1.4 1.6 2.16 2.65.77 1.05 1.54 2.08 2.32 3.1a37.02 37.02 0 001.82 2.26c.95.87 1.68 1.73 2.18 2.6.5.85.84 1.41 1.03 1.68.04.14.12.54.23 1.2.12.66.28 1.31.5 1.94.23.64.53 1.16.9 1.57.36.4.86.38 1.5-.08.58-.35 1.2-1 1.85-1.96.67-.95 1.3-1.96 1.88-3.03.59-1.07 1.17-2.14 1.73-3.23a31.05 31.05 0 011.53-2.66c.5-.59 1-1.35 1.5-2.28.5-.92 1.01-1.8 1.53-2.6.52-.83 1.04-1.52 1.57-2.09.52-.55 1-.89 1.45-.98zM18.5-19.98c-.54 0-.91-.41-1.1-1.24-.13-.3-.2-.65-.2-1.01.32.5.6.9.82 1.21.13.28.28.54.43.79.17.25.18.33.05.25zm-.08-2.46c-.27.37-.74.02-1.42-1.04a57.52 57.52 0 01-3.92-7.32c-.47-1.09-.66-1.5-.56-1.23a69.57 69.57 0 003.13 5.23 548.7 548.7 0 002.77 4.36zm17.55-10.81c.09 5.57.19 10.52.28 14.83 0 1.81.02 3.6.06 5.37.04 1.76.06 3.3.06 4.63 0 1.31-.02 2.38-.06 3.19-.04.8-.11 1.1-.2.87a4.65 4.65 0 01-.28-1.72c-.04-.93-.1-2.1-.14-3.47-.05-1.38-.06-2.93-.06-4.65v-5.18c.08-4.12.2-8.75.34-13.87zm0 0" id="reuse-1"/><path d="M8.36-1.84c-.4-.09-.56-.46-.47-1.14a8.9 8.9 0 01.67-2.29c.37-.84.76-1.62 1.19-2.34.43-.73.74-1.32.92-1.78.4-.63.74-1.33.99-2.1.24-.76.4-1.33.45-1.7.13-.45.22-.97.27-1.56.03-.59.33-1.68.89-3.27a36.35 36.35 0 012.09-4.96c.82-1.59 1.23-2.56 1.23-2.93a5.33 5.33 0 01.47-2.25c.19-.5.42-.94.69-1.32.27-.39.4-.72.4-.99 0-.3-.1-.67-.27-1.08-.18-.4-.25-.88-.2-1.43a6.15 6.15 0 012.04-2.93c.32-.22.62-.22.89 0 .27.28.48.69.64 1.24.15.54.3 1.11.44 1.7.13.59.22 1.15.26 1.69.05.54.15.93.28 1.16l.72 1.8 1.28 3.07c.48 1.1.96 2.24 1.44 3.4.48 1.15.83 2.11 1.05 2.88.27.68.64 1.67 1.12 2.95.48 1.3 1 2.59 1.54 3.88.53 1.3 1.02 2.49 1.45 3.58.43 1.08.72 1.76.86 2.03.22.6.63 1.15 1.22 1.67s.77 1.07.54 1.66c-.1.73-.29 1.23-.58 1.5s-.89.32-1.8.14c-.86-.1-1.43-.5-1.7-1.22-.27-.73-.47-1.32-.6-1.78 0-.22-.11-.55-.32-1a17.5 17.5 0 00-1.73-3.08c-.22-.18-.6-.08-1.13.28-.52.37-1.05.68-1.59.95-.54.32-1.14.4-1.8.27-.65-.13-1.74-.2-3.23-.2a9.4 9.4 0 00-3.13.37c-.63.25-1.2.38-1.7.38-.54 0-.92-.2-1.12-.61-.2-.4-.5-.57-.91-.49-.37.1-.5.32-.38.66.12.33.1.73-.03 1.19-.05.36-.2.97-.45 1.8a7.96 7.96 0 01-.9 2.07c-.37.64-.73.84-1.07.61-.34-.23-.65-.39-.92-.48zM25.3-15.98l-1.03-2.41a124.63 124.63 0 00-3.6-7.78c-.54-1.1-.9-1.69-1.1-1.78-.4-.14-.65-.07-.74.2-.09.27-.3.64-.61 1.1-.27.36-.57.7-.9 1.02-.3.32-.4.5-.26.54.23.13.47.29.72.45.25.16.38.32.38.5a116.78 116.78 0 01-1.4 3.78c-.38.97-.75 1.93-1.09 2.86-.34.93-.56 1.6-.64 2-.1.4-.28.85-.55 1.33-.27.47-.54.91-.8 1.33-.28.4-.48.78-.62 1.12-.13.34-.11.52.06.56.31.14.63.25.94.32.32.06.94-.07 1.85-.38.86-.27 1.5-.5 1.9-.7.4-.2.7-.22.9-.05.49.23 1.42.35 2.77.35.32 0 .75.07 1.27.2s1.02.25 1.48.34c.48.09.88.1 1.2.06.31-.03.5-.2.54-.46.18-.64.22-1.35.1-2.14a7.42 7.42 0 00-.77-2.36zm-8.36.89c.17-.73.4-1.5.67-2.32.13-.67.33-1.32.58-1.93.24-.62.49-1.01.72-1.2-.14.46-.23.86-.29 1.23-.04.54-.2 1-.46 1.36-.05.18-.14.43-.27.75l-.48 1.01zm.95 1.15h.53c.32 0 .6-.04.83-.14.3-.09.55.04.73.4.19.38.33.72.43 1.04zM14.08-5.3c1.35-.18 2.69-.3 4.01-.34 1.09-.09 2.13-.15 3.13-.17 1-.02 1.77.04 2.31.17zm-.49.53c.1.83-.2 1.72-.87 2.66-.27.37-.7.8-1.3 1.3 0-.14.07-.27.2-.4a.9.9 0 01.29-.46l.46-.38c.23-.27.5-.79.82-1.56.09-.3.22-.7.4-1.16zm20.2-3.8c-.17-.04-.4-.45-.68-1.23a950.41 950.41 0 00-4.55-11.56c-1.4-3.62-3-7.75-4.76-12.37 2.08 4.9 3.9 9.27 5.43 13.12l1.88 4.8 1.56 3.98c.43 1.09.76 1.95.99 2.58.22.64.27.87.14.69zm0 0" id="reuse-0"/></defs><defs><symbol overflow="visible" id="a2a"><path d="M13.19-25.3c-.86.37-1.56.48-2.11.35-.18-.1-.35-.35-.5-.78a5.26 5.26 0 01-.24-1.74c0-.73.09-1.52.27-2.37a8.4 8.4 0 013.44-4.88 10.05 10.05 0 015.47-1.73 9.3 9.3 0 012.72.48c.58.18 1.22.34 1.9.47l-.27-1.08c1 .68 1.94 1.31 2.85 1.9.68.59 1.37 1.16 2.05 1.71.67.54 1.1 1.04 1.3 1.49.13.36.23.97.32 1.8.09.84.13 1.7.11 2.59a12.07 12.07 0 01-.86 4.17c-.27.42-.85.9-1.73 1.44l-2.85 1.73c-1.02.6-2 1.2-2.93 1.77-.93.56-1.56 1-1.86 1.32-.47.32-1 .83-1.61 1.54-.6.7-1.26 1.47-1.94 2.3-.68.84-1.27 1.62-1.77 2.35-.49.72-.76 1.24-.8 1.56-.19.68-.3 1.16-.32 1.43-.03.27.17.47.6.6.34.1.73.08 1.16-.06.44-.13.82-.22 1.14-.26.45-.14.86-.15 1.22-.03.37.1.82.15 1.36.15.18 0 .67.04 1.49.11l2.62.2c.93.08 1.76.11 2.49.11.72 0 1.22-.02 1.5-.07.4-.23 1.06-.58 1.96-1.05.9-.48 1.73-.58 2.46-.31.77.32 1.32.9 1.65 1.7.34.81.45 1.43.32 1.83-.28.46-.8.95-1.57 1.47s-1.34.78-1.7.78c-.4 0-.83-.11-1.26-.33a2.69 2.69 0 00-1.25-.34 124.77 124.77 0 01-6.85-.29c-1.6-.09-3.1-.19-4.48-.3a46.7 46.7 0 00-2.55-.16c-1.18-.19-2.02-.4-2.52-.63-.17 0-.3-.37-.37-1.1a30.4 30.4 0 01-.1-2.52c0-.94.1-1.93.3-2.97.21-1.04.54-1.88.99-2.52.95-1.35 1.94-2.5 2.97-3.45a17.75 17.75 0 013.3-2.45c.53-.33 1.36-.76 2.46-1.3 1.12-.54 2.2-1.16 3.24-1.86a11.7 11.7 0 002.54-2.28c.67-.82.82-1.64.46-2.46a11.43 11.43 0 00-2.36-3.8c-.93-.95-2.41-1.39-4.44-1.3-2.14.09-3.8.62-4.97 1.57-1.18.95-1.84 1.59-1.97 1.9-.19.5-.28.77-.28.82a1.9 1.9 0 00-.06.4c.17-.22.33-.36.47-.4.41-.13.62 0 .62.4-.13.46-.28.91-.42 1.37a1.7 1.7 0 01-.81 1.01zm5.78-5.3c-.18 0-.4.05-.67.13-.4.19-.96.58-1.64 1.16a4.54 4.54 0 00-1.13 2.5c-.06.83-.28 1.5-.64 2-.18.31-.41.57-.69.78-.27.2-.56.37-.87.5-.31.23-.72.43-1.22.6l.27-.52c.13-.19.31-.37.54-.55a.94.94 0 01.56-.31l.6-.03a7.43 7.43 0 001.02-1.7c0-.05.01-.07.06-.07.05 0 .07-.07.07-.2l.14-.08-.14.08c0-.37.05-.71.14-1.03.18-.72.36-1.4.54-2.04.22-.53.82-.9 1.78-1.09.35-.08.78-.12 1.28-.12zm13.53 4.2l-.4 2.06c-.19.54-.3 1.09-.35 1.64-.04.54-.18.95-.4 1.22-.28.5-.7 1.05-1.27 1.64a8.85 8.85 0 01-1.86 1.48c-.31.14-.88.47-1.7.98L23.9-15.7a97.06 97.06 0 00-4.13 2.72c-.68.5-1.2.93-1.56 1.28a7.1 7.1 0 00-.75.89l3.34.69h-1.78c-.31 0-.56-.05-.73-.15-.4 0-.87.1-1.36.27-.28.05-.5.15-.69.28a.2.2 0 01-.14.06c-.18 0-.13-.3.14-.89.18-.4.6-.88 1.27-1.42a43.91 43.91 0 014.3-3.15c.68-.44 1.16-.7 1.43-.79.23-.18.63-.42 1.22-.71a54.34 54.34 0 005.45-3.1c.4-.17.74-.64 1.02-1.39l.81-2.34c.32-.87.57-1.85.75-2.94zm1.36 23.68c-.04.5-.5.82-1.36.95-.45.05-.95.07-1.48.07.17.13.33.13.46 0 .18 0 .52-.14 1.02-.4l.9-.48a.82.82 0 01.46-.14zm0 0"/></symbol><symbol overflow="visible" id="a2b"><use xlink:href="#reuse-0"/></symbol><symbol overflow="visible" id="a2c"><use xlink:href="#reuse-1"/></symbol><symbol overflow="visible" id="a2e"><path d="M25.44-35.7c.27.05.56.08.87.08.23.04.48.06.75.06s.48.09.61.26c.19.2.32.5.4.9.1.4.15.79.15 1.15 0 .5-.07 1.07-.2 1.7v-.82-.88c0-.32-.03-.69-.07-1.1-.18-.67-.7-1-1.54-.98-.84.03-1.3.13-1.38.31-.23.14-.24.29-.05.44.21.16.5.3.86.44.77.27 1.27.86 1.5 1.77.18.46.07.9-.3 1.34-.4.43-.77.8-1.13 1.1-.41.47-1 .62-1.74.46a5.45 5.45 0 01-1.45-.45c-.6-.23-1.2-.23-1.78 0a.87.87 0 00-.4.75V-9c0 .56.01 1.13.05 1.7.05.57.09 1.1.11 1.6.02.49.13.73.32.73.22.06.57-.12 1.04-.53.48-.41.88-.63 1.19-.63.23 0 .55.17.95.49.4.31.73.45.96.4.77-.18 1.38-.05 1.84.41.3.31.39.82.23 1.5a5.4 5.4 0 01-.78 1.83c-.36.64-.94.97-1.73 1-.8.02-1.5-.06-2.14-.25a39.27 39.27 0 00-4.69-.34c-.82 0-1.87.05-3.14.17-1.26.12-2 .06-2.23-.17-.2-.09-.2-.3-.02-.68a15.22 15.22 0 011.38-2.08c.26-.33.49-.5.67-.5.4-.05.75.01 1.04.18.3.15.66.17 1.07.03.5-.18.82-.52.98-.99.16-.47.32-.98.45-1.53v-3c0-1.77-.04-3.71-.1-5.84l-.18-5.98a197.4 197.4 0 01-.06-3.68c0-2.4-.39-4.1-1.16-5.1-.18-.14-.53-.2-1.03-.2-.49 0-1.02-.02-1.6-.04a2.92 2.92 0 01-1.41-.38c-.39-.22-.51-.63-.38-1.21.04-.6.24-1.03.61-1.3a2.6 2.6 0 011.16-.5c.4-.07.86-.07 1.36 0a291.56 291.56 0 013.13.23c.68.05 1.6 0 2.79-.14 1.21-.22 1.96-.53 2.23-.92.28-.38.56-.66.83-.84.27-.1.55-.29.84-.58.3-.29.65-.37 1.07-.23.44.13.67.28.67.43 0 .16-.18.29-.55.38-.31.13-.54.13-.67 0zm-9.13-.96a5.46 5.46 0 012.14-.23c1.07.02 2.18.1 3.32.23 1.35.06 2.82.15 4.42.28zm6.82 18.64c.08 2.18.14 4.23.18 6.13.05 1.9.13 2.96.22 3.19 0 .13 0 .25.03.34a1 1 0 01.03.2c0 .09.07.2.2.35l-.54.12-.27-18.9zM24-7.28c.18-.58.56-.8 1.13-.64.55.15 1.22.46 2 .92.76.37 1.14 1.01 1.12 1.94a7.8 7.8 0 00.03 1.53c.1.22.1.14.03-.25-.06-.38-.1-.74-.1-1.05 0-.27-.17-.6-.54-1.01-.37-.4-.63-.68-.81-.82-.1 0-.29-.02-.58-.06a6 6 0 00-1.01-.08c-.4 0-.7-.03-.93-.1-.23-.06-.34-.2-.34-.38zm0 0"/></symbol><symbol overflow="visible" id="a2f"><path d="M12.52-4.28c-.1.23-.37.6-.8 1.12-.43.53-.82.87-1.17 1.05-.83.1-1.51-.72-2.05-2.45-.14-.45-.2-1.53-.2-3.25v-5.52a137.95 137.95 0 01.2-8.1c0-.49.09-1.09.27-1.79.18-.7.28-1.38.28-2.01 0-.54.12-1.29.37-2.24.25-.96.33-1.66.24-2.1 0-.1-.07-.35-.2-.76-.14-.4-.32-.83-.52-1.28a9.2 9.2 0 01-.47-1.33A4.24 4.24 0 018.3-34c.13-.4.6-.81 1.42-1.22.82-.41 1.37-.73 1.64-.95.23-.27.37-.53.44-.78s.1-.29.1-.11v.72c0 .33.12.6.33.78.27.23.62.9 1.05 1.98a9.09 9.09 0 001.27 2.36 235.56 235.56 0 012.6 5.45c.58 1.22 1.12 2.38 1.65 3.47a18.8 18.8 0 003.44 5.16c.53.69 1.12 1.4 1.76 2.1-.04.06-.16.09-.34.09-.22.13-.36.2-.41.2-.04 0-.15.04-.33.13-.27.09-.37.34-.31.74.07.41.18.87.31 1.36.08.5.24.98.47 1.41.23.43.52.93.9 1.52.3.63.67.99 1.1 1.06.43.06.81-.06 1.13-.38.4-.27.65-.8.75-1.62.09-.82.22-1.55.4-2.19l.06-2.72.2-4.69c.1-1.67.16-3.25.18-4.71l.05-2.83c.13-1 .02-2.07-.32-3.2a9.95 9.95 0 01-.5-2.38c.04-.36.26-.66.64-.88.39-.22.72-.39.99-.48.27-.18.66-.66 1.16-1.44.22-.3.47-.65.75-1.01.03.32.15.64.34.95.13.32.21.62.23.9.02.26.1.49.24.66.09.33.03.8-.17 1.44-.2.64-.37 1.52-.5 2.64-.06.56-.1 1.52-.11 2.9-.03 1.38-.04 2.96-.04 4.73 0 1.76-.03 3.55-.1 5.37-.07 1.81-.1 3.43-.1 4.83 0 3 .18 5.11.53 6.36.37 1.24.46 2.3.28 3.16a1.1 1.1 0 01-.68.95 5.12 5.12 0 01-2.7.37c-.46-.07-.8-.17-.98-.3-.21-.1-.4-.38-.57-.85-.16-.48-.3-.97-.4-1.47l-.35-1.4c-.1-.42-.19-.66-.24-.71L23.2-9.72c-.1-.23-.43-.78-.99-1.67-.56-.88-1.23-2-2-3.36a481.97 481.97 0 00-5.08-8.55l-2.04-3.33a33.9 33.9 0 00-.9-1.45c-.32-.22-.6-.21-.85.03a6.6 6.6 0 01-.99.78c-.14.14-.23.47-.25.99-.02.52 0 1.05.04 1.6.08.68.16 1.36.21 2.04.22-.27.43-.57.61-.9.31-.57.52-.8.61-.66.1.36.08.93-.03 1.7-.12.76-.22 1.8-.31 3.13v3.03c0 1.24.02 2.53.06 3.87A231.49 231.49 0 0111.42-7c.1.37.32.82.67 1.36.37.54.5 1 .43 1.36zm-.7 2.58c.23-.27.6-.54 1.1-.82l.61-.6c-.27.4-.54.74-.81 1.01-.14.27-.31.51-.52.72-.2.2-.3.37-.3.5-.05.14-.1.06-.13-.23-.05-.3-.03-.49.06-.58zm1.98-2.44l-.03-.9c-.03-.49-.09-1.14-.18-1.93-.08-.79-.14-1.72-.17-2.78a56.16 56.16 0 00-.15-3.17c-.2-2.45-.38-5.17-.55-8.16.17.81.4 1.56.67 2.24.09.63.2 1.25.34 1.84.14.6.2.98.2 1.16-.09.18-.13.88-.13 2.1v4.02zM24-18.56c-.04 0-.27-.2-.67-.61-.19-.4-.54-1.04-1.06-1.9-.53-.87-1.26-2.21-2.2-4.02-.97-1.72-1.92-3.35-2.87-4.9A67.26 67.26 0 0014.55-34a41.42 41.42 0 00-2.64-3.4 4.98 4.98 0 011.55.8c.22.15.5.31.82.5.31.17.67.6 1.08 1.29a92.67 92.67 0 012.77 5 41 41 0 001.32 2.4c.4.68.87 1.52 1.4 2.52A242.1 242.1 0 0124-18.56zm8.84 13.39c.1.23.14.41.14.54v.49c0 .27-.05.43-.14.47zm-1.09 3.75c-.22.22-.5.42-.81.6l-.69.44a.96.96 0 01-.53.18c-.5.18-.8.26-.9.26h-.46zM15.3-14.75l.14.53-.69.55zm17.28-4.83v-5.03c0-1.63.04-3.1.12-4.39l.24-3.27c.07-.88.2-1.46.37-1.73-.04 4.63-.06 8.8-.06 12.52v12.64c0 .27-.1.52-.28.75-.18.23-.27.41-.27.54 0 .18-.02.34-.06.47-.04.14-.06.23-.06.28v.27zm0 0"/></symbol><symbol overflow="visible" id="a2g"><path d="M21.22-36.38h1.16c.4 0 .74-.02 1.01-.07.32-.09.66-.15 1.02-.2h1.76c.73 0 1.3-.1 1.7-.27.23-.04.56-.19.99-.44a4.5 4.5 0 011.44-.52 2.72 2.72 0 011.53.18c.5.2.83.64 1.01 1.33.54 1.58.68 2.72.41 3.4-.27.68-.82 1.1-1.63 1.28-.73.1-1.2.2-1.4.28-.2.09-.5-.03-.9-.34-.41-.36-.92-.5-1.5-.4l-1.57.2c-.37.18-.57.29-.63.34-.04.04-.35.06-.93.06-.55 0-.91-.06-1.1-.2a2.1 2.1 0 00-.95-.28c-.18 0-.32.01-.44.05-.11.02-.26.03-.43.03h-.41v23.8l.47 1.96c.17.45.31.87.4 1.25.1.39.05.68-.14.86-.21.28-.61.56-1.18.86-.57.3-1.03.4-1.4.3-.36-.13-.76-.63-1.18-1.5-.43-.87-.53-2.3-.31-4.28.09-.95.2-2.44.3-4.49a475.18 475.18 0 00.5-11.69c.06-1.72.04-2.8-.05-3.2a9.8 9.8 0 01-.2-1.47c-.05-.56-.13-1.1-.24-1.62a5.2 5.2 0 00-.45-1.3c-.18-.34-.43-.51-.74-.51-.82 0-1.32.11-1.47.34-.15.23-.42.43-.78.6-.1.06-.37.09-.83.09l-1.45-.03c-.52-.04-1.01-.06-1.47-.08-.45-.02-.74-.1-.87-.24a9.3 9.3 0 01-1.36-1.22c-.68-.68-1.02-1.3-1.02-1.84.04-.5.13-.87.27-1.12.13-.25.45-.38.95-.38.23 0 .9.04 2 .11l3.7.2a192.7 192.7 0 006.4.17zm2.31 5.85c.08-.13.4-.2.97-.2h1.98c.75 0 1.51.03 2.29.1.77.07 1.37.1 1.82.1.82 0 1.57-.32 2.25-.95.37-.18.64-.45.82-.82-.09.23-.27.48-.55.75-.31.32-.72.66-1.22 1.02-.23.1-.68.16-1.36.2-.68.04-1.42.12-2.22.2-.79.1-1.52.15-2.2.15h-1.22c-.4 0-.6.18-.6.54v9.17c0 2.36.01 4.71.05 7.05s.07 4.07.07 5.19c.09 1.1.09 1.94 0 2.53-.09.59-.2.96-.33 1.14-.19.37-.42.55-.69.55.09-.08.18-.27.27-.55.14-.4.21-.83.21-1.28v-1.3a265.55 265.55 0 00-.16-7.03c-.03-1.48-.05-3-.05-4.6-.09-3.48-.13-7.47-.13-11.96zm0 0"/></symbol><symbol overflow="visible" id="a2h"><path d="M33.1-34.47c.33.4.36.76.09 1.05-.28.3-.55.44-.81.44-.1 0-.25.02-.46.07a.88.88 0 00-.44.2c-.09.14-.16.25-.2.34l.27.42c.5.35.75.76.75 1.22 0 .3-.14.9-.4 1.76-.28.87-.42 1.6-.42 2.17v9.77a310.86 310.86 0 01-.14 9.95 6.69 6.69 0 00.55 2.83 4.77 4.77 0 01.34 2.48c-.46.37-1.02.72-1.67 1.04-.65.3-1.17.4-1.53.26-.08-.05-.21-.33-.37-.86a3.1 3.1 0 010-1.69c.16-.6.25-1.23.28-1.87a57.06 57.06 0 000-3.33c-.03-1-.13-2.05-.32-3.17-.17-1.11-.28-2.1-.3-2.95-.03-.87-.06-1.39-.1-1.57-.04-.13-.18-.27-.4-.4a2.96 2.96 0 01-.55-.42l-.75-.33c-.05.08-.18.2-.41.33-.18.32-.38.5-.61.54-.23.19-.48.3-.75.32a27.51 27.51 0 01-7.1-.17c-.8-.1-1.54-.16-2.21-.18l-1.22-.03c-.19 0-.49-.05-.9-.14-.4-.09-.8-.02-1.21.2-.46.37-.48.8-.05 1.3.44.5.66.89.66 1.16l-.08 1.67c-.04.93-.11 1.91-.2 2.95l-.2 4.28c.13.28.3.57.48.9.17.21.33.47.47.74.13.28.2.5.2.67 0 .41-.33.86-.98 1.33-.66.48-1.3.8-1.94.92-.4.05-.7-.06-.9-.3a7.86 7.86 0 01-1.02-2.28l.01-2.04c0-1.27.06-2.69.17-4.25.12-1.56.18-2.98.18-4.25v-2.45c0-.27-.12-1.1-.35-2.49-.22-1.38-.35-2.89-.37-4.51-.03-1.64-.03-3.21-.03-4.74 0-1.52.13-2.57.4-3.15.32-.64.74-1.12 1.27-1.46a4.24 4.24 0 011.69-.65c.6-.1 1.13-.14 1.56-.14h1c.17 0 .26.2.26.6v.63l-.12 7.47a102 102 0 00-.08-3.94c-.04-.86-.12-1.71-.23-2.55a5.54 5.54 0 00-.24-1.26c-.05 0-.35.1-.89.28-.23.04-.41.06-.55.06l.2.35c.2.68.29 1.15.29 1.42 0 .5-.17 1.3-.49 2.37-.13.6-.2 1.2-.17 1.82.03.61.05 1.26.05 1.93 0 .72.05 1.51.16 2.38.1.87.48 1.18 1.12.95.18-.09.35-.26.48-.51.14-.25.23-.49.27-.7l.2-1.04c0 .19.03.42.08.69.08.27.15.53.19.78.05.25.16.54.34.84.19.64.54 1.04 1.07 1.2.52.16 1.39.24 2.6.24 1 0 2.14-.13 3.41-.4s2.06-.3 2.38-.08c.32.32.64.66.95 1.03.32.35.66.58 1.03.67.3.23.56.27.73.1.19-.15.35-.46.49-.91.09-.1.18-.43.27-1.02a27.65 27.65 0 00.28-3.95v-1.7a50.11 50.11 0 00-.25-3.3c-.07-.65-.07-1.3 0-1.94.07-.63.17-1.02.3-1.16.1-.21.4-.48.93-.8.52-.31 1.07-.6 1.66-.88.77-.32 1.54-.71 2.3-1.16zM19.46-22.78c-.9.04-1.72.05-2.45.03-.73-.02-1.2-.21-1.42-.58l7.2.14zm-5.03 9.66c.35.17.53.63.53 1.35v3.41c0 .9-.05 1.79-.14 2.63-.08.83-.21 1.54-.39 2.12-.13.82-.23 1.57-.28 2.25v-.34c0-.14 0-.26.03-.38l.17-.5a14.88 14.88 0 00.08-4.22c0-.18-.04-.64-.1-1.36-.07-.72-.1-1.5-.1-2.3v-1.98c0-.5.07-.72.2-.69zM33.6-23.66l.03-1.12c.02-.57.04-1.2.04-1.88 0-.86.02-1.72.07-2.57 0 2.4.02 4.57.07 6.51.04 1.73.1 3.3.2 4.7.09 1.41.14 2.25.14 2.52 0 .23-.05.52-.14.86-.1.34-.14.64-.14.9-.04.37-.06.71-.06 1.02.04 1.23.06 2.2.06 2.92v3.61c-.04.14-.06.53-.06 1.16 0 .4-.03.8-.07 1.16V-6.8v-2.3c0-.64-.02-1.14-.07-1.5-.05-.14-.1-.5-.14-1.09-.05-.59-.07-1.17-.07-1.73v-1.64-1.05-1.27-2.4a48.38 48.38 0 01.14-3.88zm0 0"/></symbol><symbol overflow="visible" id="a2i"><path d="M24.48-30.53a634.95 634.95 0 01-6.67.2c-1.77.14-3.7.23-5.78.27-.08.28-.12.91-.12 1.89V-20.61c.48 0 .91-.04 1.28-.12.45-.06.88-.08 1.26-.08.39 0 .71-.07.99-.2a8 8 0 011.04.1l1.5.2c.52.07 1.04.1 1.57.1h1.12a10.7 10.7 0 001.83-.56c.77-.3 1.4-.4 1.9-.31.42.23.92.44 1.5.65.6.2.83.76.7 1.66a8.51 8.51 0 01-.37 2.1c-.18.55-.74.87-1.68.96-.87.18-1.44.21-1.7.1-.28-.12-.6-.26-.96-.44a4.93 4.93 0 00-1.39-.14h-2.14c-.77 0-1.5.02-2.19.07-.68.05-1.08.07-1.22.07-.35.18-.78.2-1.28.06-.5-.13-.87-.09-1.1.14-.17.04-.3.38-.4 1.02-.1.63-.18 1.33-.25 2.07-.06.75-.08 1.5-.06 2.25.03.75.09 1.16.17 1.25.18.46.29.9.31 1.33l.04.85c0 .18-.1.56-.29 1.12-.18.56-.1.94.22 1.13.27.23.78.24 1.52.03a7 7 0 011.67-.32c.27 0 .86.06 1.77.14l2.98.35c1.09.14 2.13.25 3.1.34.97.09 1.64.06 2-.08.78-.08 1.82-.37 3.13-.87 1.32-.5 2.26-.66 2.8-.49.63.14 1.03.65 1.19 1.54.15.88.23 1.6.23 2.14-.08.55-.48 1.07-1.18 1.54s-1.26.7-1.66.7c-.28 0-.65-.02-1.11-.09a49.16 49.16 0 01-3.36-.65c-.56-.14-.96-.2-1.19-.2H17.58c-1.56 0-3-.01-4.28-.04l-2.28-.03c-.5-.13-.92-.5-1.24-1.1-.31-.58-.47-1-.47-1.21L9.17-5c-.08-.93-.18-1.94-.3-3.05a86.5 86.5 0 01-.37-5.34c0-.82.09-1.7.27-2.63.18-.92.32-1.57.42-1.93.08-.23.1-.66.06-1.3a69.19 69.19 0 00-.42-4.31c-.09-.8-.13-1.44-.13-1.94a45.25 45.25 0 01.32-4.86c.1-.98.27-1.85.46-2.62.21-.77.47-1.27.79-1.49.32-.14.95-.24 1.9-.28a41.6 41.6 0 013.13 0c1.13.04 2.18.09 3.15.14a21.6 21.6 0 005.14-.2l1.7-.27c.55-.09.95-.2 1.23-.34.36-.23.86-.4 1.5-.52.63-.11 1.1-.08 1.42.1.45.18.88.66 1.26 1.43.39.78.53 1.41.44 1.91-.09.45-.28.91-.58 1.4-.29.47-.82.73-1.6.77-.67.14-1.45.14-2.34 0-.88-.13-1.6-.2-2.14-.2zm-4.42 1.76c-.81.14-1.54.28-2.17.41-.55.19-1.07.3-1.55.34-.46.05-.77.14-.9.27-.28.14-.39.56-.35 1.27.04.7.18 1.41.41 2.14.09.46.4.73.92.82l1.56.27c.52.09.98.13 1.36.13h.52c-.19.05-.61.07-1.27.07-.65 0-1.41.07-2.28.2-.9.05-1.97.07-3.18.07.03-.18.12-.38.26-.61.05-.18.08-.58.08-1.22v-2.31c0-.55.04-1.17.12-1.85zm3.6 5.58c.22.05.5.16.82.35.37.18.73.5 1.08.95zm-8.5 9.05a8.51 8.51 0 011.77-.4c.58-.1 1.16-.18 1.73-.24.57-.07.97-.02 1.2.15l-.6.05c-.42.03-.94.08-1.56.17a39.04 39.04 0 01-2.54.27zm-1.7-.81c.18.45.34.9.48 1.36.18.49.31 1.04.37 1.65.07.62.18 1.33.31 2.14.04.78.08 1.28.1 1.5.02.23.12.35.31.35.08 0 .22-.14.4-.4l-1.5.26a62.73 62.73 0 00-.2-3.13 45.63 45.63 0 01-.26-3.73zm0 0"/></symbol><symbol overflow="visible" id="a2j"><path d="M11.36-28.77c0 .2-.05.36-.14.49-.1.18-.17.32-.2.44l-.14.3c-.18.18-.14.64.14 1.37.27.72.42 1.33.46 1.83.23.59.4 1.07.49 1.43.09.36-.07.6-.49.74-.18.19-.32.12-.43-.19a2.23 2.23 0 00-.44-.77 7.72 7.72 0 01-.58-.93 2.55 2.55 0 01-.37-1.17c0-.77.13-1.45.4-2.04l.1-1.01c.02-.32.13-.6.3-.83.1-.27.27-.34.52-.2.25.13.38.32.38.54zm1.08.82c.05-.27.35-.48.89-.61.54-.14 1.1-.23 1.7-.27.72-.13 1.5-.13 2.38 0-.78.04-1.43.09-1.97.13a10.87 10.87 0 01-2.17.34c-.2 0-.34.54-.46 1.61a23.6 23.6 0 00-.17 2.34c0 .22-.02.2-.06-.07-.04-.27-.08-.66-.11-1.16l-.03-1.45v-.86zm13.47 8.64c-.1.23 0 .57.28 1.01.04.23.15.48.33.75l.2-.34c.18-.18.41-.18.69 0 .22.23.42.68.57 1.33.16.65.42 1.3.79 1.93.36.74.63 1.56.8 2.46.2.9.29 2.06.29 3.47 0 .68-.2 1.4-.58 2.14-.39.75-.8 1.41-1.23 1.98-.43.56-.85 1.06-1.25 1.49-.4.43-.64.7-.7.84-.13.14-.28.17-.43.1-.15-.06-.49-.03-.98.1-.4.06-1.05.08-1.9.08-.88 0-1.9.1-3.07.27-1.04.18-2.44.23-4.19.14a34 34 0 01-4.45-.49C9.9-2.32 9.2-2.88 8.97-3.73a9.04 9.04 0 01-.33-1.7c0-.41-.03-.76-.08-1.05-.04-.3-.22-.86-.53-1.68-.19-.36-.3-1.45-.36-3.26a250.7 250.7 0 010-11.72l.08-3.11v-2.38c0-.95-.05-1.54-.14-1.76a3.38 3.38 0 00-.27-.64c-.09-.17-.09-.36 0-.6.18-.21.68-.47 1.49-.76.82-.3 1.53-.61 2.12-.92.64-.23 1.57-.44 2.78-.63.54-.04 1.2-.06 1.97-.06 1.1 0 2.1.02 3 .06.72.14 1.46.22 2.24.25.77.03 1.3.06 1.58.1.44.27.95.5 1.51.72.57.2 1.04.34 1.4.43.5.05.67-.07.5-.34a1.34 1.34 0 01-.16-.88c.09-.32.26-.17.51.44.25.62.46 1.13.64 1.53l.75 1.53c.37.75.63 1.59.81 2.49.06.81-.05 1.73-.3 2.75-.24 1.02-.48 1.62-.71 1.8-.14.18-.23.57-.28 1.14-.05.56-.1.88-.19.96a7.49 7.49 0 01-1.1 1.7zm-6.2 1.56c-.44 0-1.01.04-1.7.1-.67.07-1.35.13-2.03.18-.82.04-1.6.06-2.3.06a2.8 2.8 0 01-1.23-.48 1.44 1.44 0 01-.62-.27l-.75 1.02a11.4 11.4 0 01-1.28 1.56h-.14l-.27 6.33a75 75 0 00.47-2.52c.18-.58.31-1.15.4-1.71l.2-1.14c0-.18.21-.36.62-.54l.4-.28-.12.75c-.19.6-.28 1.03-.28 1.3 0 .35.02.93.06 1.73.05.8.15 1.42.28 1.86.19.37.31.94.38 1.7.07.78-.04 1.19-.32 1.22h-.54c-.18 0-.36-.17-.53-.53-.37-.5-.55-1-.55-1.5a2.58 2.58 0 010-.8v2.02c0 .55.04 1.06.12 1.53.1.48.26.77.49.86.4.28.83.47 1.28.58.46.1.87.07 1.23-.1.82-.32 1.32-.43 1.5-.35.04.1.45.2 1.22.34s1.63.22 2.58.24c.96.02 1.92-.01 2.9-.1.97-.09 1.73-.3 2.27-.6.64-.28 1.2-.76 1.7-1.41.5-.66.94-1.35 1.3-2.1.37-.74.59-1.5.68-2.28a2.72 2.72 0 00-.47-1.98c-.87-1.08-2-2.14-3.38-3.16-1.37-1.02-2.57-1.53-3.56-1.53zm-.87-12.92a38.58 38.58 0 00-4.44.48l-.6.13c-.09.32-.23.3-.4-.07-.19-.36-.41-.58-.68-.67a5 5 0 00-1.44.1c-.77.11-1.24.24-1.42.37a7.1 7.1 0 00-.14 1.42c-.04.91-.06 1.9-.06 2.97v4.92c0 .28.02.63.06 1.07.05.43.08.9.08 1.39v1.62c.27 0 .56-.06.87-.2.69-.18.94-.52.75-1.02-.13-.4-.25-.86-.34-1.36-.09-.5.05-.83.4-1.01.23 0 .7 0 1.4-.03s1.5-.05 2.39-.05H19.38c.58 0 1.14.13 1.64.38s.86.47 1.07.65c.14.09.3.35.52.78.2.43.44.64.72.64.08 0 .19-.1.33-.3.14-.2.3-.49.48-.85.18-.31.36-.72.55-1.22l-1.64.75c.18-.28.43-.56.75-.83a9.75 9.75 0 001.16-2.78c.18-1.18.27-2.3.27-3.36 0-1.07-.52-1.93-1.57-2.56a8.3 8.3 0 00-2.72-1.25 6.5 6.5 0 00-2.1-.11zm3.8-6.25c.5 0 1.13.24 1.9.72.78.47 1.54 1.09 2.29 1.86.74.77 1.46 1.63 2.14 2.59a8.59 8.59 0 011.36 2.72c.27 1 .33 1.98.2 2.95-.14.98-.3 1.94-.51 2.86a18.91 18.91 0 01-1.25 3.9c-.05.37.12.7.51 1 .38.28.79.73 1.22 1.32.43.6.8 1.47 1.14 2.63.34 1.15.4 2.64.19 4.45a13 13 0 01-1.56 4.69 20.76 20.76 0 01-2.32 3.26c-.86 1-1.86 1.82-3 2.44a14.09 14.09 0 003.6-3.45c.88-1.23 1.52-2.58 1.95-4.05.43-1.48.73-3 .92-4.6a5.38 5.38 0 00-.36-2.48 13.48 13.48 0 00-2.37-4.1c-.4-.5-.61-.78-.61-.84-.09-.17.2-.49.89-.93.23-.37.43-1.45.6-3.24.2-1.79.29-3.66.29-5.6-.06-1-.43-1.98-1.14-2.93-.7-.96-1.52-1.84-2.47-2.66a28.7 28.7 0 00-3.6-2.51zM17-23.94l1.8.03c.61.03 1.03.13 1.26.32l-5.58-.35zm-4.08 15.5c0-1.08.02-2.05.06-2.92.1-.8.14-1.55.14-2.2 0-.65.1-1.01.27-1.06v1.76c0 .5 0 .97.03 1.4l.05.91c0 .2-.02.39-.05.6-.02.2-.03.43-.03.7v.81l2.86.83zm0 0"/></symbol><symbol overflow="visible" id="a2k"><use xlink:href="#reuse-0"/></symbol><symbol overflow="visible" id="a2l"><path d="M28.63-26.05a.9.9 0 01-.55.2c-.5 0-.9-.15-1.22-.46-.45-.37-.65-.73-.61-1.1.04-.36-.03-.72-.2-1.07a8.46 8.46 0 00-1.27-1.7 6.25 6.25 0 00-1.86-1.5c-.55-.41-1.5-.57-2.83-.48-1.33.09-2.38.23-3.15.41a5.1 5.1 0 00-1.58.52c-.63.29-1.24.63-1.83 1.01-.6.39-1.12.8-1.58 1.22-.45.43-.67.9-.67 1.4 0 .94.38 1.76 1.16 2.44A6.3 6.3 0 0014.02-24c.44.09.62.13.53.13-.09 0 .28.18 1.1.54.76.4 1.74.7 2.94.9 1.21.17 2.13.38 2.77.6.8.28 1.6.4 2.37.4.37.1.8.1 1.3 0-.05-.03-.08-.08-.08-.13 0-.27.03-.48.08-.61.18-.08.48.02.9.31.44.3.98.76 1.62 1.4.54.63 1.24 1.53 2.1 2.71a8.22 8.22 0 011.5 4.28 7.66 7.66 0 01-1.06 4.77A15.25 15.25 0 0127-4.83c-.64.5-1.48.95-2.52 1.33-1.04.39-2.16.64-3.37.75-1.2.12-2.43.12-3.7 0a9.26 9.26 0 01-3.4-.92 10.4 10.4 0 01-2.8-1.77 14.48 14.48 0 01-2.2-2.48 11.07 11.07 0 01-1.46-2.78 7.83 7.83 0 01-.47-2.43c0-.72.14-1.24.44-1.56.28-.3.57-.56.84-.75.4-.13.82-.13 1.23 0 0-.04-.02-.1-.07-.2a.51.51 0 01-.13-.61c0-.32.22-.57.67-.75.23-.04.43-.1.61-.2 0 .1-.02.23-.06.4-.18.28-.27.57-.27.9-.05.35 0 .64.13.87.13.23.32.41.55.55.09.18.25.28.46.3.23.03.44.27.63.71.18.37.14.68-.11.92-.25.25-.38.56-.38.93 0 .4.13.76.38 1.06.25.29.7.82 1.33 1.6.36.35.68.7.95 1.04.27.34.61.62 1.02.83.4.2.94.35 1.62.46.69.12 1.57.18 2.66.18 2.22 0 3.97-.52 5.23-1.57 1.27-1.05 2.07-1.96 2.4-2.73.4-.77.44-1.8.12-3.1a5.43 5.43 0 00-1.56-2.88 6 6 0 00-1.91-.85c-.86-.24-1.82-.47-2.9-.67-1.05-.2-2.1-.4-3.12-.55a65 65 0 01-2.54-.45l-2.18-.6a5.3 5.3 0 01-2.24-1.34 8.42 8.42 0 01-1.77-2.6c-.5-1.1-.75-2.57-.75-4.43 0-1.71.53-3.17 1.6-4.37a11.1 11.1 0 013.8-2.8 15.7 15.7 0 014.63-1.25c1.61-.18 2.9-.2 3.84-.02 1.1.2 2.05.59 2.86 1.18.81.58 1.56 1.21 2.24 1.89.68.68 1.26 1.36 1.73 2.04.48.68.77 1.2.86 1.57.31.85.3 1.68-.05 2.48-.33.8-.75 1.28-1.25 1.45zm-5.65 1.5c-.59-.04-1.23-.06-1.9-.06h-1.56c-.5 0-.84-.05-1.02-.14-.27 0-.67 0-1.19-.03a9.4 9.4 0 01-1.6-.2 5.86 5.86 0 01-1.54-.55c-.47-.25-.8-.63-.98-1.13-.31-.86-.11-1.63.6-2.3a3.66 3.66 0 012.2-1.1 24.49 24.49 0 012.51.14c.5.13.97.23 1.42.28H17.2a3.2 3.2 0 00-1.9.64c-.59.43-.68.96-.27 1.6.13.22.46.47.99.71.52.25 1.1.45 1.76.58l1.8.38c.55.11.9.17 1.03.17.5.13 1 .31 1.48.53zm6.54-.6c.17-.14.36-.24.56-.3.2-.07.54-.27 1-.6a2 2 0 00.58-1.12c.11-.52.1-1.03-.04-1.53a23.5 23.5 0 00-.4-1.83l-.28-.55-.14-.67c0-.13-.07-.34-.2-.63a7.52 7.52 0 01-.5-.87c-.16-.32-.4-.75-.73-1.3a7.68 7.68 0 00-1.96-1.56c-.91-.54-1.89-1.04-2.93-1.5-1.23-.4-2.55-.86-3.95-1.36.05.06.19.08.4.08h1.16c.37 0 1.23.28 2.58.84 1.37.57 2.4 1.06 3.08 1.47a8.65 8.65 0 012.03 2c.77.98 1.1 1.56 1.02 1.74-.09.18-.04.36.14.54.09.18.16.3.2.35l.48.26c.36.14.54.28.54.4l-.33.35a.66.66 0 01-.35.14c.1.5.21.95.35 1.36a40.79 40.79 0 01.12 2.32c0 .62-.26 1.21-.78 1.76-.52.54-.85.9-.98 1.08-.18.19-.4.18-.67-.02a.95.95 0 01-.41-.8zm-.75 3.18c.22-.13.55.04.98.52.43.48.9 1.04 1.4 1.67.49.62.94 1.32 1.35 2.1.4.77.66 1.4.75 1.9.13.55.16 1.35.1 2.39a20.25 20.25 0 01-.54 3.4c-.29 1.22-.78 2.45-1.47 3.68a9.55 9.55 0 01-2.78 3.1 12.01 12.01 0 01-3.98 1.85c-1.43.37-2.76.6-3.99.69-1.21.08-2.28.07-3.18-.05l-1.43-.17c-.18-.13.18-.16 1.11-.1.94.07 1.84.1 2.7.1.85 0 1.96-.23 3.32-.7A25.29 25.29 0 0027-3.33a19.32 19.32 0 003.3-2.58c1.02-1 1.8-2.79 2.34-5.37a9.43 9.43 0 00-.03-3.64 13.94 13.94 0 00-2.75-6.02l-.75-.48c-.5-.27-.62-.45-.34-.55zm-14.43 5.31c.1.09.3.18.64.27.34.1.68.16 1 .2.31.19.68.33 1.08.4H15.7c-.36 0-.68-.01-.95-.05a5.32 5.32 0 00-.73-.07h-.52a2.2 2.2 0 01-.64-.07 5.86 5.86 0 00-.75-.27c.13.04.24.2.33.47.27.42.5.8.69 1.15.13.47.33 1.08.6 1.85.27.77.52 1.24.75 1.42a4.81 4.81 0 002.05.81c.18.06.42.08.74.08h.95c.36 0 .75.07 1.16.2h-2.04c-.54 0-1.06-.04-1.56-.14-.5-.09-.93-.3-1.3-.6a9.4 9.4 0 01-1.59-2.93 10.26 10.26 0 00-1.27-2.6c-.23-.3-.49-.57-.78-.8-.29-.23-.35-.35-.17-.35.23 0 .79.17 1.67.49.89.3 1.55.5 2 .54zm0 0"/></symbol><symbol overflow="visible" id="a2m"><use xlink:href="#reuse-1"/></symbol></defs><use xlink:href="#a2a" x="7" y="48.25"/><use xlink:href="#a2b" x="48.82" y="48.25"/><use xlink:href="#a2c" x="89.08" y="48.25"/><use xlink:href="#a2d" x="130.35" y="48.25"/><use xlink:href="#a2e" x="171.42" y="48.25"/><use xlink:href="#a2f" x="212.36" y="48.25"/><use xlink:href="#a2d" x="253.3" y="48.25"/><use xlink:href="#a2g" x="294.37" y="48.25"/><use xlink:href="#a2h" x="335.85" y="48.25"/><use xlink:href="#a2i" x="377.12" y="48.25"/><use xlink:href="#a2d" x="417.86" y="48.25"/><use xlink:href="#a2j" x="458.93" y="48.25"/><use xlink:href="#a2k" x="499.46" y="48.25"/><use xlink:href="#a2l" x="539.71" y="48.25"/><use xlink:href="#a2i" x="580.58" y="48.25"/><use xlink:href="#a2m" x="621.31" y="48.25"/><use xlink:href="#a2i" x="662.38" y="48.25"/><use xlink:href="#a2f" x="703.12" y="48.25"/><use xlink:href="#a2g" x="744.05" y="48.25"/></svg></a><input id="navigation" type="checkbox"><label class="hamburger" for="navigation"><div class="spinner diagonal part-1"></div><div class="spinner horizontal"></div><div class="spinner diagonal part-2"></div></label><nav class="page-menu"><ul><li><a href="/">home</a></li><li><a href="/photos/">photos</a></li><li><a href="/videos/">videos</a></li><li><a href="/booking/">booking</a></li><li><a class="active" href="/2am-in-the-basement/">2am</a></li></ul></nav></div><div class="hero"><?php if ($release) { ?><div class="action-banner clearfix safe-area-only" style="background:rgba(255,255,255,0.4"><p><a target="_blank" href="/link/<?php echo htmlentities($release['slug'], ENT_QUOTES); ?>">
<img style="display:inline-block; width:32px; height:auto; padding:0;" src="<?php echo htmlentities($db->pathCDNForImageSize($release, 64), ENT_QUOTES); ?>" alt="<?php echo htmlentities($release['title'], ENT_QUOTES); ?>, cover image" />
</a><span><?php echo htmlspecialchars( $now < $releaseDate ? 'Upcoming' : ($releaseDate < $oneMonthAgo ? 'Latest' : 'New') . ' ' . $release['release_type_name'] . ' “' . $release['title'] . '”'); ?> —&nbsp;</span><b><a style="text-decoration:underline" href="/link/<?php echo htmlentities($release['slug'], ENT_QUOTES); ?>"><?php echo ($now < $releaseDate) ? 'Pre-Save or Pre-Order Now!' : 'Download or stream now!'; ?></a></b></p></div><?php } ?><picture><source srcset="https://res.cloudinary.com/avfivcfiwkvgmspufqrh/image/upload/lwm/img/2am.webp 1920w" type="image/webp"><source srcset="https://res.cloudinary.com/avfivcfiwkvgmspufqrh/image/upload/lwm/img/2am.jpg 1920w, https://res.cloudinary.com/avfivcfiwkvgmspufqrh/image/upload/lwm/img/2am50.jpg 960w, https://res.cloudinary.com/avfivcfiwkvgmspufqrh/image/upload/lwm/img/2am33.jpg 640w"><img class="hero-image covering" src="https://res.cloudinary.com/avfivcfiwkvgmspufqrh/image/upload/lwm/img/2am.jpg" loading="eager" alt="2AM in the Basement"></picture></div></header><main><section class="bio"><header class="ir" aria-hidden="true"><h2>Bio</h2></header><article class="textual"><p>2AM in the Basement is a side project of musician <a href="./">Lorenzo Wood</a> featuring covers of songs by some of Lorenzo's favorite artists.
</p><p>Find 2AM in the Basement songs online:</p><div class="icons icons-2"><a class="smaller" data-title="Apple Music" href="https://geo.itunes.apple.com/us/artist/2am-in-the-basement/1461919405?at=1000lKSp"><svg><use xlink:href="/svg/homepage.svg#apple-music-color"></use></svg></a><a data-title="Spotify" href="https://open.spotify.com/artist/4xWrKxTS7gyybHbJ94LZtx?si=P5Cy1GEHS8aLFNkjsFAx_Q" style="fill:#1ED760"><svg><use xlink:href="/svg/homepage.svg#spotify"></use></svg></a></div></article></section><section class="videos clearfix"><header class="ir" aria-hidden="true"><h2>Releases so far</h2></header><article class="clearfix"><div class="youtube-column-2"><div class="youtube-border"><div class="youtube" data-code="PfjIqix5ZZw" data-title="Heartless (Diplo &amp; Morgan Wallen) Cover by 2AM In The Basement"></div></div></div><div class="youtube-column-2"><div class="youtube-border"><div class="youtube square-video" data-code="21RcD1TRKv4" data-title="Old Town Road"></div></div></div></article></section></main><footer><div class="icons icons-5 icons-footer safe-area-only"><div class="icon"><a data-title="Instagram" href="https://instagram.com/LorenzoWoodMusic" style="fill:#e95950"><svg><use xlink:href="/svg/homepage.svg#instagram"></use></svg></a></div><div class="icon smaller"><a data-title="Facebook" href="https://facebook.com/LorenzoWoodMusic" style="fill:#3b5998"><svg><use xlink:href="/svg/homepage.svg#facebook"></use></svg></a></div><div class="icon"><a data-title="YouTube" href="https://www.youtube.com/lorenzowoodmusic" style="fill:#b00"><svg><use xlink:href="/svg/homepage.svg#youtube"></use></svg></a></div><div class="icon smaller"><a data-title="Apple Music" href="https://geo.itunes.apple.com/us/artist/lorenzo-wood/1262743720?at=1000lKSp"><svg aria-label="Apple Music" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><rect width="512" height="512" rx="15%" fill="#fff"/><style>stop:last-child{stop-color:#fff;stop-opacity:0}</style><linearGradient id="acb" x1=".78" x2=".29" y1=".92" y2=".6"><stop stop-color="#39f" offset="0"/><stop offset="1"/></linearGradient><linearGradient id="aca" x1=".75" x2=".93" y1=".16" y2=".59"><stop stop-color="#f66" offset="0"/><stop offset="1"/></linearGradient><path d="M199 359V199q0-9 10-11l138-28q11-2 12 10v122q0 15-45 20c-57 9-48 105 30 79 30-11 35-40 35-69V88s0-20-17-15l-170 35s-13 2-13 18v203q0 15-45 20c-57 9-48 105 30 79 30-11 35-40 35-69" fill="#96f"/><path d="M199 359V199q0-9 10-11l138-28q11-2 12 10v122q0 15-45 20c-57 9-48 105 30 79 30-11 35-40 35-69V88s0-20-17-15l-170 35s-13 2-13 18v203q0 15-45 20c-57 9-48 105 30 79 30-11 35-40 35-69" fill="url(#acb)"/><path d="M199 359V199q0-9 10-11l138-28q11-2 12 10v122q0 15-45 20c-57 9-48 105 30 79 30-11 35-40 35-69V88s0-20-17-15l-170 35s-13 2-13 18v203q0 15-45 20c-57 9-48 105 30 79 30-11 35-40 35-69" fill="url(#aca)"/></svg></a></div><div class="icon"><a data-title="Spotify" href="https://open.spotify.com/artist/1rEOrX1GSkT1SJAsG1fBYA?si=kAr7Wf29R7WkScnbG9d2dg" style="fill:#1ED760"><svg><use xlink:href="/svg/homepage.svg#spotify"></use></svg></a></div></div><p><b>Copyright © 2017-2020 Lorenzo Wood</b><span class="widespace"></span><span class="widespace"></span><a class="contact-link" href="/contact/">Contact us</a><span class="widespace"></span><a class="press-link" href="/press/">Press & Media</a></p><p class="js-warning">JavaScript is disabled in your browser; please enable it to see missing content.
</p></footer><div class="scrolldown bounce" id="scroll-arrow" style="display:none; stroke:white"><a class="down-arrow" href="#"><svg><use xlink:href="/svg/homepage.svg#downarrow"></use></svg></a></div><script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script><script>window.jQuery || document.write('<script src="/js/vendor/jquery-3.5.1.min.js"><\\/script>')</script><script>function fullscreen(o){var r=$(window).width(),e=$(window).height(),n=!1;r/e<.575?e=Math.round(r/.575):r/e>1.55?e=Math.round(r/1.55):n=!0,n&&!o?$("#scroll-arrow").css("display","block"):$("#scroll-arrow").remove(),jQuery(".covering").css({width:r,height:e})}$(".down-arrow").click((function(o){return o.preventDefault(),$("html, body").animate({scrollTop:$(".down-arrow").offset().top},1e3),!1})),setTimeout((function(){$("#scroll-arrow").fadeOut("slow",(function(){$("#scroll-arrow").remove()}))}),2e3),fullscreen(null),$(window).resize((function(o){fullscreen(o)}));for(var iOS=/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream,youtube=document.querySelectorAll(".youtube"),i=0;i<youtube.length;i++){var code=youtube[i].dataset.code,title=youtube[i].dataset.title,caption=youtube[i].dataset.caption,linking=youtube[i].dataset.linking;if(iOS&&(linking=!0),0){var iframe=document.createElement("iframe");iframe.setAttribute("allowfullscreen",""),iframe.setAttribute("src","https://www.youtube.com/embed/"+code),youtube[i].appendChild(iframe)}else{var prefix="https://img.youtube.com/vi/",source=prefix+code+"/sddefault.jpg",image=new Image;image.src=source,image.id="video-"+code,image.alt="YouTube thumbnail",image.addEventListener("load",void youtube[i].appendChild(image)),youtube[i].addEventListener("click",(function(){var e=this.dataset.code;if(linking)window.location.href="https://www.youtube.com/watch?v="+e;else{var t=document.createElement("iframe");t.setAttribute("frameborder","0"),t.setAttribute("allowfullscreen",""),t.setAttribute("src","https://www.youtube.com/embed/"+e+"?rel=0&showinfo=0&autoplay=1"),this.innerHTML="",this.appendChild(t)}}));var play=document.createElement("div");if(play.setAttribute("class","play-button"),youtube[i].appendChild(play),void 0!==title){var t=document.createElement("div");t.setAttribute("class","title"),t.innerText=title,youtube[i].appendChild(t)}}if(caption){var captionDiv=document.createElement("p");captionDiv.innerText=caption,youtube[i].insertAdjacentElement("afterend",captionDiv)}}</script><script type="application/ld+json">{"@context":"http://schema.org","@type":"Person","name":"2AM in the Basement","url":"https://www.lorenzowoodmusic.com/2am-in-the-basement/","sameAs":["https://www.amazon.com/dp/B07R5Q4NJ3/ref=dm_ws_ps_adp", "https://twitter.com/2am_basement", "https://listen.tidal.com/artist/17766004", "https://music.apple.com/us/artist/2am-in-the-basement/1461919405?at=1000lKSp", "https://open.spotify.com/artist/4xWrKxTS7gyybHbJ94LZtx"]}</script><script src="/js/svg4everybody.min.js"></script><script>svg4everybody();</script><script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script></body></html>