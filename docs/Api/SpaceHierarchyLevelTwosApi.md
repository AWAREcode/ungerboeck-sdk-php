# FomF\Ungerboeck\Client\SpaceHierarchyLevelTwosApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwo**](SpaceHierarchyLevelTwosApi.md#spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwo) | **GET** /api/v1/SpaceHierarchyLevelTwos/{OrgCode}/{LevelOneSequence}/{LevelTwoSequence} | Basic - Get a single level 2 space hierarchy by its parameters
[**spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwoList**](SpaceHierarchyLevelTwosApi.md#spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwoList) | **GET** /api/v1/SpaceHierarchyLevelTwos/{OrgCode} | Basic - Search for a level 2 space hierarchy using OData.


# **spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwo**
> \FomF\Ungerboeck\Client\Model\SpaceHierarchyLevelTwosModel spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwo($org_code, $level_one_sequence, $level_two_sequence)

Basic - Get a single level 2 space hierarchy by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceHierarchyLevelTwosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space feature.
$level_one_sequence = 56; // int | The sequence of the level 1 space hierarchy.
$level_two_sequence = 56; // int | The sequence of the level 2 space hierarchy.

try {
    $result = $apiInstance->spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwo($org_code, $level_one_sequence, $level_two_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceHierarchyLevelTwosApi->spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space feature. |
 **level_one_sequence** | **int**| The sequence of the level 1 space hierarchy. |
 **level_two_sequence** | **int**| The sequence of the level 2 space hierarchy. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceHierarchyLevelTwosModel**](../Model/SpaceHierarchyLevelTwosModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwoList**
> \FomF\Ungerboeck\Client\Model\SpaceHierarchyLevelTwosModel spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwoList($org_code, $search)

Basic - Search for a level 2 space hierarchy using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceHierarchyLevelTwosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwoList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceHierarchyLevelTwosApi->spaceHierarchyLevelTwosGetSpaceHierarchyLevelTwoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceHierarchyLevelTwosModel**](../Model/SpaceHierarchyLevelTwosModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

