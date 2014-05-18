<?php
//echo"<pre>";print_r($_SERVER);
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
echo $_SERVER['QUERY_STRING'];
phpinfo();