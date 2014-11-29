<?php
  require("session.php");
  session_check();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>つぶやきシェア | サインアップ</title>
  <!-- Latest compiled and minified CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body
<div class="container">
  <div class="row text-center pad-top">
    <div class="col-md-12">
      <h2>会員登録</h2>
    </div>
  </div>
  <div class="row  pad-top">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>登録情報 </strong>
        </div>
        <div class="panel-body">
          <form action="signup_result.php" method="post" role="form">
            <br/>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" class="form-control" name="inputName" placeholder="ニックネーム" />
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">@</span>
              <input type="email" class="form-control" name="inputEmail" placeholder="メールアドレス" />
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="inputPassword" placeholder="パスワード" />
            </div>
            <!-- 送信ボタン -->
            <input class="btn btn-success" type="submit"/>
            <hr />
            すでに登録済みですか?  <a href="signin.php" >サインインページへ</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
