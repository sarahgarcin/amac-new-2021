var windowW = $(window).width();
var windowH = $(window).height();
var corail = "#EA6358";

$(document).ready(function(){
	$(window).load(function(){
		$('.content').fadeIn(600);
		$('footer').fadeIn(600);
	});

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

	init();

});

function init(){
	$(window).on('load', function(){
		randomTitlePos();
	});

	if($('body').attr('data-template') == 'home'){
		toogleInfo();
		if ("ontouchstart" in document.documentElement){
			console.log('touchy');
		}
		else{
			console.log('not touchy');
			$(".actu-grid > ul > li").each(function(){
				$(this).draggable({ containment: "body", scroll: false });
			});
		}
	}

	if($('body').attr('data-template') == 'journal'){
		//console.log('journal');

		// add class to the active element
		var hashID = window.location.hash.substring(1);

		if(hashID === ""){
			$(".actu-grid li").first().addClass('active');
		}
		else{
			$("#"+hashID).addClass('active');
		}

		//toogleActu();
		$('.arrow .close').on('click', function(){
			closeActu($(this).parents('.actus.active'));
		});

		$('.arrow .open').on('click', function(){
			openActu($(this).parents('.actus'));
		});


		// var elementsJournal = {
		// 		element1: $("header .left"), 
		// 		element2: $("header .right"),
		// 		element3: $(".actu-grid")
		// };
		// $(window).on('load',function(){

		// 	$(".actu-images li").amac(elementsJournal, 0);
		// });

		if ("ontouchstart" in document.documentElement){
		}
		else{
			$(".actu-images li").each(function(){
				$(this).draggable();
			});
		}

	}	

	if($('body').attr('data-template') == 'projets'){
		console.log('projets');

		// if(	$(".images-grid li").length > 4){
		// 	windowH = $(window).height() * 2;
		// }

		// if(	$(".images-grid li").length > 10){
		// 	windowH = $(window).height() * 3;
		// }

		// if(	$(".images-grid li").length > 20){
		// 	windowH = $(window).height() * 4;
		// }

		// if(	$(".images-grid li").length > 30){
		// 	windowH = $(window).height() * 5;
		// }

		// if(	$(".images-grid li").length > 50){
		// 	windowH = $(window).height() * 6;
		// }

		// else{
		// 	windowH = $(window).height();
		// }

		var elementsProj = {
				element1: $("header .description a"), 
				element2: $("header nav"),
				element3: $("footer")
		};

		$(window).on('load',function(){
			// $(".images-grid li").amac(elementsProj, 100);
			if(windowW > 1024){
				$(".images-grid li").each(function(){
					$(this).mouseenter(function(){
						$(this).find('.actu-texte').css("opacity", 1);
					});
					$(this).mouseleave(function(){
						$(this).find('.actu-texte').css("opacity", 0);
					});
				});
			}
		});

		$(window).resize(function(){
			if($(window).width() > 1024){
				$(".images-grid li").each(function(){
					$(this).find('.actu-texte').css("opacity", 0);
					$(this).mouseenter(function(){
						$(this).find('.actu-texte').css("opacity", 1);
					});
					$(this).mouseleave(function(){
						$(this).find('.actu-texte').css("opacity", 0);
					});
				});
			}
			else{
				$(".images-grid li").each(function(){
					$(this).find('.actu-texte').css("opacity", 1);
					$(this).unbind("mouseenter");
					$(this).unbind("mouseleave");
				});
			}
		});

		// toogleInfo();
		if ("ontouchstart" in document.documentElement){
			console.log('touchy');
		}
		else{
			$(".images-grid li").draggable();
		}

	}		

	//hide / show grid
	$("body").keypress(function(e){
		console.log(e.keyCode);
		if(e.keyCode == 118){
			if($(".dev-grid").hasClass('active')){
				$(".dev-grid").hide().removeClass('active');
			}
			else{
				$(".dev-grid").show().addClass('active');
			}
		}
	});
}

// function initMob(){
// 	// if($('body').attr('data-template') == 'journal'){
// 	// 	console.log('journal');
// 	// 	toogleActu();
// 	// }

// }


// ---- PAGE ----
	function randomTitlePos(){
		var $this = $(".content h1");
		var thisHeight = $this.height();
		var thisWidth = $this.width();
		var topBarH = $("header").height();
		console.log(topBarH);

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
//

// COMMON

	function toogleInfo(){
		$(".button-actu").on("click",function(){
			if($(this).hasClass('opened')){
				$(this).parents('li')
					.find('.actu-texte p').hide()
					.end()
					.find('.actu-texte .actu-infos').hide()
					.end()
					.find('.actu-image').hide()
					.end()
					.find('.actu-texte')
					.css('background-color','#EA6358')
					.find('h2').css('color','#FFF')
					;
				$(this).html('↓').css('color','#FFF').removeClass('opened');
			}
			else{
				$(this).html('x').css('color',corail).addClass('opened');
				$(this).parents('li')
					.find('.actu-texte p').show()
					.end()
					.find('.actu-texte .actu-infos').show()
					.end()
					.find('.actu-image').show()
					.end()
					.find('.actu-texte')
					.css('background-color','#FFF')
					.find('h2').css('color','#EA6358')
					;

			}

			// $(this).hide();
			// $(".open-actu").show().css('color','#FFF');

		});

		// $(".open-actu").on("click",function(){
		// 	//console.log("open-actu");
		// 	$(this).parents('li')
		// 		.find('.actu-texte p').show()
		// 		.end()
		// 		.find('.actu-texte .actu-infos').show()
		// 		.end()
		// 		.find('.actu-image').show()
		// 		.end()
		// 		.find('.actu-texte')
		// 		.css('background-color','#FFF')
		// 		.find('h2').css('color','#EA6358')
		// 		;

		// 	$(this).hide();
		// 	$(".close-actu").show();

		// });
	}


// Detect touch devices
function isTouchDevice() {
  return (('ontouchstart' in window) ||
     (navigator.maxTouchPoints > 0) ||
     (navigator.msMaxTouchPoints > 0));
}


// ------ JOURNAL ------
	function toogleActu(){
		$(".arrow .close").on('click', function(){
			$(this).parents('li')
				.find('.actu-text').hide()
				.end()
				.find('.actu-resume').show()
				.end()
				.removeClass('active')
				.css({
					"position":"relative",
				});
			$(this).hide();
			$(this).parents('.arrow')
				//.css("margin-top", "80px")
				.find('.open').show();
			$(this).parents('li').find('.actu-images').hide();
		});



		$(".arrow .open").on('click', function(){
			// remise à 0
			$(".actu-grid li.active").find('.close').hide();
			$(".actu-grid li.active").find('.open').show();
			// $(".actu-grid li.active").find('.arrow')
			// 	.css("margin-top", "80px");
			$(".actu-grid li.active").find('.actu-images').hide();
			$(".actu-grid li.active")
				.find('.actu-text').hide()
				.end()
				.find('.actu-resume').show()
				.end()
				.css({
					"position":"relative",
				})
				.removeClass('active');

			// Ouverture de l'actu
			$(this).parents('li')
				.find('.actu-text').show()
				.end()
				.find('.actu-resume').hide()
				.end()
				.addClass('active');
			$(this).hide();
			$(this).parents('.arrow')
				//.css("margin-top", "0px")
				.find('.close').show();
			$(this).parents('li').find('.actu-images').show();
		});
	}

	function closeActu(actu){
		actu.removeClass('active');
	}

	function openActu(actu){
		actu.addClass('active');
	}

// plugins
	// Fonction de position aléatoire des images sans qu'elles supperposent certains éléments
	(function( $ ) {

	  $.fn.amac = function(elements, out) {
	  	//console.log(windowH);
	  	//console.log(elements, out);
	  	var positions = [];
	  	var elementsData = [];

	  	for (var element in elements) {
			  if (elements.hasOwnProperty(element)) {
			    //console.log(elements[element]);
			    var w = elements[element].outerWidth(true);
			    var h = elements[element].outerHeight(true);
			    var x = elements[element].offset().left;
			    var y = elements[element].offset().top;
			    var data = {w:w,h:h,x:x,y:y};
			    //console.log('left of element: '+ element+"-"+ x);
			    elementsData.push(data);
			  }
			}
			//console.log(windowW, windowH);

    	this.filter( "li" ).each(function() {
      	var coords = {
            w: $(this).outerWidth(true),
            h: $(this).outerHeight(true)
        };
        var success = false;
        while (!success){

        	//var random = Math.floor(Math.random() * (max - min + 1)) + min;
        	var Xmax = (windowW - (coords.w - out));
        	var Xmin = -out;
        	var Ymax = (windowH-(coords.h - out));
        	var Ymin = -out;
          coords.x = Math.floor(Math.random() * (Xmax - Xmin + 1)) + Xmin;
          coords.y = Math.floor(Math.random() * (Ymax - Ymin + 1)) + Xmin;
          //console.log(Xmax, Xmin, Ymax, Ymin, coords.x, coords.y);
          success = true;
          for(var i=0; i<elementsData.length; i++){
          	if (
		              coords.x <= (elementsData[i].x + elementsData[i].w) &&
		              (coords.x + coords.w) >= elementsData[i].x &&
               		(coords.y + coords.h) >= elementsData[i].y &&
               		coords.y <= (elementsData[i].y + elementsData[i].h)
              )
              {
              		//console.log('NON');
                  success = false;
              }
          }
          //$.each(positions, function(){
		        if (
		          coords.x <= ((this.x /2 + this.w /2)+(this.w*(50/100))) &&
		          (coords.x + coords.w) >= (this.x+(this.w*(50/100))) &&
		          coords.y <= ((this.y + this.h)+(this.w*(50/100))) &&
		          (coords.y + coords.h) >= (this.y+(this.w*(50/100)))
		        )
		        {
		        	console.log("OVERLAPP");
		          success = false;
		        }
		      //});
        }
        
        positions.push(coords);
        console.log('coords', coords);
	        
        $(this).css({
            top: coords.y + 'px',
            left: coords.x + 'px',
            "margin-left": '15px'
        });
      });

      return this;

	  };
	 
	}( jQuery ));

//Function qui check si la li est en dehors du cadre, 
//si oui, elle se clone de l'autre côté de la page
(function( $ ) {

	$.fn.isOutside = function($parent) {

		this.filter( "li" ).each(function() {
			var height = $(this).height();
			var width = $(this).width();
			var xPos = $(this).offset().left;
			var yPos = $(this).offset().top;
			var newYPos, newXPos;

			if(yPos > (windowH - height)){
				console.log("random Y plus grand que la fenêtre", yPos);
				newYPos = - (windowH - height);
				newXPos = xPos;
				cloneImage(newYPos, newXPos,  $(this), $parent);
			}
			// Si l'image dépasse en haut
			if(yPos < 0){
				console.log("random Y plus petit que la fenêtre", yPos);
				newYPos = windowH + yPos;
				newXPos = xPos;
				cloneImage(newYPos,newXPos, $(this), $parent);
			}
			// Si l'image dépasse à droite
			if(xPos > (windowW - width)){
				console.log("random x plus grand que la fenêtre", xPos);
				newXPos = - (windowW - width);
				newYPos = yPos;
				cloneImage(newYPos, newXPos, $(this), $parent);
			}
			if(xPos < 0){
				console.log("random X plus plus que la fenêtre", xPos);
				newXPos = windowW + xPos;
				newYPos = yPos;
				cloneImage(newYPos,newXPos, $(this), $parent);
			}
		});

	  	
		return this;

	};

}( jQuery ));


function cloneImage(newYPos,newXPos, $this, $parent){
	var $ul = $parent.find("ul");
	$this.clone()
		.css({
			"top":newYPos + "px",
			"left":newXPos + "px",
			"margin-left":"15px"
		})
		.appendTo($ul);
		console.log($parent, $ul);
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






