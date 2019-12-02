<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>執筆 | ばとん</title>
  <link rel="stylesheet" href="/css/ress.css">
  <link rel="stylesheet" href="/css/common.css">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="/css/page-top.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
</head>

<body>
  <header id="header" class="header"></header>

  <div class="main">
    <h1 class="title">執筆</h1>

    <div class="contents">
      <h2 class="contents__title">ストーリー</h2>
      <div class="contents__body">
        <div class="post-content__item">
        </div>
      </div>
    </div>

    <div class="contents">
      <h2 class="contents__title">投稿</h2>
      <div class="contents__body">
        <div class="form-error">
        </div>
        <textarea name="content" class="txt-area post-form__text-area"></textarea>
        <div class="post-form__btn"">
        <input type=" submit" value="投稿" class="btn btn--green">
        </div>
      </div>
    </div>
  </div>

  <div id="page_top" class="page_top"><a href="#"></a></div>

  <footer id="footer" class="footer"></footer>

  <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
  <script>
    $(function() {
      $("#header").load("header.html");
      $("#footer").load("footer.html");
    });
  </script>
</body>

</html>