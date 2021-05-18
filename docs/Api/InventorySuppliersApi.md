# FomF\Ungerboeck\Client\InventorySuppliersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventorySuppliersGetInventorySupplier**](InventorySuppliersApi.md#inventorySuppliersGetInventorySupplier) | **GET** /api/v1/InventorySuppliers/{OrgCode}/{InventoryItem}/{Supplier} | Basic - Get a single Inventory Supplier entry by its parameters
[**inventorySuppliersGetInventorySupplierList**](InventorySuppliersApi.md#inventorySuppliersGetInventorySupplierList) | **GET** /api/v1/InventorySuppliers/{OrgCode} | Basic - Search for Inventory Suppliers List using OData.


# **inventorySuppliersGetInventorySupplier**
> \FomF\Ungerboeck\Client\Model\InventorySuppliersModel inventorySuppliersGetInventorySupplier($org_code, $inventory_item, $supplier)

Basic - Get a single Inventory Supplier entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventorySuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | 
$inventory_item = "inventory_item_example"; // string | 
$supplier = "supplier_example"; // string | 

try {
    $result = $apiInstance->inventorySuppliersGetInventorySupplier($org_code, $inventory_item, $supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySuppliersApi->inventorySuppliersGetInventorySupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**|  |
 **inventory_item** | **string**|  |
 **supplier** | **string**|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventorySuppliersModel**](../Model/InventorySuppliersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySuppliersGetInventorySupplierList**
> \FomF\Ungerboeck\Client\Model\InventorySuppliersModel inventorySuppliersGetInventorySupplierList($org_code, $search)

Basic - Search for Inventory Suppliers List using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventorySuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->inventorySuppliersGetInventorySupplierList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySuppliersApi->inventorySuppliersGetInventorySupplierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventorySuppliersModel**](../Model/InventorySuppliersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

