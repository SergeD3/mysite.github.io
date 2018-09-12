<?php
$mysqli = false;

function connectDB(){
  global $mysqli;
  $mysqli = new mysqli("localhost", "root", "", "mysite");
  $mysqli = mysqli_query("SET NAMES 'utf8'");

}
function closeDB(){
  global $mysqli;
  $mysqli = Mysqli_close();
}
function getMainArticle(){
  global $mysqli;
  connectDB();
  $res = $mysqli = mysqli_query("SELECT * FROM Articles WHERE main = 1");
  closeDB();
  return $res = fetch_assoc();
}
 ?>
