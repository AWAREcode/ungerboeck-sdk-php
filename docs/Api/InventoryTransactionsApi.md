# FomF\Ungerboeck\Client\InventoryTransactionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryTransactionsGetInventoryTransaction**](InventoryTransactionsApi.md#inventoryTransactionsGetInventoryTransaction) | **GET** /api/v1/InventoryTransactions/{UniqueId} | Standard - Get a single Inventory transaction record
[**inventoryTransactionsGetInventoryTransactionList**](InventoryTransactionsApi.md#inventoryTransactionsGetInventoryTransactionList) | **GET** /api/v1/InventoryTransactions | Standard - Search for InventoryTransactions using OData.


# **inventoryTransactionsGetInventoryTransaction**
> \FomF\Ungerboeck\Client\Model\InventoryTransactionsModel inventoryTransactionsGetInventoryTransaction($unique_id)

Standard - Get a single Inventory transaction record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unique_id = 56; // int | The unique id number of InventoryTransactions entry.

try {
    $result = $apiInstance->inventoryTransactionsGetInventoryTransaction($unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTransactionsApi->inventoryTransactionsGetInventoryTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unique_id** | **int**| The unique id number of InventoryTransactions entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryTransactionsModel**](../Model/InventoryTransactionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryTransactionsGetInventoryTransactionList**
> \FomF\Ungerboeck\Client\Model\InventoryTransactionsModel inventoryTransactionsGetInventoryTransactionList($search)

Standard - Search for InventoryTransactions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\InventoryTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->inventoryTransactionsGetInventoryTransactionList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTransactionsApi->inventoryTransactionsGetInventoryTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\InventoryTransactionsModel**](../Model/InventoryTransactionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

