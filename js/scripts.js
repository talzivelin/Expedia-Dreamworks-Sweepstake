// JavaScript Document

$(document).ready(function(){
	
	//expedia nav
	$('html').click(function(){
		if($('#header-shop-menu, #header-support-menu, #header-account-menu').parent('li').find('.exp-drop-menu').is(':visible')){
			$('#header-shop-menu, #header-support-menu, #header-account-menu').parent('li').find('.exp-drop-menu').hide();
			$('#header-shop-menu, #header-support-menu, #header-account-menu').removeClass('exp-active');
		}
	});
	
	$('#header-shop-menu, #header-account-menu, #header-support-menu').click(function(event){
		event.stopPropagation();
	});	
	
	$('#header-shop-menu').click(function(){
		if($('#header-support-menu, #header-account-menu').parent('li').find('.exp-drop-menu').is(':visible')){
			$('#header-support-menu, #header-account-menu').parent('li').find('.exp-drop-menu').hide();
			$('#header-support-menu, #header-account-menu').removeClass('exp-active');
		}
		$(this).toggleClass('exp-active');
		$(this).parent('li').find('.exp-drop-menu').toggle();
	});
	
	$('#header-support-menu').click(function(){
		if($('#header-account-menu, #header-shop-menu').parent('li').find('.exp-drop-menu').is(':visible')){
			$('#header-account-menu, #header-shop-menu').parent('li').find('.exp-drop-menu').hide();
			$('#header-account-menu, #header-shop-menu').removeClass('exp-active');
		}
		$(this).toggleClass('exp-active');
		$(this).parent('li').find('.exp-drop-menu').toggle();
	});
	
	$('#header-account-menu').click(function(){
		if($('#header-support-menu, #header-shop-menu').parent('li').find('.exp-drop-menu').is(':visible')){
			$('#header-support-menu, #header-shop-menu').parent('li').find('.exp-drop-menu').hide();
			$('#header-support-menu, #header-shop-menu').removeClass('exp-active');
		}
		$(this).toggleClass('exp-active');
		$(this).parent('li').find('.exp-drop-menu').toggle();
	});
	
	$('.exp-menu-button').click(function(){
		$('.exp-menu').toggle();
	});
	
	//expedia footer
	$('a.toggle-trigger').click(function(){
		$(this).parent('li').find('.toggle-pane').slideToggle(500);
	});
    
});

function matchColHeights(col1, col2) {
    var col1Height = $(col1).height();
    var col2Height = $(col2).height();
    if (col1Height < col2Height) {
        $(col1).height(col2Height);
    } else {
        $(col2).height(col1Height);
    }
}

$(document).ready(function() {
    matchColHeights('#leftPanel', '#rightPanel');
});


function detectThankyouPage (iframeurl) {
    if (iframeurl != null) {
        iframeurl = iframeurl + "";
        var match = iframeurl.indexOf("thankyou");

        if (match > -1) {
            thankyou();
        }
    }
}

function thankyou() {
	$(".form_frame").addClass("short");
    $("#overlay").lightbox_me({centered: true, onLoad: function() {
	}});
}


if (window.attachEvent)
    window.attachEvent('onmessage', thankyou);
else if (window.addEventListener)
    window.addEventListener('message', thankyou, false);