console.log('script loaded');

$(document).ready(function(){
	console.log('ready function entered');
	$.ajax({
		url:"content/aboutThis.html",
		success: function(result){
			$('#content').html(result);
		}
	});
});

$('#aboutThisBtn').click(function(){
	console.log('button clicked');
	$.ajax({
		url:"content/aboutThis.html",
		success: function(result){
			$('#content').html(result);
		}
		});
	
});