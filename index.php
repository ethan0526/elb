<?php
@date_default_timezone_set("Asia/Taipei");
$current_datetime = @date('Y-m-d H:i:s', @time());
echo "Service @ $current_datetime:".file_get_contents('/etc/hostname')."\n";