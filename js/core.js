jQuery(function ($) {
	
	var $searchlink = $('#search-toggle i');
	var $searchbar  = $('#search-bar');
	var $searchfield = $('#search-text');
	
	$('#search-toggle').on('click', function(e){
		
		if(!$searchbar.is(":visible")) { 
			// if invisible we switch the icon to appear collapsable
			$searchlink.removeClass('fas-search').addClass('fas-search-minus');
		} else {
			// if visible we switch the icon to appear as a toggle
			$searchlink.removeClass('fas-search-minus').addClass('fas-search');
		}
	
		$searchbar.slideToggle(250, function(){
			// callback after search bar animation
			$searchfield.focus();
		});
		
	});
	
	$('#searchform').submit(function(e){
		e.preventDefault(); // stop form submission
	});	
	
	// Override Bootstrap dropdown behavior
	$('#main-nav .dropdown > a, #navbarNavDropdownTop .dropdown > a').click(function() {
		location.href = $(this).attr('href');
	});
	
	function toggleDropdown (e) {
		let _d = $(e.target).closest('.dropdown'),
		 _m = $('.dropdown-menu', _d);
		
		setTimeout(function(){
			let shouldOpen = e.type !== 'click' && _d.is(':hover');
			_m.toggleClass('show', shouldOpen);
			_d.toggleClass('show', shouldOpen);
			$('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
		}, e.type === 'mouseleave' ? 50 : 0);
	}
	
	$('body')
		.on('mouseenter mouseleave','.dropdown',toggleDropdown)
		.on('click', '.dropdown-menu a', toggleDropdown);

		
/*
	$frame = $('#adoption-embed'); 
	curHeight = $frame.contents().find('body').height();
	$frame.css('height', curHeight);
*/
});

