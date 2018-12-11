# FomF\Ungerboeck\Client\ResourcesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resourcesGetResources**](ResourcesApi.md#resourcesGetResources) | **GET** /api/v1/Resources/{OrgCode}/{Sequence} | Get a resource by its parameters
[**resourcesGetResourcesList**](ResourcesApi.md#resourcesGetResourcesList) | **GET** /api/v1/Resources/{OrgCode} | Search for resource using OData.


# **resourcesGetResources**
> \FomF\Ungerboeck\Client\Model\ResourcesModel resourcesGetResources($org_code, $sequence)

Get a resource by its parameters

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
    $result = $apiInstance->resourcesGetResources($org_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesGetResources: ', $e->getMessage(), PHP_EOL;
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

# **resourcesGetResourcesList**
> \FomF\Ungerboeck\Client\Model\ResourcesModel[] resourcesGetResourcesList($org_code, $search)

Search for resource using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->resourcesGetResourcesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesGetResourcesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ResourcesModel[]**](../Model/ResourcesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

