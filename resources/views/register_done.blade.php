<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mt.Mine | ログイン</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="sanitize.css-master/sanitize.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="header-inner">
      <div class="header-left">
        <a href="#" class="header-logo">Mt.Mine</a>
      </div>
      <div class="header-right">
        <a href="user/profile?id={{$user->id}}">
          @if(is_null($user->picture))
            <img src="imges/default.png" alt="画像" class="user-picture">
          @else
            <img src="storage/{{$user->picture}}" alt="画像" class="user-picture">
          @endif
        </a>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="top-contents" style="max-width:1200px; margin:0 auto; height:600px; background-color:#fff;">
    <p>アカウント登録が完了しました。</p>
    <a href="post/index">さっそく山を探す</a>

    </div>
  </div>

  <footer>
    <div class="footer-inner">
      <p>copyright©️Mt.Mine All Right Reserved</p>
    </div>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>

