<html>
<head>
<meta charset="utf-8">
</head>
<body>
body
<image src="12345.jpg">
#<?php
#
#$file="12345.jpg";
#private function _addEtag($file) {
#    $last_modified_time = filemtime($file); 
#    $etag = md5_file($file);
#    // always send headers 
#    header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_modified_time)." GMT"); 
#    header("Etag: $etag"); 
#    // exit if not modified
#    if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time || 
#    @trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) { 
#        header("HTTP/1.1 304 Not Modified"); 
#        exit; 
#    }
#}
#
#?>

<image src="12345.jpg">
RUM</body>
</html>
