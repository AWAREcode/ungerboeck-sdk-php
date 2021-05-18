# FomF\Ungerboeck\Client\BulkApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkBookings**](BulkApi.md#bulkBookings) | **POST** /api/v1/Bulk/Bookings | Extended (Bookings) - Add and edit multiple bookings at once.
[**bulkServiceOrderItems**](BulkApi.md#bulkServiceOrderItems) | **POST** /api/v1/Bulk/ServiceOrderItems | Extended (Service Orders) - Add and edit multiple ServiceOrderItems at once.


# **bulkBookings**
> \FomF\Ungerboeck\Client\Model\BulkResponseModel bulkBookings($data)

Extended (Bookings) - Add and edit multiple bookings at once.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\BulkRequestModel(); // \FomF\Ungerboeck\Client\Model\BulkRequestModel | BulkRequestModel describing the Bookings to add or edit. <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/360037539894-Bulk-Processing\">How to use bulk processing.</a>

try {
    $result = $apiInstance->bulkBookings($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->bulkBookings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\BulkRequestModel**](../Model/BulkRequestModel.md)| BulkRequestModel describing the Bookings to add or edit. &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/360037539894-Bulk-Processing\&quot;&gt;How to use bulk processing.&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BulkResponseModel**](../Model/BulkResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkServiceOrderItems**
> \FomF\Ungerboeck\Client\Model\BulkResponseModel bulkServiceOrderItems($data)

Extended (Service Orders) - Add and edit multiple ServiceOrderItems at once.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BulkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\BulkRequestModel(); // \FomF\Ungerboeck\Client\Model\BulkRequestModel | BulkRequestModel describing the ServiceOrderItems to add or edit.  <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/360037539894-Bulk-Processing\">How to use bulk processing.</a>

try {
    $result = $apiInstance->bulkServiceOrderItems($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->bulkServiceOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\BulkRequestModel**](../Model/BulkRequestModel.md)| BulkRequestModel describing the ServiceOrderItems to add or edit.  &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/360037539894-Bulk-Processing\&quot;&gt;How to use bulk processing.&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BulkResponseModel**](../Model/BulkResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

