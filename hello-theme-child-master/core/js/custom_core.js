



jQuery(document).ready(function($) {



		// $('.collapse-button img').toggle(function() {

		// 	$('.collapse-section').show();

		// 	$(this).css('transform', 'rotate(180deg)');

		// }, function() {

		// 	$('.collapse-section').hide();

		// 	$(this).css('transform', 'rotate(0deg)');

		// });

		



		$(document).on('click', '.collapse-button img', function(e) {

		    var $target = $(e.currentTarget);

		    $('.collapse-section').slideToggle();

		    $(this).toggleClass('button-rotate');

		});



		 $('.red-rect .elementor-image img').wrap( "<picture class='red_squeare'></picture>" );
		 
		 // $('.red-rect .elementor-image').append("<picture class='red_squeare2'></picture>");









}); 