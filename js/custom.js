jQuery(document).ready(function($)
{
	"use strict";
	var height = $('#top-nav').height();
	$(window).on('resize', function()
	{
		initFixProductBorder();
	});

	$(document).on('scroll', function()
	{
	});
	initFixProductBorder();
	initSlider();
	binding();
	sticky();
	initQuantity();
	// cart
	function binding(){
		const createState = (stateObj) => {
			return new Proxy(stateObj, {
			  set(target, property, value){
				target[property]= value;
				render();
				return true;
			  }
			});
		  };
		  const state = createState({
			name: '',
			address:'',
			sdt:''
		  });
		  const listeners = document.querySelectorAll('[data-model]');
		  listeners.forEach(element =>{
			const name = element.dataset.model;
			element.addEventListener('keyup',(event)=>{
			  state[name] = element.value;
			});
		  });
		  const render = () =>{
			const bindings = Array.from(document.querySelectorAll('[data-binding]')).map(
			  e => e.dataset.binding
			);
			bindings.forEach((binding)=>{
			  document.querySelector(`[data-binding=${binding}]`).innerHTML = state[binding];
			  document.querySelector(`[data-model=${binding}]`).value = state[binding];
			})
		  }
	};
	function sticky(){
		$(window).scroll(function () {
			if($(this).scrollTop() > 50){
				$('.site-navbar').addClass('fixed');
				$('.site-navbar').addClass('box-shadow');
			}else{
				$('.site-navbar').removeClass('fixed');
			}
		});
	};
    /* 
	6. Init Fix Product Border
	*/

    function initFixProductBorder()
    {
    	if($('.product_filter').length)
    	{
			var products = $('.product_filter:visible');
    		var wdth = window.innerWidth;

    		// reset border
    		products.each(function()
    		{
    			$(this).css('border-right', 'solid 1px #e9e9e9');
    		});

    		// if window width is 991px or less

    		if(wdth < 480)
			{
				for(var i = 0; i < products.length; i++)
				{
					var product = $(products[i]);
					product.css('border-right', 'none');
				}
			}

    		else if(wdth < 576)
			{
				if(products.length < 5)
				{
					var product = $(products[products.length - 1]);
					product.css('border-right', 'none');
				}
				for(var i = 1; i < products.length; i+=2)
				{
					var product = $(products[i]);
					product.css('border-right', 'none');
				}
			}

    		else if(wdth < 768)
			{
				if(products.length < 5)
				{
					var product = $(products[products.length - 1]);
					product.css('border-right', 'none');
				}
				for(var i = 2; i < products.length; i+=3)
				{
					var product = $(products[i]);
					product.css('border-right', 'none');
				}
			}

    		else if(wdth < 992)
			{
				if(products.length < 5)
				{
					var product = $(products[products.length - 1]);
					product.css('border-right', 'none');
				}
				for(var i = 3; i < products.length; i+=4)
				{
					var product = $(products[i]);
					product.css('border-right', 'none');
				}
			}

			//if window width is larger than 991px
			else
			{
				if(products.length < 5)
				{
					var product = $(products[products.length - 1]);
					product.css('border-right', 'none');
				}
				for(var i = 4; i < products.length; i+=5)
				{
					var product = $(products[i]);
					product.css('border-right', 'none');
				}
			}	
    	}
    }
    /* 

	8. Init Slider

	*/

    function initSlider()
    {
    	if($('.product_slider').length)
    	{
    		var slider1 = $('.product_slider');

    		slider1.owlCarousel({
    			loop:false,
    			dots:false,
				nav:false,
				margin: 5,
    			responsive:
				{
					0:{items:1},
					480:{items:2},
					768:{items:3},
					991:{items:4},
					1280:{items:5},
					1440:{items:5}
				}
    		});

    		if($('.product_slider_nav_left').length)
    		{
    			$('.product_slider_nav_left').on('click', function()
    			{
    				slider1.trigger('prev.owl.carousel');
    			});
    		}

    		if($('.product_slider_nav_right').length)
    		{
    			$('.product_slider_nav_right').on('click', function()
    			{
    				slider1.trigger('next.owl.carousel');
    			});
    		}
    	}
    }
});
// cart
function initQuantity()
	{
		if($('.plus').length && $('.minus').length)
		{
			var plus = $('.plus');
			var minus = $('.minus');
			var value = $('#quantity_value');

			plus.on('click', function()
			{
				var x = parseInt(value.text());
				value.text(x + 1);
			});

			minus.on('click', function()
			{
				var x = parseInt(value.text());
				if(x > 1)
				{
					value.text(x - 1);
				}
			});
		}
	}

$('.like-btn').on('click', function() {
	$(this).toggleClass('is-active');
 });
	 $('.minus-btn').on('click', function(e) {
	 e.preventDefault();
	 var $this = $(this);
	 var $input = $this.closest('div').find('input');
	 var value = parseInt($input.val());
  
	 if (value && 1) {
		 value = value - 1;
	 } else {
		 value = 0;
	 }
  
   $input.val(value);
  
 });
  
 $('.plus-btn').on('click', function(e) {
	 e.preventDefault();
	 var $this = $(this);
	 var $input = $this.closest('div').find('input');
	 var value = parseInt($input.val());
  
	 if (value && 100) {
		 value = value + 1;
	 } else {
		 value = value + 1;
	 }
  
	 $input.val(value);
 });