<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mt.Mine | プロフィール</title>
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link rel="stylesheet" href="../../public/sanitize.css-master/sanitize.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="header-inner">
      <div class="header-left">
        <a href="../post/index" class="back2" >&lt</a>
      </div>
      <div class="header-right">
        @if(Auth::check())
          @if($user->id === $auth->id)
          <a href="edit" class="config"><i class="fas fa-cog"></i></a>
          @endif
        @endif
      </div>
    </div>
  </header>

  <div class="container">
    <div class="user-contents">
      <div class="user-area">
        @if(is_null($user->picture))
        <img src="../../public/images/default.png" alt="画像" class="user-picture">
        @else
        <img src="../../public/storage/{{$user->picture}}" alt="画像" class="user-picture">
        @endif
        <span class="user-name">{{$user->name}}</span>
        @if(Auth::check())
          @if($user->id === $auth->id)
          <a href="../post/create"><i class="far fa-paper-plane my-big2"></i></a>
          @endif
        @endif
        <p class="introduction">{{$user->introduction}}</p>
      </div>
      
      @if(count($posts) <= 0 )
        @if($user->id !== $auth->id)
          <div class="posts-area1">
            <p class="message1">※このアカウントはまだ投稿がありません。</p>
            <a href="../user/profile" class="btn">マイページへ</a>
          </div>
        @else
          <div class="posts-area2">
            <p class="message2">ようこそMt.mineへ！</p>
            <p class="message2">さっそくあなたの山の魅力を伝えてみましょう。</p>
            <div class="picture-flie">
            <a href="../post/create">
            <label for="file" id="picture" class="picture"><i class="far fa-image my-big2" ></i><br></label>
            </a>
            </div>
            <a href="../post/create" class="btn">投稿する</a>
          </div>
        @endif
      @else
        @foreach($posts as $post)
          <div class="posts-area3">
            <a href="../post/show?id={{$post->id}}&no=1">
              <img src="../../public/storage/{{$post->picture}}" alt="画像" class="post-picture">
              @if(is_null($post->title))
              <p class="post-title">無題</p>
              @else
              <p class="post-title">{{$post->title}}</p>
              @endif
            </a>
          </div>
        @endforeach
      @endif
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