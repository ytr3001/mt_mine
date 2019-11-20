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
        <button class="back" onclick="history.back()">&lt</button>
      </div>
      <div class="header-right">
        <button id="check"><i class="far fa-trash-alt"></i></button>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="show-contents">
      <div class="user-area">
        <a href="#">
          <img src="../../public/imges/default.png" alt="画像" class="user-picture">
          <span class="user-name">TEST</span>
        </a>
      </div>
      <div class="picture-area">
        <img src="../../public/imges/forest1.jpg" alt="画像" class="post-picture">
      </div>
      <div class="post-title">
        <p>秋の紅葉　１１月の風景</p>
      </div> 
      <div class="date">
        <pre>2019-11-18   11:00</pre>
      </div>
      <form action="show" method="post" id="delete-post">
        {{ csrf_field() }}
        <input type="hidden" name="post_id" value="">
      </form>
    </div>

    <div id=check-modal>
      <div class="modal">
        <div class="msg-area">
          <p class="modal-title">投稿削除</p>
          <p class="modal-msg">本当にこの投稿の削除をしてよろしいですか？</p>
        </div>
        <div class="btn-area">
          <button id="back" class="back">キャンセル</button>
          <button id="delete" class="delete">削除</button>
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