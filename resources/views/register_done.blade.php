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
        <h1 class="header-logo"><a href="post/index">Mt.Mine</a></h1>
      </div>
      <div class="header-right">
        <div class="login-user">
          <a href="user/profile?id={{$user->id}}">
            <!-- ユーザー写真の登録があれば登録された写真、なければデフォルト画像表示 -->
            @if(is_null($user->picture))
            <img src="images/default.png" alt="画像" class="login-user-picture">
            @else
            <img src="storage/{{$user->picture}}" alt="画像" class="login-user-picture">
            @endif
          </a>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="register-done">
      <p class="register-done_message">アカウント登録が完了しました。<br/></p>
      <img src="../public/images/mountain.png" alt="画像" class="register-done_picture">
      <a href="post/index" class="link">さっそく山を探す</a>
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

