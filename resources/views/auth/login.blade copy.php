<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mt.Mine | ログイン</title>
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link rel="stylesheet" href="../../public/sanitize.css-master/sanitize.css">
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
        <a href="login">ログイン</a>
        <span> / </span>
        <a href="../user/add">新規登録</a>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="login-contents">
      <form action="login" method="post" class="login-user">
        {{ csrf_field() }}
        <p class="title">ログイン</p>
        <p>{{$message}}</p>
        <input type="email" class="email" name="email" placeholder="メールアドレス">
        <input type="password" class="password" name="password" placeholder="パスワード">
        <input type="submit" class="login" value="ログイン">
      </form>
      <a href="../user/add" class=add-nav>新規会員登録はこちら</a>
    </div>
  </div>

  <footer>
    <div class="footer-inner">
      <p>copyright©️Mt.Mine All Right Reserved</p>
    </div>
  </footer>

  <script src="../../public/js/script.js"></script>
</body>
</html>