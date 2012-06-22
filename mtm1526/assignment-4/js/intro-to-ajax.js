$(document).ready(function () {
	
	$.get('a.html', function (data) {
		$('#fillme').prepend(data);
	});
	
	$('#getahtml').on('click', function () {
		$('#fillme').load('a.html');
	});
	
	$('#getbhtml').one('click', function() {
		$('#fillme').load('b.html');
	});
	
	$('#sendme').on('change', function () {
		$.post('save.php', {
			sendme : $('#sendme').val()
		});
	});
	
});