
// REQUIREMENT: JQUERY

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

// Bands in Town - display past events. Not showing anything if no javascript.
$('#recent-performances').html('<a id="recent-link" href="#">& Recent</a>');

// If we click to show recent performances too, this gets revealed. A one-way street BTW.
$('#recent-link').click(function() {
	$('.bit-header').text('Recent & Upcoming Performances');
	$('.bit-past').show();
	return false;
});



// Form Submission

$('#contact-form').submit(function( event ) {
	$.ajax({
		type: 'POST',
		url: 'https://www.lorenzowoodmusic.com/mailme.php',
		data: $("#contact-form").serialize(),

		success: function(data, textStatus, jqXHR ) {
			if (data !== '') {
				$('#e_fm').val('');
				$('#e_ms').val('');
				$('#e_na').val('');
				setTimeout(function(){ window.alert("Your message was sent. You should hear back from us soon!"); },0);
			} else {
				window.alert('Sorry, but the contact form submission did not work as expected.');
			}
		},
		error: function(jqXHR, textStatus, errorThrown ) {
			window.alert('ERROR. ' + errorThrown + ' ' + textStatus);
		},
		complete: function(jqXHR, textStatus ) {

		}
	});
	event.preventDefault();
});


$('#redeem-form').submit(function( event ) {
	if ($('#redeem-input').val().length > 0) {
		$.ajax({
			type: 'POST',
			url: '/redeem.php',
			data: $("#redeem-form").serialize(),

			success: function(data, textStatus, jqXHR ) {
				if (data !== '') {
					$('#cover').show();
					$('#redeemer').show();
					$('#close-redeem').show();
					$('#redeemer').html(data);		// We’re done; let the content here do the rest.
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
	}
	event.preventDefault();
});
$('#close-redeem').click(function() {
	$('#cover').fadeOut('slow');
	$('#close-redeem').fadeOut('slow');
	$('#redeemer').fadeOut('fast');
});


// Responsively resize the hero image. In sweet spot of screen aspect ratio, hero is full screen.
function fullscreen(event){
	var width = $(window).width();
	var height= $(window).height();
	var fullSizeHero = false;
	if (width/height < 0.575) height = Math.round(width/0.575); // fill iphone x/xr/xs
	else if (width/height > 1.5) height = Math.round(width/1.5);	// 1 is square, higher is more "landscape" - find a ratio that works
	else fullSizeHero = true;

	// Show scroll arrow if first time here and we are showing full-screen hero
	if (fullSizeHero && !event) {
		$('#scroll-arrow').css('display', 'block');
	} else {
		$('#scroll-arrow').remove();
	}

	jQuery('.covering').css({
		width: width,
		height: height
	});
	//$( ".info" ).text( width + ' x ' + height + ' … ' + width/height );
}

fullscreen(null);

// Do something clever: when we scroll past the hero image,
// turn off any specified grayscale filter to make it color
// and change the image from image1 to image2 if that's specified

var targetOffset = $("main").offset().top;

var $w = $(window).scroll(function(){
	$('#scroll-arrow').remove();
	if ( $w.scrollTop() > targetOffset) {
		if (! $('body').hasClass('swapped-hero') ) {

			// convert an initially grayscale image to be full color when you get back!
			$('img.bw-image').css({filter:"grayscale(0%)",opacity:"1.0"});

			if ($('body').hasClass('showing-2') ) {

				$('img.swapping-image').attr('src', function() {
		    		return $(this).attr('src').replace('2', '1');
				});
				$('source.swapping-image').attr('srcset', function() {
		    		return $(this).attr('srcset').replace('2', '1');
				});
				$('body').removeClass('showing-2');
			} else {
				$('img.swapping-image').attr('src', function() {
		    		return $(this).attr('src').replace('1', '2');
				});
				$('source.swapping-image').attr('srcset', function() {
		    		return $(this).attr('srcset').replace('1', '2');
				});
				$('body').addClass('showing-2');
			}
			$('body').addClass('swapped-hero');
		}
	}
	if ( $w.scrollTop() == 0) {
		$('body').removeClass('swapped-hero');
	}
});


// Run the function in case of window resize
$(window).resize(function(event) {
	fullscreen(event);
});



