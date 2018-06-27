<?php
$hoge = "This is php file in loop, ";
?>
<html>
<head>
<title>sample page</title>
</head>
<body>
<?php
for($i=0; $i<100; $i++){
  echo "<p>".$hoge." ".$i.".</p>";
}
?>
</body>
</html>

