$(function() {
  // show.php 
  //削除ボタンクリック時にモーダルの表示
  $('#check').click(function() { 
      $('#check-modal').fadeIn();
  });
  //モーダルの削除ボタンクリック時にpost-idをsubmit
  $('#delete').click(function() {
    $('#delete-post').submit();
  }); 
  // キャンセルボタンクリック時にモーダルを消す
  $('#back').click(function() {
    $('#check-modal').fadeOut();
  })
  //create.php
  //投稿ボタンクリック時に投稿内容をsubmit
  $('#post').click(function() {
    $('#create-post').submit();
  })
  // アップロードするファイルを選択
  $('input[type=file]').change(function() {
    var file = $(this).prop('files')[0];
    // 画像以外は処理を停止
    if (! file.type.match('image.*')) {
      // クリア
      $(this).val('');
      $('#image').html('');
      return;
    }
    // 画像表示
    var reader = new FileReader();
    reader.onload = function() {
      var img_src = $('<img>').attr('src', reader.result);
      $('#image').html(img_src);
      $('#picture').css('display', 'none');
    }
    reader.readAsDataURL(file);
  });
})
