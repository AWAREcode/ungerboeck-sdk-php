# FomF\Ungerboeck\Client\ServiceOrdersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceOrdersCompleteWorkOrders**](ServiceOrdersApi.md#serviceOrdersCompleteWorkOrders) | **PUT** /api/v1/ServiceOrders/{OrgCode}/{OrderNumber}/CompleteWorkOrders | Extended (Service Orders) - Use this action endpoint to set all work orders on a service order to status Complete.  This process replicates the \&quot;Complete Work Orders\&quot; functionality found in v20&#39;s \&quot;Service Orders\&quot; window.
[**serviceOrdersGetServiceOrder**](ServiceOrdersApi.md#serviceOrdersGetServiceOrder) | **GET** /api/v1/ServiceOrders/{OrgCode}/{OrderNumber} | Standard - Get a single Service order by its parameters
[**serviceOrdersGetServiceOrderList**](ServiceOrdersApi.md#serviceOrdersGetServiceOrderList) | **GET** /api/v1/ServiceOrders/{OrgCode} | Standard - Search for Service orders using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**serviceOrdersMoveOrder**](ServiceOrdersApi.md#serviceOrdersMoveOrder) | **PUT** /api/v1/ServiceOrders/MoveOrder | Extended (Service Orders) - Use this action endpoint to move Service Orders to a different event or a different function on the same event.  This process replicates the \&quot;Move Order\&quot; functionality found in Ungerboeck&#39;s \&quot;Service Orders\&quot; window.
[**serviceOrdersMoveOrdersBulk**](ServiceOrdersApi.md#serviceOrdersMoveOrdersBulk) | **PUT** /api/v1/ServiceOrders/MoveOrdersBulk | Extended (Service Orders) - Use this action endpoint to move multiple Service Orders to a different event or a different function on the same event.  This process replicates the \&quot;Move Order\&quot; functionality found in Ungerboeck&#39;s \&quot;Service Orders\&quot; window.  If one or more orders fails to move, this endpoint will return a MoveOrdersBulkErrorsModel object.
[**serviceOrdersPostServiceOrder**](ServiceOrdersApi.md#serviceOrdersPostServiceOrder) | **POST** /api/v1/ServiceOrders | Extended (Service Orders) - Add a Service order
[**serviceOrdersPutServiceOrder**](ServiceOrdersApi.md#serviceOrdersPutServiceOrder) | **PUT** /api/v1/ServiceOrders/{OrgCode}/{OrderNumber} | Extended (Service Orders) - Edit a Service order


# **serviceOrdersCompleteWorkOrders**
> object serviceOrdersCompleteWorkOrders($org_code, $order_number)

Extended (Service Orders) - Use this action endpoint to set all work orders on a service order to status Complete.  This process replicates the \"Complete Work Orders\" functionality found in v20's \"Service Orders\" window.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the service order.
$order_number = 56; // int | The Order Number of the service order.

try {
    $result = $apiInstance->serviceOrdersCompleteWorkOrders($org_code, $order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->serviceOrdersCompleteWorkOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the service order. |
 **order_number** | **int**| The Order Number of the service order. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrdersGetServiceOrder**
> \FomF\Ungerboeck\Client\Model\ServiceOrdersModel serviceOrdersGetServiceOrder($org_code, $order_number)

Standard - Get a single Service order by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Service order.
$order_number = 56; // int | The Order Number of the Service order.

try {
    $result = $apiInstance->serviceOrdersGetServiceOrder($org_code, $order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->serviceOrdersGetServiceOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Service order. |
 **order_number** | **int**| The Order Number of the Service order. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ServiceOrdersModel**](../Model/ServiceOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrdersGetServiceOrderList**
> \FomF\Ungerboeck\Client\Model\ServiceOrdersModel serviceOrdersGetServiceOrderList($org_code, $search)

Standard - Search for Service orders using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->serviceOrdersGetServiceOrderList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->serviceOrdersGetServiceOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ServiceOrdersModel**](../Model/ServiceOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrdersMoveOrder**
> serviceOrdersMoveOrder($data)

Extended (Service Orders) - Use this action endpoint to move Service Orders to a different event or a different function on the same event.  This process replicates the \"Move Order\" functionality found in Ungerboeck's \"Service Orders\" window.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\MoveOrderModel(); // \FomF\Ungerboeck\Client\Model\MoveOrderModel | (Include in the HTTP Body) A MoveOrderModel entry.

try {
    $apiInstance->serviceOrdersMoveOrder($data);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->serviceOrdersMoveOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\MoveOrderModel**](../Model/MoveOrderModel.md)| (Include in the HTTP Body) A MoveOrderModel entry. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrdersMoveOrdersBulk**
> \FomF\Ungerboeck\Client\Model\MoveOrdersBulkErrorsModel serviceOrdersMoveOrdersBulk($data)

Extended (Service Orders) - Use this action endpoint to move multiple Service Orders to a different event or a different function on the same event.  This process replicates the \"Move Order\" functionality found in Ungerboeck's \"Service Orders\" window.  If one or more orders fails to move, this endpoint will return a MoveOrdersBulkErrorsModel object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\MoveOrdersBulkModel(); // \FomF\Ungerboeck\Client\Model\MoveOrdersBulkModel | (Include in the HTTP Body) A MoveOrdersBulkModel entry.

try {
    $result = $apiInstance->serviceOrdersMoveOrdersBulk($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->serviceOrdersMoveOrdersBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\MoveOrdersBulkModel**](../Model/MoveOrdersBulkModel.md)| (Include in the HTTP Body) A MoveOrdersBulkModel entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MoveOrdersBulkErrorsModel**](../Model/MoveOrdersBulkErrorsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrdersPostServiceOrder**
> \FomF\Ungerboeck\Client\Model\ServiceOrdersModel serviceOrdersPostServiceOrder($data)

Extended (Service Orders) - Add a Service order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\ServiceOrdersModel(); // \FomF\Ungerboeck\Client\Model\ServiceOrdersModel | (Include in the HTTP Body) A ServiceOrdersModel entry to add.

try {
    $result = $apiInstance->serviceOrdersPostServiceOrder($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->serviceOrdersPostServiceOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\ServiceOrdersModel**](../Model/ServiceOrdersModel.md)| (Include in the HTTP Body) A ServiceOrdersModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ServiceOrdersModel**](../Model/ServiceOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceOrdersPutServiceOrder**
> \FomF\Ungerboeck\Client\Model\ServiceOrdersModel serviceOrdersPutServiceOrder($org_code, $order_number, $data)

Extended (Service Orders) - Edit a Service order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Service order.
$order_number = 56; // int | The order number of the Service order.
$data = new \FomF\Ungerboeck\Client\Model\ServiceOrdersModel(); // \FomF\Ungerboeck\Client\Model\ServiceOrdersModel | (Include in the HTTP Body) A ServiceOrdersModel entry to edit.

try {
    $result = $apiInstance->serviceOrdersPutServiceOrder($org_code, $order_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->serviceOrdersPutServiceOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Service order. |
 **order_number** | **int**| The order number of the Service order. |
 **data** | [**\FomF\Ungerboeck\Client\Model\ServiceOrdersModel**](../Model/ServiceOrdersModel.md)| (Include in the HTTP Body) A ServiceOrdersModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ServiceOrdersModel**](../Model/ServiceOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

