# FomF\Ungerboeck\Client\ExpenseReportHeadersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**expenseReportHeadersGetExpenseReportDetail**](ExpenseReportHeadersApi.md#expenseReportHeadersGetExpenseReportDetail) | **GET** /api/v1/ExpenseReportHeaders/{ID} | Standard - Get an expense report header by its parameters
[**expenseReportHeadersGetExpenseReportDetailList**](ExpenseReportHeadersApi.md#expenseReportHeadersGetExpenseReportDetailList) | **GET** /api/v1/ExpenseReportHeaders | Standard - Search for expense report headers using OData.


# **expenseReportHeadersGetExpenseReportDetail**
> \FomF\Ungerboeck\Client\Model\ExpenseReportHeadersModel expenseReportHeadersGetExpenseReportDetail($id)

Standard - Get an expense report header by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The report Id of the expense report header entry.

try {
    $result = $apiInstance->expenseReportHeadersGetExpenseReportDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportHeadersApi->expenseReportHeadersGetExpenseReportDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The report Id of the expense report header entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportHeadersModel**](../Model/ExpenseReportHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReportHeadersGetExpenseReportDetailList**
> \FomF\Ungerboeck\Client\Model\ExpenseReportHeadersModel expenseReportHeadersGetExpenseReportDetailList($search)

Standard - Search for expense report headers using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->expenseReportHeadersGetExpenseReportDetailList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportHeadersApi->expenseReportHeadersGetExpenseReportDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportHeadersModel**](../Model/ExpenseReportHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

