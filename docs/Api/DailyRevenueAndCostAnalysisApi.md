# FomF\Ungerboeck\Client\DailyRevenueAndCostAnalysisApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysis**](DailyRevenueAndCostAnalysisApi.md#dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysis) | **GET** /api/v1/DailyRevenueAndCostAnalysis/{OrgCode}/{RevenueSequence} | Standard - Get a daily revenue and cost analysis by its parameters
[**dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysisList**](DailyRevenueAndCostAnalysisApi.md#dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysisList) | **GET** /api/v1/DailyRevenueAndCostAnalysis/{OrgCode} | Standard - Search for daily revenue and cost analysis using OData.


# **dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysis**
> \FomF\Ungerboeck\Client\Model\DailyRevenueAndCostAnalysisModel dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysis($org_code, $revenue_sequence)

Standard - Get a daily revenue and cost analysis by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DailyRevenueAndCostAnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | 
$revenue_sequence = 56; // int | The revenue sequence number of daily revenue and cost analysis

try {
    $result = $apiInstance->dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysis($org_code, $revenue_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyRevenueAndCostAnalysisApi->dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**|  |
 **revenue_sequence** | **int**| The revenue sequence number of daily revenue and cost analysis |

### Return type

[**\FomF\Ungerboeck\Client\Model\DailyRevenueAndCostAnalysisModel**](../Model/DailyRevenueAndCostAnalysisModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysisList**
> \FomF\Ungerboeck\Client\Model\DailyRevenueAndCostAnalysisModel dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysisList($org_code, $search)

Standard - Search for daily revenue and cost analysis using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DailyRevenueAndCostAnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Organization code of daily revenue and cost analysis
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysisList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyRevenueAndCostAnalysisApi->dailyRevenueAndCostAnalysisGetDailyRevenueAndCostAnalysisList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Organization code of daily revenue and cost analysis |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\DailyRevenueAndCostAnalysisModel**](../Model/DailyRevenueAndCostAnalysisModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

