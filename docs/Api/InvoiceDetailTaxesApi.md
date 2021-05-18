# FomF\Ungerboeck\Client\InvoiceDetailTaxesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceDetailTaxesGetInvoiceDetailTaxes**](InvoiceDetailTaxesApi.md#invoiceDetailTaxesGetInvoiceDetailTaxes) | **GET** /api/v1/InvoiceDetailTaxes/{OrgCode}/{InvoiceNumber}/{OrderNumber}/{OrderLineNumber}/{SequenceNumber} | Standard - Get an invoice detail tax by its parameters
[**invoiceDetailTaxesGetInvoiceDetailTaxesList**](InvoiceDetailTaxesApi.md#invoiceDetailTaxesGetInvoiceDetailTaxesList) | **GET** /api/v1/InvoiceDetailTaxes/{OrgCode} | Standard - Search for invoice detail taxes using OData.


# **invoiceDetailTaxesGetInvoiceDetailTaxes**
> \FomF\Ungerboeck\Client\Model\InvoiceDetailTaxesModel invoiceDetailTaxesGetInvoiceDetailTaxes($org_code, $invoice_number, $order_number, $order_line_number, $sequence_number)

Standard - Get an invoice detail tax by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InvoiceDetailTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the invoice detail.
$invoice_number = 56; // int | The invoice number of the invoice the detail entries are associated with.
$order_number = 56; // int | The order number of the order the order item is associated with.
$order_line_number = 56; // int | The order line of the order item.
$sequence_number = 56; // int | The sequence number of invoice detail tax

try {
    $result = $apiInstance->invoiceDetailTaxesGetInvoiceDetailTaxes($org_code, $invoice_number, $order_number, $order_line_number, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDetailTaxesApi->invoiceDetailTaxesGetInvoiceDetailTaxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the invoice detail. |
 **invoice_number** | **int**| The invoice number of the invoice the detail entries are associated with. |
 **order_number** | **int**| The order number of the order the order item is associated with. |
 **order_line_number** | **int**| The order line of the order item. |
 **sequence_number** | **int**| The sequence number of invoice detail tax |

### Return type

[**\FomF\Ungerboeck\Client\Model\InvoiceDetailTaxesModel**](../Model/InvoiceDetailTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceDetailTaxesGetInvoiceDetailTaxesList**
> \FomF\Ungerboeck\Client\Model\InvoiceDetailTaxesModel invoiceDetailTaxesGetInvoiceDetailTaxesList($org_code, $search)

Standard - Search for invoice detail taxes using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InvoiceDetailTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->invoiceDetailTaxesGetInvoiceDetailTaxesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDetailTaxesApi->invoiceDetailTaxesGetInvoiceDetailTaxesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\InvoiceDetailTaxesModel**](../Model/InvoiceDetailTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

