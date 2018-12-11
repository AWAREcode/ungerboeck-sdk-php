# FomF\Ungerboeck\Client\CustomFieldSetsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customFieldSetsGetCustomFieldSets**](CustomFieldSetsApi.md#customFieldSetsGetCustomFieldSets) | **GET** /api/v1/CustomFieldSets/{OrgCode}/{Class}/{Code} | Get a custom field set by its parameters
[**customFieldSetsGetCustomFieldSetsList**](CustomFieldSetsApi.md#customFieldSetsGetCustomFieldSetsList) | **GET** /api/v1/CustomFieldSets/{OrgCode} | Search for custom field set using OData.


# **customFieldSetsGetCustomFieldSets**
> \FomF\Ungerboeck\Client\Model\CustomFieldSetsModel customFieldSetsGetCustomFieldSets($org_code, $class, $code)

Get a custom field set by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CustomFieldSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the custom field set.
$class = "class_example"; // string | The class of the custom field set.
$code = "code_example"; // string | The code of the custom field set.

try {
    $result = $apiInstance->customFieldSetsGetCustomFieldSets($org_code, $class, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetsApi->customFieldSetsGetCustomFieldSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the custom field set. |
 **class** | **string**| The class of the custom field set. |
 **code** | **string**| The code of the custom field set. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomFieldSetsModel**](../Model/CustomFieldSetsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldSetsGetCustomFieldSetsList**
> \FomF\Ungerboeck\Client\Model\CustomFieldSetsModel[] customFieldSetsGetCustomFieldSetsList($org_code, $search)

Search for custom field set using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CustomFieldSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->customFieldSetsGetCustomFieldSetsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetsApi->customFieldSetsGetCustomFieldSetsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomFieldSetsModel[]**](../Model/CustomFieldSetsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

