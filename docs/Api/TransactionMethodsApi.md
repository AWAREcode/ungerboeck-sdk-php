# FomF\Ungerboeck\Client\TransactionMethodsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionMethodsGetTransactionMethod**](TransactionMethodsApi.md#transactionMethodsGetTransactionMethod) | **GET** /api/v1/TransactionMethods/{OrgCode}/{Code} | Standard - Get a single transaction method by its parameters
[**transactionMethodsGetTransactionMethodList**](TransactionMethodsApi.md#transactionMethodsGetTransactionMethodList) | **GET** /api/v1/TransactionMethods/{OrgCode} | Standard - Search for transaction methods using OData.


# **transactionMethodsGetTransactionMethod**
> \FomF\Ungerboeck\Client\Model\TransactionMethodsModel transactionMethodsGetTransactionMethod($org_code, $code)

Standard - Get a single transaction method by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\TransactionMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the transaction method.
$code = "code_example"; // string | The code of the transaction method.

try {
    $result = $apiInstance->transactionMethodsGetTransactionMethod($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMethodsApi->transactionMethodsGetTransactionMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the transaction method. |
 **code** | **string**| The code of the transaction method. |

### Return type

[**\FomF\Ungerboeck\Client\Model\TransactionMethodsModel**](../Model/TransactionMethodsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMethodsGetTransactionMethodList**
> \FomF\Ungerboeck\Client\Model\TransactionMethodsModel transactionMethodsGetTransactionMethodList($org_code, $search)

Standard - Search for transaction methods using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\TransactionMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->transactionMethodsGetTransactionMethodList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMethodsApi->transactionMethodsGetTransactionMethodList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\TransactionMethodsModel**](../Model/TransactionMethodsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

