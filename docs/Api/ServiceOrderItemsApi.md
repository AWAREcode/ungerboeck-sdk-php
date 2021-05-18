# FomF\Ungerboeck\Client\ServiceOrderItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceOrderItemsDeleteServiceOrderItem**](ServiceOrderItemsApi.md#serviceOrderItemsDeleteServiceOrderItem) | **DELETE** /api/v1/ServiceOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Extended (Service Orders) - Delete a order item from an order
[**serviceOrderItemsGetServiceOrderItem**](ServiceOrderItemsApi.md#serviceOrderItemsGetServiceOrderItem) | **GET** /api/v1/ServiceOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Standard - Get a single service order item by its parameters
[**serviceOrderItemsGetServiceOrderItemList**](ServiceOrderItemsApi.md#serviceOrderItemsGetServiceOrderItemList) | **GET** /api/v1/ServiceOrderItems/{OrgCode} | Standard - Search for Service order items using OData.
[**serviceOrderItemsPostServiceOrderItem**](ServiceOrderItemsApi.md#serviceOrderItemsPostServiceOrderItem) | **POST** /api/v1/ServiceOrderItems | Extended (Service Orders) - Add an item to an existing Service order
[**serviceOrderItemsPutServiceOrderItem**](ServiceOrderItemsApi.md#serviceOrderItemsPutServiceOrderItem) | **PUT** /api/v1/ServiceOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Extended (Service Orders) - Edit a item on a Service order


# **serviceOrderItemsDeleteServiceOrderItem**
> serviceOrderItemsDeleteServiceOrderItem($org_code, $order_number, $order_line_number)

Extended (Service Orders) - Delete a order item from an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Service order item.
$order_number = 56; // int | The Order Number of the Service order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the Service order item.

try {
    $apiInstance->serviceOrderItemsDeleteServiceOrderItem($org_code, $order_number, $order_line_number);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrderItemsApi->serviceOrderItemsDeleteServiceOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Service order item. |
 **order_number** | **int**| The Order Number of the Service order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the Service order item. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrderItemsGetServiceOrderItem**
> \FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel serviceOrderItemsGetServiceOrderItem($org_code, $order_number, $order_line_number)

Standard - Get a single service order item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Service order item.
$order_number = 56; // int | The Order Number of the Service order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the Service order item.

try {
    $result = $apiInstance->serviceOrderItemsGetServiceOrderItem($org_code, $order_number, $order_line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrderItemsApi->serviceOrderItemsGetServiceOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Service order item. |
 **order_number** | **int**| The Order Number of the Service order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the Service order item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel**](../Model/ServiceOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrderItemsGetServiceOrderItemList**
> \FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel serviceOrderItemsGetServiceOrderItemList($org_code, $search)

Standard - Search for Service order items using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->serviceOrderItemsGetServiceOrderItemList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrderItemsApi->serviceOrderItemsGetServiceOrderItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel**](../Model/ServiceOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrderItemsPostServiceOrderItem**
> \FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel serviceOrderItemsPostServiceOrderItem($data)

Extended (Service Orders) - Add an item to an existing Service order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel(); // \FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel | (Include in the HTTP Body) A ServiceOrderItemsModel entry to add.

try {
    $result = $apiInstance->serviceOrderItemsPostServiceOrderItem($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrderItemsApi->serviceOrderItemsPostServiceOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel**](../Model/ServiceOrderItemsModel.md)| (Include in the HTTP Body) A ServiceOrderItemsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel**](../Model/ServiceOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrderItemsPutServiceOrderItem**
> \FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel serviceOrderItemsPutServiceOrderItem($org_code, $order_number, $order_line_number, $data)

Extended (Service Orders) - Edit a item on a Service order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Service order item.
$order_number = 56; // int | The order number of the Service order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the Service order item.
$data = new \FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel(); // \FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel | (Include in the HTTP Body) A ServiceOrderItemsModel entry to edit.

try {
    $result = $apiInstance->serviceOrderItemsPutServiceOrderItem($org_code, $order_number, $order_line_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrderItemsApi->serviceOrderItemsPutServiceOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Service order item. |
 **order_number** | **int**| The order number of the Service order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the Service order item. |
 **data** | [**\FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel**](../Model/ServiceOrderItemsModel.md)| (Include in the HTTP Body) A ServiceOrderItemsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ServiceOrderItemsModel**](../Model/ServiceOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

