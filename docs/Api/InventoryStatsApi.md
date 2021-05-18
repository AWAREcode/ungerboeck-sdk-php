# FomF\Ungerboeck\Client\InventoryStatsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryStatsGetInventoryStat**](InventoryStatsApi.md#inventoryStatsGetInventoryStat) | **GET** /api/v1/InventoryStats/{OrgCode}/{Item}/{Space}/{LotSerialNumber} | Basic - Get a single Inventory Stat entry by its parameters
[**inventoryStatsGetInventoryStatList**](InventoryStatsApi.md#inventoryStatsGetInventoryStatList) | **GET** /api/v1/InventoryStats/{OrgCode} | Basic - Search for Inventory Stats List using OData.


# **inventoryStatsGetInventoryStat**
> \FomF\Ungerboeck\Client\Model\InventoryStatsModel inventoryStatsGetInventoryStat($org_code, $item, $space, $lot_serial_number)

Basic - Get a single Inventory Stat entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | 
$item = "item_example"; // string | 
$space = "space_example"; // string | 
$lot_serial_number = "lot_serial_number_example"; // string | 

try {
    $result = $apiInstance->inventoryStatsGetInventoryStat($org_code, $item, $space, $lot_serial_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStatsApi->inventoryStatsGetInventoryStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**|  |
 **item** | **string**|  |
 **space** | **string**|  |
 **lot_serial_number** | **string**|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryStatsModel**](../Model/InventoryStatsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryStatsGetInventoryStatList**
> \FomF\Ungerboeck\Client\Model\InventoryStatsModel inventoryStatsGetInventoryStatList($org_code, $search)

Basic - Search for Inventory Stats List using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->inventoryStatsGetInventoryStatList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStatsApi->inventoryStatsGetInventoryStatList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryStatsModel**](../Model/InventoryStatsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

