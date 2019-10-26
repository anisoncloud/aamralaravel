$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})


$(document).ready(function(){
	//alert("The document is ready");
	/*var currentLocation = window.location.href;
	$('.nav-second-level li a').on('click', function(){		
		if (this.href===currentLocation) {
			$('.nav-second-level').addClass('in');
			console.log("Yes");
			//$('#side-menu li').addClass('active');
			//$('.nav-second-level').addClass('in').siblings().removeClass('in');
			//$(this).$('li.active').siblings().removeClass('active');
		}
	})*/
	
	//console.log(currentLocation);
	/*$('.nav-second-level li a').each(function(){
		var $this = $(this);
		if($this.attr('href')===currentLocation){
			currentLocation.parent('ul').addClass('in');
			//$('.nav-second-level').parents().addClass('active');
			//$('.nav-second-level').addClass('in');
			//	$this.addClass('in');
		}
	});*/

	
	$('.nav-second-level li a').filter(function(){
		return this.href==location.href}).addClass('activelinks').parent().parent().addClass('in').siblings().removeClass('active');
		$('.nav-second-level').parent().addClass('active');



		//$('.nav-second-level li a').addClass('activelinks');
		//$('li ul.nav-second-level').siblings().removeClass('active');
		//var $this = $(this);
	//console.log(this.href);
		/*$('.nav-second-level li a').click(function(){
			//$(this).parent().addClass('active').siblings().removeClass('active')	
		})*/


	//console.log($this.attr('href'));
	/*$(".nav-second-level li a").click(function () {
        var addressValue = $(this).attr("href");
        alert(addressValue);
       //console.log(addressValue);

    });*/
    /*$("a").each(function(){
               if ($(this).attr("href") == window.location.pathname){
                       $(this).addClass("active");
               }
       });*/

    /*$('.nav-second-level a')on('click', function(){
    	var currentLocation = location.pathname;
    	var $this = $(this);
		if($this.attr('href')==currentLocation){
			//$this.addClass('in');
		}
    	//$('.nav').addClass('in');

    	alert('dfjdfj');
    });*/

    /*var selector = '.nav-second-level li';
    var url = window.location.href;
    var target = url.split('/');
     $(selector).each(function(){
        if($(this).find('a').attr('href')===('/'+target[target.length-1])){
          $(selector).removeClass('active');
          $(this).removeClass('active').addClass('active');
        }
     });*/

/*
     $(".nav-second-level li a").click(function(e) {
            var link = $(this);
            var item = link.parent("li"); 
            var test = link.attr("href");
                    alert(test); 
            if (item.hasClass("active")) {
                item.removeClass("active").children("a").removeClass("active");
            } else {
                item.addClass("active").children("a").addClass("active");
            }

            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () { 
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("active").parents("li").addClass("active");
                return false;
            }
        });*/


});
