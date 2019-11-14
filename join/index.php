<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>会員登録 | ばとん</title>
  <link rel="stylesheet" href="/css/ress.css">
  <link rel="stylesheet" href="/css/common.css">
  <link rel="stylesheet" href="/css/join.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
</head>
<body>
  <div class="main">
    <p>次のフォームに必要事項をご記入ください。</p>
    <form action="" method="post" enctype="multipart/form-data">
      <dl>
        <dt>ユーザ名</dt>
        <dd><input type="text" name="name" size="35" maxlength="255"></dd>
        <dt>メールアドレス</dt>
        <dd><input type="text" name="email" size="35" maxlength="255"></dd>
        <dt>パスワード</dt>
        <dd><input type="text" name="password" size="10" maxlength="20"></dd>
        <dt>画像</dt>
        <dd><input type="file" name="image" size="35"></dd>
      </dl>
      <div><input type="submit" value="入力内容を確認する"></div>
    </form>
  </div>
</body>
</html>