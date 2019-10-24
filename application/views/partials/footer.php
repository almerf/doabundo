	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.zoom.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

	<script type="text/javascript">
		$(document).ready(function()
		{
			$(".account").click(function()
			{
				var X=$(this).attr('id');
				if(X==1) {
					$(".submenu").hide();
					$(this).attr('id', '0'); 
				}
				else {
					$(".submenu").show();
					$(this).attr('id', '1');
				}
			});

			$(".submenu").mouseup(function() {
				return false
			});
			$(".account").mouseup(function() {
				return false
			});
			$(document).mouseup(function() {
				$(".submenu").hide();
				$(".account").attr('id', '');
			});
		});
	</script>

	<script type="text/javascript">
		$('.satuan').hide();
        $("#topaket").on("click",function() {
          $("#tosatuan").removeClass("active");
          $("#topaket").addClass("active");
          $('.satuan').fadeOut('slow');
          $('.bayar').fadeOut('slow');
          $('.rating-widget').fadeOut('slow');
          function show(){
            $('.paket').fadeIn('slow');
            $('.bayar').fadeIn('slow');
            $('.rating-widget').fadeIn('slow');
		  };
        window.setTimeout(show, 850);  
        });

        $("#tosatuan").on("click",function() {
          $("#topaket").removeClass("active");
          $("#tosatuan").addClass("active");
          $('.paket').fadeOut('slow');
          $('.bayar').fadeOut('slow');
          $('.rating-widget').fadeOut('slow');
          function show(){
            $('.satuan').fadeIn('slow');
            $('.bayar').fadeIn('slow');
            $('.rating-widget').fadeIn('slow');
        };
        window.setTimeout(show, 850);
        });

	</script>
		
	<script type="text/javascript">	
	  document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('select');
	    var instances = M.FormSelect.init(elems, options);
	  });

	  // Or with jQuery

	  $(document).ready(function(){
	    $('select').formSelect();
	  });
	</script>

	<!-- star -->
	<script type="text/javascript">
	  $(document).ready(function(){
	  
	  /* 1. Visualizing things on Hover - See next part for action on click */
	  $('#stars li').on('mouseover', function(){
	    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
	   
	    // Now highlight all the stars that's not after the current hovered star
	    $(this).parent().children('li.star').each(function(e){
	      if (e < onStar) {
	        $(this).addClass('hover');
	      }
	      else {
	        $(this).removeClass('hover');
	      }
	    });
	    
	  }).on('mouseout', function(){
	    $(this).parent().children('li.star').each(function(e){
	      $(this).removeClass('hover');
	    });
	  });
	  
	  
	  /* 2. Action to perform on click */
	  $('#stars li').on('click', function(){
	    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
	    var stars = $(this).parent().children('li.star');
	    
	    for (i = 0; i < stars.length; i++) {
	      $(stars[i]).removeClass('selected');
	    }
	    
	    for (i = 0; i < onStar; i++) {
	      $(stars[i]).addClass('selected');
	    }
	    
	    // JUST RESPONSE (Not needed)
	    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
	    var msg = "";
	    if (ratingValue > 1) {
	        msg = "Thanks! You rated this " + ratingValue + " stars.";
	    }
	    else {
	        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
	    }
	    responseMessage(msg);
	    
	  });
	  
	  
	});


	function responseMessage(msg) {
	  $('.success-box').fadeIn(200);  
	  $('.success-box div.text-message').html("<span>" + msg + "</span>");
	}
	</script>

	</body>
</html>