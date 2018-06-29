<?php
try {
  // MySqlに接続
  $pdo=new PDO('mysql:host=133.78.83.191:13306;dbname=test_db;charset=utf8', 'testuser', '0000');

  // GETパラメータを取り出す
  $name = $_GET['name'];
  $place = $_GET['place'];
  $age = $_GET['age'];

  // GETパラメータの有無を確認
  if (!isset($name)) {
    $judge = False;
  }
  else if (!isset($place)) {
    $judge = False;
  }
  else if (!isset($age)) {
    $judge = False;
  }
  else {
    $judge = True;
  }

  // GETパラメータの内容をデータベースに反映
  if ($judge == True) {
    $stmt = $pdo->prepare('INSERT INTO test_table (name, place, age) VALUES (:name, :place, :age)');
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':place', $place, PDO::PARAM_STR);
    $stmt->bindParam(':age', $age, PDO::PARAM_INT);
    $stmt->execute();
    $message = "Completed.";
  }
  else {
    $message = "GET paramaters are not enough.";
  }

  // 終了メッセージ
  echo $message;
}
catch (PDOException $e) {
  print "Connection failed because: {$e->getMessage()}";
}
?>
