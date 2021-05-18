# FomF\Ungerboeck\Client\EventsPriceListApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsPriceListGetEventPriceList**](EventsPriceListApi.md#eventsPriceListGetEventPriceList) | **GET** /api/v1/EventsPriceList/{OrgCode}/{Code}/{EventID} | Basic - Get a single event price list by its parameters
[**eventsPriceListGetEventPriceListList**](EventsPriceListApi.md#eventsPriceListGetEventPriceListList) | **GET** /api/v1/EventsPriceList/{OrgCode} | Basic - Search for event price list using OData.


# **eventsPriceListGetEventPriceList**
> \FomF\Ungerboeck\Client\Model\EventsPriceListModel eventsPriceListGetEventPriceList($org_code, $code, $event_id)

Basic - Get a single event price list by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventsPriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the event price list.
$code = "code_example"; // string | The code of the event price list.
$event_id = 56; // int | The event ID of the price list.

try {
    $result = $apiInstance->eventsPriceListGetEventPriceList($org_code, $code, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsPriceListApi->eventsPriceListGetEventPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the event price list. |
 **code** | **string**| The code of the event price list. |
 **event_id** | **int**| The event ID of the price list. |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventsPriceListModel**](../Model/EventsPriceListModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsPriceListGetEventPriceListList**
> \FomF\Ungerboeck\Client\Model\EventsPriceListModel eventsPriceListGetEventPriceListList($org_code, $search)

Basic - Search for event price list using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\EventsPriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->eventsPriceListGetEventPriceListList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsPriceListApi->eventsPriceListGetEventPriceListList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\EventsPriceListModel**](../Model/EventsPriceListModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

