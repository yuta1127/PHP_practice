<?php
//クッキー情報を取得し変数に代入
if(isset($_COOKIE["id"])){
    //あればクッキー情報を取得し変数に代入
    $beforeld = $_COOKIE["id"];
    $beforePass = $_COOKIE["pass"];
} else {
    //ない場合は、変数を空文字に設定
    $beforeld = "";
    $beforePass ="";
}
?>
<html>
	<head>
		<meta http-equiv = "Content-Type" content ="text/html;charset = UTF-8">
	</head>
	<body>
		<form action="useCookie.php" method="post">
			ID:<input type="text" name="id" value="<?=$beforeld ?>"><br>
			PASS:<input type="text" name="pass" value="<?=$beforePass ?>"><br>
			<input type="submit" value="ログイン">
		</form>
	</body>
</html>