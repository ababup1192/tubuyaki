<?php
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
  $query = "SELECT User.id, User.name, Tweet.content FROM Tweet, User WHERE User.id = Tweet.user_id ORDER BY Tweet.id DESC;";
  $result = mysql_query($query);
  // クエリの成功判定
  while($row = mysql_fetch_assoc($result)){
    // セッションにユーザIDを保存
    if($row['id'] == $_SESSION['id']){
      print("<div class=\"alert alert-success\">\n");
      print("<strong>".$row['name']."</strong>\n");
      print($row['content']);
      print("</div>");
    }else{
      print("<div class=\"alert alert-info\">\n");
      print("<strong>".$row['name']."</strong>\n");
      print($row['content']);
      print("</div>");
    }
  }
  /*echo '<script type="text/javascript">
    $(window).load(function() {
      $("#tweet-field").empty();
      alert($.cookie(\'id\'));
    });
  </script>';*/
  mysql_close($link);
?>
