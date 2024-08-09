<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new OpenAPI\Client\Configuration();
$config->setHost('https://openapi.flowaccount.com/test');

$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(new GuzzleHttp\Client(), $config);
$content_type = 'application/x-www-form-urlencoded'; // string |
$grant_type = 'client_credentials'; // string |
$scope = 'flowaccount-api'; // string |
$client_id = '<<client-id>>'; // string |
$client_secret = '<<client-secret>>'; // string |

try {
    $result = $apiInstance->tokenPost($content_type, $grant_type, $scope, $client_id, $client_secret);

    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->tokenPost: ', $e->getMessage(), PHP_EOL;
}
