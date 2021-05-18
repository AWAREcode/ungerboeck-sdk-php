# FomF\Ungerboeck\Client\APPaymentTaxesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aPPaymentTaxesGetAPPaymentTax**](APPaymentTaxesApi.md#aPPaymentTaxesGetAPPaymentTax) | **GET** /api/v1/APPaymentTaxes/{OrgCode}/{Sequence}/{Voucher}/{VoucherTaxSeq} | Standard - Retrieve a APPaymentTaxes record
[**aPPaymentTaxesGetAPPaymentTaxList**](APPaymentTaxesApi.md#aPPaymentTaxesGetAPPaymentTaxList) | **GET** /api/v1/APPaymentTaxes/{OrgCode} | Standard - Search for APPaymentTaxes using OData.


# **aPPaymentTaxesGetAPPaymentTax**
> \FomF\Ungerboeck\Client\Model\APPaymentTaxesModel aPPaymentTaxesGetAPPaymentTax($org_code, $sequence, $voucher, $voucher_tax_seq)

Standard - Retrieve a APPaymentTaxes record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\APPaymentTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the APPaymentTaxes entry.
$sequence = 56; // int | The sequence of the APPaymentTaxes entry.
$voucher = 56; // int | The voucher sequence of the APPaymentTaxes entry.
$voucher_tax_seq = 56; // int | The voucher tax Sequence of the APPaymentTaxes entry.

try {
    $result = $apiInstance->aPPaymentTaxesGetAPPaymentTax($org_code, $sequence, $voucher, $voucher_tax_seq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APPaymentTaxesApi->aPPaymentTaxesGetAPPaymentTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the APPaymentTaxes entry. |
 **sequence** | **int**| The sequence of the APPaymentTaxes entry. |
 **voucher** | **int**| The voucher sequence of the APPaymentTaxes entry. |
 **voucher_tax_seq** | **int**| The voucher tax Sequence of the APPaymentTaxes entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\APPaymentTaxesModel**](../Model/APPaymentTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aPPaymentTaxesGetAPPaymentTaxList**
> \FomF\Ungerboeck\Client\Model\APPaymentTaxesModel aPPaymentTaxesGetAPPaymentTaxList($org_code, $search)

Standard - Search for APPaymentTaxes using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\APPaymentTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->aPPaymentTaxesGetAPPaymentTaxList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APPaymentTaxesApi->aPPaymentTaxesGetAPPaymentTaxList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\APPaymentTaxesModel**](../Model/APPaymentTaxesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

