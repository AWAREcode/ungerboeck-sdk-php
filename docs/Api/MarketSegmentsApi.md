# FomF\Ungerboeck\Client\MarketSegmentsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketSegmentsGetMarketSegment**](MarketSegmentsApi.md#marketSegmentsGetMarketSegment) | **GET** /api/v1/MarketSegments/{OrgCode}/{Major}/{Minor} | Basic - Get a single market segment by its parameters
[**marketSegmentsGetMarketSegmentList**](MarketSegmentsApi.md#marketSegmentsGetMarketSegmentList) | **GET** /api/v1/MarketSegments/{OrgCode} | Basic - Search for market segment using OData.


# **marketSegmentsGetMarketSegment**
> \FomF\Ungerboeck\Client\Model\MarketSegmentsModel marketSegmentsGetMarketSegment($org_code, $major, $minor)

Basic - Get a single market segment by its parameters

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
    $result = $apiInstance->marketSegmentsGetMarketSegment($org_code, $major, $minor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketSegmentsApi->marketSegmentsGetMarketSegment: ', $e->getMessage(), PHP_EOL;
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

# **marketSegmentsGetMarketSegmentList**
> \FomF\Ungerboeck\Client\Model\MarketSegmentsModel marketSegmentsGetMarketSegmentList($org_code, $search)

Basic - Search for market segment using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->marketSegmentsGetMarketSegmentList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketSegmentsApi->marketSegmentsGetMarketSegmentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\MarketSegmentsModel**](../Model/MarketSegmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

