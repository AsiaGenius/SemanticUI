WebFont.load({
	google: {families: [
		'Open+Sans:400,600,700,700italic:latin', // General Text
		'Roboto:400,300,500,700:latin', // Header Text
		'Droid+Sans+Mono::latin' // Monospace Text
	]}
});


function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}


$(document).ready(function(){
     $('.content').each(function(){
        if(!isScrolledIntoView($(this))){
            $(this).addClass('hiddenforview');
        }
    });

$(document).on('scroll', function(){
    $('.hiddenforview').each(function(){
        if(isScrolledIntoView($(this))){
            $(this).removeClass('hiddenforview').css({ 'display' : 'none' }).transition('swing down');
        }
    });
});
});


$(document).ready(function() {
	// Semantic UI inits
	$('.ui.accordion').accordion();
	$('.ui.dropdown').dropdown({
		on: 'hover'
	});
	$('.ui.checkbox').checkbox();
	$('.ui.modal').modal();
	$('.ui.popup').popup();
	$('.ui.rating').rating();
	$('.shape').shape();
	$('.ui.sidebar').sidebar();
	
	setTimeout(
	function() 
	{
     $('#columsub').transition('fly right');
	}, 800);
	
	setTimeout(
	function() 
	{
     $('#mainlogo').transition('horizontal flip');
	}, 1200);
  

	// Toggle a sliding animation animation
	$("#wprmenu_bar").click(function () {
	
	//$('#wprmenu_menu_ul .menu-item').transition({animation : 'scale',reverse   : 'auto',interval  : 200});
	$('.menu-item').transition('fly right');
	
	});

	
	
	// don't show invalid images
	$("img").error(function () { 
		$(this).css({visibility:"hidden"}); // reserve area if dimensions are set
		// $(this).css({display:"none"}); // never reserve area
	});
	
	// Syntax Highlighter
	hljs.configure({tabReplace: '\t'}); // Tab size can be controlled in most browsers
	$('pre code').each(function(i, e) {
		hljs.highlightBlock(e);
	});
	
	Mousetrap.bind(['ctrl+shift+l'], function(e) {
		$('#semantic-debug-log').modal('show');
		return false;
	});
});



