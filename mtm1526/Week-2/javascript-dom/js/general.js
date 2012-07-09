/*
	Three ways to access elements in the HTML:
	1. documents.getElementById()
	2. document.getElementsByClassName()
	3. document.getElementsByTagName()
	
	And another that allows us to use CSS selectors
	Its not in every browser yet
	4. document.querySelecterAll();
*/
var createBtn = document.getElementById('create-btn');
//console.log(createBtn);
/*
function bind() {
	
}
	*/
// a wrapper function to allow elick events to work in older ID
var bind = function (elem, ev, func) {
	if (window.addEventListener) {
		elem.addEventListener(ev, func, false);
	} else {
		elem.attachEvent('on' + ev, func);
	}
};

/*
// .addEventListener(event, function, false)
createBtn.addEventListener('click', function () {
	alert('I was clicked!');
	
}, false);
*/

var removeCurrent = function () {
	var circs = document.getElementsByTagName('div');
	var total = circs.length ;
	
	for (var i=0; i<total; i++) {
		circs[i].className = '';
	}
};

var circle;

bind(createBtn, 'click', function () {
	circle = document.createElement('div');
	document.body.appendChild(circle);
	removeCurrent();
	circle.className = 'current';
});

bind(document.getElementById('down-btn'),'click', function () {
	var newTop = circle.offsetTop + 10;
	circle.style.top = newTop + 'px';
})

bind(document.getElementById('up-btn'),'click', function () {
	var newBottom = circle.offsetTop - 10;
	circle.style.top = newBottom + 'px';
})

bind(document.getElementById('left-btn'), 'click', function () {
	var newLeft = circle.offsetLeft - 10;
	circle.style.left = newLeft + 'px';
	
})

bind(document.getElementById('right-btn'), 'click', function () {
	var newRight = circle.offsetLeft + 10;
	circle.style.left = newRight + 'px';
	
})

bind(document.body, 'click', function (ev) {
	
	if (ev.target.tagName.toLowerCase() == 'div') {
		removeCurrent();
		circle = ev.target;
		circle.className = 'current';
	}
});


bind(document.getElementById('color-box'), 'change', function (ev) {
	//inside an event listener
	//this refers to the element this listener was bound to
	circle.style.backgroundColor = this.value;
	circle.innerHTML = '<strong>'+ this.value + '</strong>';
})



























