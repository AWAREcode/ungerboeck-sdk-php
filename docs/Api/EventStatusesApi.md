# FomF\Ungerboeck\Client\EventStatusesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventStatusesGetEventStatuses**](EventStatusesApi.md#eventStatusesGetEventStatuses) | **GET** /api/v1/EventStatuses/{OrgCode}/{Code} | Get an event status entry by its parameters
[**eventStatusesGetEventStatusesList**](EventStatusesApi.md#eventStatusesGetEventStatusesList) | **GET** /api/v1/EventStatuses/{OrgCode} | Search for event status entries using OData.


# **eventStatusesGetEventStatuses**
> \FomF\Ungerboeck\Client\Model\EventStatusesModel eventStatusesGetEventStatuses($org_code, $code)

Get an event status entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event status.
$code = "code_example"; // string | The Code of the event status.

try {
    $result = $apiInstance->eventStatusesGetEventStatuses($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStatusesApi->eventStatusesGetEventStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event status. |
 **code** | **string**| The Code of the event status. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventStatusesModel**](../Model/EventStatusesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventStatusesGetEventStatusesList**
> \FomF\Ungerboeck\Client\Model\EventStatusesModel[] eventStatusesGetEventStatusesList($org_code, $search)

Search for event status entries using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->eventStatusesGetEventStatusesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStatusesApi->eventStatusesGetEventStatusesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventStatusesModel[]**](../Model/EventStatusesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

