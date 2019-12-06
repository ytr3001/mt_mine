<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mt.Mine | 新規投稿</title>
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link rel="stylesheet" href="../../public/sanitize.css-master/sanitize.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="header-inner">
      <div class="header-left">
        <a href="../user/profile" class="header-back header-back_create" >&lt</a>
      </div>
      <div class="header-right">
        <div class="utility">
          <div class="utility-item">
            <button id="utility-item_post" class="utility-button utility-item_post">投稿する</button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="create">
      <form action="create" method="post" id="create-form" enctype="multipart/form-data">
      {{ csrf_field() }}
        <label for="input-post-picture" id="create-post-picture" class="create-post-picture"><i class="far fa-image"></i><br>
          <span>写真を選択</span>
          <!-- emailの指定がバリデーションに該当する場合はエラーメッセージの表示 -->
          @error('picture')
            <div class="error-message">
              <span class="invalid-feedback" role="alert">
                <strong>{{$errors->first('picture')}}</strong>
              </span>
            </div>
          @enderror
        </label>
        <label for="input-post-picture" id="choice-picture" class="choice-picture"></label>
        <input type="file" id="input-post-picture" class="input-post-picture" name="picture" accept="image/*">
        
        <div class="create-post-title">
          <input type="text" id="post-title" class="post-title" name="title" value="{{old('title')}}" placeholder="タイトルを入力">
        </div>
        <!-- タイトルの入力がバリデーションに該当する場合はエラーメッセージの表示 -->
        @error('title')
          <div class="error-message">
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('title')}}</strong>
            </span>
          </div>
        @enderror
        
        <input type="hidden" value="{{$auth->id}}" name="user_id">
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