# FomF\Ungerboeck\Client\VouchersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vouchersGetVoucher**](VouchersApi.md#vouchersGetVoucher) | **GET** /api/v1/Vouchers/{OrgCode}/{Voucher} | Standard - Get Voucher by its parameters
[**vouchersGetVouchersList**](VouchersApi.md#vouchersGetVouchersList) | **GET** /api/v1/Vouchers/{OrgCode} | Standard - Search for Vouchers using OData.


# **vouchersGetVoucher**
> \FomF\Ungerboeck\Client\Model\VouchersModel vouchersGetVoucher($org_code, $voucher)

Standard - Get Voucher by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Voucher.
$voucher = 56; // int | The sequence of the Voucher are associated with.

try {
    $result = $apiInstance->vouchersGetVoucher($org_code, $voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->vouchersGetVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Voucher. |
 **voucher** | **int**| The sequence of the Voucher are associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\VouchersModel**](../Model/VouchersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vouchersGetVouchersList**
> \FomF\Ungerboeck\Client\Model\VouchersModel vouchersGetVouchersList($org_code, $search)

Standard - Search for Vouchers using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->vouchersGetVouchersList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->vouchersGetVouchersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\VouchersModel**](../Model/VouchersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

