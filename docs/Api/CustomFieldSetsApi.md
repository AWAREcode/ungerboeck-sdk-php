# FomF\Ungerboeck\Client\CustomFieldSetsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customFieldSetsGetCustomFieldSet**](CustomFieldSetsApi.md#customFieldSetsGetCustomFieldSet) | **GET** /api/v1/CustomFieldSets/{OrgCode}/{Class}/{Code} | Basic - Get a single custom field set by its parameters
[**customFieldSetsGetCustomFieldSetList**](CustomFieldSetsApi.md#customFieldSetsGetCustomFieldSetList) | **GET** /api/v1/CustomFieldSets/{OrgCode} | Basic - Search for custom field set using OData.


# **customFieldSetsGetCustomFieldSet**
> \FomF\Ungerboeck\Client\Model\CustomFieldSetsModel customFieldSetsGetCustomFieldSet($org_code, $class, $code)

Basic - Get a single custom field set by its parameters

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
    $result = $apiInstance->customFieldSetsGetCustomFieldSet($org_code, $class, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetsApi->customFieldSetsGetCustomFieldSet: ', $e->getMessage(), PHP_EOL;
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

# **customFieldSetsGetCustomFieldSetList**
> \FomF\Ungerboeck\Client\Model\CustomFieldSetsModel customFieldSetsGetCustomFieldSetList($org_code, $search)

Basic - Search for custom field set using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->customFieldSetsGetCustomFieldSetList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetsApi->customFieldSetsGetCustomFieldSetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomFieldSetsModel**](../Model/CustomFieldSetsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

