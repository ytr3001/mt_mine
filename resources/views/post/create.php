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
</head>
<body>
  <header>
    <div class="header-inner">
      <div class="header-left">
      <button class="btn back" onclick="history.back()">キャンセル</button>
      </div>
      <div class="header-right">
        <button class="btn post">投稿する</button>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="create-contents">
      <form method="post" action="create">
        <div class="photo-flie">
          <label for="file" class="photo"><i class="far fa-image my-big1"></i><br><span>写真を選択</span></label>
          <input type="file" id="file" class="file" name="picture">
        </div>
        <div class="post-title">
          <input type="text" id="title" class="title" name="title" placeholder="タイトルを入力">
        </div>
        <div class="submit">
          <input type="submit" class="submit">
        </div>
      </form>
    </div>
  </div>

  <footer>
    <div class="footer-inner">
      <p>copyright©️Mt.Mine All Right Reserved</p>
    </div>
  </footer>
</body>
</html>