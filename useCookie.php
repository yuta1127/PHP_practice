<?php
//クッキーにフォームからの入力情報を設定(有効期限3分)
setCookie("id",$_POST["id"],time()+180);
setCookie("pass",$_POST["pass"],time()+180);
?>
<html>
	<head>
		<meta http-equiv = "Content-Type" content ="text/html;charset = UTF-8">
	</head>
	<body>
		ログインしました。
	</body>
</html>