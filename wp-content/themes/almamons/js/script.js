jQuery( document ).ready(function(){
	// my code goes here
	
		$(".icon").on('click', function(e){
			e.preventDefault();
			$(".navbar").toggleClass("show");
		});

		$("#open").on('click', function(e){
			e.preventDefault();
			$(".sub-menu").toggleClass("show");
		});
});