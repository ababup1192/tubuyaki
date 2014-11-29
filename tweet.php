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
  $query = sprintf("INSERT INTO Tweet(id, user_id, content) VALUES (null, \"%s\", \"%s\");"
  , $_POST['inputUserId'], $_POST['inputContent']);
  mysql_query($query);

  // データベース切断
  mysql_close($link);
?>
