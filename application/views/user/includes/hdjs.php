<script>	document.addEventListener("DOMContentLoaded", function() {
		window.addEventListener('scroll', function() {
			let width = screen.width;
			if (window.scrollY > 130 && width>992	&& width<1200) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else if (window.scrollY > 109 && width>1199) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			}
			else {
				document.getElementById('navbar_top').classList.remove('fixed-top');
				// remove padding top from body
				document.body.style.paddingTop = '0';
			}

		});
	});
	
$(document).ready(function(){
		$('.navbr').click(function(){
			$('.navbr-fx').toggleClass('visible');
			$('body').toggleClass('cover-bg');
		});
	});</script>