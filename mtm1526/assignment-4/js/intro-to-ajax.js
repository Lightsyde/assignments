$(document).ready(function () {
	
	$.get('a.html', function (data) {
		$('#fillme').prepend(data);
	});
	
	$('#getahtml').on('click', function () {
		$('#fillme').load('a.html');
	});
	
	$('#getbhtml').on('click', function() {
		$('#fillme').load('b.html');
	});
	
	$('#getchtml').on('click', function() {
		$('#fillme').load('c.html');
	});
	
	$('#getdhtml').on('click', function() {
		$('#fillme').load('d.html');
	});
	
});