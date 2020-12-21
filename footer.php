<script src="JS/main.js"></script>
<!-- jquery -->	
	<script src="JS/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!-- easing plugin ( optional ) -->
	<script src="JS/easing.js" type="text/javascript"></script>
	<!-- UItoTop plugin -->
	<script src="JS/jquery.ui.totop.js" type="text/javascript"></script>
	<!-- Starting the plugin -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>