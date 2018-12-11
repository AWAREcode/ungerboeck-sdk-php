# FomF\Ungerboeck\Client\InvoicesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesGetInvoices**](InvoicesApi.md#invoicesGetInvoices) | **GET** /api/v1/Invoices/{OrgCode}/{InvoiceNumber}/{Source} | Get an invoice by its parameters
[**invoicesGetInvoicesList**](InvoicesApi.md#invoicesGetInvoicesList) | **GET** /api/v1/Invoices/{OrgCode} | Search for invoices using OData.
[**invoicesPutNotes**](InvoicesApi.md#invoicesPutNotes) | **PUT** /api/v1/Invoices/{OrgCode}/{InvoiceNumber}/{Source} | Edit an invoice


# **invoicesGetInvoices**
> \FomF\Ungerboeck\Client\Model\InvoicesModel invoicesGetInvoices($org_code, $source, $invoice_number)

Get an invoice by its parameters

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
    $result = $apiInstance->invoicesGetInvoices($org_code, $source, $invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGetInvoices: ', $e->getMessage(), PHP_EOL;
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

# **invoicesGetInvoicesList**
> \FomF\Ungerboeck\Client\Model\InvoicesModel[] invoicesGetInvoicesList($org_code, $search)

Search for invoices using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->invoicesGetInvoicesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesGetInvoicesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\InvoicesModel[]**](../Model/InvoicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesPutNotes**
> \FomF\Ungerboeck\Client\Model\InvoicesModel invoicesPutNotes($org_code, $source, $invoice_number, $data)

Edit an invoice

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
    $result = $apiInstance->invoicesPutNotes($org_code, $source, $invoice_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesPutNotes: ', $e->getMessage(), PHP_EOL;
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

