$(document).ready(function () {

	// Immediately request the list of todos and insert them into the <ul>
	$('.todos').load('list.php');

	$('form').on('submit', function (ev) {
		ev.preventDefault();

		var item = $('#item').val(); // Store the input value because we use it a lot
		// Create a new LI element to append to the page right away
		var $newLi = $(document.createElement('li')).html(item);

		if (item != '') {
			// `$.post()` uses AJAX to send information to the server
			// We can send any data we want to a PHP file
			// In PHP we'd access the data like, filter_input(INPUT_POST, 'item'...
			$.post('add.php', {
				'item' : item
			}, function (data) {
				// `$.post()` allows a third argument,
				// a function to be called after the request has finished
				// So, after the todos have been save to the database,
				//  we get the ID sent from our file and put that onto the LI
				console.log(data)
				$newLi.attr('data-id', data);
			});

			// We are appending the list item here to make our todo appear to be faster
			// But at this stage, we don't know the ID of the item
			// We will only know the ID after the post request has finished
			$('.todos').append($newLi)
			$('#item').val('');
		}
	});

	$('.todos').on('click', 'li', function (ev) {
		$(this).attr('data-status', '1');

		$.post('check-off.php', {
			'id' : $(this).attr('data-id')
		});
	});

});
