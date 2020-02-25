
(function($){
	"use strict";
    $(document).on('ready',function(){
        
        //google API key
		$('#map').gmap3({
		  address: "Haltern am See, Weseler Str. 151",
		  zoom: 6,
		  scrollwheel: false,
		});
        
    });


})(jQuery);



