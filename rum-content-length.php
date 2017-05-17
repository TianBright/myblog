<?php
$html = "<html><head><title>content-length</title></head>content: this is the content, It is divided into two parts, and the last part key is 'MUST EXSITS' </html>";
header("Content-Length: " . strlen($html));
header("X-Content-Length: " . strlen($html) );
flush();
echo substr($html, 0, 100);
flush();
echo substr($html, 100);
?>