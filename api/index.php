<?php
if (isset($_GET["skey"])) {
    $skey = $_GET["skey"]; // Get skey from URL parameter
    $apiUrl = "http://localhost:3000/calculate_bkn";
    $data = json_encode(array("skey" => $skey));

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data))
    );

    $response = curl_exec($ch);

    if ($response === false) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        echo $response;
    }

    curl_close($ch);
} else {
    echo "Please provide 'skey' parameter.";
}
?>
