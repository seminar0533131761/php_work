<?php
$imageUrl = 'https://cdn2.vectorstock.com/i/1000x1000/23/81/default-avatar-profile-icon-vector-18942381.jpg';

$ch = curl_init($imageUrl);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$imageData = curl_exec($ch);

curl_close($ch);

$savePath = 'D:/php_work/image.jpg';

$file = fopen($savePath, 'wb');

fwrite($file, $imageData);

fclose($file);

echo "image downloaded and saved to '$savePath'";
?>
