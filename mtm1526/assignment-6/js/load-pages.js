$(document).ready(function () {
	
	//var tabAContent = '';
	
	$('#getahtml').on('click', function (ev) {
		ev.preventDefault();
		$('#fillme').load('a.html');
		
		//if (!tabAContent) {
			//$.get('a.html', function (data) {
			//	tabAContent = data;
			//	$('#fillme').html(data);
			//});
		//} else {
			//$('#fillme').html(tabAContent);
		//}
	});
	
	$('#getbhtml').on('click', function(ev) {
		ev.preventDefault();
		$('#fillme').load('b.html');
	});
	
	$('#getchtml').on('click', function(ev) {
		ev.preventDefault();
		$('#fillme').load('c.html');
	});
	
	$('#getdhtml').on('click', function(ev) {
		ev.preventDefault();
		$('#fillme').load('d.html');
	});
	
});