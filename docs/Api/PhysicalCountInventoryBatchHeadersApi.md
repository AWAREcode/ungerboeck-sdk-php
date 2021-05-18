# FomF\Ungerboeck\Client\PhysicalCountInventoryBatchHeadersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeader**](PhysicalCountInventoryBatchHeadersApi.md#physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeader) | **GET** /api/v1/PhysicalCountInventoryBatchHeader/{OrgCode}/{BatchID} | Standard - Get a physical count inventory batch header by its parameters
[**physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeaderList**](PhysicalCountInventoryBatchHeadersApi.md#physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeaderList) | **GET** /api/v1/PhysicalCountInventoryBatchHeader/{OrgCode} | Standard - Search for physical count inventory batch headers using OData.


# **physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeader**
> \FomF\Ungerboeck\Client\Model\PhysicalCountInventoryBatchHeadersModel physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeader($org_code, $batch_id)

Standard - Get a physical count inventory batch header by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PhysicalCountInventoryBatchHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the inventory batch detail.
$batch_id = "batch_id_example"; // string | The batch id of the physical count inventory batch header entry.

try {
    $result = $apiInstance->physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeader($org_code, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalCountInventoryBatchHeadersApi->physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the inventory batch detail. |
 **batch_id** | **string**| The batch id of the physical count inventory batch header entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PhysicalCountInventoryBatchHeadersModel**](../Model/PhysicalCountInventoryBatchHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeaderList**
> \FomF\Ungerboeck\Client\Model\PhysicalCountInventoryBatchHeadersModel physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeaderList($org_code, $search)

Standard - Search for physical count inventory batch headers using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PhysicalCountInventoryBatchHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeaderList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalCountInventoryBatchHeadersApi->physicalCountInventoryBatchHeadersGetPhysicalCountInventoryBatchHeaderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PhysicalCountInventoryBatchHeadersModel**](../Model/PhysicalCountInventoryBatchHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

