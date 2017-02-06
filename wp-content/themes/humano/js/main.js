$(document).ready(function() {

	// $( window ).on('mousewheel', function (event, delta, v3, v4) 
	// {
	// 	var body = $( 'body' );

	// 	if (event.originalEvent.wheelDelta < 0)
	// 	{
	// 		body.stop().animate(
	//     	{
	//     		scrollTop: body.scrollTop() + 200
	//     	}, 200, 'easeOutQuint');
	// 	}
	// 	else
	// 	{
	// 		body.stop().animate(
	//     	{
	//     		scrollTop: body.scrollTop() - 200
	//     	}, 200, 'easeOutQuint');
	// 	}
	// 	return false;
	// });

	if( isWindows() && isChrome() )
	{

		$('.wrap-site').css({left: '0', right: '0', position: 'fixed'})
		if( $('#pagina-home').length > 0 )
		{
			$('.wrap-site').css('bottom', '0');
		}
		$(window).on('scroll', function () {
			$('.wrap-site').stop().animate(
			{
				top:  '-' + $(window).scrollTop() + 'px'
			}, 500, 'easeOutQuint');
		})
		var intTamanhoBody = setInterval(function()
		{
			tamanhoBody();
		}, 100);
		setTimeout(function()
		{
			clearInterval(intTamanhoBody);
			var intTamanhoBody = setInterval(function()
			{
				tamanhoBody();
			}, 2000);

		}, 2000);

	}


	$( window ).scroll(function() 
	{
		setTimeout(showInAnimation,400);
		flutuaMenu();
		lockElements();
	});
	$( window ).trigger('scroll');


	$( window ).resize(function(e) 
	{
		toggleMenu('fecha');

		if($('#pagina-home').length > 0)
		{
			swapBgCasesHome();
		}
		if($('#pagina-projetos').length > 0)
		{
			if ( $(window).width() >= 768 )
			{
				$('#pagina-projetos ul li').height($('#pagina-projetos ul li').outerWidth() * 0.91);
			}
			else
			{
				if ( $(window).width() > 480 ) 
				{
					$('#pagina-projetos ul li').height( Math.round( $('#pagina-projetos ul li').outerWidth() * 0.51) );
				}
				else
				{
					$('#pagina-projetos ul li').height( Math.round( $('#pagina-projetos ul li').outerWidth() * 0.7) );
				}
			};
		}

		tamanhoBody();
	});
	$( window ).trigger('resize');


	aplicaFundoMenuHome();
	aplicaVersaoMenuFooter();


	//-----------------SPLASH SCREEN-----------------//

/*
	USAR ISSO PARA CROSSBROWSER -------------------

	if (this.addEventListener) {
		// IE9, Chrome, Safari, Opera
		this.addEventListener("mousewheel", MouseWheelHandler, false);
		// Firefox
		this.addEventListener("DOMMouseScroll", MouseWheelHandler, false);
	}
	// IE 6/7/8
	else this.attachEvent("onmousewheel", MouseWheelHandler);

	USAR ISSO PARA CROSSBROWSER -------------------
*/


		$('#projetos ul').parallax();
		$('.parallax').parallax();


	//IE, Chrome
	// if( window.location.href.indexOf('localhost') < 0 && $('body').scrollTop() <= 0 && $('html').scrollTop() <= 0 && $('#pagina-home').length > 0)
	if( $('body').scrollTop() <= 0 && $('html').scrollTop() <= 0 && $('#pagina-home').length > 0)
	{		
		//FireFox
		document.getElementById("pagina-home").addEventListener("touchstart", touchStart, false);
		document.getElementById("pagina-home").addEventListener("touchmove", touchMove, false);

		//IE10
		document.getElementById("pagina-home").addEventListener("pointerdown", touchStart, false);
		document.getElementById("pagina-home").addEventListener("pointermove", touchMove, false);

		$('#intro').parallax();

		$('#intro').css('display', 'block');
		$(document).on('mousewheel', function(e)
		{
			if(e.originalEvent.wheelDelta < 0)
			{
				fadeIntro();
				initIntervalCasesHome();
			}
			return false;
		})

		//FireFox
		$(document).on('DOMMouseScroll', function(e)
		{
			if(e.originalEvent.detail > 0)
			{
				fadeIntro();
				initIntervalCasesHome();
			}
			return false;
		})

		$("#intro #roll").click(fadeIntro);
	}
	else
	{
		if ( $('#pagina-home #projetos ul li').length > 1 ) 
		{
			initIntervalCasesHome();
		};
	}


	//-----------------SPLASH SCREEN-----------------//


	//-----------------CAROUSEL HOME-----------------//

	$('#pagina-home #projetos ul').css( 'background', '#' + $('#pagina-home #projetos ul li:first-child').attr('data-b') );
	$('#pagina-home #projetos ul li:first-child').addClass('highlight')
		.css('z-index', '1');

	$('#pagina-home #projetos button#seta-esq').on('click', function()
	{
		passaCaseHome('tras');
		clearInterval(intervalCase);
		initIntervalCasesHome();
	})
	$('#pagina-home #projetos button#seta-dir').on('click', function()
	{
		passaCaseHome('frente');
		clearInterval(intervalCase);
		initIntervalCasesHome();
	})


	//-----------------CAROUSEL HOME-----------------//


	//-----------------MASONRY-----------------//

	$('header #menu #icon-menu').on('click', function() {
		if ( $(this).closest('.aberto').length > 0 ) 
		{
			toggleMenu('fecha');
		}
		else
		{
			toggleMenu('abre');
		}
	});

	//-----------------CAROUSEL HOME-----------------//


	//-----------------CONTATO-----------------//

	$('.auto-resize').on('keydown', function ()
	{
		$(this).css('height', $(this)[0].scrollHeight + 'px');
		$(this).closest('.form-group').height($(this).height() + 10)
		tamanhoBody();
	})

	$('.auto-resize').on('keyup', function ()
	{
		$(this).trigger('keydown')
	})

	//-----------------CONTATO-----------------//


	//-----------------MASONRY-----------------//
/*
	var grid = $('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-item'
	});

	function callMasonry ()
	{
		grid.masonry();
	}
	
	setInterval( callMasonry, 2000 );
*/
	//-----------------MASONRY-----------------//




	$( 'body' ).on( 'click', 'button.dead', function(){ return false; } );
	
	if( $( '#map-canvas' ).length > 0 )
	{
		initializeMap();
	}


	$('.segredo').remove();



	$( '.telefone' ).mask('(00) 0000 0000', {placeholder: "(__) ____ ____"});
	$( '.data' ).mask('00/00/0000', {placeholder: "__/__/____"});

	$('form').submit(function(){return false});

	$('form input[type="submit"], form button[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form')
				.find('input[name="bjtv"]')
				.val( $(this).attr('id') );

			$(this).closest('form').validate({
				submitHandler: function(form)
				{
					$(form).find('#success').hide();
					$(form).find('#error').hide();
					$(form).addClass('alerta');

					$(form).find('#process').show();

					// $(form).find('input, textarea, button[type="submit"]').attr({
					// 	'disabled': true
					// });

					$(form).ajaxSubmit({
						type: 'post',
						success: contatoOk
					});

				}, 
				rules: {
					nm: {
						required: true
					},
					ml: {
						email: true,
						required: true
					},
					mnsgm: {
						required: true
					}
				},
				messages: {
					nm: {
						required: 'Campo obrigatório'
					},
					ml: {
						email: 'E-mail inválido',
						required: 'Campo obrigatório'
					},
					mnsgm: {
						required: 'Deixe sua mensagem'
					}
				},
				highlight: function(element, errorClass, validClass) {
					$(element).addClass(errorClass).removeClass(validClass);
					$(element.form).find("label[for=" + element.name + "]")
					.addClass(errorClass);
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element.form).find("label[for=" + element.name + "]")
					.removeClass(errorClass);
					$(element).removeClass(errorClass).addClass(validClass);
				}

			});
		}
	)

	$('form .alerta #success button, form .alerta #error button').on('click', function (e) {
		e.preventDefault();
		$(this).closest('form').removeClass('alerta');
		// $(this).closest('form').find('input, textarea, button[type="submit"]').attr({
		// 	'disabled': false
		// })
	})

	$('.alert button').bind('click', function()
	{
		$(this).closest('.alert').hide();
	})

	//---------------------BROWSERUPGRADE---------------------//

	$('.browserupgrade .alert button').bind('click', function()
	{
		$(this).closest('.browserupgrade').hide();
	})

	//---------------------BROWSERUPGRADE---------------------//

});

function contatoOk (data, status, xhr)
{
	// console.log($(this));
	// console.log(data);
	// console.log(status);
	// console.log(xhr);


	$('form #process').fadeOut(200);

	if( data == 'sucesso')
	{
		$('form #success').fadeIn(200);
		$('form')[0].reset();
	}
	else
	{
		$('form #error').fadeIn(200);;
	}

}

function URLize (s) 
{
    var r=s.toLowerCase();
    r = r.replace(new RegExp(/\s/g),"");
    r = r.replace(new RegExp(/[àáâãäå]/g),"a");
    r = r.replace(new RegExp(/æ/g),"ae");
    r = r.replace(new RegExp(/ç/g),"c");
    r = r.replace(new RegExp(/[èéêë]/g),"e");
    r = r.replace(new RegExp(/[ìíîï]/g),"i");
    r = r.replace(new RegExp(/ñ/g),"n");                
    r = r.replace(new RegExp(/[òóôõö]/g),"o");
    r = r.replace(new RegExp(/œ/g),"oe");
    r = r.replace(new RegExp(/[ùúûü]/g),"u");
    r = r.replace(new RegExp(/[ýÿ]/g),"y");
    r = r.replace(new RegExp(/\W/g),"");
    return r;
};

function pluralize (s, p, n)
{
	if( n != 1)
	{
		return p;
	}
	else
	{
		return s;
	}
}

function initializeMap()
{

	var myLatLgn = new google.maps.LatLng( -16.675207,-49.260501 );

	var mapCanvas = document.getElementById( 'map-canvas' );
	var mapOptions = {
		center: myLatLgn,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		backgroundColor: '7030a0',
		scrollwheel: false
	}
	var map = new google.maps.Map( mapCanvas, mapOptions );

	var marker = new google.maps.Marker({
	    position: myLatLgn,
	    map: map,
	    title:"Hello World!"
	});

}

function showInAnimation () 
{

	$('.hided').each(function()
	{
		if( $( window ).scrollTop() + ( $( window ).height() * 0.8 ) > $(this).offset().top - 300 )
		{
			$(this).addClass('appeared').removeClass('hided');
		}
	})
}

function fadeIntro (e)
{
	// $("html, body").scrollTop(0);
	$('html, body').css('overflow', 'visible');
	$("#intro").fadeOut("800", function ()
	{
		$('#intro').parallax('disable');
	});

		$(document).off('mousewheel');
		$(document).off('DOMMouseScroll');

	return false;
}

var start = {x:0,y:0};

function touchStart(e) 
{

	if(e.touches)
	{
		start.x = e.touches[0].pageX;
		start.y = e.touches[0].pageY;
	}
	else
	{
		start.x = e.clientX;
		start.y = e.clientY;
	}

}

function touchMove(e)
{

	e = e || window.event;

	var target = e.target || e.srcElement;

	offset = {};

	if(e.touches)
	{
		offset.x = start.x - e.touches[0].pageX;
		offset.y = start.y - e.touches[0].pageY;
	}
	else
	{
		offset.x = start.x - e.clientX;
		offset.y = start.y - e.clientY;
	}

	if ($('#intro').length > 0 && $('#intro').css('display') == 'block')
	{
		if(offset.y > 0)
		{
			fadeIntro();
		}

		e.returnValue = false;
		e.cancelBubble = true;

		if (e.preventDefault)
		{
			e.preventDefault();
			e.stopPropagation();
		}

		return false;
	}
	else
	{
		return e;
	}

}


var iCaseHome = 0,
	qtdCasesHome = $('#pagina-home #projetos ul li').length,
	timeCasesHome = 5000,
	espacoContadorCasesHome = $('#pagina-home #projetos #contador').height(),
	intervalCase;

function initIntervalCasesHome ()
{
	intervalCase = setInterval(function()
	{
		passaCaseHome('frente');
	}, timeCasesHome);
}

function passaCaseHome (direcao)
{
	$('#pagina-home #projetos ul li.highlight').removeClass('highlight');

	if(direcao == 'frente')
	{
		if(iCaseHome < qtdCasesHome - 1)
		{
			iCaseHome++;
		}
		else
		{
			iCaseHome = 0;
		}
	}
	else
	{
		if(iCaseHome > 0)
		{
			iCaseHome--;
		}
		else
		{
			iCaseHome = qtdCasesHome - 1;
		}
	}

	//CONTADOR

	$('#pagina-home #projetos #contador #marca')
	.css({
		'left': ( (iCaseHome * espacoContadorCasesHome) + 5 ) + 'px',
		'right': ( (qtdCasesHome * espacoContadorCasesHome) - 5 - ( iCaseHome * espacoContadorCasesHome ) - 6 ) + 'px'
	})

	//BG MENU ABERTO

	aplicaFundoMenuHome();

	//BG HOME

	$('#pagina-home #projetos ul').css( 'background', '#' + $('#pagina-home #projetos ul li:nth-child(' + ( iCaseHome + 1) + ')').attr('data-b') );

	setTimeout(function ()
	{

		$('#pagina-home #projetos ul li').css('z-index', '-1');
		$('#pagina-home #projetos ul li:nth-child(' + ( iCaseHome + 1) + ')')
			.addClass('highlight')
			.css('z-index', '1');

		
	}, 300)

}

function swapBgCasesHome () 
{
	if ( $(window).width() >= 1260 ) 
	{
		$('#pagina-home #projetos ul li').each(function(i, el)
		{
			$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '.jpg)');
		});
	}
	else if ( $(window).width() >= 992 && $(window).width() < 1260 )
	{
		$('#pagina-home #projetos ul li').each(function(i, el)
		{
			$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-992.jpg)');
			$(el).css('background-size', 'cover');
		});
	}
	else if ( $(window).width() >= 530 && $(window).width() < 991 ) 
	{

		if ( getOrientation() == "v" )
		{
			$('#pagina-home #projetos ul li').each(function(i, el)
			{
				$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-530.jpg)');
				$(el).css('background-size', 'cover');
			});
		}
		else
		{

			if ( $(window).height() >= 370 )
			{

				$('#pagina-home #projetos ul li').each(function(i, el)
				{
					$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-530-h.jpg)');
					$(el).css('background-size', 'cover');
				});

			} 
			else
			{
				$('#pagina-home #projetos ul li').each(function(i, el)
				{
					$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-480-h.jpg)');
					$(el).css('background-size', 'cover');
				});
			}

		}

	}
	else if ( $(window).width() < 530 )
	{
		if ( getOrientation() == "v" )
		{
			$('#pagina-home #projetos ul li').each(function(i, el)
			{
				$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-320.jpg)');
				$(el).css('background-size', 'cover');
			});
		}
		else
		{
			$('#pagina-home #projetos ul li').each(function(i, el)
			{
				$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-480-h.jpg)');
				$(el).css('background-size', 'cover');
			});
		}
	};
}

function getOrientation ()
{
	if ( $(window).width() / $(window).height() > 1 ) 
	{
		return "h";
	}
	else
	{
		return "v"
	}
}

function aplicaFundoMenuHome ()
{

	if ( $('#pagina-home').length > 0 && $(window).width() <= 767 ) 
	{
		$('header #menu.aberto ul').css( 'background-color', '#' + $('#pagina-home #projetos ul li:nth-child(' + ( iCaseHome + 1) + ')').attr('data-b') );
	};

}

function toggleMenu (acao)
{
	if ( acao == "fecha" && $('header #menu #icon-menu').css('display') == 'block') 
	{
		$('header #menu.aberto').removeClass('aberto').addClass('fechado');
		setTimeout( function ()
		{

			$('header #menu ul').css('display', 'none');

		}, 300 )
	}
	else
	{
		$('header #menu ul').css('display', 'block');
		setTimeout( function ()
		{

			$('header #menu.fechado').removeClass('fechado').addClass('aberto');
			aplicaFundoMenuHome();

		}, 50 )
	}
}

function aplicaVersaoMenuFooter () 
{
	if ( $('#pagina-home').length <= 0 ) 
	{
		$('header #menu').addClass('inner');
		$('footer').addClass('inner');
	}
	if ( $('#pagina-clientes').length > 0 ) 
	{
		$('footer').addClass('t-2')
	};
	if ( $('#pagina-contato').length > 0 ) 
	{
		$('footer').addClass('contato')
	};
}

function flutuaMenu ()
{
	if($(window).scrollTop() > 30)
	{
		$('header #menu').addClass('flutua')
	}
	else
	{
		$('header #menu').removeClass('flutua')
	}
}

function lockElements ()
{
	//rodape contato wrap-head:after
	var diferenca;

	if( $('.rodape-contato').length > 0 )
	{

		if ($(window).width() > 991)
		{
			diferenca = 160;
		}
		else
		{
			diferenca = 380;
		};

		if( $(document).scrollTop() > $('.rodape-contato #wrap-head').offset().top + $('.rodape-contato #wrap-head').outerHeight() - diferenca )
		{
			$('.rodape-contato form #wrap-head').addClass('locked');
		}
		else
		{
			$('.rodape-contato form #wrap-head').removeClass('locked');
		}
	}
}

function tamanhoBody () 
{

	if( isWindows() && isChrome() )
	{
		$('body').height($('.wrap-site').height());
	}
}

function isWindows () 
{
	return (navigator.platform.indexOf('Win') >= 0)
}

function isChrome () 
{
	return (window.chrome)
}