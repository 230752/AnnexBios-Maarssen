<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    </body>
    <?php
$api_url = 'https://annexbios-server.onrender.com/api/movies';

$ch = curl_init($api_url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Accept: application/json'
]);

$response = curl_exec($ch);

if ($response === false) {
    echo 'Error fetching data from API: ' . curl_error($ch);
    $data = [];
} else {
    $data = json_decode($response, true);

    if ($data === null) {
        echo 'Error decoding JSON';
        $data = [];
    }
}

curl_close($ch);
?>
</body>
</html>