<?php
$relationships = json_decode(base64_decode($_ENV['PLATFORM_RELATIONSHIPS']), TRUE);

define("DB_HOST", $relationships['database'][0]['host']);
define("DB_USER", $relationships['database'][0]['username']);
define("DB_PASS", $relationships['database'][0]['password']);
define("DB_NAME", $relationships['database'][0]['path']);
?>
