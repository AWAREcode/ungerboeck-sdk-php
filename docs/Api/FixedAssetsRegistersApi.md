# FomF\Ungerboeck\Client\FixedAssetsRegistersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fixedAssetsRegistersGetAssetRegister**](FixedAssetsRegistersApi.md#fixedAssetsRegistersGetAssetRegister) | **GET** /api/v1/FixedAssetsRegisters/{OrgCode}/{Code} | Standard - Retrieve a FixedAssetsRegister record
[**fixedAssetsRegistersGetAssetRegisterList**](FixedAssetsRegistersApi.md#fixedAssetsRegistersGetAssetRegisterList) | **GET** /api/v1/FixedAssetsRegisters/{OrgCode} | Standard - Search for FixedAssetsRegisters using OData.


# **fixedAssetsRegistersGetAssetRegister**
> \FomF\Ungerboeck\Client\Model\FixedAssetsRegistersModel fixedAssetsRegistersGetAssetRegister($org_code, $code)

Standard - Retrieve a FixedAssetsRegister record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FixedAssetsRegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the FixedAssetsRegister entry.
$code = "code_example"; // string | The asset code of the FixedAssetsRegister entry.

try {
    $result = $apiInstance->fixedAssetsRegistersGetAssetRegister($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedAssetsRegistersApi->fixedAssetsRegistersGetAssetRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the FixedAssetsRegister entry. |
 **code** | **string**| The asset code of the FixedAssetsRegister entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FixedAssetsRegistersModel**](../Model/FixedAssetsRegistersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fixedAssetsRegistersGetAssetRegisterList**
> \FomF\Ungerboeck\Client\Model\FixedAssetsRegistersModel fixedAssetsRegistersGetAssetRegisterList($org_code, $search)

Standard - Search for FixedAssetsRegisters using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FixedAssetsRegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->fixedAssetsRegistersGetAssetRegisterList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedAssetsRegistersApi->fixedAssetsRegistersGetAssetRegisterList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\FixedAssetsRegistersModel**](../Model/FixedAssetsRegistersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

