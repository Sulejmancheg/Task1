<h3 style="margin: auto">
<?php
use model\Auth;
$auth = new Auth();
echo 'Добрый день, '.$auth->getUser().PHP_EOL;
?>
</h3>
