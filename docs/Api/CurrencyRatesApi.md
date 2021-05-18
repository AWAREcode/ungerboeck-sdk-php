# FomF\Ungerboeck\Client\CurrencyRatesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currencyRatesGetCurrencyRate**](CurrencyRatesApi.md#currencyRatesGetCurrencyRate) | **GET** /api/v1/CurrencyRates/{CurrencyCode}/{SequenceNumber} | Basic - Get a single Currency Rate by its parameters
[**currencyRatesGetCurrencyRateList**](CurrencyRatesApi.md#currencyRatesGetCurrencyRateList) | **GET** /api/v1/CurrencyRates | Basic - Search for Currency Rates using OData. Note that this search endpoint does not use OrgCode.
[**currencyRatesPostCurrencyRate**](CurrencyRatesApi.md#currencyRatesPostCurrencyRate) | **POST** /api/v1/CurrencyRates | Standard - Add a Currency Rates
[**currencyRatesPutCurrencyRate**](CurrencyRatesApi.md#currencyRatesPutCurrencyRate) | **PUT** /api/v1/CurrencyRates/{currencyCode}/{sequenceNumber} | Standard - Edit a Currency Rates


# **currencyRatesGetCurrencyRate**
> \FomF\Ungerboeck\Client\Model\CurrencyRatesModel currencyRatesGetCurrencyRate($currency_code, $sequence_number)

Basic - Get a single Currency Rate by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CurrencyRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | Currency code of the currency rate
$sequence_number = 56; // int | Sequence Number of the currecy rate

try {
    $result = $apiInstance->currencyRatesGetCurrencyRate($currency_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyRatesApi->currencyRatesGetCurrencyRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| Currency code of the currency rate |
 **sequence_number** | **int**| Sequence Number of the currecy rate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CurrencyRatesModel**](../Model/CurrencyRatesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyRatesGetCurrencyRateList**
> \FomF\Ungerboeck\Client\Model\CurrencyRatesModel currencyRatesGetCurrencyRateList($search)

Basic - Search for Currency Rates using OData. Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CurrencyRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->currencyRatesGetCurrencyRateList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyRatesApi->currencyRatesGetCurrencyRateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CurrencyRatesModel**](../Model/CurrencyRatesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyRatesPostCurrencyRate**
> \FomF\Ungerboeck\Client\Model\CurrencyRatesModel currencyRatesPostCurrencyRate($data)

Standard - Add a Currency Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CurrencyRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\CurrencyRatesModel(); // \FomF\Ungerboeck\Client\Model\CurrencyRatesModel | (Include in the HTTP Body) A CurrencyRatesModel to add.

try {
    $result = $apiInstance->currencyRatesPostCurrencyRate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyRatesApi->currencyRatesPostCurrencyRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\CurrencyRatesModel**](../Model/CurrencyRatesModel.md)| (Include in the HTTP Body) A CurrencyRatesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CurrencyRatesModel**](../Model/CurrencyRatesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyRatesPutCurrencyRate**
> \FomF\Ungerboeck\Client\Model\CurrencyRatesModel currencyRatesPutCurrencyRate($currency_code, $sequence_number, $data)

Standard - Edit a Currency Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CurrencyRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | Currency Code of the Currency rates.
$sequence_number = 56; // int | Sequence Number of the Currency rates.
$data = new \FomF\Ungerboeck\Client\Model\CurrencyRatesModel(); // \FomF\Ungerboeck\Client\Model\CurrencyRatesModel | (Include in the HTTP Body) A CurrencyRates to edit.

try {
    $result = $apiInstance->currencyRatesPutCurrencyRate($currency_code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyRatesApi->currencyRatesPutCurrencyRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| Currency Code of the Currency rates. |
 **sequence_number** | **int**| Sequence Number of the Currency rates. |
 **data** | [**\FomF\Ungerboeck\Client\Model\CurrencyRatesModel**](../Model/CurrencyRatesModel.md)| (Include in the HTTP Body) A CurrencyRates to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CurrencyRatesModel**](../Model/CurrencyRatesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

