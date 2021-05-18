# FomF\Ungerboeck\Client\GLDeferralRevenueDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gLDeferralRevenueDetailsGetGlDeferralRevenueDetail**](GLDeferralRevenueDetailsApi.md#gLDeferralRevenueDetailsGetGlDeferralRevenueDetail) | **GET** /api/v1/GLDeferralRevenueDetails/{HdrSequence}/{Sequence} | Standard - Get an GlDeferral Revenue Detail by its parameters
[**gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList**](GLDeferralRevenueDetailsApi.md#gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList) | **GET** /api/v1/GLDeferralRevenueDetails | Standard - Search for GlDeferral Revenue Details using OData.


# **gLDeferralRevenueDetailsGetGlDeferralRevenueDetail**
> \FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel gLDeferralRevenueDetailsGetGlDeferralRevenueDetail($hdr_sequence, $sequence)

Standard - Get an GlDeferral Revenue Detail by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLDeferralRevenueDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hdr_sequence = 56; // int | The Header Sequence of the GlDeferral Revenue Detail.
$sequence = 56; // int | The sequence of the GlDeferral Revenue Detail.

try {
    $result = $apiInstance->gLDeferralRevenueDetailsGetGlDeferralRevenueDetail($hdr_sequence, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLDeferralRevenueDetailsApi->gLDeferralRevenueDetailsGetGlDeferralRevenueDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hdr_sequence** | **int**| The Header Sequence of the GlDeferral Revenue Detail. |
 **sequence** | **int**| The sequence of the GlDeferral Revenue Detail. |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel**](../Model/GLDeferralRevenueDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList**
> \FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList($search)

Standard - Search for GlDeferral Revenue Details using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLDeferralRevenueDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLDeferralRevenueDetailsApi->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel**](../Model/GLDeferralRevenueDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

