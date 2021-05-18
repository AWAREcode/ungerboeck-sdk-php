# FomF\Ungerboeck\Client\ExpenseReportDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**expenseReportDetailsGetExpenseReportDetail**](ExpenseReportDetailsApi.md#expenseReportDetailsGetExpenseReportDetail) | **GET** /api/v1/ExpenseReportDetails/{Sequence} | Standard - Get an expense report detail by its parameters
[**expenseReportDetailsGetExpenseReportDetailList**](ExpenseReportDetailsApi.md#expenseReportDetailsGetExpenseReportDetailList) | **GET** /api/v1/ExpenseReportDetails | Standard - Search for expense report details using OData.


# **expenseReportDetailsGetExpenseReportDetail**
> \FomF\Ungerboeck\Client\Model\ExpenseReportDetailsModel expenseReportDetailsGetExpenseReportDetail($sequence)

Standard - Get an expense report detail by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence = 56; // int | The sequence number of the expense report detail entry.

try {
    $result = $apiInstance->expenseReportDetailsGetExpenseReportDetail($sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportDetailsApi->expenseReportDetailsGetExpenseReportDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence** | **int**| The sequence number of the expense report detail entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportDetailsModel**](../Model/ExpenseReportDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReportDetailsGetExpenseReportDetailList**
> \FomF\Ungerboeck\Client\Model\ExpenseReportDetailsModel expenseReportDetailsGetExpenseReportDetailList($search)

Standard - Search for expense report details using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->expenseReportDetailsGetExpenseReportDetailList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportDetailsApi->expenseReportDetailsGetExpenseReportDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportDetailsModel**](../Model/ExpenseReportDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

