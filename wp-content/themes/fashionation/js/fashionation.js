jQuery(document).ready(function($){
	console.log('inside fashionation.js');

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
	  //scrollProperty: 'scroll',

	  // Select which property is used to position elements.
	  // Choose between 'position' or 'transform',
	  // or write your own 'positionProperty' plugin.
	  positionProperty: 'transform',

	  // Enable or disable the two types of parallax
	  // parallaxBackgrounds: true,
	  //parallaxElements: true,

	  // Hide parallax elements that move outside the viewport
	  hideDistantElements: false,

	  // Customise how elements are shown and hidden
	  // hideElement: function($elem) { $elem.hide(); },
	  // showElement: function($elem) { $elem.show(); }
	});


	function position_footer_offset() {
		
		var margin_bottom = $("footer").height();
		console.log("margin_bottom: " + margin_bottom);

		$("#background_image_1").css("margin-bottom", margin_bottom + "px");

		var viewport_height = $(window).height();
		console.log("\nviewport_height: " + viewport_height);

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

	window.addEventListener('resize', position_footer_offset, false);
	position_footer_offset();


});