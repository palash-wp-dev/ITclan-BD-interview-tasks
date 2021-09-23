
(function(){
     "use strict";
	jQuery(document).ready(function(){
		/*** Mobile nav ***/
	    jQuery(function(){
		    $('#menu').slicknav({
		        label: "",
		        // closedSymbol: '&#9660;',
		        closedSymbol: '',
    			openedSymbol:''
		    });
	    });

		// Slider
	    var swiper = new Swiper('.swiper-container', {
	      speed: 600,
	      parallax: true,
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	    });
		 $('.ic-testimonial').slick({
			  infinite: true,
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: true,
			  dots: false,
		  });

		 // Products thumbnail slider
	    var swiper = new Swiper('.ic-product-thumbs', {
	      slidesPerView: 4,
	      spaceBetween: 30,
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	    });

	    /*Popular products slider*/
	    $('.ic-pp-slide').slick({
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  arrows: true,
		  dots: false,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		      }
		    },
		    {
		      breakpoint: 840,
		      settings: {
		        slidesToShow: 2,
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		      }
		    }
		  ]
		}); 

	    /*Clients carousel slider*/
	    $('.ic-clients').slick({
		  infinite: true,
		  slidesToShow: 6,
		  slidesToScroll: 1,
		  arrows: true,
		  dots: false,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		      }
		    },
		    {
		      breakpoint: 840,
		      settings: {
		        slidesToShow: 2,
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		      }
		    }
		  ]
		}); 

	    // In search form searchicon change		
	    $(".ic-search-btn").on("click", function() {
	    	if($('.ic-nav-search').hasClass('ic-action')) {
	    		$('.ic-nav-search').removeClass('ic-action')
	    	} else {
	    		$('.ic-nav-search').addClass('ic-action')
	    	}
	    });

	    // Range slider
		$(function() {
		    var options = 
		        {
		            range: true,
		            min: 0,
		            max: 500,
		            values: [ 50, 300 ],
		            slide: function( event, ui ) {
		                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		            }
		        };
		    
		        $( "#slider-range" ).slider(
		            options
		        );
		        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
		    });

		// List and Grid view items

		$('.ic-product-view .ic-icon').on('click', function() {
			if($(this).hasClass('ic-grid-view')) {
			  $('.ic-product-view .ic-list-view').removeClass('active');
			}else {
			  $('.ic-product-view .ic-grid-view').removeClass('active');
			  }
			  $(this).addClass('active');
		});
		
		// List and Grid view items
		$('.ic-icon').on('click', function(e) {
			var ic_icon = $(this);
			var ic_flex = $('.ic-flex-row');
	       ic_flex.fadeOut(500, function(){ //opacity prevents page jump
			    if (ic_icon.hasClass('ic-grid-view')) {
			        ic_flex.removeClass('ic-list').addClass('ic-grid', function(){
			        	ic_flex.fadeIn(500);
			        });
			    }
			    else if(ic_icon.hasClass('ic-list-view')) {
			        ic_flex.removeClass('ic-grid').addClass('ic-list', function(){
			        	ic_flex.fadeIn(500);
			        });
			    }
	       });
		});

	    // Products zoom effect
		var $easyzoom = $('.easyzoom').easyZoom();
		var api1 = $easyzoom.filter('.ic-product-preview').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);
			e.preventDefault();
			api1.swap($this.data('standard'), $this.attr('href'));
		});

	   //Quantity increase and decrease
	   $('.quantity-right-plus').click(function(e){
	        // Stop acting like a button
	        e.preventDefault();
	        // Get the field name
	        var quantity = parseInt($('.quantity').val());
	        // If is not undefined
	            $('.quantity').val(quantity + 1);
	    });
	     $('.quantity-left-minus').click(function(e){
	        // Stop acting like a button
	        e.preventDefault();
	        // Get the field name
	        var quantity = parseInt($('.quantity').val());      
            // Increment
            if(quantity>0){
            $('.quantity').val(quantity - 1);
            }
	    }); 


		// addClass for grid view and list view icon background color change
		  // var list_view = document.getElementsByClassName("ic-list-view");
		  // list_view.classList.add("active");
		  // console.log(list_view)


		  // after 768px screen show the filter menue 
			$('.ic-filter span').on('click', function() {
				$('.ic-left-sidebar').addClass('ic-show');
				$(this).hide('slow');
				$('body').addClass('ic-hidden');
				$('.ic-overlay').addClass('overlay-color');
			});
			$('.ic-overlay').on('click', function() {
				$('body').removeClass('ic-hidden');
				$('.ic-filter span').show();
				$('.ic-left-sidebar').removeClass('ic-show');
				$('.ic-overlay').removeClass('overlay-color');
			});

	});
})();