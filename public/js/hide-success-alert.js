$(document).ready(function() {

	$(".alert").delay(5000).slideUp(250, function() {
	    $(this).alert('close');
	});

});