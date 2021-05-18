# FomF\Ungerboeck\Client\InvoiceDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceDetailsGetInvoiceDetails**](InvoiceDetailsApi.md#invoiceDetailsGetInvoiceDetails) | **GET** /api/v1/InvoiceDetails/{OrgCode}/{InvoiceNumber}/{OrderNumber}/{OrderLine} | Standard - Get an invoice detail by its parameters
[**invoiceDetailsGetInvoiceDetailsList**](InvoiceDetailsApi.md#invoiceDetailsGetInvoiceDetailsList) | **GET** /api/v1/InvoiceDetails/{OrgCode} | Standard - Search for invoice details using OData.


# **invoiceDetailsGetInvoiceDetails**
> \FomF\Ungerboeck\Client\Model\InvoiceDetailsModel invoiceDetailsGetInvoiceDetails($org_code, $invoice_number, $order_number, $order_line)

Standard - Get an invoice detail by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InvoiceDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the invoice detail.
$invoice_number = 56; // int | The invoice number of the invoice the detail entries are associated with.
$order_number = 56; // int | The order number of the order the order item is associated with.
$order_line = 56; // int | The order line of the order item.

try {
    $result = $apiInstance->invoiceDetailsGetInvoiceDetails($org_code, $invoice_number, $order_number, $order_line);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDetailsApi->invoiceDetailsGetInvoiceDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the invoice detail. |
 **invoice_number** | **int**| The invoice number of the invoice the detail entries are associated with. |
 **order_number** | **int**| The order number of the order the order item is associated with. |
 **order_line** | **int**| The order line of the order item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\InvoiceDetailsModel**](../Model/InvoiceDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceDetailsGetInvoiceDetailsList**
> \FomF\Ungerboeck\Client\Model\InvoiceDetailsModel invoiceDetailsGetInvoiceDetailsList($org_code, $search)

Standard - Search for invoice details using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InvoiceDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->invoiceDetailsGetInvoiceDetailsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceDetailsApi->invoiceDetailsGetInvoiceDetailsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\InvoiceDetailsModel**](../Model/InvoiceDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

