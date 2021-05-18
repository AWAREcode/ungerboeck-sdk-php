# FomF\Ungerboeck\Client\GLSourcesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gLSourcesGetGLSource**](GLSourcesApi.md#gLSourcesGetGLSource) | **GET** /api/v1/GlSources/{OrgCode}/{Source} | Standard - Get a single GLSources by its parameters
[**gLSourcesGetGLSourcesList**](GLSourcesApi.md#gLSourcesGetGLSourcesList) | **GET** /api/v1/GlSources/{OrgCode} | Standard - Search for GLSources using OData.


# **gLSourcesGetGLSource**
> \FomF\Ungerboeck\Client\Model\GLSourcesModel gLSourcesGetGLSource($org_code, $source)

Standard - Get a single GLSources by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the GLSources.
$source = "source_example"; // string | The Source of the GLSources.

try {
    $result = $apiInstance->gLSourcesGetGLSource($org_code, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLSourcesApi->gLSourcesGetGLSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the GLSources. |
 **source** | **string**| The Source of the GLSources. |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLSourcesModel**](../Model/GLSourcesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gLSourcesGetGLSourcesList**
> \FomF\Ungerboeck\Client\Model\GLSourcesModel gLSourcesGetGLSourcesList($org_code, $search)

Standard - Search for GLSources using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->gLSourcesGetGLSourcesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLSourcesApi->gLSourcesGetGLSourcesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLSourcesModel**](../Model/GLSourcesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

