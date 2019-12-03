<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mt.Mine | 投稿詳細</title>
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link rel="stylesheet" href="../../public/sanitize.css-master/sanitize.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="header-inner">
      <div class="header-left">
        <button class="header-back header-back_show" onclick="history.back()">&lt</button>
      </div>
      <!-- ログインユーザーとリクエストユーザーのidが同じであればデリートアイコンの表示 -->
      @if($user->id === $auth->id)
        <div class="header-right">
          <div class="utility">
            <div class="utility-item">
              <button id="utility-item_trash" class="utility-item_trash"><i class="far fa-trash-alt"></i></button>
            <div>
          </div>
        </div>
      @endif
    </div>
  </header>

  <div class="container"> 
    <div class="show">

      <div class="user-area">
        <a href="../user/profile?id={{$user->id}}">
        <!-- ユーザー写真の登録があれば登録された写真、なければデフォルト画像表示 -->
        @if(is_null($user->picture))
          <img src="../../public/images/default.png" alt="画像" class="user-picture">
        @else
          <img src="../../public/storage/{{$user->picture}}" alt="画像" class="user-picture">
        @endif
          <span class="user-name">{{$user->name}}</span>
        </a>
      </div>

      <div class="post-area">
        <img src="../../public/storage/{{$post->picture}}" alt="画像" class="post-picture_large">
        <div class="post-title">
          <!-- 投稿にタイトルがあれば投稿タイトルの表示、なければ無題と表示 -->
          @if(is_null($post->title))
          <p>無題</p>
          @else
          <p>{{$post->title}}</p>
          @endif
        </div> 
        <div class="post-date">
          <pre>{{$date}}   {{$time}}</pre>
        </div>
      </div>

      <form action="show" method="post" id="delete-post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$post->id}}">
        <input type="hidden" name="no" value="<?= $_GET['no']; ?>">
      </form>

    </div>

    <div id=check-modal class="check-modal">
      <div class="modal">
        <div class="message-area">
          <p class="modal-title">投稿削除</p>
          <p class="modal-message">本当にこの投稿の削除をしてよろしいですか？</p>
        </div>
        <div class="button-area">
          <button id="cancell-button" class="cancell-button">キャンセル</button>
          <button id="delete-button" class="delete-button">削除</button>
        </div>
      </div>
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