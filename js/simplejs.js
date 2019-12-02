
	$("#reqotp").click(function(){
	var reqotp = $("#formlog").serialize();
	$.ajax({
		url:"reqotp.php",
		method: "POST",
		dataType: "JSON",
		data: reqotp,
		success: function(data){
				$("#response").css("display", "block");
				$("#response-txt").text(data.LoginSendOTPRs.headerRs.responseMessage);
							},
		error: function(data){
				$("#response").text(data.responseCode);
		}
	});
	return false;
	});
	
	
	
	
	
	$("#login").click(function(){
	var login = $("#formlog").serialize();
	$.ajax({
		url:"login.php",
		method: "POST",
		dataType: "JSON",
		data: login,
		success: function(data){
				$("#response").css("display", "block");
				$("#response-txt").text(data.LoginValidateOTPRs.message);
							},
		error: function(data){
				$("#response").text(data.LoginValidateOTPRs.headerRs.responseMessage);
		}
	
	});
	return false;
	});