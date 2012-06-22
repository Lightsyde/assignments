$(document).ready(function () {
	
	$.get('auto-load.html', function (data) {
		$('body').prepend(data);
	});
	
	$('#gethtml').on('click', function () {
		$('#fillme').load('load-me.html');
	});
	
	$('#sendme').on('change', function () {
		$.post('save.php', {
			sendme : $('#sendme').val()
		});
	});
	
});