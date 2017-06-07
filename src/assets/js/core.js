/*
An easy way to check if an array contains x.
*/
Array.prototype.contains = function(obj) {
	var i = this.length;
	while (i--) {
		if (this[i] == obj) {
			return true;
		}
	}
	return false;
}









/*
An easy way to check which breakpoint we're currently in.
*/
function whichBreakpoint() {
	var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

	var breakpoint = 'mouse';

	if (width > 1040) {
		breakpoint = 'bear';
	} else if (width > 800) {
		breakpoint = 'wolf';
	} else if (width > 600) {
		breakpoint = 'fox';
	} else if (width > 480) {
		breakpoint = 'rabbit';
	} else {
		breakpoint = 'mouse';
	}

	return breakpoint;
}









/*
A vanilla alternative to $(document).ready(fn)
*/
function ready(fn) {
	if (document.readyState != 'loading'){
		fn();
	} else {
		document.addEventListener('DOMContentLoaded', fn);
	}
}

function addClass(el, cl) {
	if (el.classList) {
		el.classList.add(cl);
	} else {
		el.className += ' ' + cl;
	}
}

function removeClass(el, cl) {
	if (el.classList) {
		el.classList.remove(cl);
	} else {
		el.className = el.className.replace(new RegExp('(^|\\b)' + cl.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
	}
}

function hasClass(el, cl) {
	if (el.classList) {
		return (el.classList.contains(cl));
	} else {
		return new RegExp('(\\s|^)' + cl + '(\\s|$)').test(el.cl);
	}
}









/*
Does the ajaxing.
*/
function ajax(data, callback) {

	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() {

		if (xhr.status == 200) {
			if (xhr.readyState == 4) {
				callback( JSON.parse( xhr.response ) );
			}
		}
	}

	xhr.open("POST", "/", true);
	xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
	xhr.send(data);

}









/*
LazySizes config, for lazy loading in images.
*/
window.lazySizesConfig = window.lazySizesConfig || {};
lazySizesConfig.lazyClass = 'js-lazyLoad';
