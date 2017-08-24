(function(jQuery) {
	
	"use strict";
	
/* ==========================================================================
   ieViewportFix - fixes viewport problem in IE 10 SnapMode and IE Mobile 10
   ========================================================================== */
   
	function ieViewportFix() {
	
		var msViewportStyle = document.createElement("style");
		
		msViewportStyle.appendChild(
			document.createTextNode(
				"@-ms-viewport { width: device-width; }"
			)
		);

		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			
			msViewportStyle.appendChild(
				document.createTextNode(
					"@-ms-viewport { width: auto !important; }"
				)
			);
		}
		
		document.getElementsByTagName("head")[0].
				appendChild(msViewportStyle);

	}


/* ==========================================================================
   setDimensionsPieCharts
   ========================================================================== */
	
	function setDimensionsPieCharts() {

		jQuery('.pie-chart').each(function() {

			var jQueryt = jQuery(this),
				n = jQueryt.parent().width(),
				r = jQueryt.attr("data-barSize");
			
			if (n < r) {
				r = n;
			}
			
			jQueryt.css("height", r);
			jQueryt.css("width", r);
			jQueryt.css("line-height", r + "px");
			
			jQueryt.find("i").css({
				"line-height": r + "px",
				"font-size": r / 3
			});
			
		});

	}

/* ==========================================================================
   animatePieCharts
   ========================================================================== */

	function animatePieCharts() {

		if(typeof jQuery.fn.easyPieChart !== 'undefined'){

			jQuery('.pie-chart:in-viewport').each(function() {
	
				var jQueryt = jQuery(this),
					n = jQueryt.parent().width(),
					r = jQueryt.attr("data-barSize"),
					l = "square";
				
				if (jQueryt.attr("data-lineCap") !== undefined) {
					l = jQueryt.attr("data-lineCap");
				} 
				
				if (n < r) {
					r = n;
				}
				
				jQueryt.easyPieChart({
					animate: 1300,
					lineCap: l,
					lineWidth: jQueryt.attr("data-lineWidth"),
					size: r,
					barColor: jQueryt.attr("data-barColor"),
					trackColor: jQueryt.attr("data-trackColor"),
					scaleColor: "transparent",
					onStep: function(from, to, percent) {
						jQuery(this.el).find('.pie-chart-percent span').text(Math.round(percent));
					}
	
				});
				
			});
			
		}

	}
	
	 
/* ==========================================================================
   When document is ready, do
   ========================================================================== */
   
	jQuery(document).ready(function() {			   
		
		ieViewportFix();
		
		setDimensionsPieCharts();
		
		animatePieCharts();
		
	});

/* ==========================================================================
   When the window is scrolled, do
   ========================================================================== */
   
	jQuery(window).scroll(function() {				   

		animatePieCharts();
		

	});
	

})(window.jQuery);

// non jQuery scripts below