# FomF\Ungerboeck\Client\BudgetTransactionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**budgetTransactionsGetBudgetTransaction**](BudgetTransactionsApi.md#budgetTransactionsGetBudgetTransaction) | **GET** /api/v1/BudgetTransactions/{OrgCode}/{Batch}/{TransactionNum} | Standard - Retrieve a BudgetTransaction record
[**budgetTransactionsGetBudgetTransactionList**](BudgetTransactionsApi.md#budgetTransactionsGetBudgetTransactionList) | **GET** /api/v1/BudgetTransactions/{OrgCode} | Standard - Search for BudgetTransactions using OData.


# **budgetTransactionsGetBudgetTransaction**
> \FomF\Ungerboeck\Client\Model\BudgetTransactionsModel budgetTransactionsGetBudgetTransaction($org_code, $batch, $transaction_num)

Standard - Retrieve a BudgetTransaction record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BudgetTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the BudgetTransaction entry.
$batch = "batch_example"; // string | The batch id of budget batch header of the BudgetTransaction entry.
$transaction_num = 56; // int | The sequence number of the BudgetTransaction entry.

try {
    $result = $apiInstance->budgetTransactionsGetBudgetTransaction($org_code, $batch, $transaction_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetTransactionsApi->budgetTransactionsGetBudgetTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the BudgetTransaction entry. |
 **batch** | **string**| The batch id of budget batch header of the BudgetTransaction entry. |
 **transaction_num** | **int**| The sequence number of the BudgetTransaction entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BudgetTransactionsModel**](../Model/BudgetTransactionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **budgetTransactionsGetBudgetTransactionList**
> \FomF\Ungerboeck\Client\Model\BudgetTransactionsModel budgetTransactionsGetBudgetTransactionList($org_code, $search)

Standard - Search for BudgetTransactions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BudgetTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->budgetTransactionsGetBudgetTransactionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetTransactionsApi->budgetTransactionsGetBudgetTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BudgetTransactionsModel**](../Model/BudgetTransactionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

