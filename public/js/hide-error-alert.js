$(document).ready(function() {

	$(".alert").delay(15000).slideUp(250, function() {
	    $(this).alert('close');
	});

});