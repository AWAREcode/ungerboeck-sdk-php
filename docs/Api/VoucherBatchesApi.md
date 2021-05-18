# FomF\Ungerboeck\Client\VoucherBatchesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherBatchesGetVoucherBatch**](VoucherBatchesApi.md#voucherBatchesGetVoucherBatch) | **GET** /api/v1/VoucherBatches/{OrgCode}/{Batch} | Standard - Get a voucher batch by its parameters
[**voucherBatchesGetVoucherBatchList**](VoucherBatchesApi.md#voucherBatchesGetVoucherBatchList) | **GET** /api/v1/VoucherBatches/{OrgCode} | Standard - Search for voucher batches using OData.


# **voucherBatchesGetVoucherBatch**
> \FomF\Ungerboeck\Client\Model\VoucherBatchesModel voucherBatchesGetVoucherBatch($org_code, $batch)

Standard - Get a voucher batch by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the voucher batch.
$batch = "batch_example"; // string | The batch number of the voucher batch entry.

try {
    $result = $apiInstance->voucherBatchesGetVoucherBatch($org_code, $batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherBatchesApi->voucherBatchesGetVoucherBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the voucher batch. |
 **batch** | **string**| The batch number of the voucher batch entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherBatchesModel**](../Model/VoucherBatchesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherBatchesGetVoucherBatchList**
> \FomF\Ungerboeck\Client\Model\VoucherBatchesModel voucherBatchesGetVoucherBatchList($org_code, $search)

Standard - Search for voucher batches using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\VoucherBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->voucherBatchesGetVoucherBatchList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherBatchesApi->voucherBatchesGetVoucherBatchList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\VoucherBatchesModel**](../Model/VoucherBatchesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

