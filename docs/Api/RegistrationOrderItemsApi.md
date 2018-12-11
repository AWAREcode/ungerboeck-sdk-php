# FomF\Ungerboeck\Client\RegistrationOrderItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrationOrderItemsDeleteRegistrationOrderItem**](RegistrationOrderItemsApi.md#registrationOrderItemsDeleteRegistrationOrderItem) | **DELETE** /api/v1/RegistrationOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Delete a order item from an order
[**registrationOrderItemsGetRegistrationOrderItem**](RegistrationOrderItemsApi.md#registrationOrderItemsGetRegistrationOrderItem) | **GET** /api/v1/RegistrationOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Get a registration order item by its parameters
[**registrationOrderItemsGetRegistrationOrderItemsList**](RegistrationOrderItemsApi.md#registrationOrderItemsGetRegistrationOrderItemsList) | **GET** /api/v1/RegistrationOrderItems/{OrgCode} | Search for registration order items using OData.
[**registrationOrderItemsPostRegistrationOrderItem**](RegistrationOrderItemsApi.md#registrationOrderItemsPostRegistrationOrderItem) | **POST** /api/v1/RegistrationOrderItems | Add an item to an existing registration order
[**registrationOrderItemsPutRegistrationOrderItem**](RegistrationOrderItemsApi.md#registrationOrderItemsPutRegistrationOrderItem) | **PUT** /api/v1/RegistrationOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Edit a item on a registration order


# **registrationOrderItemsDeleteRegistrationOrderItem**
> registrationOrderItemsDeleteRegistrationOrderItem($org_code, $order_number, $order_line_number)

Delete a order item from an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the registration order item.
$order_number = 56; // int | The Order Number of the registration order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the registration order item.

try {
    $apiInstance->registrationOrderItemsDeleteRegistrationOrderItem($org_code, $order_number, $order_line_number);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrderItemsApi->registrationOrderItemsDeleteRegistrationOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the registration order item. |
 **order_number** | **int**| The Order Number of the registration order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the registration order item. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrderItemsGetRegistrationOrderItem**
> \FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel registrationOrderItemsGetRegistrationOrderItem($org_code, $order_number, $order_line_number)

Get a registration order item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the registration order item.
$order_number = 56; // int | The Order Number of the registration order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the registration order item.

try {
    $result = $apiInstance->registrationOrderItemsGetRegistrationOrderItem($org_code, $order_number, $order_line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrderItemsApi->registrationOrderItemsGetRegistrationOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the registration order item. |
 **order_number** | **int**| The Order Number of the registration order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the registration order item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel**](../Model/RegistrationOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrderItemsGetRegistrationOrderItemsList**
> \FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel[] registrationOrderItemsGetRegistrationOrderItemsList($org_code, $search)

Search for registration order items using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->registrationOrderItemsGetRegistrationOrderItemsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrderItemsApi->registrationOrderItemsGetRegistrationOrderItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel[]**](../Model/RegistrationOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrderItemsPostRegistrationOrderItem**
> \FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel registrationOrderItemsPostRegistrationOrderItem($data)

Add an item to an existing registration order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel(); // \FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel | (Include in the HTTP Body) A RegistrationOrderItemsModel entry to add.

try {
    $result = $apiInstance->registrationOrderItemsPostRegistrationOrderItem($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrderItemsApi->registrationOrderItemsPostRegistrationOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel**](../Model/RegistrationOrderItemsModel.md)| (Include in the HTTP Body) A RegistrationOrderItemsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel**](../Model/RegistrationOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationOrderItemsPutRegistrationOrderItem**
> \FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel registrationOrderItemsPutRegistrationOrderItem($org_code, $order_number, $order_line_number, $data)

Edit a item on a registration order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the registration order item.
$order_number = 56; // int | The order number of the registration order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the registration order item.
$data = new \FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel(); // \FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel | (Include in the HTTP Body) A RegistrationOrderItemsModel entry to edit.

try {
    $result = $apiInstance->registrationOrderItemsPutRegistrationOrderItem($org_code, $order_number, $order_line_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationOrderItemsApi->registrationOrderItemsPutRegistrationOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the registration order item. |
 **order_number** | **int**| The order number of the registration order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the registration order item. |
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel**](../Model/RegistrationOrderItemsModel.md)| (Include in the HTTP Body) A RegistrationOrderItemsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationOrderItemsModel**](../Model/RegistrationOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

