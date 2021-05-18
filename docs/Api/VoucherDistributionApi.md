# FomF\Ungerboeck\Client\VoucherDistributionApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherDistributionGetVoucherDistribution**](VoucherDistributionApi.md#voucherDistributionGetVoucherDistribution) | **GET** /api/v1/VoucherDistribution/{OrgCode}/{Voucher}/{Sequence} | Standard - Get a voucher distribution by its parameters
[**voucherDistributionGetVoucherDistributionList**](VoucherDistributionApi.md#voucherDistributionGetVoucherDistributionList) | **GET** /api/v1/VoucherDistribution/{OrgCode} | Standard - Search for voucher distributions using OData.


# **voucherDistributionGetVoucherDistribution**
> \FomF\Ungerboeck\Client\Model\VoucherDistributionModel voucherDistributionGetVoucherDistribution($org_code, $voucher, $sequence)

Standard - Get a voucher distribution by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherDistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the voucher distribution.
$voucher = 56; // int | The voucher number of the voucher distribution entry.
$sequence = 56; // int | The sequence number of the voucher distribution entry.

try {
    $result = $apiInstance->voucherDistributionGetVoucherDistribution($org_code, $voucher, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDistributionApi->voucherDistributionGetVoucherDistribution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the voucher distribution. |
 **voucher** | **int**| The voucher number of the voucher distribution entry. |
 **sequence** | **int**| The sequence number of the voucher distribution entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherDistributionModel**](../Model/VoucherDistributionModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDistributionGetVoucherDistributionList**
> \FomF\Ungerboeck\Client\Model\VoucherDistributionModel voucherDistributionGetVoucherDistributionList($org_code, $search)

Standard - Search for voucher distributions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherDistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->voucherDistributionGetVoucherDistributionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherDistributionApi->voucherDistributionGetVoucherDistributionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherDistributionModel**](../Model/VoucherDistributionModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

