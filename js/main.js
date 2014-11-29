// ツイート再読み込み関数
var reload = (function(){
  $("#tweet-field").empty();
  $.ajax({
    type: 'GET',
    // ここのドメイン(localhost)を本番環境用に変更。
    url: "http://localhost://tweet_reload.php",
    dataType: 'json'
  }).done(function(data){
    $.each(data, function(i,tweet){
      var id = $.cookie('id');
      if(id == tweet.id){
        $("#tweet-field").append('<div class="alert alert-success"><strong>' +
        tweet.name + '</strong>\n' + tweet.content + '</div>');
      }else{
        $("#tweet-field").append('<div class="alert alert-info"><strong>' +
        tweet.name + '</strong>\n' + tweet.content + '</div>');
      }
    });
  });
});

var tweet = (function(id, content){
  $.ajax({
    type: 'POST',
    // ここのドメイン(localhost)を本番環境用に変更。
    url: "http://localhost://tweet.php",
    data: 'inputUserId=' + id + '&inputContent=' + content
  }).done(function(data){
    reload();
  });
});

$(window).load(function() {
    $("#tweet-form").keypress(function(e){
        if(e.which == 13){
          var text = $(this).val();
          if(text == ""){
            reload();
          }else{
            var id = $.cookie('id');
            tweet(id, text);
            $(this).val('');
          }
        }
    });
});
