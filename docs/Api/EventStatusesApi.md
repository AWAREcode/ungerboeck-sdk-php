# FomF\Ungerboeck\Client\EventStatusesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventStatusesGetEventStatus**](EventStatusesApi.md#eventStatusesGetEventStatus) | **GET** /api/v1/EventStatuses/{OrgCode}/{Code} | Basic - Get a single event status entry by its parameters
[**eventStatusesGetEventStatusList**](EventStatusesApi.md#eventStatusesGetEventStatusList) | **GET** /api/v1/EventStatuses/{OrgCode} | Basic - Search for event status entries using OData.


# **eventStatusesGetEventStatus**
> \FomF\Ungerboeck\Client\Model\EventStatusesModel eventStatusesGetEventStatus($org_code, $code)

Basic - Get a single event status entry by its parameters

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
    $result = $apiInstance->eventStatusesGetEventStatus($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStatusesApi->eventStatusesGetEventStatus: ', $e->getMessage(), PHP_EOL;
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

# **eventStatusesGetEventStatusList**
> \FomF\Ungerboeck\Client\Model\EventStatusesModel eventStatusesGetEventStatusList($org_code, $search)

Basic - Search for event status entries using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->eventStatusesGetEventStatusList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStatusesApi->eventStatusesGetEventStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventStatusesModel**](../Model/EventStatusesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

