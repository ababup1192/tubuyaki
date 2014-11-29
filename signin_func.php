<?php
  function signin(){
    session_start();
    // データベースへ接続
    $link = mysql_connect('localhost', 'tubuyaki', 'tubuyaki');
    // データベースに接続失敗した場合、scriptの終了。
    if (!$link) {
      die('接続失敗です。'.mysql_error());
    }
    $db_selected = mysql_select_db('tubuyaki', $link);
    if (!$db_selected){
      die('データベース選択失敗です。'.mysql_error());
    }
    mysql_set_charset('utf8');
    // データ選択処理
    $query = sprintf("SELECT * FROM User WHERE email=\"%s\" and password=\"%s\";"
      , $_POST['inputEmail'], $_POST['inputPassword']);
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);
    // クエリの成功判定
    if($row){
      // セッションとクッキーにユーザIDを保存
      $_SESSION['id'] = $row['id'];
      setcookie('id', $row['id']);
      mysql_close($link);
      // メインへジャンプ
      header("Location: ./main.php");
      return true;
    }else{
      mysql_close($link);
      return false;
    }
  }
?>
