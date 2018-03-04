<html>
<head>
<title>注册</title>
<link rel="stylesheet"  type="text/css" href="./css/reg.css"/>
<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./js/md5.js"></script>
<script type="text/javascript" src="./js/reg.js"></script>
</head>

<body>


<div class="regBox">
<form >
	<div class="inputBox">
	
		<input type="text" name="uname" class="name" placeholder="请设置用户名"></input><br>
		<span class="error" id="nameMsg"></span>	
		<input type="password" name="pwd" class="pwd" placeholder="请设置密码" ></input><br>
		<span class="error" id="pwdMsg"></span>
		<input type="password" name="rpwd" class="rpwd" placeholder="重复密码"></input><br>
		<span class="error" id="rpwdMsg"></span>
		<input type="text" name="email" class="email" placeholder="请填写邮箱"></input><br>
		<span class="error" id="emlMsg"></span>
		<input type="text" name="tel" class="tel" placeholder="请输入手机号"></input><br>
		<span class="error" id="telMsg"></span>
	</div>
	<button type="button" class="regBtn" >注册</button>
</form>
</div>


















</body>

</html>