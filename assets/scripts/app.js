var debug = 0;
var backgroundScroll = false;
var useragent		= window.navigator.userAgent.toLowerCase();
var dombody	= 'html, body';
var wheelevent	= "onwheel" in document ? "wheel":"onmousewheel" in document ? "mousewheel":"DOMMouseScroll";
var breakpoint	= 576;
var isMobile		= (window.innerWidth <= breakpoint) ? true:false;
var isTouch		= (useragent.match(/(Android)/i)) || useragent.indexOf('iphone') > -1 || useragent.indexOf('ipad') > -1 || useragent.indexOf('macintosh') > -1 && 'ontouchend' in document ? true:false;
var isTablet		= (useragent.match(/(iPad|Android)/i) && !useragent.match(/(Android.*Mobile)/i)) ? true:false;
var isAndroid	= (useragent.match(/(Android)/i)) ? true:false;
var isOldie		= (useragent.match(/(MSIE 6|MSIE 7|MSIE 8|MSIE 9|MSIE 10)/i)) ? true:false;
var isIe11			= (useragent.match(/(rv:11)/i)) ? true:false;
var isRatio		= (window.devicePixelRatio == 2) ? true:false;

$window = $(window);
$html = $('html');
$body = $('body');
/* ready
----------------------------------------------- */

$(function(){
	wheel.ready();
	flick.ready();
	scroll.ready();
  splash.ready();
});

/* load
----------------------------------------------- */

window.onload = function() {
}

/* loading
----------------------------------------------- */
var splash = {
	ready:function() {

    splash.images = [
      "assets/images/logo.png",
	    "assets/images/hero.jpg",
	    "assets/images/about-1.jpg",
	    "assets/images/about-2.jpg",
	    "assets/images/recruit.jpg"
    ];


		if(debug){


		  $('#splash').remove();
			hero.play();
		} else {

		  splash.total = splash.images.length;
		  splash.count = 0;
		  splash.start();

			$body.scrollTop(0);
      wheel.flag = true;
			flick.flag = true;

		}

	},
	start:function() {

		var image = new Image();
		var src = splash.images[splash.count];

		$(image).attr('src', src);
		$(image).on('load', function() {

			splash.count++;

			var percent = splash.count / splash.total * 100;
			$('#splash').find('.progress').css({width:percent + '%'}).on('transitionend', function(){
//			$('#splash').find('.progress').animate({ width:percent + '%' }, 25, 'linear', function() {

				if(percent >= 100){
					splash.end();
				}else{
					splash.start();
				}

			});

			$(this).off('load');
			$(this).remove();

		});

	},
	end:function() {

		hero.ready();
		message.ready();
		about.ready();
		recruit.ready();
		access.ready();

    $('#splash').addClass('on'), $('#splash').find('.progress').addClass('on'), $('#splash').find('.bland').addClass('on').on('transitionend', function(){
	    wheel.flag = false;
	    flick.flag = false;

	    $('#splash').remove();
	    hero.play();
	  });

	}
}
var wheel = {
	ready:function() {

		wheel.flag = false;
		window.addEventListener(wheelevent, wheel.start, { passive: false });

	},
	start:function(event) {

		if(wheel.flag){
			if(event.preventDefault){
				event.preventDefault();
			}
			event.returnValue = false;
		}else{
			$(dombody).stop();
		}

	}
};
var flick = {
	ready:function() {

		flick.flag = false;
		window.addEventListener('touchmove', flick.start, { passive: false });

	},
	start:function(event) {

		if (flick.flag) {
			event.preventDefault();
		}

	}
};
var scroll = {
	ready:function() {

		var fps = (isTouch) ? 15:30;

		scroll.flag = false;
		scroll.framerate = 1000 / fps;
		scroll.top = 0;

		$window.on('scroll', scroll.start);
		scroll.start();

	},
	start:function(){

		if(!scroll.flag){
			scroll.flag = true;
			scroll.loop();
		}

		scroll.top = $window.scrollTop();
		clearInterval(scroll.interval);
		scroll.interval = setInterval(scroll.end, 50);
	},
	end:function(){
		clearInterval(scroll.interval);
		scroll.flag = false;
	},
	loop:function(){
		if(scroll.flag){
  		message.scroll();
  		about.scroll();
  		recruit.scroll();
  		access.scroll();

			setTimeout(scroll.loop, scroll.framerate);
		}
	}
};
var hero = {
	ready:function() {
	  $('.arrow a').off('click').on('click', hero.arrow);
	},
	play:function() {
  	$('#hero').addClass('inview'), $('#hero-scroll').addClass('inview');
  	$('#hero .hero-title .catch-en').addClass('inview').on('transitionend', function(){
	      $('#hero .hero-title .catch-ja').addClass('inview').off('transitionend');
  	});
	},
	arrow:function() {
    var position = $('.message').offset().top - 60;
    $('body,html').animate({scrollTop:position}, 400, 'swing');
    return false;
	}
};
var message = {
	ready:function() {
	},
	scroll:function() {
    var top = $('.message-expand-body').offset().top;

		if($window.scrollTop() > top - $window.height() + $window.height() / 5){
		  $('.message-expand-body').each(function(){
		  	$(this).queue(function(){
		  		$('.message-expand-body, .message-expand-bg').addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});
		  	});
		  });
    }

	}
};
var about = {
	ready:function() {
		about.params = new Array();
		$('.about').find('.about-image').each(function(i) {
			about.params.push({ flag:true, elem:$(this), top:$(this).offset().top, height:$(this).height() });
		});
	},
	scroll:function() {

		for(var i in about.params){
			var flag = about.params[i].flag;
			var elem = about.params[i].elem;
			var top  = about.params[i].top;
			var height = about.params[i].height;

			if(flag && $window.scrollTop() > top - $window.height() + $window.height() / 5){
				$(elem).addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});
		    $(elem).children('picture').addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});
		    $(elem).parent().siblings('.about-intro-body').addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});
				about.params[i].flag = false;
			}
		}
		
  }
};
var recruit = {
	ready:function() {
		recruit.params = new Array();
		$('.recruit').find('.recruit-item').each(function(i) {
			recruit.params.push({ flag:true, elem:$(this), top:$(this).offset().top, height:$(this).height() });
			$(this).css({ 'transition-delay':(i*100/1000) + 's' });
		});
	},
	scroll:function() {

		var top = $('.recruit .header').offset().top;

		if($window.scrollTop() > top - $window.height() + $window.height() / 5){
		  $('.recruit .header').addClass('inview');
		}

		for (var i in recruit.params) {
			var flag = recruit.params[i].flag;
			var elem = recruit.params[i].elem;
			var top = recruit.params[i].top;

      if(flag && $window.scrollTop() > top - $window.height() + $window.height() / 5) {
				$(elem).addClass('on');
				recruit.params[i].flag = false;
			}
		}
		$('.recruit-item.last').on('transitionend', function(){
    	$('#recruit-trigger').addClass('inview-fix');
  	});
	}
};
var access = {
	ready:function() {
		access.top = $('.access .gmap-wrap').offset().top;
		$('#contact-trigger').off('click').on('click', access.modal.ready);
	},
	scroll:function() {
		if($window.scrollTop() > access.top - $window.height() + $window.height() / 5){

  		$('.access .gmap-wrap').addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});
		  $('.access .gmap-wrap').children('iframe').addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});
      $('.access .gmap-wrap').next('.contents').children('.contents-body').addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});
      $('.access .gmap-wrap').next('.contents').children('.contents-bg').addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});

		}
  },
	modal:{
		ready:function() {
			access.modal.trigger = $(this);
			access.modal.trigger.addClass('disabled');
      access.modal.position = window.pageYOffset;
      access.modal.open();
		},
		open:function() {
			var width = $window.width();

			if(isTouch){
				$body.css({ top:-access.modal.position }).addClass('on')
			}else{
				$body.css({ width:width, overflow:'hidden'});
			}

			$('#contact-modal').modal();
			$('#contact-modal .sheet-bg, #contact-modal .modal-content').addClass('inview').on('transitionend', function(){$(this).addClass('inview-fix').off('transitionend')});

			$('#contact-modal #submit').on('click', access.modal.send);
			$('#contact-modal').on('hide.bs.modal', function() {
        access.modal.close();
　　　 });
      access.modal.validation();
		},
	  validation:function() {
		  access.modal.validation.nameFlag = access.modal.validation.phoneticFlag = access.modal.validation.phoneFlag = access.modal.validation.mailFlag = false;

      $('input[name="name"]').on('blur', function(){
        if(!$(this).val().match(/^[ぁ-んァ-ヶー一-龠 　\r\n\t]+$/)){
          $(this).prev().find('.validation').text('入力形式が正しくありません');
          access.modal.validation.nameFlag = false;
        }else{
          $(this).prev().find('.validation').text('');
          access.modal.validation.nameFlag = true;
        }
        access.modal.check();
      });

		  $('input[name="phonetic"]').on('blur', function(){
        if(!$(this).val().match(/^[ァ-ロワヲンー 　\r\n\t]+$/)){
          $(this).prev().find('.validation').text('全角カタカナで入力してください');
          access.modal.validation.phoneticFlag = false;
        } else {
          $(this).prev().find('.validation').text('');
          access.modal.validation.phoneticFlag = true;
        }
        access.modal.check();
      });

      $('input[name="mail"]').on('blur', function(){

        if(!$(this).val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)){
          $(this).prev().find('.validation').text('入力形式が正しくありません');
          access.modal.validation.mailFlag = false;
        } else {
          $(this).prev().find('.validation').text('');
          access.modal.validation.mailFlag = true;
        }

        access.modal.check();
      });

		},
		check:function(){

			if(access.modal.validation.nameFlag && access.modal.validation.phoneticFlag && access.modal.validation.mailFlag) {
				$('#contact-modal #submit').addClass('inview');
			}else{
				if($('#contact-modal #submit').hasClass('inview')){
				  $('#contact-modal #submit').removeClass('inview')
				}
			}
			
		},
	  send:function() {

      if($('#contact-modal #message').hasClass('inview')){
	      $(this).removeClass('inview');
      }

		  var data = {
			  'name': $('#contact-modal input[name="name"]').val(),
				'phonetic': $('#contact-modal input[name="phonetic"]').val(),
				'phone': $('#contact-modal input[name="phone"]').val(),
				'mail': $('#contact-modal input[name="mail"]').val(),
				'comments': $('#contact-modal #comments').val()
		  };

			$.ajax({
        url: 'send.php',
        type: 'POST',
        dataType: 'json',
        data: data
      }).done(function(data){
	      setTimeout(function(){
		      console.log(data.validation)
		      $('#contact-modal #message').html(data.html).addClass('inview');
		      if(data.validation == 'success'){
			      $('#contact-modal #submit').removeClass('inview');
		      }
	      }, 300);
      }).fail(function(msg, XMLHttpRequest, textStatus, errorThrown){
        $('#contact-modal #message').html('<p class="error">メール送信に失敗しました。</p>').removeClass('inview');
      });

	  },
		close:function(){
			if(isTouch){
				$body.removeClass('on');
			}else{
				$body.css({ width:'100%', overflow:'visible' });
			}
			$('#contact-modal .sheet-bg, #contact-modal .modal-content').removeClass('inview inview-fix');
			access.modal.trigger.removeClass('disabled');
			$window.scrollTop(access.modal.position);
		}
  }
};
let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++){
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 150) {
      fadeInTarget[i].classList.add('scroll-in');
    }
  }
});