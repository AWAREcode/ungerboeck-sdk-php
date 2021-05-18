# FomF\Ungerboeck\Client\VoucherTaxesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherTaxesGetVoucherTax**](VoucherTaxesApi.md#voucherTaxesGetVoucherTax) | **GET** /api/v1/VoucherTaxes/{OrgCode}/{Voucher}/{Sequence} | Standard - Get a voucher tax by its parameters
[**voucherTaxesGetVoucherTaxList**](VoucherTaxesApi.md#voucherTaxesGetVoucherTaxList) | **GET** /api/v1/VoucherTaxes/{OrgCode} | Standard - Search for voucher taxes using OData.


# **voucherTaxesGetVoucherTax**
> \FomF\Ungerboeck\Client\Model\VoucherTaxesModel voucherTaxesGetVoucherTax($org_code, $voucher, $sequence)

Standard - Get a voucher tax by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the voucher tax.
$voucher = 56; // int | The voucher number of the voucher tax entry.
$sequence = 56; // int | The sequence number of the voucher tax entry.

try {
    $result = $apiInstance->voucherTaxesGetVoucherTax($org_code, $voucher, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherTaxesApi->voucherTaxesGetVoucherTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the voucher tax. |
 **voucher** | **int**| The voucher number of the voucher tax entry. |
 **sequence** | **int**| The sequence number of the voucher tax entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherTaxesModel**](../Model/VoucherTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherTaxesGetVoucherTaxList**
> \FomF\Ungerboeck\Client\Model\VoucherTaxesModel voucherTaxesGetVoucherTaxList($org_code, $search)

Standard - Search for voucher taxes using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->voucherTaxesGetVoucherTaxList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherTaxesApi->voucherTaxesGetVoucherTaxList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherTaxesModel**](../Model/VoucherTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

