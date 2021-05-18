# FomF\Ungerboeck\Client\ExpenseReportApprovalsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**expenseReportApprovalsGetExpenseReportApproval**](ExpenseReportApprovalsApi.md#expenseReportApprovalsGetExpenseReportApproval) | **GET** /api/v1/ExpenseReportApprovals/{LogSequence} | Standard - Get an Expense Report Approval by its parameters
[**expenseReportApprovalsGetExpenseReportApprovalList**](ExpenseReportApprovalsApi.md#expenseReportApprovalsGetExpenseReportApprovalList) | **GET** /api/v1/ExpenseReportApprovals | Standard - Search for Expense Report Approvals using OData.


# **expenseReportApprovalsGetExpenseReportApproval**
> \FomF\Ungerboeck\Client\Model\ExpenseReportApprovalsModel expenseReportApprovalsGetExpenseReportApproval($log_sequence)

Standard - Get an Expense Report Approval by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$log_sequence = 56; // int | The Log Sequence of the Expense Report Approval is associated with.

try {
    $result = $apiInstance->expenseReportApprovalsGetExpenseReportApproval($log_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportApprovalsApi->expenseReportApprovalsGetExpenseReportApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_sequence** | **int**| The Log Sequence of the Expense Report Approval is associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportApprovalsModel**](../Model/ExpenseReportApprovalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReportApprovalsGetExpenseReportApprovalList**
> \FomF\Ungerboeck\Client\Model\ExpenseReportApprovalsModel expenseReportApprovalsGetExpenseReportApprovalList($search)

Standard - Search for Expense Report Approvals using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->expenseReportApprovalsGetExpenseReportApprovalList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportApprovalsApi->expenseReportApprovalsGetExpenseReportApprovalList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportApprovalsModel**](../Model/ExpenseReportApprovalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

