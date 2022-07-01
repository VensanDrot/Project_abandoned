
$('.submenu').hide()
$('.butt-show-menu').click(function(){
var $submenu= $(this).prev('.submenu');

if ($submenu.is(':hidden')) {
$submenu.slideDown();
$('.butt-show-menu').addClass('fa-minus');
	}else{
	$submenu.slideUp();
	$('.butt-show-menu').removeClass('fa-minus');
	}
});

$('.nav-menu li').hover(
		function liblue(){
		$(this).css({
			'border-bottom':'4px solid #0099ff',
			'padding-bottom':'17px'
		});
		},
		function ligrey(){
			$(this).css({
			'border-bottom':'4px solid #f1f1f1',
			'padding-bottom':'17px'});
		
		}

	);
/*----- slider------*/

$('.btn-slider').hide();

function	showBtn(){
	$('.btn-slider').fadeIn(100);
}
function hideBtn(){
	$('.btn-slider').fadeOut(100);
}
$('.baner-slider').hover(showBtn,hideBtn);




$('.next').hover( 
	function enterBtn(){
	$('.next').css({
		'opacity':'1',
		'box-shadow':'none'
	});
},
function leaveBtn(){
	$('.next').css({
		'opacity':'0.3',
		'box-shadow':'0px 4px 3px 1px rgb(16, 16, 16)'
	});
}
);

$('.prev').hover( 
	function enterBtn(){
	$('.prev').css({
		'opacity':'0.6',
		'box-shadow':'none'
	});
},
function leaveBtn(){
	$('.prev').css({
		'opacity':'0.3',
		'box-shadow':'0px 4px 3px 1px rgb(16, 16, 16)'
	});
}
);
/*
img= document.querySelectorAll(".slider li");
oneimg=$("img").width();
width=oneimg * img.length;

$('.slider').width(width);


for (j=0; j < img.length; j++) {

if (j==0) {
	$(".dot-slider").append("<li style='display:inline;'><div class='dot active'></div></li>");
	}else {

$(".baner-slider .dot-slider").append("<li style='display:inline;'><div class='dot'></div></li>");

}

}
dot= document.querySelectorAll(".dot-slider li ")
onedot=$(".dot").width();
dot_width=onedot * dot.length;


console.log($('.dot-slider').width(dot_width+70+'px'));

var dots = $("li").children(".dot");
//offset = 0; // Обнуляем смещение, так как показывается начала 1 слайд
i = 0; // Обнуляем номер текущего слайда
 

$('.next').click(function(){
	last = document.querySelector('.slider').style.right;
var last_dot = $('.dot-slider li:last');
var first_dot = $('.dot-slider li:first');
	$(".active").removeClass("active");   
	$(dots[++i]).addClass("active");

	if (last_dot.hasClass('active')) {
	console.log(first_dot )	;

	}
//	last_dot=document.querySelector('.dot-slider').style.right;
//	
	if(last == 0+'px'){
						$('.slider').animate({
						right: -1*width+oneimg+'px'
						},300,function(){});

					$(".dot:first").addClass("active"); 
				
					$(".active").removeClass("active");   
					$(this).next('.dot').addClass("active");
				
					
							

//	$(dots[++i]).addClass("active");

	}else{
		$('.slider').animate({
		right:'+='+oneimg},300,function(){})
		}});


$('.prev').click(function(){
	first = document.querySelector('.slider').style.right;
//	console.log(first);
	$(".active").removeClass("active");   
	$(dots[--i]).addClass("active");
	if (!first) {
$('.slider').animate({
						right:0+'px'
						},300,function(){});


	}else
	if(first == -1*(width-oneimg)+'px'){
						$('.slider').animate({
						right:0+'px'
						},300,function(){});
	}else{
		$('.slider').animate({
		right:'-='+oneimg},300,function(){})
		};
});

*/
    $('.single-item').slick({
    	prevArrow: $('.prev'),
    	nextArrow: $('.next'),
    	dots: true,
    	
    	autoplay:true,
    	autoplaySpeed:3000,
    	pauseOnDotsHover:true,
    	caaEase:true,
    });


console.log($('.width '));

    $('.butt-show-nav ').click(function() { /* выбираем класс icon-menu и
               добавляем метод click с функцией, вызываемой при клике */
 
        $('.navbar-small').animate({ //выбираем класс menu и метод animate
 
            left: '0px' /* теперь при клике по иконке, меню, скрытое за
               левой границей на 285px, изменит свое положение на 0px и станет видимым */
 
        }, 200); //скорость движения меню в мс
         
        $('body').animate({ //выбираем тег body и метод animate
 
            left: '220px' /* чтобы всё содержимое также сдвигалось вправо
               при открытии меню, установим ему положение 285px */
 
        }, 200); //скорость движения меню в мс
    });
  $('.butt-close ').click(function() { /* выбираем класс icon-menu и
               добавляем метод click с функцией, вызываемой при клике */
 
        $('.navbar-small').animate({ //выбираем класс menu и метод animate
 
            left: '-220px' /* теперь при клике по иконке, меню, скрытое за
               левой границей на 285px, изменит свое положение на 0px и станет видимым */
 
        }, 200); //скорость движения меню в мс
         
        $('body').animate({ //выбираем тег body и метод animate
 
            left: '0px' /* чтобы всё содержимое также сдвигалось вправо
               при открытии меню, установим ему положение 285px */
 
        }, 200); //скорость движения меню в мс
    });