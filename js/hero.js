// Page ready
jQuery(document).ready(function($) 
{
	$('.bloc-fill-screen').css('height', $(window).height()+'px'); // Set initial hero height

});

// Loading page complete
jQuery(window).load(function()
{
	setFillScreenBlocHeight();
}
).resize(function() // Window resize 
{		
	setFillScreenBlocHeight();	
}); 

// Set Fill Screen Bloc heights
function setFillScreenBlocHeight()
{
	$('.bloc-fill-screen').each(function(i) // Loop all fill Screens
	{
		var parentFillDiv = $(this);
		window.fillBodyHeight = 0;
		$(this).find('.container').each(function(i) // Loop all fill Screens
		{
			fillPadding = parseInt($(this).css('padding-top'))*2
			
			if(parentFillDiv.hasClass('bloc-group')) // Bloc Groups
			{
				fillBodyHeight = fillPadding + $(this).outerHeight()+50; // Set hero body height
			}
			else
			{
				fillBodyHeight = fillBodyHeight + fillPadding + $(this).outerHeight()+50; // Set hero body height
			}
		});
		$(this).css('height', (getFillHeight()) + 'px'); // Set Fill height
	});
}

// Get Fill Height
function getFillHeight()
{
	var H = $(window).height(); // Window height
	
	if(H < fillBodyHeight) // If window height is less than content height
	{
		H = fillBodyHeight+100;
	}
	return H
}
