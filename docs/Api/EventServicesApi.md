# FomF\Ungerboeck\Client\EventServicesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventServicesDeleteEventService**](EventServicesApi.md#eventServicesDeleteEventService) | **DELETE** /api/v1/EventServices/{OrgCode}/{EventID}/{SequenceNumber} | Standard - Delete an Event Service
[**eventServicesGetEventService**](EventServicesApi.md#eventServicesGetEventService) | **GET** /api/v1/EventServices/{OrgCode}/{EventID}/{SequenceNumber} | Basic - Get an Event Service by its parameters
[**eventServicesGetEventServiceList**](EventServicesApi.md#eventServicesGetEventServiceList) | **GET** /api/v1/EventServices/{OrgCode} | Basic - Search for Event Services using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**eventServicesPostEventService**](EventServicesApi.md#eventServicesPostEventService) | **POST** /api/v1/EventServices | Standard - Add an Event Service
[**eventServicesPutEventService**](EventServicesApi.md#eventServicesPutEventService) | **PUT** /api/v1/EventServices/{OrgCode}/{EventID}/{SequenceNumber} | Standard - Edit an Event Service


# **eventServicesDeleteEventService**
> eventServicesDeleteEventService($org_code, $event_id, $sequence_number)

Standard - Delete an Event Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the Event Service.
$event_id = 56; // int | The Event ID of the Event Service.
$sequence_number = 56; // int | The sequence number of the Event Service.

try {
    $apiInstance->eventServicesDeleteEventService($org_code, $event_id, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling EventServicesApi->eventServicesDeleteEventService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the Event Service. |
 **event_id** | **int**| The Event ID of the Event Service. |
 **sequence_number** | **int**| The sequence number of the Event Service. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventServicesGetEventService**
> \FomF\Ungerboeck\Client\Model\EventServicesModel eventServicesGetEventService($org_code, $event_id, $sequence_number)

Basic - Get an Event Service by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the Event Service.
$event_id = 56; // int | The Event ID of the Event Service.
$sequence_number = 56; // int | The Sequence number of the Event Service.

try {
    $result = $apiInstance->eventServicesGetEventService($org_code, $event_id, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventServicesApi->eventServicesGetEventService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the Event Service. |
 **event_id** | **int**| The Event ID of the Event Service. |
 **sequence_number** | **int**| The Sequence number of the Event Service. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventServicesModel**](../Model/EventServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventServicesGetEventServiceList**
> \FomF\Ungerboeck\Client\Model\EventServicesModel eventServicesGetEventServiceList($org_code, $search)

Basic - Search for Event Services using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->eventServicesGetEventServiceList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventServicesApi->eventServicesGetEventServiceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventServicesModel**](../Model/EventServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventServicesPostEventService**
> \FomF\Ungerboeck\Client\Model\EventServicesModel eventServicesPostEventService($data)

Standard - Add an Event Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\EventServicesModel(); // \FomF\Ungerboeck\Client\Model\EventServicesModel | (Include in the HTTP Body) an EventServicesModel to add.

try {
    $result = $apiInstance->eventServicesPostEventService($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventServicesApi->eventServicesPostEventService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\EventServicesModel**](../Model/EventServicesModel.md)| (Include in the HTTP Body) an EventServicesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventServicesModel**](../Model/EventServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventServicesPutEventService**
> \FomF\Ungerboeck\Client\Model\EventServicesModel eventServicesPutEventService($org_code, $event_id, $sequence_number, $data)

Standard - Edit an Event Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the Event Service.
$event_id = 56; // int | The Event ID of the Event Service.
$sequence_number = 56; // int | The sequence number of the Event Service.
$data = new \FomF\Ungerboeck\Client\Model\EventServicesModel(); // \FomF\Ungerboeck\Client\Model\EventServicesModel | (Include in the HTTP Body) An EventServicesModel entry to edit.

try {
    $result = $apiInstance->eventServicesPutEventService($org_code, $event_id, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventServicesApi->eventServicesPutEventService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the Event Service. |
 **event_id** | **int**| The Event ID of the Event Service. |
 **sequence_number** | **int**| The sequence number of the Event Service. |
 **data** | [**\FomF\Ungerboeck\Client\Model\EventServicesModel**](../Model/EventServicesModel.md)| (Include in the HTTP Body) An EventServicesModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventServicesModel**](../Model/EventServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

