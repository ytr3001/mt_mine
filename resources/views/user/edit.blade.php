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
        <button class="back2" onclick="history.back()">&lt</button>
      </div>
      <div class="header-right">
        <button id="edit">保存</button>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="edit-user-contents">
    <form action="edit" method="post" id="edit-user" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="picture-flie">
          @if(is_null($user->picture))
          <label for="file" id="user-picture"><i class="fas fa-user my-big3"></i><br></label>
          @else
          <label for="file" id="user-image"><img src="../../public/storage/{{$user->picture}}" alt="画像"></label>
          @endif
          <label for="file" id="user-image"></label>
          <input type="file" id="file" class="file" name="picture" accept="image/*" value="{{$user->picture}}">
          <input type="hidden" name="picture2" value="{{$user->picture}}">
        </div>
        <div class="user-name">
          <label for="name">名前</label><input type="text" id="name" class="name" name="name" placeholder="名前を変更" 
          value="{{$user->name}}" required autofocus>
        </div>
        <div class="user-introduction">
          <label for="introduction">自己紹介</label><textarea name="introduction" id="introduction"
           placeholder="自己紹介を追加" cols="30" rows="5">{{$user->introduction}}</textarea>
        </div>
        <div class="col2"></div>
        <div class="logout">
          <a href="logout" class="logout-btn">ログアウト</a>
        </div>
        <div class="col2"></div>
        <div class="user-delete">
        <a href="#" class="logout-btn">アカウントを削除</a>
        </div>
        <div class="col3"></div>
        <input type="hidden" name="id" value="{{$user->id}}">
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