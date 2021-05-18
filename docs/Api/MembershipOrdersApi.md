# FomF\Ungerboeck\Client\MembershipOrdersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**membershipOrdersGetMembershipOrder**](MembershipOrdersApi.md#membershipOrdersGetMembershipOrder) | **GET** /api/v1/MembershipOrders/{OrgCode}/{OrderNumber} | Standard - Get a single membership order by its parameters
[**membershipOrdersGetMembershipOrderList**](MembershipOrdersApi.md#membershipOrdersGetMembershipOrderList) | **GET** /api/v1/MembershipOrders/{OrgCode} | Standard - Search for membership orders using OData.
[**membershipOrdersPostMembershipOrder**](MembershipOrdersApi.md#membershipOrdersPostMembershipOrder) | **POST** /api/v1/MembershipOrders | Extended (Membership Orders) - Add a membership order
[**membershipOrdersPrepareMembershipOrderForInvoicing**](MembershipOrdersApi.md#membershipOrdersPrepareMembershipOrderForInvoicing) | **PUT** /api/v1/MembershipOrders/{OrgCode}/{OrderNumber}/PrepareMembershipOrderForInvoicing | Extended (Membership Orders) - Use this action endpoint to prepare a membership order for invoicing.  This process replicates the \&quot;Prepare Order\&quot; functionality found in v20&#39;s \&quot;Prepare Membership Orders For Invoicing\&quot; window.  The response content contains the newly created Membership Order number (type MB).
[**membershipOrdersPutMembershipOrder**](MembershipOrdersApi.md#membershipOrdersPutMembershipOrder) | **PUT** /api/v1/MembershipOrders/{OrgCode}/{OrderNumber} | Extended (Membership Orders) - Edit a membership order


# **membershipOrdersGetMembershipOrder**
> \FomF\Ungerboeck\Client\Model\MembershipOrdersModel membershipOrdersGetMembershipOrder($org_code, $order_number)

Standard - Get a single membership order by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the membership order.
$order_number = 56; // int | The Order Number of the membership order.

try {
    $result = $apiInstance->membershipOrdersGetMembershipOrder($org_code, $order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrdersApi->membershipOrdersGetMembershipOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the membership order. |
 **order_number** | **int**| The Order Number of the membership order. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MembershipOrdersModel**](../Model/MembershipOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipOrdersGetMembershipOrderList**
> \FomF\Ungerboeck\Client\Model\MembershipOrdersModel membershipOrdersGetMembershipOrderList($org_code, $search)

Standard - Search for membership orders using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->membershipOrdersGetMembershipOrderList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrdersApi->membershipOrdersGetMembershipOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\MembershipOrdersModel**](../Model/MembershipOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipOrdersPostMembershipOrder**
> \FomF\Ungerboeck\Client\Model\MembershipOrdersModel membershipOrdersPostMembershipOrder($data)

Extended (Membership Orders) - Add a membership order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\MembershipOrdersModel(); // \FomF\Ungerboeck\Client\Model\MembershipOrdersModel | (Include in the HTTP Body) A MembershipOrdersModel entry to add.

try {
    $result = $apiInstance->membershipOrdersPostMembershipOrder($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrdersApi->membershipOrdersPostMembershipOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\MembershipOrdersModel**](../Model/MembershipOrdersModel.md)| (Include in the HTTP Body) A MembershipOrdersModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MembershipOrdersModel**](../Model/MembershipOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipOrdersPrepareMembershipOrderForInvoicing**
> object membershipOrdersPrepareMembershipOrderForInvoicing($org_code, $order_number)

Extended (Membership Orders) - Use this action endpoint to prepare a membership order for invoicing.  This process replicates the \"Prepare Order\" functionality found in v20's \"Prepare Membership Orders For Invoicing\" window.  The response content contains the newly created Membership Order number (type MB).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the membership order.
$order_number = 56; // int | The Order Number of the membership order.

try {
    $result = $apiInstance->membershipOrdersPrepareMembershipOrderForInvoicing($org_code, $order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrdersApi->membershipOrdersPrepareMembershipOrderForInvoicing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the membership order. |
 **order_number** | **int**| The Order Number of the membership order. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipOrdersPutMembershipOrder**
> \FomF\Ungerboeck\Client\Model\MembershipOrdersModel membershipOrdersPutMembershipOrder($org_code, $order_number, $data)

Extended (Membership Orders) - Edit a membership order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MembershipOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the membership order.
$order_number = 56; // int | The order number of the membership order.
$data = new \FomF\Ungerboeck\Client\Model\MembershipOrdersModel(); // \FomF\Ungerboeck\Client\Model\MembershipOrdersModel | (Include in the HTTP Body) A MembershipOrdersModel entry to edit.

try {
    $result = $apiInstance->membershipOrdersPutMembershipOrder($org_code, $order_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipOrdersApi->membershipOrdersPutMembershipOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the membership order. |
 **order_number** | **int**| The order number of the membership order. |
 **data** | [**\FomF\Ungerboeck\Client\Model\MembershipOrdersModel**](../Model/MembershipOrdersModel.md)| (Include in the HTTP Body) A MembershipOrdersModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MembershipOrdersModel**](../Model/MembershipOrdersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

