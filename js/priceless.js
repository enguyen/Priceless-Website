$(document).ready(function(){
		var bgImage = $('#background img');

		// Set up resizing.
		// These is the main reasons why we need JQuery.
		$(window).resize(fixBg);
		bgImage.load(fixBg);

		// Set up random image.
		var rand = Math.ceil(Math.random()*9);
		bgImage.attr('src', 'images/bg/' + rand + '.jpg');
});

function fixBg() {
		var winWidth = $(window).width();
		var winHeight = $(window).height();
		var winRatio = winWidth/winHeight;
		$('#background').css({'width':winWidth, 'height':winHeight});

		var bgImage = $('#background img');
		imgRatio = bgImage.width()/bgImage.height();
		if (winRatio > imgRatio) {
				bgImage.css({'width':winWidth, 'height':''});
		} else {
				bgImage.css({'width':'', 'height':winHeight});
		}		
}