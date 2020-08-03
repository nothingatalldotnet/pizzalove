var General = {
	settings: {

	},

	init: function() {
		General.initIsotope();
		General.initSlick();
		General.bindEvents();
	},

	initIsotope: function() {
        jQuery(".menu-content").isotope({
            layoutMode: 'fitRows',
            itemSelector: '.product',
            percentPosition: true
        });
	},

	initSlick: function() {
		jQuery('.block-popular .carousel').slick({
			autoplay: true,
			dots: true,
			infinite: false,
			speed: 300,
			arrows: false,
			slidesToShow: 3,
			responsive: [{
				breakpoint: 900,
				settings: {
        			slidesToShow: 2,
			        infinite: true,
			        dots: true
        		}
			},{
				breakpoint: 700,
				settings: {
        			slidesToShow: 1,
			        infinite: true,
			        dots: true,
			        draggable: true
        		}
			}]
		});
	},

	bindEvents: function() {
		jQuery('.menu-filters input[type=radio]').on('click', General.filterItems);
		jQuery('.menu-filters input[type=checkbox]').on('click', General.filterItems);
		jQuery('#drop-filters').on('click', General.toggleFilterDropdown);
	},

	toggleFilterDropdown: function(e) {
		jQuery('.indicator').toggleClass('glyphicon-chevron-down-custom glyphicon-chevron-up-custom');
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