$(document).ready(function() {

	$("#securitee").find("a.entryLink").click(function() {
			$(".fullEntry").hide();
			$(this).siblings(".fullEntry").toggle();
			return false;
		});	

	$("#clear_file_monitor").click(function(e){
		
		e.preventDefault();
		var get_url = $(this).attr("href");
		$.ajax({  
			type: "GET",  
			url: get_url, 
			success: function(){
				$("#file_monitor_clear_success").show();
				$("#securitee_file_monitor_results").hide();
			},
			error: function(jqXHR, textStatus){
				var obj = jQuery.parseJSON(jqXHR.responseText);
			}	
		});  
		return false;
	});
});				