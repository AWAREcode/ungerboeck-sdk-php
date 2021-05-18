# FomF\Ungerboeck\Client\MembershipOrderItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**membershipOrderItemsDeleteMembershipOrderItem**](MembershipOrderItemsApi.md#membershipOrderItemsDeleteMembershipOrderItem) | **DELETE** /api/v1/MembershipOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Extended (Membership Orders) - Delete a order item from an order
[**membershipOrderItemsGetMembershipOrderItem**](MembershipOrderItemsApi.md#membershipOrderItemsGetMembershipOrderItem) | **GET** /api/v1/MembershipOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Standard - Get a single membership order item by its parameters
[**membershipOrderItemsGetMembershipOrderItemList**](MembershipOrderItemsApi.md#membershipOrderItemsGetMembershipOrderItemList) | **GET** /api/v1/MembershipOrderItems/{OrgCode} | Standard - Search for membership order items using OData.
[**membershipOrderItemsPostMembershipOrderItem**](MembershipOrderItemsApi.md#membershipOrderItemsPostMembershipOrderItem) | **POST** /api/v1/MembershipOrderItems | Extended (Membership Orders) - Add an item to an existing membership order
[**membershipOrderItemsPutMembershipOrderItem**](MembershipOrderItemsApi.md#membershipOrderItemsPutMembershipOrderItem) | **PUT** /api/v1/MembershipOrderItems/{OrgCode}/{OrderNumber}/{OrderLineNumber} | Extended (Membership Orders) - Edit a item on a membership order


# **membershipOrderItemsDeleteMembershipOrderItem**
> membershipOrderItemsDeleteMembershipOrderItem($org_code, $order_number, $order_line_number)

Extended (Membership Orders) - Delete a order item from an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the membership order item.
$order_number = 56; // int | The Order Number of the membership order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the membership order item.

try {
    $apiInstance->membershipOrderItemsDeleteMembershipOrderItem($org_code, $order_number, $order_line_number);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrderItemsApi->membershipOrderItemsDeleteMembershipOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the membership order item. |
 **order_number** | **int**| The Order Number of the membership order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the membership order item. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipOrderItemsGetMembershipOrderItem**
> \FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel membershipOrderItemsGetMembershipOrderItem($org_code, $order_number, $order_line_number)

Standard - Get a single membership order item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the membership order item.
$order_number = 56; // int | The Order Number of the membership order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the membership order item.

try {
    $result = $apiInstance->membershipOrderItemsGetMembershipOrderItem($org_code, $order_number, $order_line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrderItemsApi->membershipOrderItemsGetMembershipOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the membership order item. |
 **order_number** | **int**| The Order Number of the membership order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the membership order item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel**](../Model/MembershipOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipOrderItemsGetMembershipOrderItemList**
> \FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel membershipOrderItemsGetMembershipOrderItemList($org_code, $search)

Standard - Search for membership order items using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->membershipOrderItemsGetMembershipOrderItemList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrderItemsApi->membershipOrderItemsGetMembershipOrderItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel**](../Model/MembershipOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipOrderItemsPostMembershipOrderItem**
> \FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel membershipOrderItemsPostMembershipOrderItem($data)

Extended (Membership Orders) - Add an item to an existing membership order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel(); // \FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel | (Include in the HTTP Body) A MembershipOrderItemsModel entry to add.

try {
    $result = $apiInstance->membershipOrderItemsPostMembershipOrderItem($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrderItemsApi->membershipOrderItemsPostMembershipOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel**](../Model/MembershipOrderItemsModel.md)| (Include in the HTTP Body) A MembershipOrderItemsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel**](../Model/MembershipOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipOrderItemsPutMembershipOrderItem**
> \FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel membershipOrderItemsPutMembershipOrderItem($org_code, $order_number, $order_line_number, $data)

Extended (Membership Orders) - Edit a item on a membership order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrderItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the membership order item.
$order_number = 56; // int | The order number of the membership order item's parent order.
$order_line_number = 56; // int | The Order Item Number of the membership order item.
$data = new \FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel(); // \FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel | (Include in the HTTP Body) A MembershipOrderItemsModel entry to edit.

try {
    $result = $apiInstance->membershipOrderItemsPutMembershipOrderItem($org_code, $order_number, $order_line_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrderItemsApi->membershipOrderItemsPutMembershipOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the membership order item. |
 **order_number** | **int**| The order number of the membership order item&#39;s parent order. |
 **order_line_number** | **int**| The Order Item Number of the membership order item. |
 **data** | [**\FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel**](../Model/MembershipOrderItemsModel.md)| (Include in the HTTP Body) A MembershipOrderItemsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MembershipOrderItemsModel**](../Model/MembershipOrderItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

