# FomF\Ungerboeck\Client\StatementHeadersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statementHeadersGetStatementHeader**](StatementHeadersApi.md#statementHeadersGetStatementHeader) | **GET** /api/v1/StatementHeaders/{OrgCode}/{BatchSequence}/{Sequence} | Standard - Get Statement Header by its parameters
[**statementHeadersGetStatementHeaderList**](StatementHeadersApi.md#statementHeadersGetStatementHeaderList) | **GET** /api/v1/StatementHeaders/{OrgCode} | Standard - Search for Statement Headers using OData.


# **statementHeadersGetStatementHeader**
> \FomF\Ungerboeck\Client\Model\StatementHeadersModel statementHeadersGetStatementHeader($org_code, $batch_sequence, $sequence)

Standard - Get Statement Header by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\StatementHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Statement Batch.
$batch_sequence = 56; // int | The Batch Sequence of the Statement Header are associated with.
$sequence = 56; // int | The Sequence of the Statement Header are associated with.

try {
    $result = $apiInstance->statementHeadersGetStatementHeader($org_code, $batch_sequence, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementHeadersApi->statementHeadersGetStatementHeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Statement Batch. |
 **batch_sequence** | **int**| The Batch Sequence of the Statement Header are associated with. |
 **sequence** | **int**| The Sequence of the Statement Header are associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\StatementHeadersModel**](../Model/StatementHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statementHeadersGetStatementHeaderList**
> \FomF\Ungerboeck\Client\Model\StatementHeadersModel statementHeadersGetStatementHeaderList($org_code, $search)

Standard - Search for Statement Headers using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\StatementHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->statementHeadersGetStatementHeaderList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementHeadersApi->statementHeadersGetStatementHeaderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\StatementHeadersModel**](../Model/StatementHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

