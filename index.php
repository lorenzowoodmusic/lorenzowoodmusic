<?php
// We could show an initial warning that downloads from iOS don't go into the library directly?
$iOSDevice = false; // or set to a non-false text value
if (preg_match("/(\\(iPod|\\(iPhone|\\(iPad)/", $_SERVER['HTTP_USER_AGENT'], $matches)) {
	$iOSDevice = substr($matches[1], 1);
}
$code = isset($_GET['code']) ? htmlspecialchars($_GET['code']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
?><!DOCTYPE html><html class="no-js" lang="en-us"><head><meta charset="utf-8"><!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]--><title>Lorenzo Wood Music — Official Site</title><meta name="description" content="Lorenzo Wood is a young musician from Alameda, California USA. He sings, plays guitar, drums, keyboards, etc. He also writes and produces original songs."><meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"><link rel="apple-touch-icon" href="icon.png"><link rel="stylesheet" href="css/main.032918.css"><link rel="prefetch" href="//code.jquery.com"><link rel="prefetch" href="//w.soundcloud.com"><link rel="prefetch" href="//img.youtube.com"><link rel="prefetch" href="//widget.bandsintown.com"></head><body><!--[if lt IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
<a href="http://browsehappy.com/">upgrade your browser</a>
to improve your experience.</p><![endif]--><header id="main-header"><h1 class="ir">Lorenzo Wood Music</h1><div class="logo"><svg viewBox="0 0 846 73" aria-label="Lorenzo Wood Music" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M.1 71V3.6h12.3v57.1h27.7V71H.1zm69.8-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM104.2 71V38c0-6.6-.1-11.3-.4-15.7h10.7l.4 9.3h.4c2.4-6.9 8.1-10.4 13.3-10.4 1.2 0 1.9.1 2.9.3v11.6c-1-.2-2.1-.4-3.6-.4-5.9 0-9.9 3.8-11 9.3-.2 1.1-.4 2.4-.4 3.8V71h-12.3zm76-20.9h-32.6c.3 8.8 7.2 12.6 15 12.6 5.7 0 9.8-.8 13.5-2.2l1.8 8.5c-4.2 1.7-10 3-17 3-15.8 0-25.1-9.7-25.1-24.6 0-13.5 8.2-26.2 23.8-26.2 15.8 0 21 13 21 23.7 0 2.3-.2 4.1-.4 5.2zm-32.6-8.6H169c.1-4.5-1.9-11.9-10.1-11.9-7.6 0-10.8 6.9-11.3 11.9zM190.5 71V36.8c0-5.6-.1-10.3-.4-14.5h10.8l.6 7.3h.3c2.1-3.8 7.4-8.4 15.5-8.4 8.5 0 17.3 5.5 17.3 20.9V71h-12.3V43.5c0-7-2.6-12.3-9.3-12.3-4.9 0-8.3 3.5-9.6 7.2-.4 1.1-.5 2.6-.5 4V71h-12.4zm52.6 0v-7.1l18.3-23.4c2.5-3 4.6-5.4 7.2-8.2v-.2h-23.7v-9.8h38.7v7.5l-17.9 22.9c-2.4 2.9-4.7 5.7-7.2 8.3v.2h25.7V71h-41.1zm71-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM373.1 71h-13.3L343.3 3.6h13.1l6.4 30.6c1.7 8.2 3.3 16.8 4.4 23.5h.2c1.1-7.1 3-15.1 4.9-23.6l7.3-30.5h12.9l6.7 31c1.7 8 3.1 15.5 4.1 22.8h.2c1.2-7.4 2.8-15.1 4.6-23.3l7-30.5h12.5L409.5 71h-13.2l-7-31.7c-1.7-7.7-2.9-14.1-3.7-21.4h-.2c-1.2 7.2-2.5 13.7-4.5 21.4L373.1 71zm80.5-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zm56.7-9c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM576.9 0h12.3v57.3c0 5 .2 10.4.4 13.7h-11l-.5-7.7h-.2c-2.9 5.4-8.8 8.8-15.9 8.8-11.6 0-20.8-9.9-20.8-24.9-.1-16.3 10.1-26 21.8-26 6.7 0 11.5 2.8 13.7 6.4h.2V0zm0 49.9v-7.3c0-1-.1-2.2-.3-3.2-1.1-4.8-5-8.7-10.6-8.7-7.9 0-12.3 7-12.3 16.1 0 8.9 4.4 15.4 12.2 15.4 5 0 9.4-3.4 10.6-8.7.3-1.1.4-2.3.4-3.6z" fill="#FFF"/><path d="M661.3 71L660 43.5c-.4-8.7-.9-19.2-.8-28.3h-.3c-2.2 8.2-5 17.3-8 25.8l-9.8 29.2h-9.5l-9-28.8c-2.6-8.6-5-17.8-6.8-26.2h-.2c-.3 8.8-.7 19.5-1.2 28.7L612.9 71h-11.5l4.5-67.4h16.2l8.8 27.1c2.4 7.9 4.5 15.9 6.2 23.4h.3c1.8-7.3 4.1-15.6 6.7-23.5l9.3-27h16l3.9 67.4h-12zm67.6-48.7v34.1c0 5.8.2 10.6.4 14.6h-10.8l-.6-7.4h-.2c-2.1 3.5-6.9 8.5-15.6 8.5-8.9 0-17-5.3-17-21.2V22.3h12.3v26.5c0 8.1 2.6 13.3 9.1 13.3 4.9 0 8.1-3.5 9.4-6.6.4-1.1.7-2.4.7-3.8V22.3h12.3zm10.3 46.3l2.4-8.9c2.8 1.7 8.1 3.5 12.5 3.5 5.4 0 7.8-2.2 7.8-5.4 0-3.3-2-5-8-7.1-9.5-3.3-13.5-8.5-13.4-14.2 0-8.6 7.1-15.3 18.4-15.3 5.4 0 10.1 1.4 12.9 2.9l-2.4 8.7c-2.1-1.2-6-2.8-10.3-2.8-4.4 0-6.8 2.1-6.8 5.1 0 3.1 2.3 4.6 8.5 6.8 8.8 3.2 12.9 7.7 13 14.9 0 8.8-6.9 15.2-19.8 15.2-5.9 0-11.2-1.4-14.8-3.4zm57.1 2.4h-12.4V22.3h12.4V71zm-6.2-69c4.2 0 6.8 2.9 6.9 6.7 0 3.7-2.7 6.6-7 6.6-4.1 0-6.8-2.9-6.8-6.6 0-3.8 2.8-6.7 6.9-6.7zm53.5 58.4l1.7 9.1c-2.6 1.2-7.7 2.5-13.8 2.5-15.2 0-25.1-9.7-25.1-24.8 0-14.6 10-26 27.1-26 4.5 0 9.1 1 11.9 2.3l-2.2 9.2c-2-.9-4.9-1.9-9.3-1.9-9.4 0-15 6.9-14.9 15.8 0 10 6.5 15.7 14.9 15.7 4.3 0 7.3-.9 9.7-1.9z" fill="#62B1DE"/></g></svg></div><div class="hero"><picture><source srcset="img/hero.webp 1920w" type="image/webp"><source srcset="img/hero.jpg 1920w, img/hero50.jpg 960w, img/hero33.jpg 640w"><img src="img/hero.jpg" alt="Lorenzo Wood"></picture></div><div class="icons popular"><a data-title="Instagram" href="https://instagram.com/LorenzoWoodMusic"><svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Instagram</desc><path fill="#e95950" d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.7 4.92 4.92.06 1.27.07 1.65.07 4.85 0 3.2-.01 3.58-.07 4.85-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07a83 83 0 0 1-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92A82.98 82.98 0 0 1 2.16 12a84 84 0 0 1 .07-4.85c.15-3.23 1.67-4.77 4.92-4.92A84.4 84.4 0 0 1 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.7.07 7.05A84.29 84.29 0 0 0 0 12c0 3.26.01 3.67.07 4.95.2 4.36 2.62 6.78 6.98 6.98 1.28.06 1.7.07 4.95.07 3.26 0 3.67-.01 4.95-.07 4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.7.07-4.95 0-3.26-.01-3.67-.07-4.95C23.73 2.7 21.3.27 16.95.07A84.33 84.33 0 0 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.85a1.44 1.44 0 1 0 0 2.89 1.44 1.44 0 0 0 0-2.89z"/></svg></a><a data-title="Facebook" href="https://facebook.com/LorenzoWoodMusic"><svg aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Facebook</desc><path fill="#3b5998" d="M22.68 0H1.32C.6 0 0 .6 0 1.32v21.36C0 23.4.6 24 1.32 24h11.5v-9.3H9.69v-3.62h3.13V8.41c0-3.1 1.9-4.79 4.66-4.79 1.32 0 2.46.1 2.8.15V7h-1.92c-1.5 0-1.8.71-1.8 1.76v2.32h3.59l-.47 3.62h-3.12V24h6.12c.73 0 1.32-.6 1.32-1.32V1.32C24 .6 23.4 0 22.68 0z"/></svg></a><a data-title="Snapchat" href="https://www.snapchat.com/add/lorenzo.wood"><svg aria-label="Snapchat" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Snapchat</desc><path d="M5.83 4.53c-.6 1.35-.36 3.75-.27 5.44-.65.36-1.48-.27-1.95-.27-.49 0-1.07.32-1.17.8-.06.35.1.85 1.2 1.29.43.17 1.46.37 1.7.93.33.78-1.72 4.4-4.92 4.93a.5.5 0 0 0-.42.52c.06.97 2.24 1.35 3.21 1.5.1.14.18.7.3 1.13.06.2.21.43.59.43.5 0 1.31-.38 2.74-.15 1.4.24 2.71 2.22 5.23 2.22 2.35 0 3.75-2 5.1-2.21a5.89 5.89 0 0 1 2.19.05c.51.1.98.16 1.12-.35.13-.43.21-.99.3-1.12.97-.15 3.16-.53 3.22-1.5a.5.5 0 0 0-.42-.52c-3.15-.52-5.26-4.13-4.92-4.93.24-.56 1.26-.76 1.7-.93.8-.32 1.22-.72 1.2-1.17 0-.59-.7-.94-1.22-.94-.53 0-1.29.63-1.9.29.1-1.7.33-4.1-.27-5.44A6.64 6.64 0 0 0 12 .7a6.6 6.6 0 0 0-6.16 3.83z" fill="#fffc00"/></svg></a><a data-title="Twitter" href="https://twitter.com/lorenzowmusic"><svg aria-label="Twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Twitter</desc><path fill="#55acee" d="M24 4.56c-.88.39-1.83.65-2.83.77a4.93 4.93 0 0 0 2.17-2.72c-.95.56-2 .97-3.13 1.2a4.92 4.92 0 0 0-8.4 4.48A13.9 13.9 0 0 1 1.68 3.15 4.93 4.93 0 0 0 3.2 9.72a4.9 4.9 0 0 1-2.23-.61A4.93 4.93 0 0 0 4.91 14a5 5 0 0 1-2.22.08 4.93 4.93 0 0 0 4.6 3.42A9.9 9.9 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.14 0 14.3-7.72 14-14.64.95-.7 1.79-1.57 2.45-2.55z"/></svg></a><a data-title="YouTube" href="https://www.youtube.com/lorenzowoodmusic"><svg aria-label="YouTube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on YouTube</desc><path fill="#b00" d="M4.65 0H6.1l.99 3.7L8 0h1.45L7.79 5.5v3.76H6.35V5.51L4.65 0zm6.6 2.37c-1.12 0-1.86.74-1.86 1.84v3.35c0 1.2.62 1.83 1.86 1.83 1.02 0 1.82-.69 1.82-1.83V4.2c0-1.07-.8-1.84-1.82-1.84zm.53 5.13c0 .37-.2.65-.53.65-.36 0-.56-.3-.56-.65V4.32c0-.37.17-.65.53-.65.39 0 .56.27.56.65V7.5zm4.73-5.07v5.19c-.16.19-.5.5-.75.5-.27 0-.34-.18-.34-.45V2.43h-1.27v5.71c0 .68.2 1.22.89 1.22.38 0 .92-.2 1.47-.85v.75h1.27V2.43H16.5zm2.2 13.86c-.45 0-.54.31-.54.76v.66h1.07v-.66c0-.44-.1-.76-.53-.76zm-4.7.04a.93.93 0 0 0-.25.2v4.05c.1.1.19.18.28.23.2.1.49.1.62-.07.07-.09.1-.24.1-.45v-3.36a.82.82 0 0 0-.12-.5c-.15-.19-.42-.2-.63-.1zm4.82-5.2a183 183 0 0 0-13.66 0c-2.82.2-3.15 1.9-3.17 6.37.02 4.47.35 6.17 3.17 6.37a183 183 0 0 0 13.66 0c2.82-.2 3.15-1.9 3.17-6.37-.02-4.47-.35-6.17-3.17-6.37zM6.51 21.82H5.15v-7.54H3.74V13h4.18v1.28H6.5v7.54zm4.84 0h-1.2v-.72c-.23.27-.46.47-.7.6-.65.38-1.55.37-1.55-.95v-5.44h1.21v5c0 .25.06.43.32.43.24 0 .57-.3.71-.49v-4.94h1.21v6.5zm4.66-1.35c0 .8-.3 1.43-1.1 1.43-.45 0-.82-.16-1.15-.58v.5h-1.22V13h1.22v2.84c.27-.33.64-.6 1.07-.6.89 0 1.18.74 1.18 1.62v3.61zm4.47-1.75h-2.31v1.23c0 .49.04.9.53.9.5 0 .54-.34.54-.9v-.45h1.24v.48c0 1.26-.53 2.02-1.81 2.02-1.16 0-1.75-.85-1.75-2.02v-2.92c0-1.13.75-1.91 1.84-1.91 1.16 0 1.72.74 1.72 1.91v1.66z"/></svg></a><a data-title="SoundCloud" href="https://soundcloud.com/LorenzoWoodMusic"><svg aria-label="SoundCloud" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on SoundCloud</desc><path fill="#f50" d="M7 17.94H6V9.87c.3-.23.64-.43 1-.56v8.63zm3 0h1V8.7c-.23.27-.44.55-.62.86L10 9.4v8.55zm-2 0h1V9.09c-.5-.08-.62-.05-1 0v8.85zm-4 0h1v-7.02a4.7 4.7 0 0 0-.7 1.53l-.3-.18v5.67zm-3-5.25a3.07 3.07 0 0 0 0 4.53V12.7zm18.88-.67c-.2-2.84-2.4-5.08-5.12-5.08-1.02 0-1.96.33-2.76.88v10.12h9.09c1.6 0 2.91-1.4 2.91-3.1 0-2.24-2.17-3.78-4.12-2.82zM3 11.99c-.3-.02-.53-.03-1 .12v5.7c.45.14.64.13 1 .13v-5.95z"/></svg></a></div><nav class="main-nav"><a class="download" href="EPK.zip">Electronic Press Kit</a><div class="scrolldown bounce" id="scroll-arrow" style="display:none;"><a class="down-arrow" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M1 6l11 10L23 6" stroke="#000" stroke-width="2" stroke-linecap="square" fill="none"/></svg></a></div></nav></header><main><section class="bio"><header class="ir" aria-hidden="true"><h2>Bio</h2></header><article class="textual"><p>Lorenzo Wood is a young musician from Alameda, California USA. He sings, plays guitar, drums,
piano/keyboards, bass, and, in an emergency, ukulele. He also beat-boxes, and uses a looper
for live performances. He writes or co-writes many of his own original songs. He produces and
records his music (using Apple Logic) and creates live performance videos.</p><p>Lorenzo started learning to play the drums at the age of four. At the age of seven, he
performed in children’s musical theatre productions, and restarted performances at age
eleven, including key roles in <em>Annie</em>, <em>High School Musical</em>, and
<em>Into the Woods</em>. He has been taking music/piano lessons and, more recently, voice
lessons. He is entirely self-taught on guitar.</p><p>Lorenzo lists
<a href="http://www.edsheeran.com/">Ed Sheeran</a>,
<a href="http://www.maroon5.com">Maroon 5</a>,
<a href="http://www.charlieputh.com">Charlie Puth</a>,
<a href="http://www.shawnmendesofficial.com">Shawn Mendes</a>,
<a href="http://www.jamestaylor.com">James Taylor</a>,
<a href="http://www.johnmayer.com">John Mayer</a>,
<a href="http://www.thebeatles.com">The Beatles</a>,
<a href="http://samsmithworld.com">Sam Smith</a>,
<a href="http://www.niallhoran.com">Niall Horan</a>, and
<a href="http://www.savemesanfrancisco.com">Train</a>
as his musical influences.</p><p>Lorenzo enjoys working with other musicians, and has recorded a number of duets for video.
He has been busking at local street festivals or busy streets, by himself or with support
on bass or percussion, since age 13. He’s expecting to have his first EP, self-produced, ready
later this year.
</p><div id="bandsintown-widget"></div><p><span class="bandsintown-button"><a href="https://www.bandsintown.com/track/lorenzowoodmusic"><svg aria-label="Bands in Town" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Bands in Town</desc><path fill="#00AEA8" d="M0 0h24v24H0z"/><path fill="#FFF" d="M12.5 7.5h4v5h-4zm4.5-5h4v10h-4z"/><path d="M3.5 3v18.5H21V13H8v4h9v.5H7.5V3h-4z" fill="#FFF"/><path fill="#FFF" d="M8 7.5h4v5H8z"/></svg>Track Lorenzo Wood on BandsInTown</a></span>
to be notified of upcoming gigs!</p></article></section><section class="patreon-section"><article class="textual"><h2><span class="patreon-button"><a href="https://www.patreon.com/lorenzowoodmusic">Support Lorenzo Wood Music on
<span aria-hidden="true"><svg aria-label="Patreon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Patreon</desc><path fill="#F96854" d="M0 0h24v24H0z"/><ellipse cx="13.25" cy="10.75" rx="4.75" ry="4.75" fill="#FFF"/><path fill="#052D49" d="M5 6h2.5v12H5z"/></svg></span><span class="patreon-link">Patreon</span>!</a></span></h2><p>Patreon is an online system where you can become a “patron” or sponsor of up-and-coming content creators you like through ongoing support and funding. Click the button above and find out how you can support Lorenzo’s creativity.


</p></article></section><section class="instagram-section requires-js maximize-mobile"><header><h2>Instagram</h2></header><article><div id="lightweight_widget"></div></article><footer><h3><a href="https://instagram.com/LorenzoWoodMusic">More from Instagram</a></h3></footer></section><section class="soundcloud-section balance-footer requires-js maximize-mobile"><header class="ir" aria-hidden="true"><h2>SoundCloud</h2></header><article class="clearfix"><div class="soundcloud-column"><div class="soundcloud-proxy" data-code="386311568"></div></div><div class="soundcloud-column"><div class="soundcloud-proxy" data-code="334122523"></div></div><div class="soundcloud-column"><div class="soundcloud-proxy" data-code="295083156"></div></div></article><footer><h3><a href="https://soundcloud.com/LorenzoWoodMusic">More from SoundCloud</a></h3></footer></section><section class="youtube-section balance-footer requires-js maximize-mobile"><header class="ir" aria-hidden="true"><h2>YouTube</h2></header><article class="clearfix"><div class="youtube-column"><div class="youtube" data-embed="70I6bRqtJfI:Shawn Mendes - In My Blood (Live Acoustic Cover)"></div></div><div class="youtube-column"><div class="youtube" data-embed="ZMnSrxiWkBs:In The Air Tonight by Phil Collins (cover by Lorenzo Wood)"></div></div></article><footer><h3><a href="https://www.youtube.com/lorenzowoodmusic">More from YouTube</a></h3></footer></section><section class="track-section"><article class="textual clearfix"><div class="track-photo"><picture><source srcset="img/side.webp" type="image/webp"><img src="img/side.jpg" alt="Lorenzo singing, viewed from the side"></picture></div><div class="track-form input-form"><div class="track-form-padded"><h2>Subscribe to Lorenzo's mailing list</h2><p>We also suggest tracking Lorenzo on <a href="https://bandsintown.com/lorenzowoodmusic">BandsInTown</a>.</p><form class="validate" action="https://lorenzowoodmusic.us16.list-manage.com/subscribe/post?u=3fb2f947fceaaa94b99d40919&amp;amp;id=1c68d63e9a" method="post" name="mc-embedded-subscribe-form" target="_blank"><div><label for="mce-EMAIL">Email Address</label><input type="email" id="mce-EMAIL" name="EMAIL" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required></div><div><label for="mce-FNAME">First Name</label><input id="mce-FNAME" type="text" name="FNAME"></div><div><label for="mce-LNAME">Last Name</label><input id="mce-LNAME" type="text" name="LNAME"></div><div class="ir" aria-hidden="true"><input class="ir" type="text" name="b_3fb2f947fceaaa94b99d40919_1c68d63e9a" tabindex="-1"></div><div><input class="button" type="submit" value="Subscribe" name="subscribe"></div></form></div></div></article></section><section class="contact"><header><h2>Contact Lorenzo Wood Music</h2></header><article class="textual"><div class="input-form"><form id="contact-form" action="https://jumprock.co/mail/lozobooking" method="post"><div><input type="email" name="email" id="email" placeholder="Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required></div><div><textarea type="text" id="message" name="message" rows="10" cols="40" required="required"></textarea></div><div><input class="trapit" type="text" name="trapit"><input type="hidden" name="replyto" value="%email"><input class="button" type="submit" value="Contact us"></div></form></div></article></section></main><footer><div class="icons exhaustive"><a data-title="Instagram" href="https://instagram.com/LorenzoWoodMusic"><svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Instagram</desc><path fill="#e95950" d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.7 4.92 4.92.06 1.27.07 1.65.07 4.85 0 3.2-.01 3.58-.07 4.85-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07a83 83 0 0 1-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92A82.98 82.98 0 0 1 2.16 12a84 84 0 0 1 .07-4.85c.15-3.23 1.67-4.77 4.92-4.92A84.4 84.4 0 0 1 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.7.07 7.05A84.29 84.29 0 0 0 0 12c0 3.26.01 3.67.07 4.95.2 4.36 2.62 6.78 6.98 6.98 1.28.06 1.7.07 4.95.07 3.26 0 3.67-.01 4.95-.07 4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.7.07-4.95 0-3.26-.01-3.67-.07-4.95C23.73 2.7 21.3.27 16.95.07A84.33 84.33 0 0 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.85a1.44 1.44 0 1 0 0 2.89 1.44 1.44 0 0 0 0-2.89z"/></svg></a><a data-title="Facebook" href="https://facebook.com/LorenzoWoodMusic"><svg aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Facebook</desc><path fill="#3b5998" d="M22.68 0H1.32C.6 0 0 .6 0 1.32v21.36C0 23.4.6 24 1.32 24h11.5v-9.3H9.69v-3.62h3.13V8.41c0-3.1 1.9-4.79 4.66-4.79 1.32 0 2.46.1 2.8.15V7h-1.92c-1.5 0-1.8.71-1.8 1.76v2.32h3.59l-.47 3.62h-3.12V24h6.12c.73 0 1.32-.6 1.32-1.32V1.32C24 .6 23.4 0 22.68 0z"/></svg></a><a data-title="Snapchat" href="https://www.snapchat.com/add/lorenzo.wood"><svg aria-label="Snapchat" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Snapchat</desc><path d="M5.83 4.53c-.6 1.35-.36 3.75-.27 5.44-.65.36-1.48-.27-1.95-.27-.49 0-1.07.32-1.17.8-.06.35.1.85 1.2 1.29.43.17 1.46.37 1.7.93.33.78-1.72 4.4-4.92 4.93a.5.5 0 0 0-.42.52c.06.97 2.24 1.35 3.21 1.5.1.14.18.7.3 1.13.06.2.21.43.59.43.5 0 1.31-.38 2.74-.15 1.4.24 2.71 2.22 5.23 2.22 2.35 0 3.75-2 5.1-2.21a5.89 5.89 0 0 1 2.19.05c.51.1.98.16 1.12-.35.13-.43.21-.99.3-1.12.97-.15 3.16-.53 3.22-1.5a.5.5 0 0 0-.42-.52c-3.15-.52-5.26-4.13-4.92-4.93.24-.56 1.26-.76 1.7-.93.8-.32 1.22-.72 1.2-1.17 0-.59-.7-.94-1.22-.94-.53 0-1.29.63-1.9.29.1-1.7.33-4.1-.27-5.44A6.64 6.64 0 0 0 12 .7a6.6 6.6 0 0 0-6.16 3.83z" fill="#fffc00"/></svg></a><a data-title="Twitter" href="https://twitter.com/lorenzowmusic"><svg aria-label="Twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Twitter</desc><path fill="#55acee" d="M24 4.56c-.88.39-1.83.65-2.83.77a4.93 4.93 0 0 0 2.17-2.72c-.95.56-2 .97-3.13 1.2a4.92 4.92 0 0 0-8.4 4.48A13.9 13.9 0 0 1 1.68 3.15 4.93 4.93 0 0 0 3.2 9.72a4.9 4.9 0 0 1-2.23-.61A4.93 4.93 0 0 0 4.91 14a5 5 0 0 1-2.22.08 4.93 4.93 0 0 0 4.6 3.42A9.9 9.9 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.14 0 14.3-7.72 14-14.64.95-.7 1.79-1.57 2.45-2.55z"/></svg></a><a data-title="YouTube" href="https://www.youtube.com/lorenzowoodmusic"><svg aria-label="YouTube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on YouTube</desc><path fill="#b00" d="M4.65 0H6.1l.99 3.7L8 0h1.45L7.79 5.5v3.76H6.35V5.51L4.65 0zm6.6 2.37c-1.12 0-1.86.74-1.86 1.84v3.35c0 1.2.62 1.83 1.86 1.83 1.02 0 1.82-.69 1.82-1.83V4.2c0-1.07-.8-1.84-1.82-1.84zm.53 5.13c0 .37-.2.65-.53.65-.36 0-.56-.3-.56-.65V4.32c0-.37.17-.65.53-.65.39 0 .56.27.56.65V7.5zm4.73-5.07v5.19c-.16.19-.5.5-.75.5-.27 0-.34-.18-.34-.45V2.43h-1.27v5.71c0 .68.2 1.22.89 1.22.38 0 .92-.2 1.47-.85v.75h1.27V2.43H16.5zm2.2 13.86c-.45 0-.54.31-.54.76v.66h1.07v-.66c0-.44-.1-.76-.53-.76zm-4.7.04a.93.93 0 0 0-.25.2v4.05c.1.1.19.18.28.23.2.1.49.1.62-.07.07-.09.1-.24.1-.45v-3.36a.82.82 0 0 0-.12-.5c-.15-.19-.42-.2-.63-.1zm4.82-5.2a183 183 0 0 0-13.66 0c-2.82.2-3.15 1.9-3.17 6.37.02 4.47.35 6.17 3.17 6.37a183 183 0 0 0 13.66 0c2.82-.2 3.15-1.9 3.17-6.37-.02-4.47-.35-6.17-3.17-6.37zM6.51 21.82H5.15v-7.54H3.74V13h4.18v1.28H6.5v7.54zm4.84 0h-1.2v-.72c-.23.27-.46.47-.7.6-.65.38-1.55.37-1.55-.95v-5.44h1.21v5c0 .25.06.43.32.43.24 0 .57-.3.71-.49v-4.94h1.21v6.5zm4.66-1.35c0 .8-.3 1.43-1.1 1.43-.45 0-.82-.16-1.15-.58v.5h-1.22V13h1.22v2.84c.27-.33.64-.6 1.07-.6.89 0 1.18.74 1.18 1.62v3.61zm4.47-1.75h-2.31v1.23c0 .49.04.9.53.9.5 0 .54-.34.54-.9v-.45h1.24v.48c0 1.26-.53 2.02-1.81 2.02-1.16 0-1.75-.85-1.75-2.02v-2.92c0-1.13.75-1.91 1.84-1.91 1.16 0 1.72.74 1.72 1.91v1.66z"/></svg></a><a data-title="SoundCloud" href="https://soundcloud.com/LorenzoWoodMusic"><svg aria-label="SoundCloud" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on SoundCloud</desc><path fill="#f50" d="M7 17.94H6V9.87c.3-.23.64-.43 1-.56v8.63zm3 0h1V8.7c-.23.27-.44.55-.62.86L10 9.4v8.55zm-2 0h1V9.09c-.5-.08-.62-.05-1 0v8.85zm-4 0h1v-7.02a4.7 4.7 0 0 0-.7 1.53l-.3-.18v5.67zm-3-5.25a3.07 3.07 0 0 0 0 4.53V12.7zm18.88-.67c-.2-2.84-2.4-5.08-5.12-5.08-1.02 0-1.96.33-2.76.88v10.12h9.09c1.6 0 2.91-1.4 2.91-3.1 0-2.24-2.17-3.78-4.12-2.82zM3 11.99c-.3-.02-.53-.03-1 .12v5.7c.45.14.64.13 1 .13v-5.95z"/></svg></a><a data-title="Reverb Nation" href="https://www.reverbnation.com/lorenzowoodmusic"><svg aria-label="ReberbNation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on ReverbNation</desc><ellipse cx="12" cy="12" rx="12" ry="12" fill="#DB9834"/><path d="M17.95 10.72l-2.84 5.06.63 2.07L12.75 24s-5.23.64-8.9-3.2C.17 16.96.07 14.02.07 14.02l11.89-7.68.08 5.52 5.91-1.14z" fill="#A37122"/><path d="M8.3 17.89l3.72-2.75 3.72 2.75-1.42-4.45 3.71-2.75h-4.59l-1.42-4.44-1.42 4.44H6.01l3.72 2.75L8.3 17.9z" fill="#FFF"/></svg></a><a data-title="Bands in Town" href="https://bandsintown.com/lorenzowoodmusic"><svg aria-label="Bands in Town" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Bands in Town</desc><path fill="#00AEA8" d="M0 0h24v24H0z"/><path fill="#FFF" d="M12.5 7.5h4v5h-4zm4.5-5h4v10h-4z"/><path d="M3.5 3v18.5H21V13H8v4h9v.5H7.5V3h-4z" fill="#FFF"/><path fill="#FFF" d="M8 7.5h4v5H8z"/></svg></a><a data-title="Holonis" href="https://holonis.com/lorenzowoodmusic"><svg aria-label="Holonis" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9000 9000"><desc>Lorenzo Wood Music on Holonis</desc><path d="M4370 8980c-104-7-190-29-269-70-153-78-3220-1853-3267-1891-87-69-225-242-208-259 5-5 479-284 1054-621 575-336 1082-633 1127-660l82-48 61 91c195 290 438 502 750 652 211 101 417 156 670 179l135 12 3 1313c2 1245 1 1312-15 1310-10 0-65-4-123-8z" fill="#92bb60"/><path d="M6076 3516c-84-144-273-355-421-471-300-235-629-363-1025-398l-135-12-3-1311-2-1311 102 4c115 5 223 30 301 70 72 36 3149 1806 3217 1850 68 45 182 159 235 237 34 49 38 60 25 68-110 68-2253 1318-2259 1318-5 0-21-20-35-44z" fill="#d2514f"/><path d="M4492 7676l3-1311 135-12c481-43 880-229 1201-559 103-107 159-177 234-292 30-47 52-72 61-68 25 10 2239 1297 2252 1310 18 18-64 131-164 226-75 72-152 118-1679 1002-880 509-1619 935-1642 947-69 34-182 59-296 64l-107 5 2-1312z" fill="#e8bc56"/><path d="M1755 2914c-622-361-1133-659-1137-663-20-18 150-218 241-285 61-45 3200-1862 3267-1892 80-35 159-52 277-57l107-5-2 1312-3 1311-135 12c-599 54-1093 343-1420 832-34 50-62 91-63 91s-511-295-1132-656z" fill="#8f8bb0"/><path d="M596 6728c-38-66-83-187-100-270-14-66-16-299-16-1969-1-1855 0-1896 19-1971 25-96 77-222 105-255l22-25 1114 647c613 356 1124 653 1136 660 20 13 19 15-42 139a1844 1844 0 0 0 1 1634c49 99 58 125 48 134-22 18-2245 1318-2254 1318-4 0-19-19-33-42z" fill="#508096"/><path d="M7252 6106c-617-359-1127-657-1133-663s8-46 45-119c260-522 258-1132-4-1656l-59-117 32-19c339-205 2218-1296 2232-1296 26-1 72 84 117 214l32 95 8 1710c10 2023 9 2129-20 2239-23 82-105 266-119 266-4-1-513-295-1131-654z" fill="#d78a54"/></svg></a><a data-title="Patreon" href="https://www.patreon.com/lorenzowoodmusic"><svg aria-label="Patreon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Patreon</desc><path fill="#F96854" d="M0 0h24v24H0z"/><ellipse cx="13.25" cy="10.75" rx="4.75" ry="4.75" fill="#FFF"/><path fill="#052D49" d="M5 6h2.5v12H5z"/></svg></a></div><p><b>Copyright © 2017-2018 Lorenzo Wood</b><span class="dimmer">&nbsp; Photo credits: Lucy Gigli, David Weintraub</span></p><p class="js-required">JavaScript is disabled in your browser; please enable it to see missing content.
</p></footer><a class="bit-widget-initializer" data-artist-name="Lorenzo Wood Music" data-display-local-dates="false" data-display-past-dates="false" data-auto-style="false" data-text-color="#000000" data-link-color="#00AEA8" data-popup-background-color="#FFFFFF" data-background-color="#FFFFFF" data-display-limit="5" data-link-text-color="#FFFFFF" data-div-id="bandsintown-widget"></a><script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script><script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\\/script>')</script><script>
// REQUIREMENT: JQUERY

// ASAP, Fix styling where safe-area padding is zero. Not sure of any other workaround.

$(window).on('load', function(){

 // executes when complete page is fully loaded, including all frames, objects and images
  if($('section, .safe-area').css('padding-left') === '0px') {
      $('section, .safe-area').css('padding-left', '1em');
      $('section, .safe-area').css('padding-right', '1em');
  }
});

// Do something clever: when we scroll past the hero image, turn off the grayscale filter to make it color

var targetOffset = $("main").offset().top;

var $w = $(window).scroll(function(){
    $('#scroll-arrow').remove();
    if ( $w.scrollTop() > targetOffset ) {
        $('.hero img').css({"filter":"grayscale(0%)"});
    }
});

$('.down-arrow').click(function(event) {
  event.preventDefault();
  $('html, body').animate({
        scrollTop: $('.down-arrow').offset().top
}, 1000);
  return false;
});

// Hide the arrow after a bit
setTimeout(function(){
  $( "#scroll-arrow" ).fadeOut( "slow", function() {
    $('#scroll-arrow').remove();
  });
}, 2000);






// MANUALLY BRING IN: http://lightwidget.com/widgets/lightwidget.js
window.lightwidget||(window.lightwidget=function(){"use strict";var e=[],t=0,i=!1,n=!1,o=["lightwidget.com","instansive.com","dev.lightwidget.com"],d=function(e){return n=e},s=function(e,t){e.contentWindow&&e.contentWindow.postMessage("sizing:"+t,window.location.protocol+"//lightwidget.com")},c=function(t){var i=t.origin.replace(/^https?\:\/\//i,"");if(-1!==o.indexOf(i)){var n=t.data.split(":");try{"sizing"==n[0]&&void 0!=e[parseInt(n[2])]&&(e[parseInt(n[2])].style.height=n[1]+"px")}catch(e){}}},r=function(e){n&&console.log(e);var t=e.origin.replace(/^https?\:\/\//i,"");if(-1!==o.indexOf(t)){var i=e.data.split(":");n&&console.log(i);try{if("sizing_iid"==i[0]){var d=i[2],s=d.replace("instansive_","").replace("lightwidget_");void 0!==document.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+s+'"]')[0]?(n&&console.log("iframesrc"),document.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+s+'"]')[0].style.height=i[1]+"px"):void 0!=document.getElementById(d)?document.getElementById(d).style.height=i[1]+"px":(d=d.replace("instansive","lightwidget"),void 0!=document.getElementById(d)&&(document.getElementById(d).style.height=i[1]+"px"))}}catch(e){n&&console.log(e)}}},g=function(e){n&&console.log("json",e);var t=e.origin.replace(/^https?\:\/\//i,"");if(-1!==o.indexOf(t))try{var i=JSON.parse(e.data);"lightwidget_widget_size"===i.type&&i.size>0&&(void 0!==document.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+i.widgetId+'"]')[0]?document.querySelectorAll('iframe[src*="lightwidget.com/widgets/'+i.widgetId+'"]')[0].style.height=i.size+"px":void 0!==document.querySelectorAll('iframe[src*="instansive.com/widgets/'+i.widgetId+'"]')[0]&&(document.querySelectorAll('iframe[src*="instansive.com/widgets/'+i.widgetId+'"]')[0].style.height=i.size+"px"))}catch(t){n&&console.log(t,e.data)}},l=function(){window.addEventListener?(window.addEventListener("message",c,!1),window.addEventListener("message",r,!1),window.addEventListener("message",g,!1)):(window.attachEvent("onmessage",c),window.attachEvent("onmessage",r),window.attachEvent("onmessage",g))};return l(),{refresh:function(){if(i)for(var n=0;n<t;n++)s(e[n],n)},reload:function(){l()},debug:function(e){return d(e)}}}()),window.lightwidget.refresh();

// LightWidget for Instagram: 6x2, @900=4x2, @600=2x4. Zoom in, padding 5, preloader
//
// Insert this widget HTML into the DOM after everything has loaded so that the page won't block waiting for this to load in.

$('#lightweight_widget').html('<iframe src="https://lightwidget.com/widgets/9b560c45f4e75b9f93dd8bcca23a28a3.html" scrolling="no" allowtransparency="true" class="lightwidget-widget"></iframe>');



// Form Submission

$('#contact-form').submit(function( event ) {
    $.ajax({
      type: 'POST',
      url: 'https://jumprock.co/mail/lozobooking',
      data: $("#contact-form").serialize(),

      success: function(data, textStatus, jqXHR ) {
            if (data !== '') {
                $('#email').val('');
                $('#message').val('');
                setTimeout(function(){ window.alert("Success sending message"); },0);
            } else {
                window.alert('Sorry, but the contact form submission did not work as expected.');
            }
      },
      error: function(jqXHR, textStatus, errorThrown ) {
            window.alert(errorThrown + ' ' + textStatus + ' ' + jqXHR);
      },
      complete: function(jqXHR, textStatus ) {

      }
    });
    event.preventDefault();
});


$('#redeem-form').submit(function( event ) {
    $.ajax({
      type: 'POST',
      url: '/redeem.php',
      data: $("#redeem-form").serialize(),

      success: function(data, textStatus, jqXHR ) {
            if (data !== '') {
                $('#cover').show();
                $('#redeemer').show();
                $('#close-redeem').show();
                $('#redeemer').html(data);  // We’re done; let the content here do the rest.
            } else {
                window.alert('Sorry, but the code you entered has already been redeemed or was entered incorrectly.');
                $('#redeem-input').focus();
            }
      },
      error: function(jqXHR, textStatus, errorThrown ) {
            window.alert(errorThrown + ' ' + textStatus);
      },
      complete: function(jqXHR, textStatus ) {

      }
    });
    event.preventDefault();
});
$('#close-redeem').click(function() {
    $('#cover').fadeOut('slow');
    $('#close-redeem').fadeOut('slow');
    $('#redeemer').fadeOut('fast');
});

// From https://webdesign.tutsplus.com/tutorials/how-to-lazy-load-embedded-youtube-videos--cms-26743
// No jquery needed


var youtube = document.querySelectorAll( ".youtube" );
for (var i = 0; i < youtube.length; i++) {
    var embed = youtube[i].dataset.embed.split(':');
    var code = embed[0];
    var title = embed[1];

    var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    if (iOS) {
      // regular YouTube iframe embed so that it needs just one tap as expected
      var iframe = document.createElement( "iframe" );
      iframe.setAttribute( "allowfullscreen", "" );
      iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ code );
      youtube[i].appendChild( iframe );
    }
    else {
      var source = "https://img.youtube.com/vi/"+ code +"/sddefault.jpg";
      var image = new Image();
      image.src = source;
      image.addEventListener( "load", function() {
          youtube[ i ].appendChild( image );
      }( i ) );

      youtube[i].addEventListener( "click", function() {

          // Need to recalculate the code we are using
          var embed = this.dataset.embed.split(':');
          var code = embed[0];

          var iframe = document.createElement( "iframe" );
          iframe.setAttribute( "frameborder", "0" );
          iframe.setAttribute( "allowfullscreen", "" );
          iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ code +"?rel=0&showinfo=0&autoplay=1" );
          this.innerHTML = "";
          this.appendChild( iframe );
      } );
      var play = document.createElement("div");
      play.setAttribute("class", "play-button");
      youtube[i].appendChild(play);
      var t = document.createElement("div");
      t.setAttribute("class", "title");
      t.innerText = title;
      youtube[i].appendChild(t);
    }
  }

// Replace all soundcloud proxies with a real embed.

$('.soundcloud-proxy').each(function() {
  var code = $(this).data('code');
  var iframeCode = '<iframe class="soundcloud" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'+ code + '&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=false&amp;show_artwork=false&amp;show_reposts=false" />';
   $(this).replaceWith(iframeCode);
});


// Responsively resize the hero image. In sweet spot of screen aspect ratio, hero is full screen.
function fullscreen(event){
    var width = $(window).width();
    var height= $(window).height();
    var fullSizeHero = false;
    if (width/height < 0.85) height = Math.round(width/0.85);
    else if (width/height > 1.618) height = Math.round(width/1.618);
    else fullSizeHero = true;

    // Show scroll arrow if first time here and we are showing full-screen hero
    if (fullSizeHero && !event) {
      $('#scroll-arrow').css('display', 'block');
    } else {
      $('#scroll-arrow').remove();
    }

    jQuery('#main-header,.hero img').css({
        width: width,
        height: height
    });
    //$( ".info" ).text( width + ' x ' + height + ' … ' + width/height  );
}

fullscreen(null);

// Run the function in case of window resize
$(window).resize(function(event) {
     fullscreen(event);
  });



//Modernizer-like
// Remove "no-js" class from element, if it exists
document.documentElement.className = document.documentElement.className.replace("no-js","js");


</script><script src="CACHE/bandsintown.js"></script></body></html>