# FomF\Ungerboeck\Client\PurchaseOrderItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderItemsGetPurchaseOrderItems**](PurchaseOrderItemsApi.md#purchaseOrderItemsGetPurchaseOrderItems) | **GET** /api/v1/PurchaseOrderItems/{OrgCode}/{Number}/{ItemSequence} | Get a purchase order item by its parameters
[**purchaseOrderItemsGetPurchaseOrderItemsList**](PurchaseOrderItemsApi.md#purchaseOrderItemsGetPurchaseOrderItemsList) | **GET** /api/v1/PurchaseOrderItems/{OrgCode} | Search for purchase order items using OData.


# **purchaseOrderItemsGetPurchaseOrderItems**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel purchaseOrderItemsGetPurchaseOrderItems($org_code, $number, $item_sequence)

Get a purchase order item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the purchase order item.
$number = 56; // int | The number of the purchase order the item is associated with.
$item_sequence = 56; // int | The item sequence of the purchase order item.

try {
    $result = $apiInstance->purchaseOrderItemsGetPurchaseOrderItems($org_code, $number, $item_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderItemsApi->purchaseOrderItemsGetPurchaseOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the purchase order item. |
 **number** | **int**| The number of the purchase order the item is associated with. |
 **item_sequence** | **int**| The item sequence of the purchase order item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel**](../Model/PurchaseOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderItemsGetPurchaseOrderItemsList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel[] purchaseOrderItemsGetPurchaseOrderItemsList($org_code, $search)

Search for purchase order items using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->purchaseOrderItemsGetPurchaseOrderItemsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderItemsApi->purchaseOrderItemsGetPurchaseOrderItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel[]**](../Model/PurchaseOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

