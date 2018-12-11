# FomF\Ungerboeck\Client\WorkOrdersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workOrdersGetWorkOrders**](WorkOrdersApi.md#workOrdersGetWorkOrders) | **GET** /api/v1/WorkOrders/{OrgCode}/{Order}/{Department} | Get an work order by its parameters
[**workOrdersGetWorkOrdersList**](WorkOrdersApi.md#workOrdersGetWorkOrdersList) | **GET** /api/v1/WorkOrders/{OrgCode} | Search for work order using OData.


# **workOrdersGetWorkOrders**
> \FomF\Ungerboeck\Client\Model\WorkOrdersModel workOrdersGetWorkOrders($org_code, $order, $department)

Get an work order by its parameters

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
    $result = $apiInstance->workOrdersGetWorkOrders($org_code, $order, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrdersApi->workOrdersGetWorkOrders: ', $e->getMessage(), PHP_EOL;
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

# **workOrdersGetWorkOrdersList**
> \FomF\Ungerboeck\Client\Model\WorkOrdersModel[] workOrdersGetWorkOrdersList($org_code, $search)

Search for work order using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->workOrdersGetWorkOrdersList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrdersApi->workOrdersGetWorkOrdersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\WorkOrdersModel[]**](../Model/WorkOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

