<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kadai_021_confirmation</title>
</head>

<body>
  <h2>個人情報入力フォームの確認画面</h2>
  
  <p>お名前：<?php echo $_POST['user_name'];?></p>
  <p>性別：<?php echo $_POST['user_gender'];?></p>
  <p>メールアドレス：<?php echo $_POST['user_email'];?></p>
  
</body>
</html>


