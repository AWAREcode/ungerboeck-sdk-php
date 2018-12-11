# FomF\Ungerboeck\Client\MeetingsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meetingsGetMeetings**](MeetingsApi.md#meetingsGetMeetings) | **GET** /api/v1/Meetings/{OrgCode}/{MeetingSequence} | Get a meeting by its parameters
[**meetingsGetMeetingsList**](MeetingsApi.md#meetingsGetMeetingsList) | **GET** /api/v1/Meetings/{OrgCode} | Search for meeting using OData.


# **meetingsGetMeetings**
> \FomF\Ungerboeck\Client\Model\MeetingsModel meetingsGetMeetings($org_code, $meeting_sequence)

Get a meeting by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the meeting.
$meeting_sequence = 56; // int | The meeting sequence of the meeting.

try {
    $result = $apiInstance->meetingsGetMeetings($org_code, $meeting_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingsGetMeetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the meeting. |
 **meeting_sequence** | **int**| The meeting sequence of the meeting. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingsModel**](../Model/MeetingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingsGetMeetingsList**
> \FomF\Ungerboeck\Client\Model\MeetingsModel[] meetingsGetMeetingsList($org_code, $search)

Search for meeting using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->meetingsGetMeetingsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingsGetMeetingsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingsModel[]**](../Model/MeetingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

