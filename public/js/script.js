$(function() {
  // show.php 
  //削除ボタンクリック時にモーダルの表示
  $('#utility-item_trash').click(function() { 
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
    // 画像表示
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
      $('#user-image').html('');
      return;
    }
    // 画像表示
    var reader = new FileReader();
    reader.onload = function() {
      var img_src = $('<img>').attr('src', reader.result);
      $('#user-image').html(img_src);
      $('#user-picture').css('display', 'none');
    }
    reader.readAsDataURL(file);
  });

  //保存ボタンクリック時にプロフィール編集内容をsubmit
  $('#utility-item_edit').click(function() {
    $('#edit-user').submit();
  })
})
