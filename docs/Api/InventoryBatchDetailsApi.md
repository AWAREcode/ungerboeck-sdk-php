# FomF\Ungerboeck\Client\InventoryBatchDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryBatchDetailsGetInventoryBatchDetail**](InventoryBatchDetailsApi.md#inventoryBatchDetailsGetInventoryBatchDetail) | **GET** /api/v1/InventoryBatchDetails/{OrgCode}/{Batch}/{Sequence} | Standard - Get an inventory batch detail by its parameters
[**inventoryBatchDetailsGetInventoryBatchDetailList**](InventoryBatchDetailsApi.md#inventoryBatchDetailsGetInventoryBatchDetailList) | **GET** /api/v1/InventoryBatchDetails/{OrgCode} | Standard - Search for inventory batch details using OData.


# **inventoryBatchDetailsGetInventoryBatchDetail**
> \FomF\Ungerboeck\Client\Model\InventoryBatchDetailsModel inventoryBatchDetailsGetInventoryBatchDetail($org_code, $batch, $sequence)

Standard - Get an inventory batch detail by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryBatchDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the inventory batch detail.
$batch = "batch_example"; // string | The batch id of the inventory batch detail entry.
$sequence = 56; // int | The sequence number of the inventory batch detail entry.

try {
    $result = $apiInstance->inventoryBatchDetailsGetInventoryBatchDetail($org_code, $batch, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchDetailsApi->inventoryBatchDetailsGetInventoryBatchDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the inventory batch detail. |
 **batch** | **string**| The batch id of the inventory batch detail entry. |
 **sequence** | **int**| The sequence number of the inventory batch detail entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryBatchDetailsModel**](../Model/InventoryBatchDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryBatchDetailsGetInventoryBatchDetailList**
> \FomF\Ungerboeck\Client\Model\InventoryBatchDetailsModel inventoryBatchDetailsGetInventoryBatchDetailList($org_code, $search)

Standard - Search for inventory batch details using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryBatchDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->inventoryBatchDetailsGetInventoryBatchDetailList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBatchDetailsApi->inventoryBatchDetailsGetInventoryBatchDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryBatchDetailsModel**](../Model/InventoryBatchDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

