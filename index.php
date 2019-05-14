<?php
require 'html_crypto.php';
$html = '<!doctype html>
<html>
<head>
  <meta charset="utf8">
  <title>Example Test Page</title>
</head>
<body>
  <h1>Hello Ubiwan Soliti !</h1>
</body>
</html>';
echo html_crypto::encrypt($html);
?>
