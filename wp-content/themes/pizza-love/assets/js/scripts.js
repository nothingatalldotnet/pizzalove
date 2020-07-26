var General = {
	settings: {

	},

	init: function() {
		General.initIsotope();
		General.bindEvents();
	},

	initIsotope: function() {
        jQuery(".menu-content").isotope({
            layoutMode: 'fitRows',
            itemSelector: '.product',
            percentPosition: true
        });
	},

	bindEvents: function() {
		jQuery('.menu-filters input[type=radio]').on('click', General.filterItems);
		jQuery('.menu-filters input[type=checkbox]').on('click', General.filterItems);
	},

	filterItems: function() {
		var filter_string = "",
			category = "",
			tags = "";
		
		category = jQuery(".menu-filters input[type=radio]:checked").val();

		jQuery('.menu-filters input[type=checkbox]:checked').each(function() {
			if(category !== "") {
				filter_string += '.'+category+'.'+$(this).val()+', ';	
			} else {
				filter_string += '.'+$(this).val()+', ';	
			}
		});

		filter_string = filter_string.replace(/,\s*$/, "");

		if((filter_string === "")&&(category !== "")) {
			filter_string = '.'+category;
		} 


		if(filter_string === "") {
			filter_string = "*";
		}
		jQuery(".menu-content").isotope({filter:filter_string});
	}


};

jQuery(function(){
	'use strict';
	General.init();
});