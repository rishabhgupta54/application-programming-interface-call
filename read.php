<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost/application-programming-interface/getEmployees.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => '',
    CURLOPT_HTTPHEADER => array(
        "authentication: $2y$12$/7rDb1ni.gURXt6u.ngUjeAG620DLJuScyS6DC.z62AITMhllVG5O",
        "cache-control: no-cache",
        "content-type: application/json",
    )
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}