jQuery(function($) {
	jQuery( document ).ready(function(){
		$('.sub-menu').css('display','none');
		$('li.menu-item-has-children').on('click',function(){
			console.log($('.sub-menu').css('display'))
			if( $('.sub-menu').css('display') == 'block'){
				$('.sub-menu').css('display','none');
			}else if($('.sub-menu').css('display') == 'none'){
				$('.sub-menu').css('display','block');
			}
		})
	});
});