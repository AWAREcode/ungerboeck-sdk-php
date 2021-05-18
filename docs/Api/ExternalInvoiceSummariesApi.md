# FomF\Ungerboeck\Client\ExternalInvoiceSummariesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**externalInvoiceSummariesGetExternalInvoiceSummary**](ExternalInvoiceSummariesApi.md#externalInvoiceSummariesGetExternalInvoiceSummary) | **GET** /api/v1/ExternalInvoiceSummaries/{SummaryID} | Standard - Retrieve a ExternalInvoiceSummary record
[**externalInvoiceSummariesGetExternalInvoiceSummaryList**](ExternalInvoiceSummariesApi.md#externalInvoiceSummariesGetExternalInvoiceSummaryList) | **GET** /api/v1/ExternalInvoiceSummaries | Standard - Search for GetExternalInvoiceSummaries using OData.


# **externalInvoiceSummariesGetExternalInvoiceSummary**
> \FomF\Ungerboeck\Client\Model\ExternalInvoiceSummariesModel externalInvoiceSummariesGetExternalInvoiceSummary($summary_id)

Standard - Retrieve a ExternalInvoiceSummary record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExternalInvoiceSummariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$summary_id = 56; // int | The summary id of the ExternalInvoiceSummary entry.

try {
    $result = $apiInstance->externalInvoiceSummariesGetExternalInvoiceSummary($summary_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalInvoiceSummariesApi->externalInvoiceSummariesGetExternalInvoiceSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **summary_id** | **int**| The summary id of the ExternalInvoiceSummary entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExternalInvoiceSummariesModel**](../Model/ExternalInvoiceSummariesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **externalInvoiceSummariesGetExternalInvoiceSummaryList**
> \FomF\Ungerboeck\Client\Model\ExternalInvoiceSummariesModel externalInvoiceSummariesGetExternalInvoiceSummaryList($search)

Standard - Search for GetExternalInvoiceSummaries using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExternalInvoiceSummariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->externalInvoiceSummariesGetExternalInvoiceSummaryList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalInvoiceSummariesApi->externalInvoiceSummariesGetExternalInvoiceSummaryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExternalInvoiceSummariesModel**](../Model/ExternalInvoiceSummariesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

