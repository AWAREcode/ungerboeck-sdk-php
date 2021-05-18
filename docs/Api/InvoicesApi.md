# FomF\Ungerboeck\Client\InvoicesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesGetInvoice**](InvoicesApi.md#invoicesGetInvoice) | **GET** /api/v1/Invoices/{OrgCode}/{InvoiceNumber}/{Source} | Standard - Get a single invoice by its parameters
[**invoicesGetInvoiceList**](InvoicesApi.md#invoicesGetInvoiceList) | **GET** /api/v1/Invoices/{OrgCode} | Standard - Search for invoices using OData.
[**invoicesPutInvoice**](InvoicesApi.md#invoicesPutInvoice) | **PUT** /api/v1/Invoices/{OrgCode}/{InvoiceNumber}/{Source} | Standard - Edit an invoice


# **invoicesGetInvoice**
> \FomF\Ungerboeck\Client\Model\InvoicesModel invoicesGetInvoice($org_code, $source, $invoice_number)

Standard - Get a single invoice by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the invoice.
$source = "source_example"; // string | The code value of the source of the invoice. Possible values are EV=Event, FF=Fulfillment, MB=Membership, PP=Payment Plan.
$invoice_number = 56; // int | The number of the invoice.

try {
    $result = $apiInstance->invoicesGetInvoice($org_code, $source, $invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGetInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the invoice. |
 **source** | **string**| The code value of the source of the invoice. Possible values are EV&#x3D;Event, FF&#x3D;Fulfillment, MB&#x3D;Membership, PP&#x3D;Payment Plan. |
 **invoice_number** | **int**| The number of the invoice. |

### Return type

[**\FomF\Ungerboeck\Client\Model\InvoicesModel**](../Model/InvoicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesGetInvoiceList**
> \FomF\Ungerboeck\Client\Model\InvoicesModel invoicesGetInvoiceList($org_code, $search)

Standard - Search for invoices using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->invoicesGetInvoiceList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGetInvoiceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\InvoicesModel**](../Model/InvoicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesPutInvoice**
> \FomF\Ungerboeck\Client\Model\InvoicesModel invoicesPutInvoice($org_code, $source, $invoice_number, $data)

Standard - Edit an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the invoice.
$source = "source_example"; // string | The source of the invoice.
$invoice_number = 56; // int | The number of the invoice.
$data = new \FomF\Ungerboeck\Client\Model\InvoicesModel(); // \FomF\Ungerboeck\Client\Model\InvoicesModel | (Include in the HTTP Body) An InvoicesModel to edit.

try {
    $result = $apiInstance->invoicesPutInvoice($org_code, $source, $invoice_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPutInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the invoice. |
 **source** | **string**| The source of the invoice. |
 **invoice_number** | **int**| The number of the invoice. |
 **data** | [**\FomF\Ungerboeck\Client\Model\InvoicesModel**](../Model/InvoicesModel.md)| (Include in the HTTP Body) An InvoicesModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\InvoicesModel**](../Model/InvoicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

