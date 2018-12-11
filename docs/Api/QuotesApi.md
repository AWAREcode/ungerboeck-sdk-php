# FomF\Ungerboeck\Client\QuotesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotesGetQuotes**](QuotesApi.md#quotesGetQuotes) | **GET** /api/v1/Quotes/{OrgCode}/{Sequence} | Get a quote by its parameters
[**quotesGetQuotesList**](QuotesApi.md#quotesGetQuotesList) | **GET** /api/v1/Quotes/{OrgCode} | Search for quote using OData.


# **quotesGetQuotes**
> \FomF\Ungerboeck\Client\Model\QuotesModel quotesGetQuotes($org_code, $sequence)

Get a quote by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the quote.
$sequence = 56; // int | The sequence of the quote.

try {
    $result = $apiInstance->quotesGetQuotes($org_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quotesGetQuotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the quote. |
 **sequence** | **int**| The sequence of the quote. |

### Return type

[**\FomF\Ungerboeck\Client\Model\QuotesModel**](../Model/QuotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesGetQuotesList**
> \FomF\Ungerboeck\Client\Model\QuotesModel[] quotesGetQuotesList($org_code, $search)

Search for quote using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->quotesGetQuotesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quotesGetQuotesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\QuotesModel[]**](../Model/QuotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

