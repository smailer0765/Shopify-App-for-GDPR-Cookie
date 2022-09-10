base_path = $("#base_path").val();
$(document).ready(function(){
	
	$(".close").click(function(){
		$(".alert.alert-dismissible").css('display', 'none');
	});
	
	$("ul.Polaris-Tabs li .Polaris-Tabs__Tab").click(function(){
		$("ul.Polaris-Tabs li .Polaris-Tabs__Tab").removeClass("Polaris-Tabs__Tab--selected");
		$(this).addClass("Polaris-Tabs__Tab--selected");
		$("div[role=tabpanel]").addClass("Polaris-Tabs__Panel--hidden");
		$("#"+$(this).attr("aria-controls")).removeClass("Polaris-Tabs__Panel--hidden");
	});
	
	$(".alignment-box ul li.record").click(function(){
		$(".alignment-box ul li.record a").removeClass("align-active");
		$(this).find("a").addClass("align-active");
		var alignment = $(this).find("a").data("id");
		$.ajax({
			url: "home/insert_setting_data",
			method: 'post',
			data: {alignment: alignment},
			dataType: 'json',
			success: function(response){}
		});
	});

	$("#bannerenable").click(function(){
		var enabled = 0;
		if ($("#bannerenable").is(":checked")){
            enabled = 1;
        }
		$.ajax({
			url: "home/insert_data",
			method: 'post',
			data: {enabled: enabled},
			dataType: 'json',
			success: function(response){}
		});
	});
	
	$("._3_Epi").click(function(){
		var popup_setting = $(this).val();
		$.ajax({
			url: "home/insert_setting_data",
			method: 'post',
			data: {popup_setting: popup_setting},
			dataType: 'json',
			success: function(response){}
		});
	});
	
});