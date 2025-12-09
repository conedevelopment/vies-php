# Cone\Vies\PublicApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkStatus()**](PublicApi.md#checkStatus) | **GET** /check-status | Check the status of each member states |
| [**checkVatNumber()**](PublicApi.md#checkVatNumber) | **POST** /check-vat-number | Check a Vat Number for a specific country |
| [**checkVatTestService()**](PublicApi.md#checkVatTestService) | **POST** /check-vat-test-service | Test the check vat service |


## `checkStatus()`

```php
checkStatus(): \Cone\Vies\Model\StatusInformationResponse
```

Check the status of each member states

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Cone\Vies\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->checkStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->checkStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cone\Vies\Model\StatusInformationResponse**](../Model/StatusInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkVatNumber()`

```php
checkVatNumber($body): \Cone\Vies\Model\CheckVatResponse
```

Check a Vat Number for a specific country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Cone\Vies\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cone\Vies\Model\CheckVatRequest(); // \Cone\Vies\Model\CheckVatRequest | The request body

try {
    $result = $apiInstance->checkVatNumber($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->checkVatNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Cone\Vies\Model\CheckVatRequest**](../Model/CheckVatRequest.md)| The request body | |

### Return type

[**\Cone\Vies\Model\CheckVatResponse**](../Model/CheckVatResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkVatTestService()`

```php
checkVatTestService($body): \Cone\Vies\Model\CheckVatResponse
```

Test the check vat service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Cone\Vies\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cone\Vies\Model\CheckVatRequest(); // \Cone\Vies\Model\CheckVatRequest | The request body

try {
    $result = $apiInstance->checkVatTestService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->checkVatTestService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Cone\Vies\Model\CheckVatRequest**](../Model/CheckVatRequest.md)| The request body | |

### Return type

[**\Cone\Vies\Model\CheckVatResponse**](../Model/CheckVatResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
