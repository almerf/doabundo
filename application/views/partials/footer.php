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

	<script type="text/javascript">
		$('.btn-number').click(function(e){
		    e.preventDefault();
		    
		    fieldName = $(this).attr('data-field');
		    type      = $(this).attr('data-type');
		    var input = $("input[name='"+fieldName+"']");
		    var currentVal = parseInt(input.val());
		    if (!isNaN(currentVal)) {
		        if(type == 'minus') {
		            
		            if(currentVal > input.attr('min')) {
		                input.val(currentVal - 1).change();
		            } 
		            if(parseInt(input.val()) == input.attr('min')) {
		                $(this).attr('disabled', true);
		            }

		        } else if(type == 'plus') {

		            if(currentVal < input.attr('max')) {
		                input.val(currentVal + 1).change();
		            }
		            if(parseInt(input.val()) == input.attr('max')) {
		                $(this).attr('disabled', true);
		            }

		        }
		    } else {
		        input.val(0);
		    }
		});
		$('.input-number').focusin(function(){
		   $(this).data('oldValue', $(this).val());
		});
		$('.input-number').change(function() {
		    
		    minValue =  parseInt($(this).attr('min'));
		    maxValue =  parseInt($(this).attr('max'));
		    valueCurrent = parseInt($(this).val());
		    
		    name = $(this).attr('name');
		    if(valueCurrent >= minValue) {
		        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
		    } else {
		        alert('Sorry, the minimum value was reached');
		        $(this).val($(this).data('oldValue'));
		    }
		    if(valueCurrent <= maxValue) {
		        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
		    } else {
		        alert('Sorry, the maximum value was reached');
		        $(this).val($(this).data('oldValue'));
		    }
		    
		    
		});
		$(".input-number").keydown(function (e) {
		        // Allow: backspace, delete, tab, escape, enter and .
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
		             // Allow: Ctrl+A
		            (e.keyCode == 65 && e.ctrlKey === true) || 
		             // Allow: home, end, left, right
		            (e.keyCode >= 35 && e.keyCode <= 39)) {
		                 // let it happen, don't do anything
		                 return;
		        }
		        // Ensure that it is a number and stop the keypress
		        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		            e.preventDefault();
		        }
		    });
	</script>

	<!-- Deskripsi, Komposisi, Info Gizi -->
	<script type="text/javascript">
		$('.deskripsi').show();
		$('.komposisi').hide();
		$('.gizi').hide();

        $("#todeskripsi").on("click",function() {
          $("#todeskripsi").addClass("active");
          $("#tokomposisi").removeClass("active");
          $("#togizi").removeClass("active");
          $('.deskripsi').show();
          $('.komposisi').hide();
          $('.gizi').hide();
        });

        $("#tokomposisi").on("click",function() {
          $("#tokomposisi").addClass("active");
          $("#todeskripsi").removeClass("active");
          $("#togizi").removeClass("active");
          $('.komposisi').show();
          $('.deskripsi').hide();
          $('.gizi').hide();
        });

        $("#togizi").on("click",function() {
          $("#togizi").addClass("active");
          $("#tokomposisi").removeClass("active");
          $("#todeskripsi").removeClass("active");
          $('.gizi').show();
          $('.komposisi').hide();
          $('.deskripsi').hide();
        });
     
	</script>

	</body>
</html>