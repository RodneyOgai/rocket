$(function () {		
	
	initFilter();
	initBurger();

	$(window).on('scroll' , function(){
		headerFixed();
	});

	function headerFixed() {
		if ($(window).scrollTop() > 10) {
			$('.header').addClass('fixed'); 
		} else {
			$('.header').removeClass('fixed');
		}
	}

	function initBurger() {
		$('.header__burger').on('click' , function() {
			$('.header__menu').toggleClass('menu__show');
			$('.header__burger').toggleClass('menu__close');
		});
	}

	function initFilter() {
	  $('select').each(function(){
	      let $this = $(this), numberOfOptions = $(this).children('option').length;
	    
	      $this.addClass('select-hidden'); 
	      $this.wrap('<div class="select"></div>');
	      $this.after('<div class="select-styled"></div>');

	      let $styledSelect = $this.next('div.select-styled');
	      $styledSelect.text($this.children('option').eq(0).html());
	    
	      var $list = $('<ul />', {
	          'class': 'select-options'
	      }).insertAfter($styledSelect);
	    
	      for (let i = 0; i < numberOfOptions; i++) {
	          $('<li />', {
	              text: $this.children('option').eq(i).html(),
	              rel: $this.children('option').eq(i).val(),
	              ['data-before']: $this.children('option').eq(i).data('before')
	          }).appendTo($list);
	      }
	    
	      let $listItems = $list.children('li');

	      for (let i = 0; i < $listItems.length; i++) {
	      	if (i == 0) {
	      		$listItems[i].style.display = 'none';
	      		$('.select').attr('data-before' , $($listItems[i]).attr('data-before'));
	      	}
	      }
	    
	      $styledSelect.click(function(e) {
	          e.stopPropagation();
	      	  $('.main__filter').toggleClass('main__filter_active');
	          $('div.select-styled.active').not(this).each(function(){
	              $(this).removeClass('active').next('ul.select-options').hide();
	          });
	          $(this).toggleClass('active').next('ul.select-options').toggle();
	      });
	    
	      $listItems.click(function(e) {
	      	  $listItems.show();
	      	  $(this).hide();
	          e.stopPropagation();
	          $styledSelect.html($(this).html()).removeClass('active');
	          $this.val($(this).attr('rel'));

	          $('.select').attr('data-before' , $(this).attr('data-before'));
	      	  $('.main__filter').toggleClass('main__filter_active');
	          $list.hide();

	          // console.log($this);
	      });
	    
	      $(document).click(function() {
	          $styledSelect.removeClass('active');
	          $list.hide();
	      });

	  });
  	}
});
