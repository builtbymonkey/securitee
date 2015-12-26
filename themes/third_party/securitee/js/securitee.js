$(document).ready(function() {
	
	if($("#pw_expire_ttl").val() == "custom")
	{
		$("#pw_expire_ttl_custom").show();
	}

	var def_assign = "0";
	$("#pw_expire_ttl").change(function(){
		var new_assign = $("#pw_expire_ttl").val();
		if(new_assign == def_assign || new_assign != "custom")
		{
			$("#pw_expire_ttl_custom").hide();
			$("#pw_expire_ttl_custom").val(new_assign);
		}
		else
		{
			$("#pw_expire_ttl_custom").show();
		}
	});
		
	if($("#pw_expire_ttl").val() == "custom")
	{
		$("#pw_expire_ttl_custom").show();
	}

	var def_assign = "0";
	$("#cp_reg_email_expire_ttl").change(function(){
		var new_assign = $("#cp_reg_email_expire_ttl").val();
		if(new_assign == def_assign || new_assign != "custom")
		{
			$("#cp_reg_email_expire_ttl_custom").hide();
			$("#cp_reg_email_expire_ttl_custom").val(new_assign);
		}
		else
		{
			$("#cp_reg_email_expire_ttl_custom").show();
		}
	});	
		
	if($("#cp_reg_email_expire_ttl").val() == "custom")
	{
		$("#cp_reg_email_expire_ttl_custom").show();
	}				

	var def_assign = "0";
	$("#pw_ttl").change(function(){
		var new_assign = $("#pw_ttl").val();
		if(new_assign == def_assign || new_assign != "custom")
		{
			$("#pw_ttl_custom").hide();
			$("#pw_ttl_custom").val(new_assign);
		}
		else
		{
			$("#pw_ttl_custom").show();
		}
	});	

	if($("#pw_ttl").val() == "custom")
	{
		$("#pw_ttl_custom").show();
	}	

	var def_assign = "0";
	$("#member_expire_ttl").change(function(){
		var new_assign = $("#member_expire_ttl").val();
		if(new_assign == def_assign || new_assign != "custom")
		{
			$("#member_expire_ttl_custom").hide();
			$("#member_expire_ttl_custom").val(new_assign);
		}
		else
		{
			$("#member_expire_ttl_custom").show();
		}
	});	

	if($("#member_expire_ttl").val() == "custom")
	{
		$("#member_expire_ttl_custom").show();
	}
		
	var def_assign = "0";
	$("#allow_ip_ttl").change(function(){
		var new_assign = $("#allow_ip_ttl").val();
		if(new_assign == def_assign || new_assign != "custom")
		{
			$("#allow_ip_ttl_custom").hide();
			$("#allow_ip_ttl_custom").val(new_assign);
		}
		else
		{
			$("#allow_ip_ttl_custom").show();
		}
	});	

	if($("#allow_ip_ttl").val() == "custom")
	{
		$("#allow_ip_ttl_custom").show();
	}	
	
	$.ajax({
		type: "POST",
		url: EE.BASE+"&C=addons_modules&M=show_module_cp&module=securitee&method=l&",
		data: $.param({ "XID": EE.XID}),
		success: function(){

		},
			error: function(jqXHR, textStatus){
		}
	});
	
	//and now all the chosen 
	$("#cp_quick_deny_exclude_groups, #allow_ip_add_member_groups, #member_expire_member_groups, #pw_expire_member_groups").chosen({width: "100%"}); 
	
});