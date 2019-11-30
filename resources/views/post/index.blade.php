<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mt.Mine | 投稿一覧</title>
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
      @if(Auth::check())
      <div class="header-right">
      <a href="../user/profile?id={{$user->id}}">
        @if(is_null($user->picture))
          <img src="../../public/images/default.png" alt="画像" class="user-picture">
        @else
          <img src="../../public/storage/{{$user->picture}}" alt="画像" class="user-picture">
        @endif
        </a>
      </div>
      @else
      <div class="header-right">
        <a href="../login" class="login">ログイン</a>
        <span> / </span>
        <a href="../register" class="register">新規登録</a>
      </div>
      @endif
    </div>
  </header>

  <div class="container">
    <div class="contents">
      <div class="row">
        @foreach($posts as $post)
        <div class="col">
          <a href="../post/show?id={{$post->id}}&no=0">
            <img src="../../public/storage/{{$post->picture}}" alt="画像" class="picture">
          </a>
        </div>
        @endforeach
      </div>
      {{$posts->links()}}
    </div>  
  </div>

  <footer>
    <div class="footer-inner">
      <p>copyright©️Mt.Mine All Right Reserved</p>
    </div>
  </footer>
</body>
</html>