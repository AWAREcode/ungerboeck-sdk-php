# FomF\Ungerboeck\Client\AccountsReceivableVouchersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsReceivableVouchersGetAccountsReceivableVoucher**](AccountsReceivableVouchersApi.md#accountsReceivableVouchersGetAccountsReceivableVoucher) | **GET** /api/v1/AccountsReceivableVouchers/{OrgCode}/{VoucherSequence} | Standard - Get a single accounts receivable voucher by its parameters
[**accountsReceivableVouchersGetAccountsReceivableVoucherList**](AccountsReceivableVouchersApi.md#accountsReceivableVouchersGetAccountsReceivableVoucherList) | **GET** /api/v1/AccountsReceivableVouchers/{OrgCode} | Standard - Search for accounts receivable vouchers using OData.


# **accountsReceivableVouchersGetAccountsReceivableVoucher**
> \FomF\Ungerboeck\Client\Model\AccountsReceivableVouchersModel accountsReceivableVouchersGetAccountsReceivableVoucher($org_code, $voucher_sequence)

Standard - Get a single accounts receivable voucher by its parameters

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
    $result = $apiInstance->accountsReceivableVouchersGetAccountsReceivableVoucher($org_code, $voucher_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsReceivableVouchersApi->accountsReceivableVouchersGetAccountsReceivableVoucher: ', $e->getMessage(), PHP_EOL;
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

# **accountsReceivableVouchersGetAccountsReceivableVoucherList**
> \FomF\Ungerboeck\Client\Model\AccountsReceivableVouchersModel accountsReceivableVouchersGetAccountsReceivableVoucherList($org_code, $search)

Standard - Search for accounts receivable vouchers using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->accountsReceivableVouchersGetAccountsReceivableVoucherList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsReceivableVouchersApi->accountsReceivableVouchersGetAccountsReceivableVoucherList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountsReceivableVouchersModel**](../Model/AccountsReceivableVouchersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

