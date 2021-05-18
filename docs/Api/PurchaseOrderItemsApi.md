# FomF\Ungerboeck\Client\PurchaseOrderItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderItemsGetPurchaseOrderItem**](PurchaseOrderItemsApi.md#purchaseOrderItemsGetPurchaseOrderItem) | **GET** /api/v1/PurchaseOrderItems/{OrgCode}/{Number}/{ItemSequence} | Standard - Get a single purchase order item by its parameters
[**purchaseOrderItemsGetPurchaseOrderItemList**](PurchaseOrderItemsApi.md#purchaseOrderItemsGetPurchaseOrderItemList) | **GET** /api/v1/PurchaseOrderItems/{OrgCode} | Standard - Search for purchase order items using OData.
[**purchaseOrderItemsPostPurchaseOrderItems**](PurchaseOrderItemsApi.md#purchaseOrderItemsPostPurchaseOrderItems) | **POST** /api/v1/PurchaseOrderItems | Standard - Add a Purchase order item
[**purchaseOrderItemsPutPurchaseOrder**](PurchaseOrderItemsApi.md#purchaseOrderItemsPutPurchaseOrder) | **PUT** /api/v1/PurchaseOrderItems/{OrgCode}/{Number}/{ItemSequence} | Standard - Edit a Purchase order item


# **purchaseOrderItemsGetPurchaseOrderItem**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel purchaseOrderItemsGetPurchaseOrderItem($org_code, $number, $item_sequence)

Standard - Get a single purchase order item by its parameters

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
    $result = $apiInstance->purchaseOrderItemsGetPurchaseOrderItem($org_code, $number, $item_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderItemsApi->purchaseOrderItemsGetPurchaseOrderItem: ', $e->getMessage(), PHP_EOL;
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

# **purchaseOrderItemsGetPurchaseOrderItemList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel purchaseOrderItemsGetPurchaseOrderItemList($org_code, $search)

Standard - Search for purchase order items using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->purchaseOrderItemsGetPurchaseOrderItemList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderItemsApi->purchaseOrderItemsGetPurchaseOrderItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel**](../Model/PurchaseOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderItemsPostPurchaseOrderItems**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel purchaseOrderItemsPostPurchaseOrderItems($data)

Standard - Add a Purchase order item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel(); // \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel | (Include in the HTTP Body) A PurchaseOrderItems entry to add.

try {
    $result = $apiInstance->purchaseOrderItemsPostPurchaseOrderItems($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderItemsApi->purchaseOrderItemsPostPurchaseOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel**](../Model/PurchaseOrderItemsModel.md)| (Include in the HTTP Body) A PurchaseOrderItems entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel**](../Model/PurchaseOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderItemsPutPurchaseOrder**
> \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel purchaseOrderItemsPutPurchaseOrder($org_code, $number, $item_sequence, $data)

Standard - Edit a Purchase order item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Purchase order item.
$number = 56; // int | 
$item_sequence = 56; // int | 
$data = new \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel(); // \FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel | (Include in the HTTP Body) A PurchaseOrderItemsModel entry to edit.

try {
    $result = $apiInstance->purchaseOrderItemsPutPurchaseOrder($org_code, $number, $item_sequence, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderItemsApi->purchaseOrderItemsPutPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Purchase order item. |
 **number** | **int**|  |
 **item_sequence** | **int**|  |
 **data** | [**\FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel**](../Model/PurchaseOrderItemsModel.md)| (Include in the HTTP Body) A PurchaseOrderItemsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrderItemsModel**](../Model/PurchaseOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

