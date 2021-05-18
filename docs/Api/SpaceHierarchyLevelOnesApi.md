# FomF\Ungerboeck\Client\SpaceHierarchyLevelOnesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spaceHierarchyLevelOnesGetSpaceHierarchyLevelOne**](SpaceHierarchyLevelOnesApi.md#spaceHierarchyLevelOnesGetSpaceHierarchyLevelOne) | **GET** /api/v1/SpaceHierarchyLevelOnes/{OrgCode}/{LevelOneSequence} | Basic - Get a single level 1 space hierarchy by its parameters
[**spaceHierarchyLevelOnesGetSpaceHierarchyLevelOneList**](SpaceHierarchyLevelOnesApi.md#spaceHierarchyLevelOnesGetSpaceHierarchyLevelOneList) | **GET** /api/v1/SpaceHierarchyLevelOnes/{OrgCode} | Basic - Search for a level 1 space hierarchy using OData.


# **spaceHierarchyLevelOnesGetSpaceHierarchyLevelOne**
> \FomF\Ungerboeck\Client\Model\SpaceHierarchyLevelOnesModel spaceHierarchyLevelOnesGetSpaceHierarchyLevelOne($org_code, $level_one_sequence)

Basic - Get a single level 1 space hierarchy by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceHierarchyLevelOnesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space feature.
$level_one_sequence = 56; // int | The sequence of the level 1 space hierarchy.

try {
    $result = $apiInstance->spaceHierarchyLevelOnesGetSpaceHierarchyLevelOne($org_code, $level_one_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceHierarchyLevelOnesApi->spaceHierarchyLevelOnesGetSpaceHierarchyLevelOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space feature. |
 **level_one_sequence** | **int**| The sequence of the level 1 space hierarchy. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceHierarchyLevelOnesModel**](../Model/SpaceHierarchyLevelOnesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceHierarchyLevelOnesGetSpaceHierarchyLevelOneList**
> \FomF\Ungerboeck\Client\Model\SpaceHierarchyLevelOnesModel spaceHierarchyLevelOnesGetSpaceHierarchyLevelOneList($org_code, $search)

Basic - Search for a level 1 space hierarchy using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceHierarchyLevelOnesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->spaceHierarchyLevelOnesGetSpaceHierarchyLevelOneList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceHierarchyLevelOnesApi->spaceHierarchyLevelOnesGetSpaceHierarchyLevelOneList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceHierarchyLevelOnesModel**](../Model/SpaceHierarchyLevelOnesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

