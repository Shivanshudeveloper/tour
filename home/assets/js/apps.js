$(document).ready(function() {
	
	
	$("#owl-demo1").owlCarousel({
		navigation : true,
		slideSpeed : 1000,
		paginationSpeed : 500,
		singleItem : true
		// "singleItem:true" is a shortcut for:
		// items : 1, 
		// itemsDesktop : false,
		// itemsDesktopSmall : false,
		// itemsTablet: false,
		// itemsMobile : false
	});
	$("#owl-demo2").owlCarousel({
		autoPlay : false,
		navigation : true,
		slideSpeed : 1000,
		paginationSpeed : 500,
		singleItem : true
		// "singleItem:true" is a shortcut for:
		// items : 1, 
		// itemsDesktop : false,
		// itemsDesktopSmall : false,
		// itemsTablet: false,
		// itemsMobile : false
	});
	
	$("#owl-demo3").owlCarousel({
		autoPlay : 3000,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		//singleItem:true         
	  // "singleItem:true" is a shortcut for:
	   items : 1, 
	  // itemsDesktop : false,
	  // itemsDesktopSmall : false,
	  // itemsTablet: false,
	  // itemsMobile : false         
	});
	$("#owl-demo333").owlCarousel({
		autoPlay : false,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		//singleItem:true         
	  // "singleItem:true" is a shortcut for:
	   items : 3, 
	  // itemsDesktop : false,
	  // itemsDesktopSmall : false,
	  // itemsTablet: false,
	  // itemsMobile : false         
	});
	$("#owl-demo3333").owlCarousel({
		autoPlay : false,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		//singleItem:true         
	  // "singleItem:true" is a shortcut for:
	   items : 3, 
	  // itemsDesktop : false,
	  // itemsDesktopSmall : false,
	  // itemsTablet: false,
	  // itemsMobile : false         
	});
	$("#owl-demo4").owlCarousel({
		autoPlay : false,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		//singleItem:true         
	  // "singleItem:true" is a shortcut for:
	   items : 4, 
	  // itemsDesktop : false,
	  // itemsDesktopSmall : false,
	  // itemsTablet: false,
	  // itemsMobile : false         
	});
	$("#owl-demo5").owlCarousel({
		autoPlay : false,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		//singleItem:true         
	  // "singleItem:true" is a shortcut for:
	   items : 4, 
	  // itemsDesktop : false,
	  // itemsDesktopSmall : false,
	  // itemsTablet: false,
	  // itemsMobile : false         
	}); 
	$("#owl-demo7").owlCarousel({
		autoPlay : false,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		//singleItem:true         
	  // "singleItem:true" is a shortcut for:
	   items : 7, 
	  // itemsDesktop : false,
	  // itemsDesktopSmall : false,
	  // itemsTablet: false,
	  // itemsMobile : false         
	}); 
	$("#owl-demo77").owlCarousel({
		autoPlay : false,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		//singleItem:true         
	  // "singleItem:true" is a shortcut for:
	   items : 7, 
	  // itemsDesktop : false,
	  // itemsDesktopSmall : false,
	  // itemsTablet: false,
	  // itemsMobile : false         
	}); 
	
	
	//Sort random function
	function random(owlSelector){
		owlSelector.children().sort(function(){
			return Math.round(Math.random()) - 0.5;
		}).each(function(){
		  $(this).appendTo(owlSelector);
		});
	}
	$("#owl-demo5").owlCarousel({   
		autoPlay : 3000,         
		navigation: true,
		navigationText: [
		"<i class='icon-chevron-left icon-white'></i>",
		"<i class='icon-chevron-right icon-white'></i>"
		],
		//Call beforeInit callback, elem parameter point to $("#owl-demo")
		beforeInit : function(elem){
		  random(elem);
		}
	});



	$("#owl-demo6").owlCarousel({
        autoPlay : 3000,
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true         
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false         
    });
    $("#owl-demo7").owlCarousel({
        autoPlay : 3000,
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        items : 5,         
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false         
    });


});