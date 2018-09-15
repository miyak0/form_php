<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>form</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>
<h1 class="contact"><a href="index.php">Contact</a></h1>
  <div class="p-form">
    <div class="p-form__wrap">
  <div class="p-form__wrap__input">
    <p class="p-form__sent">
      <span class="p-form__sent__right">name:</span><?php echo $_POST['name'] ?>
      <span class="p-form__sent__left"></span>
      様</p>
    <!-- <div class="p-form__label">name</div> -->
  </div>
  <div class="p-form__wrap__input">
    <p class="p-form__sent">
      <span class="p-form__sent__right">email:</span><?php echo $_POST['email'] ?>
      <span class="p-form__sent__left"></span></p>
  </div>
</div>
<div class="p-form__birthday">
    <div for="" class="p-form__birthday__ttl">birthday</div>
    <div class="p-form__birthday__ymd"><?php echo $_POST['year'] ?>年</div>
    <div class="p-form__birthday__ymd"><?php echo $_POST['month'] ?>月</div>
    <div class="p-form__birthday__ymd"><?php echo $_POST['day'] ?>日</div>
 
      </div>  
      <div class="p-form__comment">
      <h2  class="p-form__comment_ttl">comment</h2>
      <div class="p-form__comment__sent">
        <?php echo $_POST['comment'] ?>
      </div>

      </div>
    </div>
</body>
</html>