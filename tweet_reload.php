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
  $query = "SELECT User.id, User.name, Tweet.content FROM Tweet, User WHERE User.id = Tweet.user_id ORDER BY Tweet.id DESC;";
  $result = mysql_query($query);
  // クエリの成功判定
  $i = 0;
  print("[");
  while($row = mysql_fetch_assoc($result)){
    $i++;
    if(mysql_num_rows($result) == $i){
      print("{\"id\": ".$row[id].", \"name\": \"".$row[name]."\", \"content\": \"".$row[content]."\"}");
    }else{
      print("{\"id\": ".$row[id].", \"name\": \"".$row[name]."\", \"content\": \"".$row[content]."\"}, ");
    }
  }
  print("]");

  // データベース切断
  mysql_close($link);
?>
