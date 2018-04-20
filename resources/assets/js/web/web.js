/*
|--------------------------------------------------------------------------
| WEB JS
|--------------------------------------------------------------------------
*/

new WOW().init();

/*
|--------------------------------------------------------------------------
| Loader
|--------------------------------------------------------------------------
*/

$(window).on('load', function() {
    $('#MainLoader').fadeOut('slow');
	// $('body').css({'overflow':'visible'});
})

/*
|--------------------------------------------------------------------------
| Gallery and Blog Filters
|--------------------------------------------------------------------------
*/

function openFilters(){
	$('.Fiter-Container').removeClass('Hidden');
	$('body, html').css('overflow', 'hidden');
} 

function closeFilters(){
	$('.Fiter-Container').addClass('Hidden');
	$('body, html').css('overflow', 'scroll');
}

$('.Show-Mobile-Filter').click(function(){
	if($('.Fiter-Container').hasClass('Hidden')){
		openFilters();
	} else {
		closeFilters();
	}
});

$('.Close-Mobile-Filters').click(function(){
	closeFilters();
});


new WOW().init();

/*
|--------------------------------------------------------------------------
| Contact Tab (WhatsApp)
|--------------------------------------------------------------------------
*/
$(document).ready(function(){
	if (screen.width < 765){
		$('.Contact-Tab').hide(200);
		$(window).scroll(function(){
			if ($(window).scrollTop() > 500){
				$('.Contact-Tab').show(200);
			} else {
				$('.Contact-Tab').hide(200);
			}
		});
	}
});

/*
|--------------------------------------------------------------------------
| Hamburguer Menu
|--------------------------------------------------------------------------
*/

// Hide Menu
$('#MainMenu').hide();

function openMenu(){
	$('#MainMenu').slideDown(100);
	$('html').css('overflow-y','hidden');
}

function closeMenu(){
	$('#MainMenu').slideUp(100);
	$('html').css('overflow-y','scroll');
	$('.MainMenuA').removeClass('wow slideInLeft');
}

$('#ContactNavBtn').click(function(){
	closeMenu();
});

$('.MainMenuBtn').click(function(){
	if(!$(this).hasClass('is-active')){
		openMenu();
		$(this).addClass('is-active');
	} else {
		closeMenu();

		$('.OpenedItem').each(function(i, obj) {
			var height = $(this).data('height');
			$(this).animate({height: height}); 
		});

		$(this).removeClass('is-active');
	}
});




/*
|--------------------------------------------------------------------------
| Home Big Menu
|--------------------------------------------------------------------------
*/

$('.HomeItem > .inner').each(function(){ 
	var innerHeight = $(this).height();
	$(this).data('height', innerHeight);
});

$(document).ready(function(){
		   
	// Show Overlay
	$('.HomeItemBtn').click(function(){
		// Reset open overlay
		$(this).parent().addClass('OpenedItem');
		var openedItems = $('.inner .OpenedItem');

		$('.OpenedItem').each(function(i, obj) {
			var height = $(this).data('height');
			$(this).animate({height: height}); 
		});

		var thisOverlay = $(this).parent().siblings('.Overlay');
		var thisOverlayText = $(this).parent().siblings('.Overlay').children('.Overlay-Text');
		// Closing other overlays
		$('.Overlay-Text').fadeOut();
		$('.Overlay-Text').addClass('Hidden');
		$.when($('.Overlay-Color').animate({left:'100%'}, 400)).done(function() {
			$('.Overlay').not(thisOverlay).addClass('Hidden');
		});        
		
		// Show Overlay
		var text = $(this).parent().siblings('.Overlay').children('.Overlay-Text');
		
		$(this).parent().siblings('.Overlay').removeClass('Hidden');
		$(this).parent().siblings('.Overlay').children('.Overlay-Color')
			.animate({left:'0'},
			500, function() {
				text.removeClass('Hidden', {duration: 1500});
				$('.Overlay-Text').fadeIn('100')
			});

		// This .Overlay-Text
		var overlayHeight =  thisOverlayText.getHeightFromHidden(function(){ return this.height()});
		var parentHeight = $(this).parent().height();
		if(overlayHeight > parentHeight){
			$(this).parent().data('height', parentHeight);
			$(this).parent().animate({height: overlayHeight}); 
		}

	});

	// Close Overlays with X button
	$('.CloseOverlay').click(function(){
		$.when($('.Overlay-Text').fadeOut(150)).done(function() {
			$('.Overlay-Text').addClass('Hidden')
		});
		
		let parent = $(this).parent().parent().siblings('.inner');
		let originalHeight = parent.data('height') || '';
		parent.animate({height: originalHeight});           

		$('.Overlay-Color').animate({left:'100%'}, 450, 
		function(){
			$('.Overlay').addClass('Hidden');
		});
	});
});


// Obtain real height of a hidden elemment
$.fn.getHeightFromHidden = function(fn) {
	var element = $(this).clone(), result;
	// make the element take space in the page but invisible
	element.css({visibility: 'hidden', display: 'block'}).insertAfter(this);
	// to override any display: none !important you may have been using
	element.attr('style', element.attr('style').replace('block', 'block !important'));
	result = fn.apply(element);
	element.remove();
	return result;
};

// Show and Hide Empresas Section
$('#Empresas').hide();
$('.BtnEmpresas').click(function(){
	
	if(screen.width > '800'){
		$('.Home-Desktop, .MainMenuBtn').hide(500);
	} else {
		$('.Home-Mobile, .MainMenuBtn').hide(500);
	}
	$('html, body').animate({ scrollTop: 0 }, '0');

	$('#Main-Big-Menu').fadeOut(0, function () {
		$('#Empresas').fadeIn(0);
	});
});


$('.Close-Empresas').click(function(){
	if(screen.width > '800'){
		$('.Home-Desktop, .MainMenuBtn').show(200);
	} else {
		$('.Home-Mobile, .MainMenuBtn').show(200);
	}
	$('#Empresas').fadeOut(0, function () {
		$('#Main-Big-Menu').fadeIn(0);
	});
});

// For Test
//$('#Empresas').show();
//$('#Main-Big-Menu').hide();

// Go To Top Arrow
$('.goToTop').css('display','none');

$(window).scroll(function() {
	if ($(window).scrollTop() > 800) {
		$('.goToTop').fadeIn(500);
	}
	else {
		$('.goToTop').fadeOut(500);
	}
});

$('.goToTop').click(function(){
	$('html, body').animate({ scrollTop: 0 }, 'fast');
});
