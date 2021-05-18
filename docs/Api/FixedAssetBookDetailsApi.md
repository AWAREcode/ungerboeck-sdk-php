# FomF\Ungerboeck\Client\FixedAssetBookDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fixedAssetBookDetailsGetFixedAssetBookDetail**](FixedAssetBookDetailsApi.md#fixedAssetBookDetailsGetFixedAssetBookDetail) | **GET** /api/v1/FixedAssetBookDetails/{OrgCode}/{Asset}/{Book} | Standard - Retrieve a FixedAssetBookDetail record
[**fixedAssetBookDetailsGetFixedAssetBookDetailList**](FixedAssetBookDetailsApi.md#fixedAssetBookDetailsGetFixedAssetBookDetailList) | **GET** /api/v1/FixedAssetBookDetails/{OrgCode} | Standard - Search for GetFixedAssetBookDetails using OData.


# **fixedAssetBookDetailsGetFixedAssetBookDetail**
> \FomF\Ungerboeck\Client\Model\FixedAssetBookDetailsModel fixedAssetBookDetailsGetFixedAssetBookDetail($org_code, $asset, $book)

Standard - Retrieve a FixedAssetBookDetail record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FixedAssetBookDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the FixedAssetBookDetail entry.
$asset = "asset_example"; // string | The asset code of the FixedAssetBookDetail entry.
$book = "book_example"; // string | The book code of the FixedAssetBookDetail entry.

try {
    $result = $apiInstance->fixedAssetBookDetailsGetFixedAssetBookDetail($org_code, $asset, $book);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedAssetBookDetailsApi->fixedAssetBookDetailsGetFixedAssetBookDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the FixedAssetBookDetail entry. |
 **asset** | **string**| The asset code of the FixedAssetBookDetail entry. |
 **book** | **string**| The book code of the FixedAssetBookDetail entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FixedAssetBookDetailsModel**](../Model/FixedAssetBookDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fixedAssetBookDetailsGetFixedAssetBookDetailList**
> \FomF\Ungerboeck\Client\Model\FixedAssetBookDetailsModel fixedAssetBookDetailsGetFixedAssetBookDetailList($org_code, $search)

Standard - Search for GetFixedAssetBookDetails using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FixedAssetBookDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->fixedAssetBookDetailsGetFixedAssetBookDetailList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedAssetBookDetailsApi->fixedAssetBookDetailsGetFixedAssetBookDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\FixedAssetBookDetailsModel**](../Model/FixedAssetBookDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

