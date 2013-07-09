$(document).ready(function() {  
	$('#send').click(function(event) {
		event.preventDefault();
		$('#send').fadeOut(500);
		setTimeout(function() {
      		$('#loading').show();
      	}, 500);
		var name = $("input#name").val();
		var email = $("input#email").val(); 
		var phone = $("input#phone").val(); 
		var message = $("input#message").val();  
		var dataString = var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone + '&message=' + message;
		$.ajax({
			type: "POST",
			url: "http://walfdreams.com/ajaxemail.php",
			data: dataString,
			success: function() {
				$('#loading').fadeOut(500);
				setTimeout(function() {
      				$('#infobox').show();
      				$('#infobox').addClass('animated flipInX');
      			}, 500);	
		    } 
		});
	});
});