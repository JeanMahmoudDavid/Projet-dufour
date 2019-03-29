

$(document).ready(function() 
{
	
	$(".checkannee").on("change",function(event)
	{
		var tabz = [];
		$(".checkannee").each(function()
		{
			tabz.push($(this).attr("id"));
		});
		
		console.log(tabz);
	});
	
	$(".checktheme").on("change",function(event)
	{
		console.log($(this).attr("id"));
	});
	
	
});