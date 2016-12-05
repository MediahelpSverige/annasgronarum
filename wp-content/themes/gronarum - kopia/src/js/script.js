$(function(){

	$(document).ready(function(){

		var headerStartHeight = $('#logo img').css('max-height');

	$(window).scroll(function(){

		console.log(window.scrollY);

		if (window.scrollY === 0) {

						$('header').css({

				height: 'initial',

			});

			$('#logo img').css({
				'max-height': headerStartHeight
			});



		}else{
			$('header').css({

				height: '80px',

			});
			$('#logo img').css({
				'max-height': '80px'
			});
		}

	});

});
	
})



