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
        <a href="../user/edit" class="back3" >&lt</a>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="delete-user-contents">
    <form action="delete" method="post">
      {{ csrf_field() }}
        <div class="picture-flie">
          @if(is_null($user->picture))
          <label for="file" id="user-picture"><i class="fas fa-user my-big3"></i><br></label>
          @else
          <label for="file" id="user-image"><img src="../../public/storage/{{$user->picture}}" alt="画像"></label>
          @endif
        </div>
        <div class="user-name">
          <label>名前</label><input class="name" value="{{$user->name}}" readonly>
        </div>
        <div class="user-introduction">
          <label>自己紹介</label><textarea cols="30" rows="5" readonly>{{$user->introduction}}</textarea>
        </div>
        <div class="delete-area">
          <p class="delete-message">アカウントの削除を行います。本当によろしいですか？</p>
          <button class="delete-btn">削除する</button>
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
