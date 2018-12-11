# FomF\Ungerboeck\Client\EventJobClassesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventJobClassesGetEventJobClasses**](EventJobClassesApi.md#eventJobClassesGetEventJobClasses) | **GET** /api/v1/EventJobClasses/{OrgCode}/{Code} | Get an event class by its parameters
[**eventJobClassesGetEventJobClassesList**](EventJobClassesApi.md#eventJobClassesGetEventJobClassesList) | **GET** /api/v1/EventJobClasses/{OrgCode} | Search for event class using OData.


# **eventJobClassesGetEventJobClasses**
> \FomF\Ungerboeck\Client\Model\EventJobClassesModel eventJobClassesGetEventJobClasses($org_code, $code)

Get an event class by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventJobClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event class.
$code = "code_example"; // string | The code of the event class.

try {
    $result = $apiInstance->eventJobClassesGetEventJobClasses($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobClassesApi->eventJobClassesGetEventJobClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event class. |
 **code** | **string**| The code of the event class. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobClassesModel**](../Model/EventJobClassesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventJobClassesGetEventJobClassesList**
> \FomF\Ungerboeck\Client\Model\EventJobClassesModel[] eventJobClassesGetEventJobClassesList($org_code, $search)

Search for event class using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventJobClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->eventJobClassesGetEventJobClassesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventJobClassesApi->eventJobClassesGetEventJobClassesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventJobClassesModel[]**](../Model/EventJobClassesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

