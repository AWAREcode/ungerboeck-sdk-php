# FomF\Ungerboeck\Client\StatementBatchesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statementBatchesGetStatementBatch**](StatementBatchesApi.md#statementBatchesGetStatementBatch) | **GET** /api/v1/StatementBatches/{OrgCode}/{Batch} | Standard - Get Statement Batch by its parameters
[**statementBatchesGetStatementBatchList**](StatementBatchesApi.md#statementBatchesGetStatementBatchList) | **GET** /api/v1/StatementBatches/{OrgCode} | Standard - Search for StatementBatches using OData.


# **statementBatchesGetStatementBatch**
> \FomF\Ungerboeck\Client\Model\StatementBatchesModel statementBatchesGetStatementBatch($org_code, $batch)

Standard - Get Statement Batch by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\StatementBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Statement Batch.
$batch = 56; // int | The Batch of the Statement Batch are associated with.

try {
    $result = $apiInstance->statementBatchesGetStatementBatch($org_code, $batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementBatchesApi->statementBatchesGetStatementBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Statement Batch. |
 **batch** | **int**| The Batch of the Statement Batch are associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\StatementBatchesModel**](../Model/StatementBatchesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statementBatchesGetStatementBatchList**
> \FomF\Ungerboeck\Client\Model\StatementBatchesModel statementBatchesGetStatementBatchList($org_code, $search)

Standard - Search for StatementBatches using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\StatementBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->statementBatchesGetStatementBatchList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementBatchesApi->statementBatchesGetStatementBatchList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\StatementBatchesModel**](../Model/StatementBatchesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

