<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default" style=" width: 180px;
    text-align: center;
    vertical-align: middle;
    margin-left: 60px;
    margin-top:20px;">LOGIN</nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
<label style="margin-left:50px;">ID:<input type="text" name="lid" /></label><br>
<label style="margin-left:43px;">PW:<input type="text" name="lpw" /></label><br>
<input type="submit" value="ログイン" style="margin-left:120px;">
</form>


</body>
</html>