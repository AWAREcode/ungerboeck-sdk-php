# FomF\Ungerboeck\Client\AccountsReceivableVouchersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsReceivableVouchersGetAccountsReceivableVouchers**](AccountsReceivableVouchersApi.md#accountsReceivableVouchersGetAccountsReceivableVouchers) | **GET** /api/v1/AccountsReceivableVouchers/{OrgCode}/{VoucherSequence} | Get a accounts receivable voucher by its parameters
[**accountsReceivableVouchersGetAccountsReceivableVouchersList**](AccountsReceivableVouchersApi.md#accountsReceivableVouchersGetAccountsReceivableVouchersList) | **GET** /api/v1/AccountsReceivableVouchers/{OrgCode} | Search for accounts receivable vouchers using OData.


# **accountsReceivableVouchersGetAccountsReceivableVouchers**
> \FomF\Ungerboeck\Client\Model\AccountsReceivableVouchersModel accountsReceivableVouchersGetAccountsReceivableVouchers($org_code, $voucher_sequence)

Get a accounts receivable voucher by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountsReceivableVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the accounts receivable voucher.
$voucher_sequence = 56; // int | The voucher sequence of the accounts receivable voucher.

try {
    $result = $apiInstance->accountsReceivableVouchersGetAccountsReceivableVouchers($org_code, $voucher_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsReceivableVouchersApi->accountsReceivableVouchersGetAccountsReceivableVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the accounts receivable voucher. |
 **voucher_sequence** | **int**| The voucher sequence of the accounts receivable voucher. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountsReceivableVouchersModel**](../Model/AccountsReceivableVouchersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsReceivableVouchersGetAccountsReceivableVouchersList**
> \FomF\Ungerboeck\Client\Model\AccountsReceivableVouchersModel[] accountsReceivableVouchersGetAccountsReceivableVouchersList($org_code, $search)

Search for accounts receivable vouchers using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountsReceivableVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->accountsReceivableVouchersGetAccountsReceivableVouchersList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsReceivableVouchersApi->accountsReceivableVouchersGetAccountsReceivableVouchersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountsReceivableVouchersModel[]**](../Model/AccountsReceivableVouchersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

