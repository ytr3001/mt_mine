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
        <h1 class="header-logo"><a href="top">Mt.Mine</a></h1>
      </div>
      <div class="header-right">
        <div class="utility">
          <ul class="utility-item">
            <li><a href="login" class="utility-item_login">ログイン /</a></li>
            <li><a href="register" class="utility-item_register">新規登録</a></li>
          </ul>   
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="login">
      <form action="{{ route('login') }}" method="post" class="form">
        {{ csrf_field() }}
        <p class="form-title">ログイン</p>

        <input type="email" class="form-input" name="email" placeholder="メールアドレス" value="{{old('email')}}" required autocomplete="email" autofocus>
        <!-- emailの入力がバリデーションに該当する場合はエラーメッセージの表示 -->
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="password" class="form-input" name="password" placeholder="パスワード" required autocomplete="current-password">
        <!-- passwordの入力がバリデーションに該当する場合はエラーメッセージの表示 -->
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="submit" class="form-input form-submit form-submit_login" value="ログイン">
      </form>
      <a href="register" class=link>新規会員登録はこちら</a>
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
