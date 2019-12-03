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
      <!-- ログインしていない時はヘッダーロゴからtop画面へナビ -->
      @if(Auth::check())
      <div class="header-left">
        <h1 class="header-logo"><a href="#">Mt.Mine</a></h1>
      </div>
      @else
      <div class="header-left">
        <h1 class="header-logo"><a href="../top">Mt.Mine</a></h1>
      </div>
      @endif
      <!-- ログインしている時はユーザー写真を表示、ログインしていない時はログイン画面or新規登録画面へのナビを表示 -->
      @if(Auth::check())
      <div class="header-right">
        <div class="login-user">
          <a href="../user/profile?id={{$user->id}}">
            <!-- ユーザー写真の登録があれば登録された写真、なければデフォルト画像表示 -->
            @if(is_null($user->picture))
            <img src="../../public/images/default.png" alt="画像" class="login-user-picture">
            @else
            <img src="../../public/storage/{{$user->picture}}" alt="画像" class="login-user-picture">
            @endif
          </a>
        </div>
      </div>
      @else
      <div class="header-right">
        <div class="utility">
          <ul class="utility-item">
            <li><a href="../login" class="utility-item_login">ログイン /</a></li>
            <li><a href="../register" class="utility-item_register">新規登録</a></li>
          </ul>   
        </div>
      </div>
      @endif
    </div>
  </header>

  <div class="container">
    <div class="posts-wrapper">
      <div class="posts-column">
        @foreach($posts as $post)
        <div class="post">
          <a href="../post/show?id={{$post->id}}&no=0">
            <img src="../../public/storage/{{$post->picture}}" alt="画像" class="post-picture_small">
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