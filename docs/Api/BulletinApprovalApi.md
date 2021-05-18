# FomF\Ungerboeck\Client\BulletinApprovalApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulletinApprovalGetBulletinApproval**](BulletinApprovalApi.md#bulletinApprovalGetBulletinApproval) | **GET** /api/v1/BulletinApproval/{OrgCode}/{MeetingSequenceNumber}/{BulletinSequenceNumber}/{SequenceNumber}/{BulletinFileID} | Standard - Get a single bulletin approval by its parameters
[**bulletinApprovalGetBulletinApprovalList**](BulletinApprovalApi.md#bulletinApprovalGetBulletinApprovalList) | **GET** /api/v1/BulletinApproval/{OrgCode} | Standard - Search for bulletin approval using OData.


# **bulletinApprovalGetBulletinApproval**
> \FomF\Ungerboeck\Client\Model\BulletinApprovalModel bulletinApprovalGetBulletinApproval($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id)

Standard - Get a single bulletin approval by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BulletinApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the bulletin approval.
$meeting_sequence_number = 56; // int | The meeting sequence number of the bulletin approval.
$bulletin_sequence_number = 56; // int | The bulletin sequence number of the bulletin approval.
$sequence_number = 56; // int | The sequence number of the bulletin approval.
$bulletin_file_id = "bulletin_file_id_example"; // string | The bulletin file ID of the bulletin approval.

try {
    $result = $apiInstance->bulletinApprovalGetBulletinApproval($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulletinApprovalApi->bulletinApprovalGetBulletinApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the bulletin approval. |
 **meeting_sequence_number** | **int**| The meeting sequence number of the bulletin approval. |
 **bulletin_sequence_number** | **int**| The bulletin sequence number of the bulletin approval. |
 **sequence_number** | **int**| The sequence number of the bulletin approval. |
 **bulletin_file_id** | **string**| The bulletin file ID of the bulletin approval. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BulletinApprovalModel**](../Model/BulletinApprovalModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulletinApprovalGetBulletinApprovalList**
> \FomF\Ungerboeck\Client\Model\BulletinApprovalModel bulletinApprovalGetBulletinApprovalList($org_code, $search)

Standard - Search for bulletin approval using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BulletinApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->bulletinApprovalGetBulletinApprovalList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulletinApprovalApi->bulletinApprovalGetBulletinApprovalList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BulletinApprovalModel**](../Model/BulletinApprovalModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

