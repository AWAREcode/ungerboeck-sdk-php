# FomF\Ungerboeck\Client\ResourcesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resourcesDeleteResource**](ResourcesApi.md#resourcesDeleteResource) | **DELETE** /api/v1/Resources/{OrgCode}/{Sequence} | Extended (Resources and Price Lists) - Delete a resource
[**resourcesGetResource**](ResourcesApi.md#resourcesGetResource) | **GET** /api/v1/Resources/{OrgCode}/{Sequence} | Basic - Get a single resource by its parameters
[**resourcesGetResourceList**](ResourcesApi.md#resourcesGetResourceList) | **GET** /api/v1/Resources/{OrgCode} | Basic - Search for resource using OData.
[**resourcesPostResource**](ResourcesApi.md#resourcesPostResource) | **POST** /api/v1/Resources | Extended (Resources and Price Lists) - Add a Resource
[**resourcesPutResource**](ResourcesApi.md#resourcesPutResource) | **PUT** /api/v1/Resources/{OrgCode}/{Sequence} | Extended (Resources and Price Lists) - Edit a Resource


# **resourcesDeleteResource**
> resourcesDeleteResource($org_code, $sequence)

Extended (Resources and Price Lists) - Delete a resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the resource.
$sequence = 56; // int | The sequence of the resource

try {
    $apiInstance->resourcesDeleteResource($org_code, $sequence);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesDeleteResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the resource. |
 **sequence** | **int**| The sequence of the resource |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourcesGetResource**
> \FomF\Ungerboeck\Client\Model\ResourcesModel resourcesGetResource($org_code, $sequence)

Basic - Get a single resource by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the resource.
$sequence = 56; // int | The sequence of the resource.

try {
    $result = $apiInstance->resourcesGetResource($org_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesGetResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the resource. |
 **sequence** | **int**| The sequence of the resource. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ResourcesModel**](../Model/ResourcesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourcesGetResourceList**
> \FomF\Ungerboeck\Client\Model\ResourcesModel resourcesGetResourceList($org_code, $search)

Basic - Search for resource using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->resourcesGetResourceList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesGetResourceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ResourcesModel**](../Model/ResourcesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourcesPostResource**
> \FomF\Ungerboeck\Client\Model\ResourcesModel resourcesPostResource($data)

Extended (Resources and Price Lists) - Add a Resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\ResourcesModel(); // \FomF\Ungerboeck\Client\Model\ResourcesModel | (Include in the HTTP Body) A ResourcesModel entry to add.

try {
    $result = $apiInstance->resourcesPostResource($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesPostResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\ResourcesModel**](../Model/ResourcesModel.md)| (Include in the HTTP Body) A ResourcesModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ResourcesModel**](../Model/ResourcesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourcesPutResource**
> \FomF\Ungerboeck\Client\Model\ResourcesModel resourcesPutResource($org_code, $sequence, $data)

Extended (Resources and Price Lists) - Edit a Resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the resource.
$sequence = 56; // int | The sequence of the resource
$data = new \FomF\Ungerboeck\Client\Model\ResourcesModel(); // \FomF\Ungerboeck\Client\Model\ResourcesModel | (Include in the HTTP Body) A ResourcesModel entry to edit.

try {
    $result = $apiInstance->resourcesPutResource($org_code, $sequence, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesPutResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the resource. |
 **sequence** | **int**| The sequence of the resource |
 **data** | [**\FomF\Ungerboeck\Client\Model\ResourcesModel**](../Model/ResourcesModel.md)| (Include in the HTTP Body) A ResourcesModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ResourcesModel**](../Model/ResourcesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

