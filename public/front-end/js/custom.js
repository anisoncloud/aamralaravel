jQuery('.iosSlider').each(function(){

					jQuery(this).iosSlider({
						snapToChildren: true,
						desktopClickDrag: true,
						keyboardControls: true,
						autoSlideTimer: 5000,
						navNextSelector: jQuery(this).closest('.iosSlider').find('.next'),
						navPrevSelector: jQuery(this).closest('.iosSlider').find('.prev'),
						navSlideSelector: jQuery('.selectors .item'),
						scrollbar: true,
						scrollbarContainer: '#slideshow .scrollbarContainer',
						scrollbarMargin: '0',
						scrollbarBorderRadius: '4px',
						onSlideComplete: slideComplete,
						onSliderLoaded: function(args){
							var otherSettings = {
								hideControls : true, // Bool, if true, the NAVIGATION ARROWS will be hidden and shown only on mouseover the slider
								hideCaptions : false  // Bool, if true, the CAPTIONS will be hidden and shown only on mouseover the slider
							}
							sliderLoaded(args, otherSettings);
						},
						onSlideChange: slideChange,
						keyboardControls: true,
						infiniteSlider: true,
						autoSlide: true
					});

				})





/* scroll to top */
        function totop_button(a) {
            var b = $("#totop");
            b.removeClass("off on");
            if (a == "on") { b.addClass("on"); } else { b.addClass("off"); }
        }
        window.setInterval(function () {
            var b = $(this).scrollTop();
            var c = $(this).height();
            if (b > 0) { var d = b + c / 2; } else { var d = 1; }
            if (d < 1e3) { totop_button("off"); } else { totop_button("on"); }
        }, 300);
    
        $("#totop").click(function (e) {
            e.preventDefault();
            $('body,html').animate({scrollTop:0},800, 'easeOutExpo');
        });
    // --- end scroll to top


    $(document).ready(function(){
	
	  if($(window).width() > 767)
		{
		$(".navbar-right").addClass("sf-menu");
		} else{
			$(".navbar-right").removeClass("sf-menu");
		} 	



		if($(window).width() < 767)
		{
		$(".sub-menu").addClass("dropdown-menu");
		} else{
			$(".sub-menu").removeClass("dropdown-menu");
		} 	
	
	 });