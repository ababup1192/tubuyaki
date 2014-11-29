<?php
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
  // データ挿入処理
  $query = sprintf("INSERT INTO User(id, email, password, name) VALUES (null, \"%s\", \"%s\", \"%s\");"
    , $_POST['inputEmail'], $_POST['inputPassword'], $_POST['inputName']);
  $is_success = mysql_query($query);
  // クエリの成功判定
  if($is_success){
    print("登録が成功しました。<a href=\"signin.php\">サインインページ</a>へ移動してください。");
  }else{
    print("登録に失敗しました。既に登録されているか無記入の欄があります。<a href=\"signup.php\">サインアップページ</a>へ移動してください。");
  }

  // データベース切断
  mysql_close($link);
?>
