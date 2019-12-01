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
      @if($user->id !== $auth->id)
        <div class="col" style="padding:80px 0 150px; margin-top: 40px;background-color:#e9edf3; border-top:1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;">
          <p style="font-size:1.8rem;margin:0 auto 20px; font-weight:bold; padding:30px 0 0;">※このアカウントはまだ投稿がありません。</p>
          <a href="../user/profile" style="margin:0 auto;text-align:center;background-color:tomato;color:#fff; border-radius:20px; padding:5px 10px;">マイページへ</a>
        </div>
      @elseif(count($posts) <= 0 )
        <div class="col" style="padding:10px 0 70px; margin-top: 40px;background-color:#e9edf3; border-top:1px solid #a9a9a9;border-bottom:1px solid #a9a9a9;">
          <p style="margin:0 auto; font-weight:bold; padding:30px 0 0;">ようこそMt.mineへ！</p>
          <p style="margin:0 auto; font-weight:bold">さっそくあなたの山の魅力を伝えてみましょう。</p>
          <div class="picture-flie" style="margin:0 auto;">
          <a href="../post/create">
          <label for="file" id="picture" class="picture" style="padding-top: 60px;margin: 0 auto;text-align:center; margin:30px; width:450px; height:280px;"><i class="far fa-image my-big1" style="font-size:16rem;"></i><br></label>
          </a>
          </div>
          <a href="../post/create" style="padding:5px 10px;margin:0 auto;text-align:center;background-color:#38b48b;color:#fff; border-radius:3px;">投稿する</a>
          </div>
      @else
        @foreach($posts as $post)
          <div class="col">
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