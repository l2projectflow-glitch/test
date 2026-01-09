/////////////////////////Char/////////////////////////////////
	 $(document).ready(function(){
		$('.char').click(function () {
			$(this).toggleClass('small');
			});
		});
		
	$(document).ready(function(){
		$('.char2').click(function () {
			$(this).toggleClass('small');
			});
		});

/////////////////////////To Top Button/////////////////////////////////	 	
		$(function() {
			$(window).scroll(function() {
				if($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
				} else {
				$('#toTop').fadeOut();
			}
			});
				$('#toTop').click(function() {
				$('body,html').animate({scrollTop:0},800);
			});
		});

/////////////////////////Slider/////////////////////////////////			
$(document).ready(function() {
    var slides = $(".slider .slides").children(".slide");
    var width = $(".slider .slides").width();
    var i = slides.length;
    var offset = i * width;
    var cheki = i - 1;

    $(".slider .slides").css('width', offset);

    for (j = 0; j < slides.length; j++) {
        if (j == 0) {
            $(".slider .navigation").append("<div class='dot active'></div>");
        } else {
            $(".slider .navigation").append("<div class='dot'></div>");
        }
    }

    var dots = $(".slider .navigation").children(".dot");
    offset = 0;
    i = 0;

    $('.slider .navigation .dot').click(function() {
        $(".slider .navigation .active").removeClass("active");
        $(this).addClass("active");
        i = $(this).index();
        offset = i * width;

        $('.slide').removeClass('active');
        var index = offset / width + 1;
        $('.slider .slide:nth-child(' + (index) + ')').addClass('active');

        $(".slider .slides").css("transform", "translate3d(-" + offset + "px, 0px, 0px)");
    });

    $("body .slider .next").click(function() {
        if (offset < width * cheki) {
            offset += width;

            $('.slide').removeClass('active');
            var index = offset / width + 1;
            $('.slider .slide:nth-child(' + (index) + ')').addClass('active');

            $(".slider .slides").css("transform", "translate3d(-" + offset + "px, 0px, 0px)");
            $(".slider .navigation .active").removeClass("active");
            $(dots[++i]).addClass("active");
        } else {
            // Se estiver no último slide, volte para o primeiro
            offset = 0;
            i = 0;
            $('.slide').removeClass('active');
            $('.slider .slide:nth-child(1)').addClass('active');
            $(".slider .slides").css("transform", "translate3d(0px, 0px, 0px)");
            $(".slider .navigation .active").removeClass("active");
            $(dots[0]).addClass("active"); // Volte para o primeiro ponto
        }
    });

    $("body .slider .prev").click(function() {
        if (offset > 0) {
            offset -= width;

            $('.slide').removeClass('active');
            var index = offset / width + 1;
            $('.slider .slide:nth-child(' + (index) + ')').addClass('active');

            $(".slider .slides").css("transform", "translate3d(-" + offset + "px, 0px, 0px)");
            $(".slider .navigation .active").removeClass("active");
            $(dots[--i]).addClass("active");
        } else {
            // Se estiver no primeiro slide, volte para o último
            offset = width * cheki;
            i = cheki;
            $('.slide').removeClass('active');
            $('.slider .slide:nth-child(' + (i + 1) + ')').addClass('active');
            $(".slider .slides").css("transform", "translate3d(-" + offset + "px, 0px, 0px)");
            $(".slider .navigation .active").removeClass("active");
            $(dots[i]).addClass("active");
        }
    });
	function autoSlide() {
		const activeIndex = $(".slider .navigation .active").index();
		const totalSlides = $(".slider .slides").children(".slide").length;
 		if (activeIndex < totalSlides - 1) {
			$("body .slider .next").click();
			if(activeIndex == 2)
		{
			$('.slider .navigation .dot:first-child').click();
		}
		} 
		

	}
	
	setInterval(autoSlide, 7000);
});
