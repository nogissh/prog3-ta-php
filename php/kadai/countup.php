<?php
if (isset($_GET['n'])){
  $n = $_GET['n'];
}
else{
  $n = 0;
}
?>
<html>
<head>
<title>sample page</title>
</head>
<body>
<?php
echo "<p>".$n."</p>";
echo '<p><a href="http://localhost:8000/kadai/countup.php?n='.($n+1).'">next</a></p>';
?>
</body>
</html>
