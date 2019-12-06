<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mt.Mine | ユーザー編集</title>
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link rel="stylesheet" href="../../public/sanitize.css-master/sanitize.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="header-inner">
      <div class="header-left">
        <a href="../user/profile" class="header-back header-back_edit" >&lt</a>
      </div>
      <div class="header-right">
        <div class="utility">
          <div class="utility-item">
            <button id="utility-item_edit" class="utility-button utility-item_edit">保存</button>
          </div>
        </div>
      </div>
     </div>
  </header>

  <div class="container">
    <div class="edit-user">
      <form action="edit" method="post" id="edit-user-form" enctype="multipart/form-data">
      {{ csrf_field() }}

        <div class="user-picture-area">
          <!-- ユーザー写真の登録があれば登録された写真、なければデフォルト画像表示 -->
          @if(is_null($auth->picture))
            <label for="input-user-picture" id="edit-user-picture" class="edit-user-picture"><img src="../../public/images/default.png" alt="画像" class="user-picture_medium"></label>
          @else
            <label for="input-user-picture" id="choice-picture" class="choice-picture"><img src="../../public/storage/{{$auth->picture}}" alt="画像"></label>
          @endif
          <label for="input-user-picture" id="choice-picture" class="choice-picture"></label>
          <input type="file" id="input-user-picture" class="input-user-picture" name="picture" accept="image/*" value="{{$auth->picture}}">
          <input type="hidden" name="before_picture" value="{{$auth->picture}}">
          <!-- pictureの指定がバリデーションに該当する場合はエラーメッセージの表示 -->
          @if($errors->has('picture'))
           <div class="error-message">
              <span class="invalid-feedback" role="alert">
                <strong>{{$errors->first('picture')}}</strong>
              </span>
            </div>
          @endif
        </div>

        <div class="user-name">
          <label for="name" class="edit-user-name">名前</label><input type="text" id="name" class="input-user-name" name="name" placeholder="名前を変更" 
          value="{{$auth->name}}" required autofocus>
          <!-- 名前の入力がバリデーションに該当する場合はエラーメッセージの表示 -->
          @if($errors->has('name'))
           <div class="error-message">
              <span class="invalid-feedback" role="alert">
                <strong>{{$errors->first('name')}}</strong>
              </span>
            </div>
          @endif
        </div>

        <div class="user-introduction">
          <label for="introduction" class="edit-user-introduction">自己紹介</label><textarea id="introduction" class="textarea-user-introduction" name="introduction"  placeholder="自己紹介を追加" cols="30" rows="5">{{$auth->introduction}}</textarea>
           <!-- 自己紹介の入力がバリデーションに該当する場合はエラーメッセージの表示 -->
           @if($errors->has('introduction'))
            <div class="error-message">
                <span class="invalid-feedback" role="alert">
                  <strong>{{$errors->first('introduction')}}</strong>
                </span>
            </div>
           @endif
        </div>
        
        <div class="line1"></div>
        <div class="logout">
          <a href="logout" class="logout-link">ログアウト</a>
        </div>
        <div class="line1"></div>
        <div class="user-delete">
          <a href="delete" class="user-delete-link">アカウントを削除</a>
        </div>
        <div class="line2"></div>
        <input type="hidden" name="id" value="{{$auth->id}}">
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