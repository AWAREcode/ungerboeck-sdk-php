# FomF\Ungerboeck\Client\EventJobTypesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventJobTypesGetEventJobType**](EventJobTypesApi.md#eventJobTypesGetEventJobType) | **GET** /api/v1/EventJobTypes/{OrgCode}/{Code} | Basic - Get a single event type by its parameters
[**eventJobTypesGetEventJobTypeList**](EventJobTypesApi.md#eventJobTypesGetEventJobTypeList) | **GET** /api/v1/EventJobTypes/{OrgCode} | Basic - Search for event types using OData.


# **eventJobTypesGetEventJobType**
> \FomF\Ungerboeck\Client\Model\EventJobTypesModel eventJobTypesGetEventJobType($org_code, $code)

Basic - Get a single event type by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventJobTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event type.
$code = "code_example"; // string | The code of the event type.

try {
    $result = $apiInstance->eventJobTypesGetEventJobType($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobTypesApi->eventJobTypesGetEventJobType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event type. |
 **code** | **string**| The code of the event type. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobTypesModel**](../Model/EventJobTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventJobTypesGetEventJobTypeList**
> \FomF\Ungerboeck\Client\Model\EventJobTypesModel eventJobTypesGetEventJobTypeList($org_code, $search)

Basic - Search for event types using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventJobTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->eventJobTypesGetEventJobTypeList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobTypesApi->eventJobTypesGetEventJobTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobTypesModel**](../Model/EventJobTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

