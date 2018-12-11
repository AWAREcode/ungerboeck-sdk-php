# FomF\Ungerboeck\Client\MarketSegmentsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketSegmentsGetMarketSegments**](MarketSegmentsApi.md#marketSegmentsGetMarketSegments) | **GET** /api/v1/MarketSegments/{OrgCode}/{Major}/{Minor} | Get an market segment by its parameters
[**marketSegmentsGetMarketSegmentsList**](MarketSegmentsApi.md#marketSegmentsGetMarketSegmentsList) | **GET** /api/v1/MarketSegments/{OrgCode} | Search for market segment using OData.


# **marketSegmentsGetMarketSegments**
> \FomF\Ungerboeck\Client\Model\MarketSegmentsModel marketSegmentsGetMarketSegments($org_code, $major, $minor)

Get an market segment by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MarketSegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the market segment.
$major = "major_example"; // string | The major code of the market segment.
$minor = "minor_example"; // string | The minor code of the market segment.

try {
    $result = $apiInstance->marketSegmentsGetMarketSegments($org_code, $major, $minor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketSegmentsApi->marketSegmentsGetMarketSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the market segment. |
 **major** | **string**| The major code of the market segment. |
 **minor** | **string**| The minor code of the market segment. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MarketSegmentsModel**](../Model/MarketSegmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketSegmentsGetMarketSegmentsList**
> \FomF\Ungerboeck\Client\Model\MarketSegmentsModel[] marketSegmentsGetMarketSegmentsList($org_code, $search)

Search for market segment using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MarketSegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->marketSegmentsGetMarketSegmentsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketSegmentsApi->marketSegmentsGetMarketSegmentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\MarketSegmentsModel[]**](../Model/MarketSegmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

