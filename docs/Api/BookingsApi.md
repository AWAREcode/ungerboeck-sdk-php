# FomF\Ungerboeck\Client\BookingsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingsGetBooking**](BookingsApi.md#bookingsGetBooking) | **GET** /api/v1/Bookings/{OrgCode}/{Event}/{SequenceNumber} | Basic - Get a single booking by its parameters
[**bookingsGetBookingList**](BookingsApi.md#bookingsGetBookingList) | **GET** /api/v1/Bookings/{OrgCode} | Basic - Search for bookings using OData.
[**bookingsPostBooking**](BookingsApi.md#bookingsPostBooking) | **POST** /api/v1/Bookings | Extended (Bookings) - Add a booking to an existing event
[**bookingsPutBooking**](BookingsApi.md#bookingsPutBooking) | **PUT** /api/v1/Bookings/{OrgCode}/{Event}/{SequenceNumber} | Extended (Bookings) - Edit a booking on an event


# **bookingsGetBooking**
> \FomF\Ungerboeck\Client\Model\BookingsModel bookingsGetBooking($org_code, $event, $sequence_number)

Basic - Get a single booking by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the booking.
$event = 56; // int | The ID of the booking's event.
$sequence_number = 56; // int | The sequence number of the booking.

try {
    $result = $apiInstance->bookingsGetBooking($org_code, $event, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGetBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the booking. |
 **event** | **int**| The ID of the booking&#39;s event. |
 **sequence_number** | **int**| The sequence number of the booking. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BookingsModel**](../Model/BookingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingsGetBookingList**
> \FomF\Ungerboeck\Client\Model\BookingsModel bookingsGetBookingList($org_code, $search)

Basic - Search for bookings using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->bookingsGetBookingList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGetBookingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BookingsModel**](../Model/BookingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingsPostBooking**
> \FomF\Ungerboeck\Client\Model\BookingsModel bookingsPostBooking($data)

Extended (Bookings) - Add a booking to an existing event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\BookingsModel(); // \FomF\Ungerboeck\Client\Model\BookingsModel | (Include in the HTTP Body) A BookingsModel entry to add.

try {
    $result = $apiInstance->bookingsPostBooking($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsPostBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\BookingsModel**](../Model/BookingsModel.md)| (Include in the HTTP Body) A BookingsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BookingsModel**](../Model/BookingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingsPutBooking**
> \FomF\Ungerboeck\Client\Model\BookingsModel bookingsPutBooking($org_code, $event, $sequence_number, $data)

Extended (Bookings) - Edit a booking on an event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the booking.
$event = 56; // int | The ID of the booking's event.
$sequence_number = 56; // int | The Sequence Number of the booking.
$data = new \FomF\Ungerboeck\Client\Model\BookingsModel(); // \FomF\Ungerboeck\Client\Model\BookingsModel | (Include in the HTTP Body) A BookingsModel entry to edit.

try {
    $result = $apiInstance->bookingsPutBooking($org_code, $event, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsPutBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the booking. |
 **event** | **int**| The ID of the booking&#39;s event. |
 **sequence_number** | **int**| The Sequence Number of the booking. |
 **data** | [**\FomF\Ungerboeck\Client\Model\BookingsModel**](../Model/BookingsModel.md)| (Include in the HTTP Body) A BookingsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BookingsModel**](../Model/BookingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

