//////////////////////////////
// 						    //
//        PLUGINS           //
//                          //
//////////////////////////////

new WOW().init();

//////////////////////////////
// 					        //
//        NAVIGATION        //
//                          //
//////////////////////////////

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

    