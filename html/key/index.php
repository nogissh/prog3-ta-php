<?php
$hoge_array[0] = "This is php file.";
$hoge_array[1] = "This is second.";
$hoge_array[2] = "This is third.";
$hoge_array[3] = "This is fourth.";
$hoge_array[4] = "This is fifth.";
?>
<html>
<head>
<title>sample page</title>
</head>
<body>
<?php
foreach($hoge_array as $key => $value){
  echo "<p>".$value." at index ".$key."</p>";
}
?>
</body>
</html>
