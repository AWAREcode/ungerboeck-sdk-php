# FomF\Ungerboeck\Client\TransactionMethodsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionMethodsGetTransactionMethods**](TransactionMethodsApi.md#transactionMethodsGetTransactionMethods) | **GET** /api/v1/TransactionMethods/{OrgCode}/{Code} | Get a transaction method by its parameters
[**transactionMethodsGetTransactionMethodsList**](TransactionMethodsApi.md#transactionMethodsGetTransactionMethodsList) | **GET** /api/v1/TransactionMethods/{OrgCode} | Search for transaction methods using OData.


# **transactionMethodsGetTransactionMethods**
> \FomF\Ungerboeck\Client\Model\TransactionMethodsModel transactionMethodsGetTransactionMethods($org_code, $code)

Get a transaction method by its parameters

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
    $result = $apiInstance->transactionMethodsGetTransactionMethods($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMethodsApi->transactionMethodsGetTransactionMethods: ', $e->getMessage(), PHP_EOL;
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

# **transactionMethodsGetTransactionMethodsList**
> \FomF\Ungerboeck\Client\Model\TransactionMethodsModel[] transactionMethodsGetTransactionMethodsList($org_code, $search)

Search for transaction methods using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->transactionMethodsGetTransactionMethodsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMethodsApi->transactionMethodsGetTransactionMethodsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\TransactionMethodsModel[]**](../Model/TransactionMethodsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

