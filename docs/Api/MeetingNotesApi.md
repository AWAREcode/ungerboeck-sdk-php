# FomF\Ungerboeck\Client\MeetingNotesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meetingNotesGetMeetingNote**](MeetingNotesApi.md#meetingNotesGetMeetingNote) | **GET** /api/v1/MeetingNotes/{OrgCode}/{BulletinApplication}/{Meeting}/{BulletinSeqNbr}/{SequenceNbr} | Standard - Get a single meeting note by its parameters
[**meetingNotesGetMeetingNoteList**](MeetingNotesApi.md#meetingNotesGetMeetingNoteList) | **GET** /api/v1/MeetingNotes/{OrgCode} | Standard - Search for meeting note using OData.


# **meetingNotesGetMeetingNote**
> \FomF\Ungerboeck\Client\Model\MeetingNotesModel meetingNotesGetMeetingNote($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr)

Standard - Get a single meeting note by its parameters

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
    $result = $apiInstance->meetingNotesGetMeetingNote($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingNotesApi->meetingNotesGetMeetingNote: ', $e->getMessage(), PHP_EOL;
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

# **meetingNotesGetMeetingNoteList**
> \FomF\Ungerboeck\Client\Model\MeetingNotesModel meetingNotesGetMeetingNoteList($org_code, $search)

Standard - Search for meeting note using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->meetingNotesGetMeetingNoteList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingNotesApi->meetingNotesGetMeetingNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingNotesModel**](../Model/MeetingNotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

