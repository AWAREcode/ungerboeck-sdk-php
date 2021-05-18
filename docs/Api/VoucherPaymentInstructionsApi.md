# FomF\Ungerboeck\Client\VoucherPaymentInstructionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherPaymentInstructionsGetVoucherPaymentInstruction**](VoucherPaymentInstructionsApi.md#voucherPaymentInstructionsGetVoucherPaymentInstruction) | **GET** /api/v1/VoucherPaymentInstructions/{OrgCode}/{Voucher}/{SequenceNumber} | Standard - Get a voucher payment instruction by its parameters
[**voucherPaymentInstructionsGetVoucherPaymentInstructionList**](VoucherPaymentInstructionsApi.md#voucherPaymentInstructionsGetVoucherPaymentInstructionList) | **GET** /api/v1/VoucherPaymentInstructions/{OrgCode} | Standard - Search for voucher payment instructions using OData.


# **voucherPaymentInstructionsGetVoucherPaymentInstruction**
> \FomF\Ungerboeck\Client\Model\VoucherPaymentInstructionsModel voucherPaymentInstructionsGetVoucherPaymentInstruction($org_code, $voucher, $sequence_number)

Standard - Get a voucher payment instruction by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherPaymentInstructionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the voucher payment instruction.
$voucher = 56; // int | The voucher number of the voucher payment instruction entry.
$sequence_number = 56; // int | The Sequence number of the voucher payment instruction entry.

try {
    $result = $apiInstance->voucherPaymentInstructionsGetVoucherPaymentInstruction($org_code, $voucher, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherPaymentInstructionsApi->voucherPaymentInstructionsGetVoucherPaymentInstruction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the voucher payment instruction. |
 **voucher** | **int**| The voucher number of the voucher payment instruction entry. |
 **sequence_number** | **int**| The Sequence number of the voucher payment instruction entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherPaymentInstructionsModel**](../Model/VoucherPaymentInstructionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherPaymentInstructionsGetVoucherPaymentInstructionList**
> \FomF\Ungerboeck\Client\Model\VoucherPaymentInstructionsModel voucherPaymentInstructionsGetVoucherPaymentInstructionList($org_code, $search)

Standard - Search for voucher payment instructions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherPaymentInstructionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->voucherPaymentInstructionsGetVoucherPaymentInstructionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherPaymentInstructionsApi->voucherPaymentInstructionsGetVoucherPaymentInstructionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherPaymentInstructionsModel**](../Model/VoucherPaymentInstructionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

