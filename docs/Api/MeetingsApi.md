# FomF\Ungerboeck\Client\MeetingsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meetingsGetMeeting**](MeetingsApi.md#meetingsGetMeeting) | **GET** /api/v1/Meetings/{OrgCode}/{MeetingSequence} | Standard - Get a single meeting by its parameters
[**meetingsGetMeetingList**](MeetingsApi.md#meetingsGetMeetingList) | **GET** /api/v1/Meetings/{OrgCode} | Standard - Search for meeting using OData.
[**meetingsPostMeeting**](MeetingsApi.md#meetingsPostMeeting) | **POST** /api/v1/Meetings | Standard - Add meeting
[**meetingsPutMeeting**](MeetingsApi.md#meetingsPutMeeting) | **PUT** /api/v1/Meetings/{OrgCode}/{MeetingSequence} | Standard - Edit Meeting


# **meetingsGetMeeting**
> \FomF\Ungerboeck\Client\Model\MeetingsModel meetingsGetMeeting($org_code, $meeting_sequence)

Standard - Get a single meeting by its parameters

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
    $result = $apiInstance->meetingsGetMeeting($org_code, $meeting_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingsGetMeeting: ', $e->getMessage(), PHP_EOL;
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

# **meetingsGetMeetingList**
> \FomF\Ungerboeck\Client\Model\MeetingsModel meetingsGetMeetingList($org_code, $search)

Standard - Search for meeting using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->meetingsGetMeetingList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingsGetMeetingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingsModel**](../Model/MeetingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingsPostMeeting**
> \FomF\Ungerboeck\Client\Model\MeetingsModel meetingsPostMeeting($data)

Standard - Add meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\MeetingsModel(); // \FomF\Ungerboeck\Client\Model\MeetingsModel | Meeting object to add

try {
    $result = $apiInstance->meetingsPostMeeting($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingsPostMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\MeetingsModel**](../Model/MeetingsModel.md)| Meeting object to add |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingsModel**](../Model/MeetingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingsPutMeeting**
> \FomF\Ungerboeck\Client\Model\MeetingsModel meetingsPutMeeting($org_code, $meeting_sequence, $data)

Standard - Edit Meeting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Orgnization code of meeting
$meeting_sequence = 56; // int | Sequence of meeting
$data = new \FomF\Ungerboeck\Client\Model\MeetingsModel(); // \FomF\Ungerboeck\Client\Model\MeetingsModel | Meeting object to update

try {
    $result = $apiInstance->meetingsPutMeeting($org_code, $meeting_sequence, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingsPutMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Orgnization code of meeting |
 **meeting_sequence** | **int**| Sequence of meeting |
 **data** | [**\FomF\Ungerboeck\Client\Model\MeetingsModel**](../Model/MeetingsModel.md)| Meeting object to update |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingsModel**](../Model/MeetingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

