<?php
//******** لایسنس خود را وارد کنید  ********/
license = "6TTZ5-TZ3NF-JYW2U-ADS7U";

//******** این بخش را دست نزنید ********/
$c = curl_init();
$verifyUrl = "https://raw.githubusercontent.com/kiyantegra/Tegra/refs/heads/main/22.php={license}";
curl_setopt($c, CURLOPT_URL, $verifyUrl);
curl_setopt($c, CURLOPT_TIMEOUT, 30);
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

$curlresult = curl_exec($c);
$decodedResult = json_decode($curlresult, true);

if ($decodedResult && isset($decodedResult['status']) && $decodedResult['status'] === 'success') {
//******** این بخش را دست نزنید ********/

} else {
// اگر لایسنس معتبر نباشد
echo "لایسنس نامعتبر است!";
}
