# FomF\Ungerboeck\Client\AccountsReceivableVoucherAllocationsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocation**](AccountsReceivableVoucherAllocationsApi.md#accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocation) | **GET** /api/v1/AccountsReceivableVoucherAllocations/{OrgCode}/{VoucherSequence}/{VoucherDetailSequence} | Standard - Retrieve a AccountsReceivableVoucherAllocations record
[**accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocationList**](AccountsReceivableVoucherAllocationsApi.md#accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocationList) | **GET** /api/v1/AccountsReceivableVoucherAllocations/{OrgCode} | Standard - Search for AccountsReceivableVoucherAllocations using OData.


# **accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocation**
> \FomF\Ungerboeck\Client\Model\AccountsReceivableVoucherAllocationsModel accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocation($org_code, $voucher_sequence, $voucher_detail_sequence)

Standard - Retrieve a AccountsReceivableVoucherAllocations record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountsReceivableVoucherAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the AccountsReceivableVoucherAllocations entry.
$voucher_sequence = 56; // int | The voucher sequence of the AccountsReceivableVoucherAllocations entry.
$voucher_detail_sequence = 56; // int | The voucher detail sequence of the AccountsReceivableVoucherAllocations entry.

try {
    $result = $apiInstance->accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocation($org_code, $voucher_sequence, $voucher_detail_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsReceivableVoucherAllocationsApi->accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the AccountsReceivableVoucherAllocations entry. |
 **voucher_sequence** | **int**| The voucher sequence of the AccountsReceivableVoucherAllocations entry. |
 **voucher_detail_sequence** | **int**| The voucher detail sequence of the AccountsReceivableVoucherAllocations entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountsReceivableVoucherAllocationsModel**](../Model/AccountsReceivableVoucherAllocationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocationList**
> \FomF\Ungerboeck\Client\Model\AccountsReceivableVoucherAllocationsModel accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocationList($org_code, $search)

Standard - Search for AccountsReceivableVoucherAllocations using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountsReceivableVoucherAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocationList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsReceivableVoucherAllocationsApi->accountsReceivableVoucherAllocationsGetAccountsReceivableVoucherAllocationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountsReceivableVoucherAllocationsModel**](../Model/AccountsReceivableVoucherAllocationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

