	var val_time_interval = 0;
	var nbt_val_timer = document.getElementById('nbt_val_timer');
	var menu_time = document.getElementById('menu');
	var slide_a = document.getElementById('slide_a');
	var menu_img = document.getElementById('img');
	var search_form = document.getElementById('bar_search_form');
	function loading(val){
		window.location.replace(val);
	}

	/*----------------------- Slider -----------------------*/

	var nbt = 0,nbt_ul = 0;nbt_img = document.querySelectorAll('#slide li');
	for (var i = 0; i < nbt_img.length; i++){
		nbt++;
		nbt_ul = nbt_ul + 100;
		let a_slide = document.createElement('a');
		a_slide.id = nbt;
		slide_a.appendChild(a_slide);
		var id_a = document.getElementById(i + 1);
		id_a.addEventListener('click', function(e){
			e.preventDefault();slideauto('false');
			ckick_a_evnent(a_slide.id);
		})
	}
	function ckick_a_evnent(val_i){
		console.log('Le "a" n°: ' + val_i + ' à été selectioné');
		while(look != val_i){
			if (look > val_i) {
				valueslide = valueslide + 100;
				slide.style.left = valueslide + '%';
				look--;verifslide();slideauto('false');
			}else{
				valueslide = valueslide - 100;
				slide.style.left = valueslide + '%';
				look++;verifslide();slideauto('false');
			}
		}return false;
	}

	var look = 1,valueslide = 0;
	var back = document.getElementById('back'),next = document.getElementById('next');
	var slide = document.getElementById('slide');
	slide.style.width = nbt_ul + '%';
	function verifslide(){
		if (look == '1') {back.style.display = "none";}else{back.style.display = "block";}
		if (look == nbt) {next.style.display = "none";}else{next.style.display = "block";}
		/*----bg a for select----*/
		for (var i = 1; i < (nbt + 1); i++) {
			var a_looking = document.getElementById(i);
			a_looking.style.background = '#fff';
			a_looking.style.width = '1vh';
		}
		for (var i = 1; i < (nbt + 1); i++) {
			if (look == i) {
				var a_looking = document.getElementById(i);
				a_looking.style.background = 'var(--colordefault)';
				a_looking.style.width = '3vh';
			}
		}
	}

	next.addEventListener('click', function(){
		console.log('next ->');
		valueslide = valueslide - 100;
		slide.style.left = valueslide + '%';
		look++;verifslide();slideauto('false');
	})
	back.addEventListener('click', function(){
		console.log('<- back');
		valueslide = valueslide + 100;
		slide.style.left = valueslide + '%';
		look--;verifslide();slideauto('false');
	})
	function slideauto(value){
		val_time_interval = 0;
		if (value == 'false') {
			return false;
		}else{
			if (look < nbt) {
				valueslide = valueslide - 100;
				slide.style.left = valueslide + '%';
				look++;verifslide();
			}else{
				valueslide = valueslide + (nbt_ul - 100);
				slide.style.left = valueslide + '%';
				look = 1;verifslide();
				console
			}
		}
	}
	function timer_intervel(){
		val_time_interval++;
		if (val_time_interval == 8) {
			slideauto();
		}
	}
	verifslide()
	var varslideauto = setInterval(timer_intervel , 1000);

	setTimeout(function() {
		slide.style.transition = '0.8s';
		menu_time.style.transition = '0.5s';
	}, 10);