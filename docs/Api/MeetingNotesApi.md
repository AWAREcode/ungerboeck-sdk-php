# FomF\Ungerboeck\Client\MeetingNotesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meetingNotesGetMeetingNotes**](MeetingNotesApi.md#meetingNotesGetMeetingNotes) | **GET** /api/v1/MeetingNotes/{OrgCode}/{BulletinApplication}/{Meeting}/{BulletinSeqNbr}/{SequenceNbr} | Get a meeting note by its parameters
[**meetingNotesGetMeetingNotesList**](MeetingNotesApi.md#meetingNotesGetMeetingNotesList) | **GET** /api/v1/MeetingNotes/{OrgCode} | Search for meeting note using OData.


# **meetingNotesGetMeetingNotes**
> \FomF\Ungerboeck\Client\Model\MeetingNotesModel meetingNotesGetMeetingNotes($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr)

Get a meeting note by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MeetingNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the meeting note.
$bulletin_application = "bulletin_application_example"; // string | The bulletin application of the meeting note.
$meeting = 56; // int | The meeting ID of the meeting note.
$bulletin_seq_nbr = 56; // int | The bulletin sequence number of the meeting note.
$sequence_nbr = 56; // int | The sequence number of the meeting note.

try {
    $result = $apiInstance->meetingNotesGetMeetingNotes($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingNotesApi->meetingNotesGetMeetingNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the meeting note. |
 **bulletin_application** | **string**| The bulletin application of the meeting note. |
 **meeting** | **int**| The meeting ID of the meeting note. |
 **bulletin_seq_nbr** | **int**| The bulletin sequence number of the meeting note. |
 **sequence_nbr** | **int**| The sequence number of the meeting note. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingNotesModel**](../Model/MeetingNotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingNotesGetMeetingNotesList**
> \FomF\Ungerboeck\Client\Model\MeetingNotesModel[] meetingNotesGetMeetingNotesList($org_code, $search)

Search for meeting note using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MeetingNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->meetingNotesGetMeetingNotesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingNotesApi->meetingNotesGetMeetingNotesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingNotesModel[]**](../Model/MeetingNotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

