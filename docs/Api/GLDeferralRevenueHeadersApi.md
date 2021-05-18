# FomF\Ungerboeck\Client\GLDeferralRevenueHeadersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gLDeferralRevenueHeadersGetGLDeferralRevenueHeaders**](GLDeferralRevenueHeadersApi.md#gLDeferralRevenueHeadersGetGLDeferralRevenueHeaders) | **GET** /api/v1/GLDeferralRevenueHeaders/{Sequence} | Standard - Get an GlDeferral Revenue Header by its parameters
[**gLDeferralRevenueHeadersGetGLDeferralRevenueHeadersList**](GLDeferralRevenueHeadersApi.md#gLDeferralRevenueHeadersGetGLDeferralRevenueHeadersList) | **GET** /api/v1/GLDeferralRevenueHeaders | Standard - Search for GlDeferral Revenue Header using OData.


# **gLDeferralRevenueHeadersGetGLDeferralRevenueHeaders**
> \FomF\Ungerboeck\Client\Model\GLDeferralRevenueHeadersModel gLDeferralRevenueHeadersGetGLDeferralRevenueHeaders($sequence)

Standard - Get an GlDeferral Revenue Header by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLDeferralRevenueHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence = 56; // int | The sequence of the GlDeferral Revenue Header.

try {
    $result = $apiInstance->gLDeferralRevenueHeadersGetGLDeferralRevenueHeaders($sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLDeferralRevenueHeadersApi->gLDeferralRevenueHeadersGetGLDeferralRevenueHeaders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence** | **int**| The sequence of the GlDeferral Revenue Header. |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLDeferralRevenueHeadersModel**](../Model/GLDeferralRevenueHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gLDeferralRevenueHeadersGetGLDeferralRevenueHeadersList**
> \FomF\Ungerboeck\Client\Model\GLDeferralRevenueHeadersModel gLDeferralRevenueHeadersGetGLDeferralRevenueHeadersList($search)

Standard - Search for GlDeferral Revenue Header using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLDeferralRevenueHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->gLDeferralRevenueHeadersGetGLDeferralRevenueHeadersList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLDeferralRevenueHeadersApi->gLDeferralRevenueHeadersGetGLDeferralRevenueHeadersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLDeferralRevenueHeadersModel**](../Model/GLDeferralRevenueHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

