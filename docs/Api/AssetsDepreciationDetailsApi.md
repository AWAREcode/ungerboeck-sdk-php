# FomF\Ungerboeck\Client\AssetsDepreciationDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetsDepreciationDetailsGetAssetsDepreciationDetail**](AssetsDepreciationDetailsApi.md#assetsDepreciationDetailsGetAssetsDepreciationDetail) | **GET** /api/v1/AssetsDepreciationDetails/{OrgCode}/{Sequence}/{Asset}/{Revision}/{Book} | Standard - Retrieve a AssetsDepreciationDetail record
[**assetsDepreciationDetailsGetAssetsDepreciationDetailList**](AssetsDepreciationDetailsApi.md#assetsDepreciationDetailsGetAssetsDepreciationDetailList) | **GET** /api/v1/AssetsDepreciationDetails/{OrgCode} | Standard - Search for AssetsDepreciationDetails using OData.


# **assetsDepreciationDetailsGetAssetsDepreciationDetail**
> \FomF\Ungerboeck\Client\Model\AssetsDepreciationDetailsModel assetsDepreciationDetailsGetAssetsDepreciationDetail($org_code, $sequence, $asset, $revision, $book)

Standard - Retrieve a AssetsDepreciationDetail record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AssetsDepreciationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the AssetsDepreciationDetail entry.
$sequence = 56; // int | The sequence number of the AssetsDepreciationDetail entry.
$asset = "asset_example"; // string | The fixed asset code of the AssetsDepreciationDetail entry.
$revision = 56; // int | The sequence number of the schedule revision of the AssetsDepreciationDetail entry.
$book = "book_example"; // string | The book code of the AssetsDepreciationDetail entry.

try {
    $result = $apiInstance->assetsDepreciationDetailsGetAssetsDepreciationDetail($org_code, $sequence, $asset, $revision, $book);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsDepreciationDetailsApi->assetsDepreciationDetailsGetAssetsDepreciationDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the AssetsDepreciationDetail entry. |
 **sequence** | **int**| The sequence number of the AssetsDepreciationDetail entry. |
 **asset** | **string**| The fixed asset code of the AssetsDepreciationDetail entry. |
 **revision** | **int**| The sequence number of the schedule revision of the AssetsDepreciationDetail entry. |
 **book** | **string**| The book code of the AssetsDepreciationDetail entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AssetsDepreciationDetailsModel**](../Model/AssetsDepreciationDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsDepreciationDetailsGetAssetsDepreciationDetailList**
> \FomF\Ungerboeck\Client\Model\AssetsDepreciationDetailsModel assetsDepreciationDetailsGetAssetsDepreciationDetailList($org_code, $search)

Standard - Search for AssetsDepreciationDetails using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AssetsDepreciationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->assetsDepreciationDetailsGetAssetsDepreciationDetailList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsDepreciationDetailsApi->assetsDepreciationDetailsGetAssetsDepreciationDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AssetsDepreciationDetailsModel**](../Model/AssetsDepreciationDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

