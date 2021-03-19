$(function(){

	let header = $("#header");
	let intro = $("#intro");

	let progressbar = $("#progressbar__inner");
	let progress = $("#progressbar");

	let scrollPos = $(window).scrollTop();
	let introHg = intro.innerHeight();

	let intro__title = $("#intro__title");



	$(window).on('scroll', function() {

		scrollPos = $(this).scrollTop();
		if(scrollPos > 750){
			header.addClass("fixed");		
		}
		else {
			header.removeClass("fixed");
		}
		// progress bar
		var ratio = $(document).scrollTop() 
		/ (($(document).height() - $(window).height()) /100);
		progressbar.width(ratio + "%");

	});
});

window.onload = function(){ 

    StartTimer();

	//let regexAlphabet = /[a-z]/;
	//let regexEmail = /[A-Za-z0-9._%+-]+@[A-Za-z0-9-]+.+.[a-z]/;
	//let regexNumbers = /[0-9-a-z]]/;

	closeMenu();



	let navLinks = document.getElementsByClassName("nav_link_inner")
	for (var i = 0; i < navLinks.length; i++) {
		navLinks[i].onmouseenter = openSubMenu;
	}
	function openSubMenu(event){
		var target = event.target;
		if(target.className == "nav_link_inner"){
			closeMenu();
			var s = target.getElementsByClassName("submenu")
			for (var i = 0; i < s.length; i++) {
				s[i].style.display = "block";
			}
		}
	}

	document.onmouseover = function(event){	
		var target = event.target;
		if(target.className!="nav__link" && 
			target.className!="submenu" && 
			target.className!="paragraphs"){
			closeMenu();
		}
	}

	function closeMenu(){
		var menu = document.getElementById("nav");
		var subMenu = document.getElementsByClassName("submenu");

		for (var i = 0; i < subMenu.length; i++) {
			subMenu[i].style.display = "none";
		}
	}	



	/*let submitBtn = document.getElementById('submit');
	if(submitBtn != null){
		submitBtn.onclick = function(e){
			e.preventDefault();

			let nameArea = document.getElementById('input__name');
			let emailArea = document.getElementById('input__email');
			let phoneArea = document.getElementById('input__number');
			let textArea = document.getElementById('input__text');

			let nameColorer = document.getElementById('name_colorer');
			indicateInput(isValid(regexAlphabet, nameArea), nameColorer);

			let emailColorer = document.getElementById('email_colorer');
			indicateInput(isValid(regexEmail, emailArea), emailColorer);

			let phoneColorer = document.getElementById('phone_colorer');
			indicateInput(isValid(regexNumbers, phoneArea), phoneColorer);

			let textColorer = document.getElementById('text_colorer');
			indicateInput(isValid(true, textArea), textColorer);

			return false;		
		}
	}

	function isValid(reg, input){
		var booler = reg.test(input);
		var booler2 = input.value != "";
		return booler && booler2;
	}

	function indicateInput(isValid, element){
		if(!isValid){
		 element.innerHTML = "Incorrect value";
		} else {			
			element.innerHTML = "";
		}		
	} */

	let memberImages = document.getElementsByClassName("member_photo");
	for (var i = 0; i < memberImages.length; i++) {
		memberImages[i].onmouseenter = scaleUpImages;
		memberImages[i].onmouseleave = scaleDownImages;
	}

	function scaleUpImages(e){
	    this.style.width = "40%";
	}

	function scaleDownImages(e){
	    this.style.width = "30%";
	}




	function StartTimer() {
	    sec = 0;
		min = 0;
		hour = 0;
	    setInterval(tick, 1000);
	}

	function tick() {
		let text = "Time att our site: ";
	    sec++;
	    if (sec >= 60) { 
	        min++;
	        sec = sec - 60;
	    }
	    if (min >= 60) {
	        hour++;
	        min = min - 60;
	    }
	    if (sec < 10) { 
	        if (min < 10) {
	            if (hour < 10) {
	                document.getElementById('timer').innerHTML = text + '0' + hour + ':0' + min + ':0' + sec;
	            } else {
	                document.getElementById('timer').innerHTML = text +  hour + ':0' + min + ':0' + sec;
	            }
	        } else {
	            if (hour < 10) {
	                document.getElementById('timer').innerHTML = text +  '0' + hour + ':' + min + ':0' + sec;
	            } else {
	                document.getElementById('timer').innerHTML = text +  hour + ':' + min + ':0' + sec;
	            }
	        }
	    } else {
	        if (min < 10) {
	            if (hour < 10) {
	                document.getElementById('timer').innerHTML = text +  '0' + hour + ':0' + min + ':' + sec;
	            } else {
	                document.getElementById('timer').innerHTML = text +  hour + ':0' + min + ':' + sec;
	            }
	        } else {
	            if (hour < 10) {
	                document.getElementById('timer').innerHTML = text +  '0' + hour + ':' + min + ':' + sec;
	            } else {
	                document.getElementById('timer').innerHTML = text +  hour + ':' + min + ':' + sec;
	            }
	        }
	    }
	}
};