<?php 
try {
  $db= new PDO('mysql:dbname=mini_bbs;host=localhost;charset=utf8', 'yuuki', 'leota_army');
}catch(PDOExeption $e) {
echo '接続失敗しました'. $e->getMessage();
exit();
}