<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://intercipta.aplikasiku.online/index.php/Cronjob/reset_absent");
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);

curl_close($ch);
?>