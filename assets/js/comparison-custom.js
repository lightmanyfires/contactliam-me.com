$(document).ready(function(){  

//if the parent ID is equal to p-comparison hide the img

if ( $('.player-compare-panel').parent('section').attr('id') === "liam") 
	
	{
	console.log("working")	
	$(".player-compare-panel").children('div').show();

	}

else {
	console.log("Not working")
	$(".player-compare-panel").children('div').hide();

	}

	
 });  