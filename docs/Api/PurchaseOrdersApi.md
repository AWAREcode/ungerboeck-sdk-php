# FomF\Ungerboeck\Client\PurchaseOrdersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrdersGetPurchaseOrders**](PurchaseOrdersApi.md#purchaseOrdersGetPurchaseOrders) | **GET** /api/v1/PurchaseOrders/{OrgCode}/{Number} | Get a purchase order by its parameters
[**purchaseOrdersGetPurchaseOrdersList**](PurchaseOrdersApi.md#purchaseOrdersGetPurchaseOrdersList) | **GET** /api/v1/PurchaseOrders/{OrgCode} | Search for purchase orders using OData.


# **purchaseOrdersGetPurchaseOrders**
> \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel purchaseOrdersGetPurchaseOrders($org_code, $number)

Get a purchase order by its parameters

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
    $result = $apiInstance->purchaseOrdersGetPurchaseOrders($org_code, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersGetPurchaseOrders: ', $e->getMessage(), PHP_EOL;
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

# **purchaseOrdersGetPurchaseOrdersList**
> \FomF\Ungerboeck\Client\Model\PurchaseOrdersModel[] purchaseOrdersGetPurchaseOrdersList($org_code, $search)

Search for purchase orders using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->purchaseOrdersGetPurchaseOrdersList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersGetPurchaseOrdersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PurchaseOrdersModel[]**](../Model/PurchaseOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

