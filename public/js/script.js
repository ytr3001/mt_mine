$(function() {
  // show.php 
  //ゴミ箱のアイコンをクリック時にモーダルの表示
  $('#utility-item_trash').click(function() { 
      $('#check-modal').fadeIn();
  });

  //モーダルの削除ボタンクリック時にpost-idをsubmit
  $('#delete-button').click(function() {
    $('#delete-post').submit();
  }); 

  // キャンセルボタンクリック時にモーダルを消す
  $('#cancell-button').click(function() {
    $('#check-modal').fadeOut();
  })


  //create.php
  //投稿ボタンクリック時に投稿内容をsubmit
  $('#utility-item_post').click(function() {
    $('#create-form').submit();
  })
  // 投稿写真のアップロード
  $('input[type=file]').change(function() {
    var file = $(this).prop('files')[0];
    // 画像以外は処理を停止
    if (! file.type.match('image.*')) {
      // クリア
      $(this).val('');
      $('#choice-picture').html('');
      return;
    }
    // 画像表示 FileApi
    // reader.readAsDataURLでファイルを読み込み正常に完了したらreader.onloadが発火してreader.resultで読み込んだデータを返す
    var reader = new FileReader();
    reader.onload = function() {
      var img_src = $('<img>').attr('src', reader.result);
      $('#choice-picture').html(img_src);
      $('#create-post-picture').css('display', 'none');
    }
    reader.readAsDataURL(file);
  });

  
  //edit.php
  // ユーザー写真のアップロード
  $('input[type=file]').change(function() {
    var file = $(this).prop('files')[0];
    // 画像以外は処理を停止
    if (! file.type.match('image.*')) {
      // クリア
      $(this).val('');
      $('#choice-picture').html('');
      return;
    }
    // 画像表示 FileApi
    // reader.readAsDataURLでファイルを読み込み正常に完了したらreader.onloadが発火してreader.resultで読み込んだデータを返す
    var reader = new FileReader();
    reader.onload = function() {
      var img_src = $('<img>').attr('src', reader.result);
      $('#choice-picture').html(img_src);
      $('#edit-user-picture').css('display', 'none');
    }
    reader.readAsDataURL(file);
  });

  //保存ボタンクリック時にプロフィール編集内容をsubmit
  $('#utility-item_edit').click(function() {
    $('#edit-user-form').submit();
  })
})
