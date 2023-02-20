var windowW = $(window).width();
var windowH = $(window).height();
var corail = "#EA6358";

$(document).ready(function(){
	$(window).load(function(){
		$('main').fadeIn(600);
		$('footer').fadeIn(600);
		// position et clonage des titre de pages aléatoires
		randomTitlePos();
	});

	init();

});

function init(){
	// -------------- OPEN MENU MOBILE --------------- //
	var menuBtn = document.querySelector('.mobile-menu_btn');
	var nav = $('.nav');
	var barBurger1 = $('span:nth-child(1)');
	var barBurger2 = $('span:nth-child(2)');
	var barBurger3 = $('span:nth-child(3)');

	$('.mobile-menu_btn').on("click", function(e){
	  if(nav.hasClass('active')){
	    nav.removeClass("active");
	    barBurger1.removeClass("rotate-top");
	    barBurger2.removeClass("transparent");
	    barBurger3.removeClass("rotate-bottom");
	  }
	  else{
	  	nav.addClass("active");
	    barBurger1.addClass("rotate-top");
	    barBurger2.addClass("transparent");
	    barBurger3.addClass("rotate-bottom");
	  }

	});

	// DRAGGABLE ELEMENTS
	if ("ontouchstart" in document.documentElement && windowW < 768){
		console.log('touchy');
	}
	else{
		console.log('not touchy');
		$(".draggable").draggable({ containment: "body", scroll: false });
	}

	// JS FOR HOME
	if($('body').attr('data-template') == 'home'){
		// Toogle actu - close / open
		$(".button-actu").on("click",function(){
			$thisActu = $(this).parents('li');
			if($thisActu.hasClass('not-active')){
				$thisActu.removeClass('not-active');
				$(this).html('x');
			}
			else{
				$thisActu.addClass('not-active');
				$(this).html('↓');
			}
		});
	}

	// JS FOR JOURNAL
	// OPEN AND CLOSE ACTU
	if($('body').attr('data-template') == 'journal'){
		$('.arrow .close').on('click', function(){
			$(this).parents('.actus.active').removeClass('active');
		});

		$('.arrow .open').on('click', function(){
			$(this).parents('.actus').addClass('active');
		});

	}

	// JS FOR PAGE
	// Images random position
	// var positions = ['posOne', 'posTwo', 'posThree', 'posFour', 'posFive'];
	// $('.image-illu-page').each(function(){
	// 	var randomImagePos = getRandomInt(0, positions.length-1);
	// 	console.log(randomImagePos); 
	// 	var pos = positions[randomImagePos];
	// 	 $(this).addClass(pos);
	// 	 removeItemOnce(positions, pos);
	// 	// switch (randomImagePos) {
	// 	//   case 1:
	// 	//     $(this).addClass('posOne');
	// 	//     break;
	// 	//   case 2:
	// 	// 		$(this).addClass('posTwo');
	// 	//     break;
	// 	//   case 3:
	// 	// 		$(this).addClass('posThree');
	// 	//     break;
	// 	//   case 4:
	// 	// 		$(this).addClass('posFour');
	// 	//     break;
	// 	//   default:
	// 	//   	$(this).addClass('posFive');

	// 	}
	// });
	

}

// ---- PAGE ----
	function randomTitlePos(){
		var $this = $(".content h1");
		var thisHeight = $this.height();
		var thisWidth = $this.width();
		var topBarH = $("header").height();

		// définir la position en Y, position aléatoire entre le haut de la colonne texte et les 3/4 de la page 
		var randomY = getRandomInt(0, windowH - topBarH - thisHeight - (windowH/4));
		// Défnir une position en x du titre, soit 83.333% de la page
		var xPos = (windowW * 83.333) / 100;

		// positionne le titre
		$this.css({
			"top":randomY + "px",
			"left":"83.333%",
		});

		// si l'image dépasse à droite, clone l'image et la met à gauche
		if(xPos > (windowW - thisWidth)){
			console.log(xPos-  (windowW - thisWidth) );
			// Nombre de pixels qui dépassent sur la droite
			var depassementVal = xPos -  (windowW - thisWidth);
			// nouvelle position de x à gauche 
			var newXPos = -(thisWidth - depassementVal);

			$this.clone()
				.css({
					"top":randomY + thisHeight + "px",
					"left": newXPos + "px",
				})
				.addClass('h1-clone').appendTo(".content");
		}


	}


/**
 * Returns a random integer between min (inclusive) and max (inclusive).
 * The value is no lower than min (or the next integer greater than min
 * if min isn't an integer) and no greater than max (or the next integer
 * lower than max if max isn't an integer).
 * Using Math.round() will give you a non-uniform distribution!
 */
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

// remove element from array
function removeItemOnce(arr, value) {
  var index = arr.indexOf(value);
  if (index > -1) {
    arr.splice(index, 1);
  }
  return arr;
}





