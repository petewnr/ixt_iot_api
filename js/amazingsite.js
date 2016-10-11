$(document).ready(function(){
	
	console.log("hello from doc.ready amazingsite.js");
	
	$.ajax({
		type: 'GET',
		url: 'http://ixd-iot.uqcloud.net/api/getAllTeams.php',
		dataType: 'json',
		success: function(data)
		{
			console.log("success ");
			console.log(data);
			addTeamsInfo(data);
		},
		error: function(err)
		{
			console.log("ERROR with AJAX request getAllTeams: " + err);
		}
	});
	
	function addTeamsInfo(teamData)
	{
		let teamInfoHTML = "";
		
		for (let i=0; i<teamData.length; i++)
		{
			teamInfoHTML += "<div>";
			teamInfoHTML += "<p>";
			teamInfoHTML += teamData[i].name;
			teamInfoHTML += "</p>";
			teamInfoHTML += "<p>";
			teamInfoHTML += teamData[i].captain;
			teamInfoHTML += "</p>";
			teamInfoHTML += "</div>";
			teamInfoHTML += "<br />";
		}
		
		$("#teamsinfo").html(teamInfoHTML);
	};
	
}); // end document.ready