<?php
$json1 = '["h\u00e0 n\u1ed9i","h\u1ed3 ch\u00ed minh","\u0111\u00e0 n\u1eb5ng"]';

$json2 = '{"name":"\u0110\u1ed7 ho\u00e0n","age":"23","location":"h\u00e0 n\u1ed9i"}';

$convert1 = json_decode($json1);
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";
echo "<pre>";
print_r($convert2);
echo "</pre>";
