<?php
include "lib/functions.php";
// echo "Hello World!";
// $link = mysqli_connect("localhost", "root", "", "mysql");
//
// /* проверка соединения */
// if (mysqli_connect_errno()) {
//     printf("Не удалось подключиться: %s\n", mysqli_connect_error());
//     exit();
//
// }
//
//
// if ($result = mysqli_query($link, "SELECT * FROM help_relation LIMIT 2")) {
//     printf("Select вернул %d строк.\n", mysqli_num_rows($result));
//
//     /* очищаем результирующий набор */
//     mysqli_free_result($result);
// }
 ?>
 <!DOCTYPE html>
 <html lang="ru" dir="ltr">
   <head>
     <link rel="stylesheet" href="/css/main.css">

     <meta charset="utf-8">
     <title>Mysite</title>
   </head>
   <body>
<table id="main">
  <tr>
    <td colspan="2">
      <h1>Заголовок сайта</h1>
      <img src="#" alt="">
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <hr/>
    </td>
  </tr>
<tr>
  <td colspan="2">
    <table id="topmenu">
<tr>
  <td class="top">
    <a href="index.php"> Main </a>
  </td>
  <td class="top">
    <a href="top_articles.php"> Статьи </a>
  </td>
  <td class="top">
    <a href="top_reg.php"> Регистрация </a>
  </td>
  <td class="top">
    <a href="top_questbook.php">Гостевая книга</a>
  </td>
<td>
<form id="auth" action="auth.php" method="post">
<table id="form_auth">
  <tr>
    <td>E-mail</td>
    <td>
      <input type="text" id="email">
    </td>
    <td>Password:</td>
    <td>
      <input type="text" id="password">
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <input type="submit" name="button_auth" value="Войти">

    </td>
  </tr>
</table>
</form>
</td>
</tr>
    </table>
  </td>
</tr>
<tr>
  <td colspan="2">
    <hr>
  </td>
</tr>
<tr>
  <td id="articles">
    <div class="content">
      <h2>Заголовок статьи</h2>
      <p>Статья1</p>
      <p>Статья2</p>
      <p>Статья3</p>
      <p>Статья4</p>
    </div>
  </td>
  <td id="banners">
    <h2>Реклама</h2>
    <hr>
    <a href="index.php">
      <img src="#" alt="">
    </a>
    <hr>
    <a href="index.php">
      <img src="" alt="">
    </a>
  </td>
</tr>
<tr>
  <td colspan="2">
    <hr>
  </td>
</tr>
<tr>
  <td colspan="2" id="bottom">
    Все права защищены &copy Мой сайт 2018г.
  </td>
</tr>
</table>
   </body>
 </html>
