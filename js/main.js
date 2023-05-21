
$(document).ready(function(){
	$('.main-slider__item').slick({
		arrows:false,
		dots:true,
		adaptiveHeight:true,
		slidesToShow:1,
		autoplay:false,
		autoplay:true,
		slidesPerRow:true,
		appendDots:$('.points'),
		asmenuFor:".main-slider__body",
		responsive:[
			{
				breakpoint: 993,
				settings: {
					appendDots:false,
					fade:true,
					arrows:true
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow:1
				}
			}
		]
	});
	$('.main-slider__body').slick({
		arrows:false,
		slidesToShow:1,
		variableWidth:true,
		adaptiveHeight:true,
		slidesPerRow:true,
		asmenuFor:".main-slider__item",
		responsive:[
			{
				breakpoint: 992,
				settings: {

				}
			}
		]

	});

	let click = $('.header__burger').click(function (e) {
		$('.header__burger, .header__menu').toggleClass('active');
		$('body').toggleClass('lock');
	});

	$('.slider').slick({
		dots:true
		//fade:true
	});

	
});





$(window).on('load', function () {
	$('#preloader-active').delay(450).fadeOut('slow');
	$('body').delay(450).css({
			'overflow': 'visible'
	});
});


$(document).ready(function () {
$(".pwa-hamburgerMenu5").click(function () {
	$(this).toggleClass("active");
	$(".menu__item").slideToggle(400);
});

});


window.onscroll = function showHeader() {
var header = document.querySelector('.header__body');
if(window.pageYOffset > 0){
	header.classList.add('menu_fixed');
} else{
	header.classList.remove('menu_fixed');
};
};






$('#write').click(function () {
	header("Location: magezin.php");
});



	$('.hamburger').on('click', function () {
	$('.modal-wrapper').toggleClass('d-none');
});

	$('.close-btn, .thanks-btn').on('click', function () {
	$('.modal-wrapper').addClass('d-none');
});


	$('.header-btn').on('click', function () {
			$('.modal-wrapper, .modal-window').fadeIn();
});
	$('.modal-wrapper').on('click', function () {
			$(this).fadeOut();
});
	$('.modal-wrapper').children().on('click', function (e) {
			e.stopPropagation();
});


	$('[data-submit]').on('click', function (e) {
			e.preventDefault();
			$(this).parent('form').submit();
});

	$.validator.addMethod('regex',
			function (value,
									element, regexp) {
					var re = new RegExp(regexp);
					return this.optional(element) || re.test(value);
			},
			'please check ypur input,');


			function valEl(el) {
					el.validate({
							rules: {
									firstName: {
											required: true,
											regex: "[А-Яа-я]"
									},

									email: {
											required: true,
											email: true
									},

									phoneNumber: {
											required: true,
											digits: true,
											minlength : 10,
											maxlength : 11,
											regex: "[0-9]+"
									}
							},

							messages: {
									firstName: {
											required: 'ваше имя',
											regex: 'Введите правельно своё Имя'
									},
									email: {
											required: 'ваша электронная почта',
											regex: 'Не верный электронный ящик'
									},
									phoneNumber: {
											required: 'ваш номер телефона',
											regex: 'Не коректный номер телефона'
									}

							},
							submitHandler: function (form) {
									// $('#preloader-active').fadeIn();
									let $form = $(form);
									let $formId = $(form).attr('id');
									switch ($formId) {
											case 'form':
													$.ajax({
															type: 'POST',
															url: $form.attr('mail.php'),
															data: $form.serialize()
													})
															.done(function () {
																	console.log('Success');

															})
															.fail(function () {
																	console.log('Fail');

															})
															.always(function () {
																	setTimeout(function () {
																			$form.trigger('reset');
																			$('.modal-window').fadeOut();
																	}, 1000);
																	setTimeout(function () {
																			$('#preloader-active').fadeOut();
																	}, 1400);
																	setTimeout(function () {
																			$('.thanks-window').fadeIn();
																	}, 1700);
															});
													break;
									}
									return false;
							}
					})
			};
			$('.js-form').each(function () {
					valEl($(this));
			});

document.documentElement.style.setProperty('--animate-duration', '4s');

let isMobile = {
	Android: function() {return navigator.userAgent.match(/Android/i);},
	BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
	iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
	Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
	Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
	any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}
};
		let body=document.querySelector('body');
if(isMobile.any()){
		body.classList.add('touch');
		let arrow=document.querySelectorAll('.arrow');
	for(i=0; i<arrow.length; i++){
			let thisLink=arrow[i].previousElementSibling;
			let subMenu=arrow[i].nextElementSibling;
			let thisArrow=arrow[i];

			thisLink.classList.add('parent');
		arrow[i].addEventListener('click', function(){
			subMenu.classList.toggle('open');
			thisArrow.classList.toggle('active');
		});
	}
}else{
	body.classList.add('mouse');
}

AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 100, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-top', // defines which position of the element regarding to window should trigger the animation

});


const tabs = document.getElementById('tabs');
const content = document.querySelectorAll('.projects-list');

function changeClass(el){
    for(var i = 0; i < tabs.children.length; i++){
        tabs.children[i].classList.remove('active');
    }
    el.classList.add('active');
}

tabs.addEventListener('click', function (e) {
	var currTab = e.target.dataset.btn;
	changeClass(e.target);
	for (var i = 0; i < content.length; i++) {
		content[i].classList.remove('active');
		if (content[i].dataset.content === currTab) {
			content[i].classList.add('active');
		}
	}
})


