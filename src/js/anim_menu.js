var menu = document.getElementById('menu');
var body = document.querySelector('body');
var val_ul = document.querySelector('.menu ul');
var account = document.querySelector('.body').id;
var valscrool = 5; /*   <---   variable de scrool a detecté pour declancher le black menu */

/*----------------------- val du pannier -----------------------*/

	var valheight = menu.style.height;

	function scroll(){
		var valheight = menu.style.height;
		if (window.scrollY > valscrool) {
			menu.style.height = valheight;
			menu.style.background = 'grey';
			val_ul.classList.add('downscroll');
		}else{
			menu.style.height = '12vh';
			menu.style.background = 'transparent';
			val_ul.classList.remove('downscroll');
		}
	}
	scroll();
	window.addEventListener('scroll', function() {
		var menu = document.getElementById('menu');
		if (window.scrollY > valscrool) {
			menu.style.height = valheight;
			menu.style.background = '#444';
			val_ul.classList.add('downscroll');
		}else{
			menu.style.height = '12vh';
			menu.style.background = 'transparent';
			val_ul.classList.remove('downscroll');
		}
	})
	/*var close_cover = document.getElementById('close_cover');
	close_cover.addEventListener('click', function(){
		var cover = document.getElementById('cover');
		cover.classList.remove('open');
		cover.innerHTML = "";
	})*/