jQuery(document).ready(function($){

	var ua = navigator.userAgent;
	var isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

	if (isMobileWebkit) {
		return;
	}

	$('body').css('visibility', 'hidden');

	//Fix Footer to bottom of browser window
	$("footer").css("position", "fixed");
	$("footer").css("bottom", "0px");
	$("footer").css("left", "0px");
	$("footer").css("right", "0px");

	$.stellar({
	  // Set scrolling to be in either one or both directions
	  horizontalScrolling: false,
	  verticalScrolling: true,

	  // Set the global alignment offsets
	  // horizontalOffset: 0,
	  // verticalOffset: 0,

	  // Refreshes parallax content on window load and resize
	  responsive: true,

	  // Select which property is used to calculate scroll.
	  // Choose 'scroll', 'position', 'margin' or 'transform',
	  // or write your own 'scrollProperty' plugin.
	  scrollProperty: 'scroll',

	  // Select which property is used to position elements.
	  // Choose between 'position' or 'transform',
	  // or write your own 'positionProperty' plugin.
	  positionProperty: 'transform',

	  // Enable or disable the two types of parallax
	  // parallaxBackgrounds: true,
	  // parallaxElements: true,

	  // Hide parallax elements that move outside the viewport
	  hideDistantElements: false,

	  // Customise how elements are shown and hidden
	  // hideElement: function($elem) { $elem.hide(); },
	  // showElement: function($elem) { $elem.show(); }
	});

	function position_footer_offset() {
		
		console.log("\n");

		var margin_bottom = $("footer").height();
		console.log("margin_bottom: " + margin_bottom);

		$("#background_distant").css("margin-bottom", margin_bottom + "px");

		var viewport_height = $(window).height();
		console.log("viewport_height: " + viewport_height);

		set_min_height_of_background_divs_to(viewport_height);

		var document_height = $(document).height();
		console.log("document_height: " + document_height);

		var difference = document_height - viewport_height;
		console.log("difference: " + difference);

		var ratio = $("footer").attr("data-stellar-ratio");
		console.log("ratio: " + ratio);

		var new_bottom = Math.ceil(difference * ratio) * -1;
		console.log("new_bottom: " + new_bottom);

		$("footer").css("bottom", new_bottom + "px");
	}

	function set_min_height_of_background_divs_to($min_height){
		$("#background_distant").css("min-height", $min_height);
	}

	window.addEventListener('resize', position_footer_offset, false);
	window.setTimeout(function(){ 
		position_footer_offset();
		console.log('timer done');
		$('body').css("visibility", "visible").hide().fadeIn('slow');
	}, 300);

});