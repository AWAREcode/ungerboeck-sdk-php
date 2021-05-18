# FomF\Ungerboeck\Client\SpaceComponentsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spaceComponentsGetSpaceComponent**](SpaceComponentsApi.md#spaceComponentsGetSpaceComponent) | **GET** /api/v1/SpaceComponents/{OrgCode}/{Space}/{Component} | Basic - Get a single space component by its parameters
[**spaceComponentsGetSpaceComponentList**](SpaceComponentsApi.md#spaceComponentsGetSpaceComponentList) | **GET** /api/v1/SpaceComponents/{OrgCode} | Basic - Search for space components using OData.


# **spaceComponentsGetSpaceComponent**
> \FomF\Ungerboeck\Client\Model\SpaceComponentsModel spaceComponentsGetSpaceComponent($org_code, $space, $component)

Basic - Get a single space component by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space.
$space = "space_example"; // string | The code of the space.
$component = "component_example"; // string | The code of the component space.

try {
    $result = $apiInstance->spaceComponentsGetSpaceComponent($org_code, $space, $component);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceComponentsApi->spaceComponentsGetSpaceComponent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space. |
 **space** | **string**| The code of the space. |
 **component** | **string**| The code of the component space. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceComponentsModel**](../Model/SpaceComponentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceComponentsGetSpaceComponentList**
> \FomF\Ungerboeck\Client\Model\SpaceComponentsModel spaceComponentsGetSpaceComponentList($org_code, $search)

Basic - Search for space components using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->spaceComponentsGetSpaceComponentList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceComponentsApi->spaceComponentsGetSpaceComponentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceComponentsModel**](../Model/SpaceComponentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

