// Document ready event
// It's best practice to put all your jQuery code inside
// JavaScript Document
$(document).ready(function () {
		
		$('form').on('submit', function (ev) {
			// Stop elements from doing hwhat it normally does
			// Stops the form from packaging its data and sending
			// a POST request
			ev.preventDefault();
			
			var item = $('#item').val(); 
			// .prepend(), .before(), .after(), html()
			$('.todos').append('<li>' + item + '</li>');
			$('.todos li:last-child').hide().fadeIn(400);
			$('#item').val('');	
			
			
		});
		
		
		$('.todos').on('click', 'li', function () {
			$(this).toggleClass('done');
		});
		
		// .style.backgroundColor = '#f00' - normal javacript
		// $('elem').css('background-color', '#f00')
	
});