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
        <a href="login" class="login">ログイン</a>
        <span> / </span>
        <a href="../user/add" class="register">新規登録</a>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="login-contents">
      <form action="{{ route('login') }}" method="post" class="login-user">
        {{ csrf_field() }}
        <p class="title">ログイン</p>
        <input type="email" class="email" name="email" placeholder="メールアドレス" value="{{old('email')}}" required autocomplete="email" autofocus>
        <input type="password" class="password" name="password" placeholder="パスワード" required autocomplete="current-password">
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



<!-- <div class="form-group row">
    <div class="col-md-6 offset-md-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
</div> -->