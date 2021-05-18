# FomF\Ungerboeck\Client\EventsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsAddFromProfile**](EventsApi.md#eventsAddFromProfile) | **POST** /api/v1/Events/AddFromProfile | Standard - Add a new event from an event profile.
[**eventsGetEvent**](EventsApi.md#eventsGetEvent) | **GET** /api/v1/Events/{OrgCode}/{EventID} | Basic - Get a single event by its parameters
[**eventsGetEventList**](EventsApi.md#eventsGetEventList) | **GET** /api/v1/Events/{OrgCode} | Basic - Search for Events using OData.  This will also retrieve user fields matching the default user field class, configured in Event Management Configuration.
[**eventsPostEvent**](EventsApi.md#eventsPostEvent) | **POST** /api/v1/Events | Standard - Add an event
[**eventsPutEvent**](EventsApi.md#eventsPutEvent) | **PUT** /api/v1/Events/{OrgCode}/{EventID} | Standard - Edit an Event


# **eventsAddFromProfile**
> \FomF\Ungerboeck\Client\Model\EventsModel eventsAddFromProfile($data)

Standard - Add a new event from an event profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\AddFromEventProfileModel(); // \FomF\Ungerboeck\Client\Model\AddFromEventProfileModel | (Include in the HTTP Body) A model of type AddFromEventProfileModel for configuration.

try {
    $result = $apiInstance->eventsAddFromProfile($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsAddFromProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\AddFromEventProfileModel**](../Model/AddFromEventProfileModel.md)| (Include in the HTTP Body) A model of type AddFromEventProfileModel for configuration. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventsModel**](../Model/EventsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsGetEvent**
> \FomF\Ungerboeck\Client\Model\EventsModel eventsGetEvent($org_code, $event_id)

Basic - Get a single event by its parameters

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

# **eventsGetEventList**
> \FomF\Ungerboeck\Client\Model\EventsModel eventsGetEventList($org_code, $search)

Basic - Search for Events using OData.  This will also retrieve user fields matching the default user field class, configured in Event Management Configuration.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->eventsGetEventList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGetEventList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventsModel**](../Model/EventsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsPostEvent**
> \FomF\Ungerboeck\Client\Model\EventsModel eventsPostEvent($data)

Standard - Add an event

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

Standard - Edit an Event

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

