# FomF\Ungerboeck\Client\ExternalInvoiceDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**externalInvoiceDetailsGetExternalInvoiceDetail**](ExternalInvoiceDetailsApi.md#externalInvoiceDetailsGetExternalInvoiceDetail) | **GET** /api/v1/ExternalInvoiceDetails/{DetailIDExt} | Standard - Retrieve an ExternalInvoiceDetail record
[**externalInvoiceDetailsGetExternalInvoiceDetailList**](ExternalInvoiceDetailsApi.md#externalInvoiceDetailsGetExternalInvoiceDetailList) | **GET** /api/v1/ExternalInvoiceDetails | Standard - Search for GetExternalInvoiceDetails using OData.


# **externalInvoiceDetailsGetExternalInvoiceDetail**
> \FomF\Ungerboeck\Client\Model\ExternalInvoiceDetailsModel externalInvoiceDetailsGetExternalInvoiceDetail($detail_id_ext)

Standard - Retrieve an ExternalInvoiceDetail record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExternalInvoiceDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$detail_id_ext = 56; // int | The detail id of the ExternalInvoiceDetail entry.

try {
    $result = $apiInstance->externalInvoiceDetailsGetExternalInvoiceDetail($detail_id_ext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalInvoiceDetailsApi->externalInvoiceDetailsGetExternalInvoiceDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **detail_id_ext** | **int**| The detail id of the ExternalInvoiceDetail entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExternalInvoiceDetailsModel**](../Model/ExternalInvoiceDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **externalInvoiceDetailsGetExternalInvoiceDetailList**
> \FomF\Ungerboeck\Client\Model\ExternalInvoiceDetailsModel externalInvoiceDetailsGetExternalInvoiceDetailList($search)

Standard - Search for GetExternalInvoiceDetails using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExternalInvoiceDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->externalInvoiceDetailsGetExternalInvoiceDetailList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalInvoiceDetailsApi->externalInvoiceDetailsGetExternalInvoiceDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExternalInvoiceDetailsModel**](../Model/ExternalInvoiceDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

