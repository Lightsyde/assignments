// JavaScript Document


var letter = '';

while (!letter) {
	letter = prompt('Type in any letter of the alphabet');
	
	
}

if(letter) {
	for(var i=0; i<11; i++){
		
		for(var a=0; a<i; a++){
			document.write(letter );
			//I did it!!! but smartgit is giving problems (T-T)
		}
		document.write(letter + '<br>');
		
	}
	
}
