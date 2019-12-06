<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mt.Mine | アカウント削除</title>
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link rel="stylesheet" href="../../public/sanitize.css-master/sanitize.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="header-inner">
      <div class="header-left">
        <a href="../user/edit" class="header-back header-back_delete" >&lt</a>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="delete-user">
      <form action="delete" method="post">
        {{ csrf_field() }}
        <div class="user-picture-area">
          <!-- ユーザー写真の登録があれば登録された写真、なければデフォルト画像表示 -->
          @if(is_null($auth->picture))
            <label class="delete-user-picture"><img src="../../public/images/default.png" alt="画像" class="user-picture_medium"></label>
          @else
            <label class="choice-picture"><img src="../../public/storage/{{$auth->picture}}" alt="画像"></label>
          @endif
        </div>
        <div class="user-name">
          <label class="delete-user-name">名前</label><input class="input-user-name" value="{{$auth->name}}" readonly>
        </div>
        <div class="user-introduction">
          <label class="delete-user-introduction">自己紹介</label><textarea class="textarea-user-introduction" cols="30" rows="5" readonly>{{$auth->introduction}}</textarea>
        </div>
        <div class="delete-area">
          <p class="delete-message">アカウントの削除を行います。本当によろしいですか？</p>
          <button class="delete-button">削除する</button>
        </div>   
      </form>
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
