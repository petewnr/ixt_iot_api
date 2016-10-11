$(document).ready(function(){
	
	
	$("#amazingform").on('submit', function(e)
	{
		e.preventDefault();
		
		console.log($('#name').val());
		
		
		$.ajax({
			type: 'post',
			url: '../api/postTeam.php',
			data: 
			{
				"name": $("#name").val(),
				"description": $("#description").val(),
				"city": $("#city").val(),
				"captain": $("#captain").val(),
				"coach": $("#coach").val()
			},
			success: function(data)
			{
				console.log("done");
				console.log(data);
			},
			error: function(err)
			{
				console.log("ERROR with AJAX request postTeams: " + err);
			}
		})
	});
	
}); // end document.ready