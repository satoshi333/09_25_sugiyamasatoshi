<?php
session_start();

include("functions.php");

//セッションチェック
chkSsid();



//1.  DB接続します

 $pdo = db_con();

//try {
//  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
//} catch (PDOException $e) {
//  exit('データベースに接続できませんでした。'.$e->getMessage());
//}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
//  Selectデータの数だけ自動でループしてくれる
//    以下のコードの意味が？

//  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
//    
//    $view .='<p>';
//    $view .= '<a href="detail.php?id='.$result["id"].'">';
//    $view .= $result["name"]."[".$result["lid"]."]"."[".$result["lpw"]."]";
//    $view .='</a>';
////      以下の４行でPHPデータベースの接続（リンク作成＞データ削除）
//    $view .=' ';
//    $view .= '<a href="delete.php?id='.$result["id"].'">';
//    $view .= '[削除]';
//    $view .='</a>';
//    $view .='</p>';
//  }
    
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
//    $view .='<table style="border-solid=1">';
    $view .='<p>';
    $view .= '<a href="detail.php?id='.$result["id"].'">';
    $view .= $result["name"]."[".$result["lid"]."]"."[".$result["lpw"]."]";
    $view .='</a>';
//      以下の４行でPHPデータベースの接続（リンク作成＞データ削除）
    $view .=' ';
    $view .= '<a href="delete.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .='</a>';
    $view .='</p>';
//    $view .='</table>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VRエアロユザー登録</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
    </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
  
   
<!-- Main[End] -->


</body>
</html>
