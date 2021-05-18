# FomF\Ungerboeck\Client\AssetBookDefaultsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetBookDefaultsGetAssetBookDefault**](AssetBookDefaultsApi.md#assetBookDefaultsGetAssetBookDefault) | **GET** /api/v1/AssetBookDefaults/{OrgCode}/{SequenceNumber} | Standard - Get an Asset Book Default by its parameters
[**assetBookDefaultsGetAssetBookDefaultList**](AssetBookDefaultsApi.md#assetBookDefaultsGetAssetBookDefaultList) | **GET** /api/v1/AssetBookDefaults/{OrgCode} | Standard - Search for Asset Book Defaults using OData.


# **assetBookDefaultsGetAssetBookDefault**
> \FomF\Ungerboeck\Client\Model\AssetBookDefaultsModel assetBookDefaultsGetAssetBookDefault($org_code, $sequence_number)

Standard - Get an Asset Book Default by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AssetBookDefaultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Asset Book Default.
$sequence_number = 56; // int | The sequence number of the Asset Book Default entry.

try {
    $result = $apiInstance->assetBookDefaultsGetAssetBookDefault($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetBookDefaultsApi->assetBookDefaultsGetAssetBookDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Asset Book Default. |
 **sequence_number** | **int**| The sequence number of the Asset Book Default entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AssetBookDefaultsModel**](../Model/AssetBookDefaultsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetBookDefaultsGetAssetBookDefaultList**
> \FomF\Ungerboeck\Client\Model\AssetBookDefaultsModel assetBookDefaultsGetAssetBookDefaultList($org_code, $search)

Standard - Search for Asset Book Defaults using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AssetBookDefaultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->assetBookDefaultsGetAssetBookDefaultList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetBookDefaultsApi->assetBookDefaultsGetAssetBookDefaultList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AssetBookDefaultsModel**](../Model/AssetBookDefaultsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

