<?php
$url = "https://sports2.jojobet991.com/tr";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:114.0) Gecko/20100101 Firefox/114.0");

// Eğer özel bir başlık veya çerez gerekiyorsa ekleyebilirsiniz:
// curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer TOKEN"]);
// curl_setopt($ch, CURLOPT_COOKIE, "session=your_session_id");

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
