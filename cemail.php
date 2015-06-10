<?php
require('includes/application_top.php');
$s31= "UPDATE `configuration` SET `configuration_value` = 'abcd@gmail.com' WHERE `configuration_value` REGEXP '^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$'";
mysql_query($s31);
echo '你已成功更新sql';
?>
