<?php
$hoge = <<<EOT
this is php file
<br>
of here document.
EOT;
?>
<html>
<head>
<title>sample page</title>
</head>
<body>
<p><?php echo $hoge?></p>
</body>
</html>
