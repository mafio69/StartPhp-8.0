<?php use App\Test;

require dirname(__DIR__) . '/vendor/autoload.php';

define('TEST_CONSTANTS', 1234);

$extension = extension_loaded('xdebug') ? 'exists' : 'non ';
$fullName = (new Test())->hello();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hello word <?= $fullName ?></h1>

<p>Extension xdebug <?= $extension ?></p>

<?php
phpinfo();
?>
</body>
</html>