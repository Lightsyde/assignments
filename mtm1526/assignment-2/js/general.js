// JavaScript Document

//trying to de-confuse myself by breaking down the assignment into steps
//final goal- to do list with canceling ability.
// step one create button and input text field... done.
// create variables containing the id of the text field and add button... done.
// use the bind function? to create the li element when the add button is clicked... done.
// used .innerHTML to add stuff into the created lis... done.
// get fustrated for four hours trying to get a simple value to compare with another one.... done. I will get back to this later T-T


var createTodo = document.getElementById('new-to-to');
var addButton = document.getElementById('add-to-list');



var liMake;
//console.log(createTodo, addButton);
var doIT = function (elem, ev, func) {
	if (window.addEventListener) {
		elem.addEventListener(ev, func, false);
	}
	else {
		elem.attachEvent('on' + ev, false);
	}
};






doIT(addButton, 'click', function () {
	if(createTodo.value.length!=0){
		liMake = document.createElement('li');
		
		liMake.innerHTML = createTodo.value;

		document.body.appendChild(liMake);
		
		doIT(document.getElementById('new-to-to'), 'enter', function () {
			
				if(createTodo.value==0) {
				liMake.innerHTML = this.value;
				}
			
			
		})
	
	console.log(liMake);
	//console.log(checkLi);
	
	}
	
})










