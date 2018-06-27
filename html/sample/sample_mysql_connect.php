<?php
try {
  // MySqlに接続
  $pdo=new PDO('mysql:host=133.78.83.191:13306;dbname=test_db;charset=utf8', 'testuser', '0000');

  // クエリを取得
  $q = $pdo->query('select * from test_table');

  // オブジェクトに整形
  $userdata = array();
  foreach($q as $key => $value) {
    $userdata[] = array(
      'id'=>$key,
      'name'=>$value['name'],
      'place'=>$value['place'],
      'age'=>$value['age'],
    );
  }
  $q = null;

  // 結果を返す
  header('Content-type: application/json');
  echo json_encode($userdata);
}
catch (PDOException $e) {
  print "Connection failed because: {$e->getMessage()}";
}
?>
