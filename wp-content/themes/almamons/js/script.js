
/*
var CookieDate = new Date;
CookieDate.setFullYear(CookieDate.getFullYear() +10);
document.cookie = 'intro=done; expires=' + CookieDate.toUTCString() + ';';

function getCookie(c_name) {
	var c_value = document.cookie,
			c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1) c_start = c_value.indexOf(c_name + "=");
	if (c_start == -1) {
			c_value = null;
	} else {
			c_start = c_value.indexOf("=", c_start) + 1;
			var c_end = c_value.indexOf(";", c_start);
			if (c_end == -1) {
					c_end = c_value.length;
			}
			c_value = unescape(c_value.substring(c_start, c_end));
	}
	return c_value;
}
*/
jQuery(function($) {
	jQuery( document ).ready(function(){
		// my code goes here
		
			jQuery(".icon").on('click', function(e){
				e.preventDefault();
				jQuery(".navbar").toggleClass("show");
			});
	
			jQuery("#open").on('click', function(e){
				e.preventDefault();
				jQuery(".sub-menu").toggleClass("show");
			});
	
			/*var acookie = getCookie("intro");
			if (!acookie) {
					alert("Cookie not found.");
			}else alert(acookie);*/
	});
});