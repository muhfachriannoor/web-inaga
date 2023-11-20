<?php  ?>
			</main>

			<!-- FOOTER INAGA -->
			<footer class="has-background-dark">
				<div class="container">
					<p class="has-text-white">Copyright 2018 by <b>Indonesian Geothermal Association</b> All Right Reserved</p>
				</div>
			</footer>
		</div>
		<script type="text/javascript">
			var $easyzoom = $('.easyzoom').easyZoom();

	    	//GALLERY MODALS
    		function toggleModalClasses(event) {
			    var modalId = event.currentTarget.dataset.modalId;
			    var modal = $(modalId);
			    modal.toggleClass('is-active');
			    $('html').toggleClass('is-clipped');
			};
			$('.open-modal').click(toggleModalClasses);
			$('.modal-close').click(toggleModalClasses);
		 	//ADS MODALS
			$(".img-modals").click(function() {

			    $(".modal").toggleClass("is-active");
			  	
			  	$(".modal-background").click(function() {
			    	$(".modal").removeClass("is-active");
			  	});
			  	$(".modal-close").click(function() {
			      	$(".modal").removeClass("is-active");
			  	});	
			});
			
			// TABS PAGE
            $(".tabs ul li").on("click", function() {
                var id = $(this).attr("data-tab");
            
                $(".tabs ul li").removeClass("is-active");
                $(".tab-content").removeClass("current-tab");
                $(this).addClass("is-active");
                $("#" + id).addClass("current-tab");
            });
            
            // TOGGLE MENU NAVBAR
            $(".navbar-burger").click(function(){
            	$(".navbar-burger").toggleClass("is-active");
            	$(".navbar-menu").slideToggle("is-active");
            });
            
            // TOGGLE MENU SUBMENU NAVBAR
            if ($(window).width() < 1024) {
            	$(".navbar-dropdown").css("display","none");
            	$(".navbar-item.has-dropdown").click(function(){
            		$(this).children(".navbar-dropdown").slideToggle();
            	});
            }
		</script>
	</body>
</html>