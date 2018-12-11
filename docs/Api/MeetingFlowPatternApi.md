# FomF\Ungerboeck\Client\MeetingFlowPatternApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meetingFlowPatternGetMeetingFlowPattern**](MeetingFlowPatternApi.md#meetingFlowPatternGetMeetingFlowPattern) | **GET** /api/v1/MeetingFlowPattern/{OrgCode}/{FlowApplicationCode}/{MeetingTourSequenceNbr}/{FlowSequenceNumber} | Get a meeting flow pattern by its parameters
[**meetingFlowPatternGetMeetingFlowPatternList**](MeetingFlowPatternApi.md#meetingFlowPatternGetMeetingFlowPatternList) | **GET** /api/v1/MeetingFlowPattern/{OrgCode} | Search for meeting flow pattern using OData.


# **meetingFlowPatternGetMeetingFlowPattern**
> \FomF\Ungerboeck\Client\Model\MeetingFlowPatternModel meetingFlowPatternGetMeetingFlowPattern($org_code, $flow_application_code, $meeting_tour_sequence_nbr, $flow_sequence_number)

Get a meeting flow pattern by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MeetingFlowPatternApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the meeting flow pattern.
$flow_application_code = "flow_application_code_example"; // string | The flow application code of the meeting flow pattern.
$meeting_tour_sequence_nbr = 56; // int | The meeting tour sequence number of the meeting flow pattern.
$flow_sequence_number = 56; // int | The flow sequence number of the meeting flow pattern.

try {
    $result = $apiInstance->meetingFlowPatternGetMeetingFlowPattern($org_code, $flow_application_code, $meeting_tour_sequence_nbr, $flow_sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingFlowPatternApi->meetingFlowPatternGetMeetingFlowPattern: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the meeting flow pattern. |
 **flow_application_code** | **string**| The flow application code of the meeting flow pattern. |
 **meeting_tour_sequence_nbr** | **int**| The meeting tour sequence number of the meeting flow pattern. |
 **flow_sequence_number** | **int**| The flow sequence number of the meeting flow pattern. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingFlowPatternModel**](../Model/MeetingFlowPatternModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingFlowPatternGetMeetingFlowPatternList**
> \FomF\Ungerboeck\Client\Model\MeetingFlowPatternModel[] meetingFlowPatternGetMeetingFlowPatternList($org_code, $search)

Search for meeting flow pattern using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MeetingFlowPatternApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->meetingFlowPatternGetMeetingFlowPatternList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingFlowPatternApi->meetingFlowPatternGetMeetingFlowPatternList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\MeetingFlowPatternModel[]**](../Model/MeetingFlowPatternModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

