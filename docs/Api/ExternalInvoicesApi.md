# FomF\Ungerboeck\Client\ExternalInvoicesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**externalInvoicesGetExternalInvoice**](ExternalInvoicesApi.md#externalInvoicesGetExternalInvoice) | **GET** /api/v1/ExternalInvoices/{HeaderIDExt} | Standard - Retrieve an ExternalInvoice record
[**externalInvoicesGetExternalInvoiceList**](ExternalInvoicesApi.md#externalInvoicesGetExternalInvoiceList) | **GET** /api/v1/ExternalInvoices | Standard - Search for GetExternalInvoices using OData.


# **externalInvoicesGetExternalInvoice**
> \FomF\Ungerboeck\Client\Model\ExternalInvoicesModel externalInvoicesGetExternalInvoice($header_id_ext)

Standard - Retrieve an ExternalInvoice record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExternalInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$header_id_ext = 56; // int | The header id of the ExternalInvoice entry.

try {
    $result = $apiInstance->externalInvoicesGetExternalInvoice($header_id_ext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalInvoicesApi->externalInvoicesGetExternalInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **header_id_ext** | **int**| The header id of the ExternalInvoice entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExternalInvoicesModel**](../Model/ExternalInvoicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **externalInvoicesGetExternalInvoiceList**
> \FomF\Ungerboeck\Client\Model\ExternalInvoicesModel externalInvoicesGetExternalInvoiceList($search)

Standard - Search for GetExternalInvoices using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExternalInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->externalInvoicesGetExternalInvoiceList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalInvoicesApi->externalInvoicesGetExternalInvoiceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExternalInvoicesModel**](../Model/ExternalInvoicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

