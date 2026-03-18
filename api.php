<?php
// Session yapılandırması - v3.2.1
// Token burada gizli
$BOT_TOKEN = "7998364179:AAGs83KUMQIHxNpxoKiPKQ1tBInU0g0kgrE";

// JSON olarak döndür
header('Content-Type: application/json');
echo json_encode(['token' => $BOT_TOKEN]);
?>
