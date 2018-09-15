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
<h1 class="contact">Contact</h1>
  <form action="sent.php" method="post" class="p-form">
    <div class="p-form__wrap">
  <div class="p-form__wrap__input">
    <input type="text" name="name" class="p-form__input">
    <label for="" class="p-form__label">name</label>
  </div>
  <div class="p-form__wrap__input">
    <input type="email" name="email" class="p-form__input">
    <label for="" class="p-form__label">email</label>
  </div>
</div>
<div class="p-form__birthday">
    <label for="" class="p-form__birthday__ttl">birthday</label>
    <select name="year"" id="" class="p-form__birthday__select">
    <option value="year" class="p-form__birthday__option">year</option>
      <?php
      for ($i = 1919; $i <= 2018; $i++) {
        echo "<option value='{$i}'>{$i}</option>";
      }
      ?>
      </select>
    <select name="month" id="" class="p-form__birthday__select">
    <option value="month" class="p-form__birthday__option">month</option>
    <?php
      for ($i = 1; $i <= 12; $i++) {
        echo "<option value='{$i}'>{$i}</option>";
      }
      ?>
      </select>
    <select name="day" id="" class="p-form__birthday__select">
    <option value="day" class="p-form__birthday__option">day</option>
    <?php
      for ($i = 1; $i <= 31; $i++) {
        echo "<option value='{$i}'>{$i}</option>";
      }
      ?>
      </select>  
      </div>  
      <div class="p-form__comment">
      <label for="" class="p-form__comment_ttl">comment</label>
      <textarea name="comment" id="" cols="30" rows="10" class="p-form__comment__text"></textarea>
      </div>
      <input type="submit" value="send" class="submit">
  </form>
</body>
</html>