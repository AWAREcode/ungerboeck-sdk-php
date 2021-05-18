# FomF\Ungerboeck\Client\InventoryItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryItemsGetInventoryItem**](InventoryItemsApi.md#inventoryItemsGetInventoryItem) | **GET** /api/v1/InventoryItems/{OrgCode}/{Code} | Basic - Get a single Inventory Item by its parameters
[**inventoryItemsGetInventoryItemList**](InventoryItemsApi.md#inventoryItemsGetInventoryItemList) | **GET** /api/v1/InventoryItems/{OrgCode} | Basic - Search for Inventory Stats List using OData.


# **inventoryItemsGetInventoryItem**
> \FomF\Ungerboeck\Client\Model\InventoryItemsModel inventoryItemsGetInventoryItem($org_code, $code)

Basic - Get a single Inventory Item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | 
$code = "code_example"; // string | 

try {
    $result = $apiInstance->inventoryItemsGetInventoryItem($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->inventoryItemsGetInventoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**|  |
 **code** | **string**|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryItemsModel**](../Model/InventoryItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryItemsGetInventoryItemList**
> \FomF\Ungerboeck\Client\Model\InventoryItemsModel inventoryItemsGetInventoryItemList($org_code, $search)

Basic - Search for Inventory Stats List using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->inventoryItemsGetInventoryItemList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->inventoryItemsGetInventoryItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryItemsModel**](../Model/InventoryItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

