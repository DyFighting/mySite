$(function (){
	$(".name").blur(function (){
		
		if( $(this).val()=="")
			$("#nameMsg").text("请输入用户名！");
		else if($(this).val().length>0 )
			$("#nameMsg").text("");	
		
		
	});
	
	$(".pwd").blur(function(){
		if($(this).val()=="")
			$("#pwdMsg").text("请设置密码");
		else if(!($(this).val()==$(".rpwd").val()) && $(".rpwd").val().length>0)
			$("#rpwdMsg").text("两次密码不一致");
		else
		{$("#rpwdMsg").text("");
		$("#pwdMsg").text("");	}
	});
	$(".rpwd").blur(function(){
		if($(this).val()=="")
			$("#rpwdMsg").text("请重复密码");
		else if(!($(this).val()==$(".pwd").val()))
			$("#rpwdMsg").text("两次密码不一致");
		else 
			$("#rpwdMsg").text("");
	});
	$(".email").blur(function(){
		var mail = $(this).val();
		var reg=/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/;
		if(!(reg.test(mail)))
			$("#emlMsg").text("请输入正确邮箱地址");
		else
			$("#emlMsg").text("");
		
	});
	$(".tel").blur(function(){
		var tel=$(this).val();
		var reg = /^0{0,1}(13[0-9]|15[7-9]|153|156|18[0-9])[0-9]{8}$/;
		if(tel.length>11 || tel.length<11)
			$("#telMsg").text("请输入正确的手机号");
		else if(!(reg.test(tel)))
			$("#telMsg").text("手机号码输入有误，请重新输入！");
		else
			$("#telMsg").text("");
		
	});
	
});