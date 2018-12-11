# FomF\Ungerboeck\Client\EventJobTypesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventJobTypesGetEventJobTypes**](EventJobTypesApi.md#eventJobTypesGetEventJobTypes) | **GET** /api/v1/EventJobTypes/{OrgCode}/{Code} | Get an event types by its parameters
[**eventJobTypesGetEventJobTypesList**](EventJobTypesApi.md#eventJobTypesGetEventJobTypesList) | **GET** /api/v1/EventJobTypes/{OrgCode} | Search for event types using OData.


# **eventJobTypesGetEventJobTypes**
> \FomF\Ungerboeck\Client\Model\EventJobTypesModel eventJobTypesGetEventJobTypes($org_code, $code)

Get an event types by its parameters

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
    $result = $apiInstance->eventJobTypesGetEventJobTypes($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobTypesApi->eventJobTypesGetEventJobTypes: ', $e->getMessage(), PHP_EOL;
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

# **eventJobTypesGetEventJobTypesList**
> \FomF\Ungerboeck\Client\Model\EventJobTypesModel[] eventJobTypesGetEventJobTypesList($org_code, $search)

Search for event types using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->eventJobTypesGetEventJobTypesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobTypesApi->eventJobTypesGetEventJobTypesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobTypesModel[]**](../Model/EventJobTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

