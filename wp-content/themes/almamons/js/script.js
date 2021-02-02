jQuery(function($) {
	jQuery( document ).ready(function(){
		if($(document).outerWidth() < 1201){
			$('.sub-menu').css('display','none');
		}
		$('li.menu-item-has-children').on('click',function(){
			if( $('.sub-menu').css('display') == 'block'){
				$('.sub-menu').css('display','none');
			}else if($('.sub-menu').css('display') == 'none'){
				$('.sub-menu').css('display','block');
			}
		})
	});
});