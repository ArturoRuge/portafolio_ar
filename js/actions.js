			$(function() {
      $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
      $('html,body').animate({
      scrollTop: target.offset().top
      }, 1000);
      return false;
      }
      }
      });
      //:::::::::::WAYPOINT FUNCTION
      $('.aparecer').waypoint(function() {
		$('.aparecer').addClass( 'fadeInUp' );
		},
		{
			offset: '50%',
			triggerOnce: true
		});
      $('.aparecer2').waypoint(function() {
		$('.aparecer2').addClass( 'fadeInUp' );
		},
		{
			offset: '50%',
			triggerOnce: true
		});
      $('.aparecer3').waypoint(function() {
		$('.aparecer3').addClass( 'fadeInDown' );
		},
		{
			offset: '50%',
			triggerOnce: true
		});
      });

