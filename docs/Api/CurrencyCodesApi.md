# FomF\Ungerboeck\Client\CurrencyCodesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currencyCodesGetCurrencyCode**](CurrencyCodesApi.md#currencyCodesGetCurrencyCode) | **GET** /api/v1/CurrencyCodes/{Code} | Basic - Get a single Currency Code by its parameters
[**currencyCodesGetCurrencyCodesList**](CurrencyCodesApi.md#currencyCodesGetCurrencyCodesList) | **GET** /api/v1/CurrencyCodes | Basic - Search for Currency codes using OData. Note that this search endpoint does not use OrgCode.


# **currencyCodesGetCurrencyCode**
> \FomF\Ungerboeck\Client\Model\CurrencyCodesModel currencyCodesGetCurrencyCode($code)

Basic - Get a single Currency Code by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CurrencyCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | The code of the currency.  Note that since the '\\*' character is one of the reserved characters for a URL, the default code (\\*\\*\\*) can't be used here.  Instead, use it as a query string parameter: \".../api/v1/CurrencyCodes?code=***\"

try {
    $result = $apiInstance->currencyCodesGetCurrencyCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCodesApi->currencyCodesGetCurrencyCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The code of the currency.  Note that since the &#39;\\*&#39; character is one of the reserved characters for a URL, the default code (\\*\\*\\*) can&#39;t be used here.  Instead, use it as a query string parameter: \&quot;.../api/v1/CurrencyCodes?code&#x3D;***\&quot; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CurrencyCodesModel**](../Model/CurrencyCodesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyCodesGetCurrencyCodesList**
> \FomF\Ungerboeck\Client\Model\CurrencyCodesModel currencyCodesGetCurrencyCodesList($search)

Basic - Search for Currency codes using OData. Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CurrencyCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->currencyCodesGetCurrencyCodesList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCodesApi->currencyCodesGetCurrencyCodesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CurrencyCodesModel**](../Model/CurrencyCodesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

