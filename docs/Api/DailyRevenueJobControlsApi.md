# FomF\Ungerboeck\Client\DailyRevenueJobControlsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dailyRevenueJobControlsGetDailyRevenueJobControl**](DailyRevenueJobControlsApi.md#dailyRevenueJobControlsGetDailyRevenueJobControl) | **GET** /api/v1/DailyRevenueJobControl/{Orgcode}/{Sequence} | Standard - Get a daily revenue job control by its parameters
[**dailyRevenueJobControlsGetDailyRevenueJobControlList**](DailyRevenueJobControlsApi.md#dailyRevenueJobControlsGetDailyRevenueJobControlList) | **GET** /api/v1/DailyRevenueJobControl/{OrgCode} | Standard - Search for daily revenue job controls using OData.


# **dailyRevenueJobControlsGetDailyRevenueJobControl**
> \FomF\Ungerboeck\Client\Model\DailyRevenueJobControlsModel dailyRevenueJobControlsGetDailyRevenueJobControl($orgcode, $sequence)

Standard - Get a daily revenue job control by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DailyRevenueJobControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orgcode = "orgcode_example"; // string | 
$sequence = 56; // int | The sequence number of daily revenue job control

try {
    $result = $apiInstance->dailyRevenueJobControlsGetDailyRevenueJobControl($orgcode, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyRevenueJobControlsApi->dailyRevenueJobControlsGetDailyRevenueJobControl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgcode** | **string**|  |
 **sequence** | **int**| The sequence number of daily revenue job control |

### Return type

[**\FomF\Ungerboeck\Client\Model\DailyRevenueJobControlsModel**](../Model/DailyRevenueJobControlsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailyRevenueJobControlsGetDailyRevenueJobControlList**
> \FomF\Ungerboeck\Client\Model\DailyRevenueJobControlsModel dailyRevenueJobControlsGetDailyRevenueJobControlList($org_code, $search)

Standard - Search for daily revenue job controls using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DailyRevenueJobControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->dailyRevenueJobControlsGetDailyRevenueJobControlList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyRevenueJobControlsApi->dailyRevenueJobControlsGetDailyRevenueJobControlList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\DailyRevenueJobControlsModel**](../Model/DailyRevenueJobControlsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

