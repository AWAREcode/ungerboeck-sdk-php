# FomF\Ungerboeck\Client\PurchaseOrdersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrdersGetPurchaseOrder**](PurchaseOrdersApi.md#purchaseOrdersGetPurchaseOrder) | **GET** /api/v1/PurchaseOrders/{OrgCode}/{Number} | Standard - Get a single purchase order by its parameters
[**purchaseOrdersGetPurchaseOrderList**](PurchaseOrdersApi.md#purchaseOrdersGetPurchaseOrderList) | **GET** /api/v1/PurchaseOrders/{OrgCode} | Standard - Search for purchase orders using OData.
[**purchaseOrdersPostPurchaseOrder**](PurchaseOrdersApi.md#purchaseOrdersPostPurchaseOrder) | **POST** /api/v1/PurchaseOrders | Standard - Add a Purchase order
[**purchaseOrdersPutPurchaseOrder**](PurchaseOrdersApi.md#purchaseOrdersPutPurchaseOrder) | **PUT** /api/v1/PurchaseOrders/{OrgCode}/{Number} | Standard - Edit a Purchase order


# **purchaseOrdersGetPurchaseOrder**
> \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel purchaseOrdersGetPurchaseOrder($org_code, $number)

Standard - Get a single purchase order by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the purchase order.
$number = 56; // int | The number of the purchase order.

try {
    $result = $apiInstance->purchaseOrdersGetPurchaseOrder($org_code, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersGetPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the purchase order. |
 **number** | **int**| The number of the purchase order. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrdersModel**](../Model/PurchaseOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersGetPurchaseOrderList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel purchaseOrdersGetPurchaseOrderList($org_code, $search)

Standard - Search for purchase orders using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->purchaseOrdersGetPurchaseOrderList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersGetPurchaseOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrdersModel**](../Model/PurchaseOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersPostPurchaseOrder**
> \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel purchaseOrdersPostPurchaseOrder($data)

Standard - Add a Purchase order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel(); // \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel | (Include in the HTTP Body) A PurchaseOrdersModel entry to add.

try {
    $result = $apiInstance->purchaseOrdersPostPurchaseOrder($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersPostPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\PurchaseOrdersModel**](../Model/PurchaseOrdersModel.md)| (Include in the HTTP Body) A PurchaseOrdersModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrdersModel**](../Model/PurchaseOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersPutPurchaseOrder**
> \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel purchaseOrdersPutPurchaseOrder($org_code, $number, $data)

Standard - Edit a Purchase order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Purchase order.
$number = 56; // int | The order number of the Purchase order.
$data = new \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel(); // \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel | (Include in the HTTP Body) A PurchaseOrdersModel entry to edit.

try {
    $result = $apiInstance->purchaseOrdersPutPurchaseOrder($org_code, $number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersPutPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Purchase order. |
 **number** | **int**| The order number of the Purchase order. |
 **data** | [**\FomF\Ungerboeck\Client\Model\PurchaseOrdersModel**](../Model/PurchaseOrdersModel.md)| (Include in the HTTP Body) A PurchaseOrdersModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrdersModel**](../Model/PurchaseOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

