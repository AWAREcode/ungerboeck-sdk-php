# FomF\Ungerboeck\Client\EventJobCategoriesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventJobCategoriesGetEventJobCategories**](EventJobCategoriesApi.md#eventJobCategoriesGetEventJobCategories) | **GET** /api/v1/EventJobCategories/{OrgCode}/{Code} | Get an event category entry by its parameters
[**eventJobCategoriesGetEventJobCategoriesList**](EventJobCategoriesApi.md#eventJobCategoriesGetEventJobCategoriesList) | **GET** /api/v1/EventJobCategories/{OrgCode} | Search for event job categories using OData.


# **eventJobCategoriesGetEventJobCategories**
> \FomF\Ungerboeck\Client\Model\EventJobCategoriesModel eventJobCategoriesGetEventJobCategories($org_code, $code)

Get an event category entry by its parameters

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
    $result = $apiInstance->eventJobCategoriesGetEventJobCategories($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobCategoriesApi->eventJobCategoriesGetEventJobCategories: ', $e->getMessage(), PHP_EOL;
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

# **eventJobCategoriesGetEventJobCategoriesList**
> \FomF\Ungerboeck\Client\Model\EventJobCategoriesModel[] eventJobCategoriesGetEventJobCategoriesList($org_code, $search)

Search for event job categories using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->eventJobCategoriesGetEventJobCategoriesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobCategoriesApi->eventJobCategoriesGetEventJobCategoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobCategoriesModel[]**](../Model/EventJobCategoriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

