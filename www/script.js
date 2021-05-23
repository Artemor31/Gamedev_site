$(function(){
	let header = $("#header");
	let progress = $("#progress_line");
	header.addClass("fixed");
	progress.addClass("fixed");	
});	

	$(window).on('scroll', function() {
		scrollPos = $(this).scrollTop();
		if(scrollPos > 0){
			header.addClass("fixed");	
			progress.addClass("fixed");		
		}
		else {
			header.removeClass("fixed");
			progress.removeClass("fixed");
		}
	});


window.onload = function(){ 
	debugger;
    StartTimer();
	closeMenu();

	//
	// progress line
	//
	var line = document.getElementById('progress_line');
	window.addEventListener('scroll', progressBar);
		
	function progressBar(e) {
		var windowScroll = document.body.scrollTop || 
		document.documentElement.scrollTop;
		var windowHeight = document.documentElement.scrollHeight - 
		document.documentElement.clientHeight; 
		var width_progress_line = windowScroll / windowHeight * 100;
		line.style.width = width_progress_line + '%';
	}

	//
	// Menu
	//
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
		var subMenu = document.getElementsByClassName("submenu");

		for (var i = 0; i < subMenu.length; i++) {
			subMenu[i].style.display = "none";
		}
	}	

	//scroll bttn
	var bttn = document.querySelector('.upBttn');
	window.addEventListener('scroll', upScroll);
	
	function upScroll(){
		if (window.pageYOffset > 20){
			bttn.style.opacity='0.5';
		} else{
			bttn.style.opacity='0';
		}
	}

	bttn.onmouseover = function(){
		this.style.opacity='1';
	}
	bttn.onmouseout= function(){
		this.style.opacity='0.5';
	}
	bttn.onclick = function(){
		window.scrollTo(0,0);
	}

	//
	// input validation
	//
	// let regexAlphabet = /[A-Za-z]/;
	// let regexEmail = /^[A-Za-z]+[A-Za-z0-9\._\-]*@[A-Za-z]+\.[a-z]{2,8}$/;
	// let regexNumbers = /[0-9]+/;

	// let submitBtn = document.getElementById('submit');
	// if(submitBtn != null){
	// 	submitBtn.onclick = function(e){
	// 		//e.preventDefault();

	// 		let nameArea = document.getElementById('input__name');
	// 		let emailArea = document.getElementById('input__email');
	// 		let phoneArea = document.getElementById('input__number');

	// 		let nameColorer = document.getElementById('name_colorer');
	// 		indicateInput(isValid(regexAlphabet, nameArea), nameColorer);

	// 		let emailColorer = document.getElementById('email_colorer');
	// 		indicateInput(isValid(regexEmail, emailArea), emailColorer);

	// 		let phoneColorer = document.getElementById('phone_colorer');
	// 		indicateInput(isValid(regexNumbers, phoneArea), phoneColorer);
	
	// 	}
	// }

	// function isValid(reg, input){
	// 	var booler = reg.test(input.value);
	// 	var booler2 = input.value != "";
	// 	return booler && booler2;
	// }

	// function indicateInput(isValid, element){
	// 	if(!isValid){
	// 	 element.innerHTML = "Incorrect value";
	// 	} else {			
	// 		element.innerHTML = "";
	// 	}		
	// }

	//
	// photo scaler
	//
	let memberImages = document.getElementsByClassName("member_photo");
	for (var i = 0; i < memberImages.length; i++) {
		memberImages[i].onmouseenter = scaleUpImages;
		memberImages[i].onmouseleave = scaleDownImages;
	}

	function scaleUpImages(e){
	    this.style.transform = "scale(1.2,1.2)";
	}

	function scaleDownImages(e){
	    this.style.transform = "scale(1,1)";
	}


	//
	// Timer
	//
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

