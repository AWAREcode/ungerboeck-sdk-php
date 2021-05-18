# FomF\Ungerboeck\Client\WorkOrderItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workOrderItemsGetWorkOrderItem**](WorkOrderItemsApi.md#workOrderItemsGetWorkOrderItem) | **GET** /api/v1/WorkOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Basic - Get a single work order item by its parameters
[**workOrderItemsGetWorkOrderItemList**](WorkOrderItemsApi.md#workOrderItemsGetWorkOrderItemList) | **GET** /api/v1/WorkOrderItems/{OrgCode} | Basic - Search for work order items using OData.


# **workOrderItemsGetWorkOrderItem**
> \FomF\Ungerboeck\Client\Model\WorkOrderItemsModel workOrderItemsGetWorkOrderItem($org_code, $order_number, $order_line_number)

Basic - Get a single work order item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\WorkOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the work order item.
$order_number = 56; // int | The Order Number of the work order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the work order item.

try {
    $result = $apiInstance->workOrderItemsGetWorkOrderItem($org_code, $order_number, $order_line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderItemsApi->workOrderItemsGetWorkOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the work order item. |
 **order_number** | **int**| The Order Number of the work order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the work order item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\WorkOrderItemsModel**](../Model/WorkOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workOrderItemsGetWorkOrderItemList**
> \FomF\Ungerboeck\Client\Model\WorkOrderItemsModel workOrderItemsGetWorkOrderItemList($org_code, $search)

Basic - Search for work order items using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\WorkOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->workOrderItemsGetWorkOrderItemList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderItemsApi->workOrderItemsGetWorkOrderItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\WorkOrderItemsModel**](../Model/WorkOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

