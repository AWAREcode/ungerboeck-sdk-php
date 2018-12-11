# FomF\Ungerboeck\Client\BookingsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingsGetBooking**](BookingsApi.md#bookingsGetBooking) | **GET** /api/v1/Bookings/{OrgCode}/{Event}/{SequenceNumber} | Get a booking by its parameters
[**bookingsGetBookingsList**](BookingsApi.md#bookingsGetBookingsList) | **GET** /api/v1/Bookings/{OrgCode} | Search for bookings using OData.
[**bookingsPostBooking**](BookingsApi.md#bookingsPostBooking) | **POST** /api/v1/Bookings | Add a booking to an existing event
[**bookingsPutBooking**](BookingsApi.md#bookingsPutBooking) | **PUT** /api/v1/Bookings/{OrgCode}/{Event}/{SequenceNumber} | Edit a booking on an event


# **bookingsGetBooking**
> \FomF\Ungerboeck\Client\Model\BookingsModel bookingsGetBooking($org_code, $event, $sequence_number)

Get a booking by its parameters

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

# **bookingsGetBookingsList**
> \FomF\Ungerboeck\Client\Model\BookingsModel[] bookingsGetBookingsList($org_code, $search)

Search for bookings using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->bookingsGetBookingsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsGetBookingsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\BookingsModel[]**](../Model/BookingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingsPostBooking**
> \FomF\Ungerboeck\Client\Model\BookingsModel bookingsPostBooking($data)

Add a booking to an existing event

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

Edit a booking on an event

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

