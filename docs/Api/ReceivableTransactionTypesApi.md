# FomF\Ungerboeck\Client\ReceivableTransactionTypesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**receivableTransactionTypesGetReceivableTransactionType**](ReceivableTransactionTypesApi.md#receivableTransactionTypesGetReceivableTransactionType) | **GET** /api/v1/ReceivableTransactionTypes/{OrgCode}/{TSM} | Standard - Retrieve a ReceivableTransactionTypes record
[**receivableTransactionTypesGetReceivableTransactionTypeList**](ReceivableTransactionTypesApi.md#receivableTransactionTypesGetReceivableTransactionTypeList) | **GET** /api/v1/ReceivableTransactionTypes/{OrgCode} | Standard - Search for ReceivableTransactionTypes using OData.


# **receivableTransactionTypesGetReceivableTransactionType**
> \FomF\Ungerboeck\Client\Model\ReceivableTransactionTypesModel receivableTransactionTypesGetReceivableTransactionType($org_code, $tsm)

Standard - Retrieve a ReceivableTransactionTypes record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ReceivableTransactionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the ReceivableTransactionTypes entry.
$tsm = "tsm_example"; // string | The transaction Type-Source-Method code the ReceivableTransactionTypes entry.

try {
    $result = $apiInstance->receivableTransactionTypesGetReceivableTransactionType($org_code, $tsm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivableTransactionTypesApi->receivableTransactionTypesGetReceivableTransactionType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the ReceivableTransactionTypes entry. |
 **tsm** | **string**| The transaction Type-Source-Method code the ReceivableTransactionTypes entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ReceivableTransactionTypesModel**](../Model/ReceivableTransactionTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **receivableTransactionTypesGetReceivableTransactionTypeList**
> \FomF\Ungerboeck\Client\Model\ReceivableTransactionTypesModel receivableTransactionTypesGetReceivableTransactionTypeList($org_code, $search)

Standard - Search for ReceivableTransactionTypes using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ReceivableTransactionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->receivableTransactionTypesGetReceivableTransactionTypeList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivableTransactionTypesApi->receivableTransactionTypesGetReceivableTransactionTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ReceivableTransactionTypesModel**](../Model/ReceivableTransactionTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

