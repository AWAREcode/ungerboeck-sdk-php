# FomF\Ungerboeck\Client\VoucherApprovalsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherApprovalsGetVoucherApproval**](VoucherApprovalsApi.md#voucherApprovalsGetVoucherApproval) | **GET** /api/v1/VoucherApprovals/{OrgCode}/{VoucherNumber}/{VoucherDistrSeq}/{Sequence} | Standard - Get a voucher approval by its parameters
[**voucherApprovalsGetVoucherApprovalList**](VoucherApprovalsApi.md#voucherApprovalsGetVoucherApprovalList) | **GET** /api/v1/VoucherApprovals/{OrgCode} | Standard - Search for voucher approvals using OData.


# **voucherApprovalsGetVoucherApproval**
> \FomF\Ungerboeck\Client\Model\VoucherApprovalsModel voucherApprovalsGetVoucherApproval($org_code, $voucher_number, $voucher_distr_seq, $sequence)

Standard - Get a voucher approval by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the voucher approval.
$voucher_number = 56; // int | The voucher number of the voucher approval entry.
$voucher_distr_seq = 56; // int | The voucher distribution sequence of the voucher approval entry.
$sequence = 56; // int | The sequence number of the voucher approval entry.

try {
    $result = $apiInstance->voucherApprovalsGetVoucherApproval($org_code, $voucher_number, $voucher_distr_seq, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApprovalsApi->voucherApprovalsGetVoucherApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the voucher approval. |
 **voucher_number** | **int**| The voucher number of the voucher approval entry. |
 **voucher_distr_seq** | **int**| The voucher distribution sequence of the voucher approval entry. |
 **sequence** | **int**| The sequence number of the voucher approval entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherApprovalsModel**](../Model/VoucherApprovalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherApprovalsGetVoucherApprovalList**
> \FomF\Ungerboeck\Client\Model\VoucherApprovalsModel voucherApprovalsGetVoucherApprovalList($org_code, $search)

Standard - Search for voucher approvals using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->voucherApprovalsGetVoucherApprovalList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApprovalsApi->voucherApprovalsGetVoucherApprovalList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherApprovalsModel**](../Model/VoucherApprovalsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

