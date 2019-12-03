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
        <a href="../post/index" class="header-back header-back_profile" >&lt</a>
      </div>
      <!-- ログインユーザーのidとリクエストユーザーのidが同じであれば設定アイコンの表示 -->
      @if($user->id === $auth->id)
      <div class="header-right">
        <div class="utility">
          <div class="utility-item">
            <a href="edit" class="utility-item_config"><i class="fas fa-cog"></i></a>
          <div>
        </div>
      </div>
      @endif
    </div>
  </header>

  <div class="container">
    <div class="profile">
      <div class="user-area">
        <!-- ユーザー写真の登録があれば登録された写真、なければデフォルト画像表示 -->
        @if(is_null($user->picture))
          <img src="../../public/images/default.png" alt="画像" class="user-picture_medium">
        @else
          <img src="../../public/storage/{{$user->picture}}" alt="画像" class="user-picture_medium">
        @endif
        <span class="user-name">{{$user->name}}</span>
        <!-- ログインユーザーとリクエストユーザーのidが同じであれば投稿アイコンの表示 -->
        @if($user->id === $auth->id)
          <a href="../post/create"><i class="far fa-paper-plane"></i></a>
        @endif
        <p class="user-introduction">{{$user->introduction}}</p>
      </div>
      <!-- 投稿があれば投稿写真を表示。投稿がなければメッセージの表示 -->
      @if(count($posts) <= 0 )
        @if($user->id !== $auth->id)
          <div class="no-post_user">
            <p class="no-post_message">※このアカウントはまだ投稿がありません。</p>
            <a href="../user/profile" class="link">マイページへ</a>
          </div>
        @else
          <div class="no-post_guest">
            <p class="no-post_message">ようこそMt.mineへ！</p>
            <p class="no-post_message">さっそくあなたの山の魅力を伝えてみましょう。</p>
            <div class="posts-area">
              <a href="../post/create" for="file" class="create-post-picture"><i class="far fa-image" ></i><br></a>
              <a href="../post/create" class="link">投稿する</a>
            </div>
          </div>
        @endif
      @else
        @foreach($posts as $post)
          <div class="posts-area">
            <a href="../post/show?id={{$post->id}}&no=1">
              <img src="../../public/storage/{{$post->picture}}" alt="画像" class="post-picture_medium">
              <!-- 投稿にタイトルがあれば投稿タイトルの表示、なければ無題と表示 -->
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