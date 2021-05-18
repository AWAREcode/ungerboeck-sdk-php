# FomF\Ungerboeck\Client\EventJobCategoriesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventJobCategoriesGetEventJobCategory**](EventJobCategoriesApi.md#eventJobCategoriesGetEventJobCategory) | **GET** /api/v1/EventJobCategories/{OrgCode}/{Code} | Basic - Get a single event category entry by its parameters
[**eventJobCategoriesGetEventJobCategoryList**](EventJobCategoriesApi.md#eventJobCategoriesGetEventJobCategoryList) | **GET** /api/v1/EventJobCategories/{OrgCode} | Basic - Search for event job categories using OData.


# **eventJobCategoriesGetEventJobCategory**
> \FomF\Ungerboeck\Client\Model\EventJobCategoriesModel eventJobCategoriesGetEventJobCategory($org_code, $code)

Basic - Get a single event category entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventJobCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event categories.
$code = "code_example"; // string | The code of the event categories.

try {
    $result = $apiInstance->eventJobCategoriesGetEventJobCategory($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobCategoriesApi->eventJobCategoriesGetEventJobCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event categories. |
 **code** | **string**| The code of the event categories. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobCategoriesModel**](../Model/EventJobCategoriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventJobCategoriesGetEventJobCategoryList**
> \FomF\Ungerboeck\Client\Model\EventJobCategoriesModel eventJobCategoriesGetEventJobCategoryList($org_code, $search)

Basic - Search for event job categories using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventJobCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->eventJobCategoriesGetEventJobCategoryList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobCategoriesApi->eventJobCategoriesGetEventJobCategoryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobCategoriesModel**](../Model/EventJobCategoriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

