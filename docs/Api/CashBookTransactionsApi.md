# FomF\Ungerboeck\Client\CashBookTransactionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cashBookTransactionsGetCashBookTransaction**](CashBookTransactionsApi.md#cashBookTransactionsGetCashBookTransaction) | **GET** /api/v1/CashBookTransactions/{OrgCode}/{Sequence} | Standard - Get an Cash Book Transaction by its parameters
[**cashBookTransactionsGetCashBookTransactionList**](CashBookTransactionsApi.md#cashBookTransactionsGetCashBookTransactionList) | **GET** /api/v1/CashBookTransactions/{OrgCode} | Standard - Search for Cash Book Transactions using OData.


# **cashBookTransactionsGetCashBookTransaction**
> \FomF\Ungerboeck\Client\Model\CashBookTransactionsModel cashBookTransactionsGetCashBookTransaction($org_code, $sequence)

Standard - Get an Cash Book Transaction by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CashBookTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Cash Book Transaction.
$sequence = 56; // int | The sequence number of the Cash Book Transaction.

try {
    $result = $apiInstance->cashBookTransactionsGetCashBookTransaction($org_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashBookTransactionsApi->cashBookTransactionsGetCashBookTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Cash Book Transaction. |
 **sequence** | **int**| The sequence number of the Cash Book Transaction. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CashBookTransactionsModel**](../Model/CashBookTransactionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cashBookTransactionsGetCashBookTransactionList**
> \FomF\Ungerboeck\Client\Model\CashBookTransactionsModel cashBookTransactionsGetCashBookTransactionList($org_code, $search)

Standard - Search for Cash Book Transactions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CashBookTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->cashBookTransactionsGetCashBookTransactionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashBookTransactionsApi->cashBookTransactionsGetCashBookTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CashBookTransactionsModel**](../Model/CashBookTransactionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

