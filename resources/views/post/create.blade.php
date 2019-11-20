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
      <button class="back" onclick="history.back()">&lt</button>
      </div>
      <div class="header-right">
        <button id="post">投稿する</button>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="create-contents">
      <form action="create" method="post" id="create-post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="picture-flie">
          <label for="file" id="picture"><i class="far fa-image my-big1"></i><br><span>写真を選択</span></label>
          <label for="file" id="image"></label>
          <input type="file" id="file" class="file" name="picture" accept="image/*">
        </div>
        <div class="post-title">
          <input type="text" id="title" class="title" name="title" placeholder="タイトルを入力">
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