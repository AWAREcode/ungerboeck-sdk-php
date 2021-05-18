# FomF\Ungerboeck\Client\StatementDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statementDetailsGetStatementDetail**](StatementDetailsApi.md#statementDetailsGetStatementDetail) | **GET** /api/v1/StatementDetails/{OrgCode}/{BatchSequence}/{HeaderSequence}/{SequenceNumber} | Standard - Get Statement Detail by its parameters
[**statementDetailsGetStatementDetailList**](StatementDetailsApi.md#statementDetailsGetStatementDetailList) | **GET** /api/v1/StatementDetails/{OrgCode} | Standard - Search for StatementDetails using OData.


# **statementDetailsGetStatementDetail**
> \FomF\Ungerboeck\Client\Model\StatementDetailsModel statementDetailsGetStatementDetail($org_code, $batch_sequence, $header_sequence, $sequence_number)

Standard - Get Statement Detail by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\StatementDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Statement Batch.
$batch_sequence = 56; // int | The Batch Sequence of the Statement Detail are associated with.
$header_sequence = 56; // int | The Header Sequence of the Statement Detail are associated with.
$sequence_number = 56; // int | The Sequence of the Statement Detail are associated with.

try {
    $result = $apiInstance->statementDetailsGetStatementDetail($org_code, $batch_sequence, $header_sequence, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementDetailsApi->statementDetailsGetStatementDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Statement Batch. |
 **batch_sequence** | **int**| The Batch Sequence of the Statement Detail are associated with. |
 **header_sequence** | **int**| The Header Sequence of the Statement Detail are associated with. |
 **sequence_number** | **int**| The Sequence of the Statement Detail are associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\StatementDetailsModel**](../Model/StatementDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statementDetailsGetStatementDetailList**
> \FomF\Ungerboeck\Client\Model\StatementDetailsModel statementDetailsGetStatementDetailList($org_code, $search)

Standard - Search for StatementDetails using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\StatementDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->statementDetailsGetStatementDetailList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementDetailsApi->statementDetailsGetStatementDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\StatementDetailsModel**](../Model/StatementDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

