<?php
header('Content-type: application/json');
//获取回调函数名
$jsoncallback = htmlspecialchars($_REQUEST ['callback']);
//json数据
$json_data='{"title":"6如何阅读一本书","authors":["anjoy","nicho"],"edition":3,"year":2011}';
//输出jsonp格式的数据
echo $jsoncallback."(".$json_data.")";
?>