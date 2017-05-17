<?php
ob_start();
?> 
<html>
<head>
<meta charset="utf-8">
<title>rum</title>
</head>
<body>RUM
<?php
echo " Hello ";
$out2 = ob_get_contents();
ob_end_clean();

echo "World";
$out1 = ob_get_contents();
ob_end_clean();

//Just output
echo $out2;
echo $out1;
?> 