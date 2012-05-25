$(document).ready(function() {
	
	$('form').on('submit', function (ev) {
		ev.preventDefault();
		
	})
	
	$('#apply').on('click', function (ev) {
		
		var itemIs = $('#property').val();
		console.log(itemIs);
		var colorValue = $('#color-box').val();
		
		var colorChange = $('.circ').css(itemIs, colorValue);
		
		if(itemIs == 'background-color' && $('#color-box').val() != null) {
			
			colorChange;
			
		}
		else if(itemIs == 'border-color' && $('#color-box').val() != null) {
			
			colorChange;
		}
		else if(itemIs == 'color' && $('#color-box').val() != null) {
			
			//$('.circ').css('color', colorValue);
			colorChange;
		}
	});
	
});// JavaScript Document