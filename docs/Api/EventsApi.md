# FomF\Ungerboeck\Client\EventsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsGetEvent**](EventsApi.md#eventsGetEvent) | **GET** /api/v1/Events/{OrgCode}/{EventID} | Get an event by its parameters
[**eventsGetEventsList**](EventsApi.md#eventsGetEventsList) | **GET** /api/v1/Events/{OrgCode} | Search for Events using OData.  This will also retrieve user fields matching the default user field class, configured in Event Management Configuration.
[**eventsPostEvent**](EventsApi.md#eventsPostEvent) | **POST** /api/v1/Events | Add an event
[**eventsPutEvent**](EventsApi.md#eventsPutEvent) | **PUT** /api/v1/Events/{OrgCode}/{EventID} | Edit an Event


# **eventsGetEvent**
> \FomF\Ungerboeck\Client\Model\EventsModel eventsGetEvent($org_code, $event_id)

Get an event by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event.
$event_id = 56; // int | The Event ID of the event.

try {
    $result = $apiInstance->eventsGetEvent($org_code, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event. |
 **event_id** | **int**| The Event ID of the event. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventsModel**](../Model/EventsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsGetEventsList**
> \FomF\Ungerboeck\Client\Model\EventsModel[] eventsGetEventsList($org_code, $search)

Search for Events using OData.  This will also retrieve user fields matching the default user field class, configured in Event Management Configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->eventsGetEventsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetEventsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventsModel[]**](../Model/EventsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsPostEvent**
> \FomF\Ungerboeck\Client\Model\EventsModel eventsPostEvent($data)

Add an event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\EventsModel(); // \FomF\Ungerboeck\Client\Model\EventsModel | (Include in the HTTP Body) An EventsModel entry to add.

try {
    $result = $apiInstance->eventsPostEvent($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsPostEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\EventsModel**](../Model/EventsModel.md)| (Include in the HTTP Body) An EventsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventsModel**](../Model/EventsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsPutEvent**
> \FomF\Ungerboeck\Client\Model\EventsModel eventsPutEvent($org_code, $event_id, $data)

Edit an Event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event.
$event_id = 56; // int | The Event ID of the event.
$data = new \FomF\Ungerboeck\Client\Model\EventsModel(); // \FomF\Ungerboeck\Client\Model\EventsModel | (Include in the HTTP Body) An EventsModel entry to edit.

try {
    $result = $apiInstance->eventsPutEvent($org_code, $event_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsPutEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event. |
 **event_id** | **int**| The Event ID of the event. |
 **data** | [**\FomF\Ungerboeck\Client\Model\EventsModel**](../Model/EventsModel.md)| (Include in the HTTP Body) An EventsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventsModel**](../Model/EventsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

