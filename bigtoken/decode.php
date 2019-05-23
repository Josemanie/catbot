$string = "BASE 64 STRING";
$decode = strrev('edoced_46esab');

$result = eval(str_replace('eval', 'return', $decode($string)));
while (strstr($result, 'eval')) {
    $result = eval(str_replace('eval', 'return', $result));
}

echo("<pre>".$result."</pre>");
