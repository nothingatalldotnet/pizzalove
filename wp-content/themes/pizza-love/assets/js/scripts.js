var General = {
	settings: {

	},

	init: function() {
		General.initIsotope();
		General.initSlick();
		General.bindEvents();
	},

	initIsotope: function() {
		jQuery('.all').prop("checked",true);
		jQueyy('.all').closest('label').find('.all').show();

        jQuery(".menu-content").isotope({
            layoutMode: 'fitRows',
            itemSelector: '.product',
            percentPosition: true,
            resizable: false,
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
		jQuery('.menu-filters input[type=radio], .filter-list input[type=radio]').on('click', General.filterItems);
		jQuery('.menu-filters input[type=checkbox], .filter-list input[type=checkbox]').on('click', General.filterItems);
		jQuery('.filter-title').on('click', General.toggleFilterDropdown);
		jQuery('.product-more-info').on('click', General.openModal);
		jQuery('.modal-close').on('click', General.closeModal);
	},

	toggleFilterDropdown: function(e) {
		jQuery('.indicator').toggleClass('glyphicon-chevron-down-custom glyphicon-chevron-up-custom');
		jQuery('#drop-filters .filter-list').slideToggle();
	},

	filterItems: function() {
		var filter_string = "",
			category = "",
			tags = "";
		
		if(jQuery(window).width() <= 700) {
			category = jQuery(".filter-list input[type=radio]:checked").val();
		} else {
			category = jQuery(".menu-filters input[type=radio]:checked").val();
		}

		if(jQuery(window).width() <= 700) {
			jQuery('.filter-list input[type=checkbox]:checked').each(function() {
				if(category !== "") {
					filter_string += '.'+category+'.'+jQuery(this).val()+', ';	
				} else {
					filter_string += '.'+jQuery(this).val()+', ';	
				}
			});
		} else {
			jQuery('.menu-filters input[type=checkbox]:checked').each(function() {
				if(category !== "") {
					filter_string += '.'+category+'.'+jQuery(this).val()+', ';	
				} else {
					filter_string += '.'+jQuery(this).val()+', ';	
				}
			});
		}

		filter_string = filter_string.replace(/,\s*$/, "");

		if((filter_string === "")&&(category !== "")) {
			filter_string = '.'+category;
		} 

		if(filter_string === "") {
			filter_string = "*";
		}
		jQuery(".menu-content").isotope({filter:filter_string});
	},

	openModal: function(e) {
		e.preventDefault();
		var modal = jQuery(e.target).closest('.product').find('.modal')
		modal.show();
	},

	closeModal: function(e) {
		e.preventDefault();
		jQuery('.modal').hide();
	}
};

jQuery(function(){
	'use strict';
	General.init();
});