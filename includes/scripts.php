
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.9.1.min.js">\x3C/script>')</script>
	<script src="assets/js/libs/bootstrap.min.js"></script>
	<script src='assets/js/jquery.easing.1.3.min.js'></script>
	<script src='assets/js/jquery.scrollto.js'></script>
	<script src="assets/js/quattro.js"></script> 

	<script>
	function enableBackToTop () {
		var backToTop = $('<a>', { id: 'back-to-top', href: '#top' });
		var icon = $('<i >', { class: 'fa fa-lg fa-chevron-up' });
		
		backToTop.appendTo ('body');
		icon.appendTo (backToTop);
		
		backToTop.hide();
		
		$(window).scroll(function () {
		if ($(this).scrollTop() > 150) {
			backToTop.fadeIn ();
		} else {
			backToTop.fadeOut ();
		}
		});
		
		backToTop.click (function (e) {
		e.preventDefault ();
		
		$('body, html').animate({
			scrollTop: 0
		}, 600);
		});
	}
	
	$(function () {
		
		enableBackToTop ();
		
	});
	</script>
	
	<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'fr,ja,ko,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
	}
	</script>
	
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
