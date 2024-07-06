// ---------------------Zoom In Image on Scroll---------------------

let currentZoom = 1; 
let minZoom = 1; 
let maxZoom = 3; 
let stepSize = 0.1;

const container = document.querySelector('.progImg'); 
window.addEventListener('scroll', function () { 
	// Zoom in or out based on the scroll direction 
	let scroll = window.scrollY;
	container.style.transform ='scale(' + (1 + scroll/1500) + ')'
	
});



