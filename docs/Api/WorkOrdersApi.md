# FomF\Ungerboeck\Client\WorkOrdersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workOrdersGetWorkOrder**](WorkOrdersApi.md#workOrdersGetWorkOrder) | **GET** /api/v1/WorkOrders/{OrgCode}/{Order}/{Department} | Basic - Get a single work order by its parameters
[**workOrdersGetWorkOrderList**](WorkOrdersApi.md#workOrdersGetWorkOrderList) | **GET** /api/v1/WorkOrders/{OrgCode} | Basic - Search for work order using OData.


# **workOrdersGetWorkOrder**
> \FomF\Ungerboeck\Client\Model\WorkOrdersModel workOrdersGetWorkOrder($org_code, $order, $department)

Basic - Get a single work order by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\WorkOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the work order.
$order = 56; // int | The code of the work order.
$department = "department_example"; // string | The department of the work order.

try {
    $result = $apiInstance->workOrdersGetWorkOrder($org_code, $order, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrdersApi->workOrdersGetWorkOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the work order. |
 **order** | **int**| The code of the work order. |
 **department** | **string**| The department of the work order. |

### Return type

[**\FomF\Ungerboeck\Client\Model\WorkOrdersModel**](../Model/WorkOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workOrdersGetWorkOrderList**
> \FomF\Ungerboeck\Client\Model\WorkOrdersModel workOrdersGetWorkOrderList($org_code, $search)

Basic - Search for work order using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\WorkOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->workOrdersGetWorkOrderList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrdersApi->workOrdersGetWorkOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\WorkOrdersModel**](../Model/WorkOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

