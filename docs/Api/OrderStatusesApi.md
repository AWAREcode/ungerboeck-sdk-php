# FomF\Ungerboeck\Client\OrderStatusesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderStatusesGetOrderStatus**](OrderStatusesApi.md#orderStatusesGetOrderStatus) | **GET** /api/v1/OrderStatuses/{OrgCode}/{Code} | Basic - Get a single order status by its parameters
[**orderStatusesGetOrderStatusList**](OrderStatusesApi.md#orderStatusesGetOrderStatusList) | **GET** /api/v1/OrderStatuses/{OrgCode} | Basic - Search for order status using OData.


# **orderStatusesGetOrderStatus**
> \FomF\Ungerboeck\Client\Model\OrderStatusesModel orderStatusesGetOrderStatus($org_code, $code)

Basic - Get a single order status by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OrderStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the order status.
$code = "code_example"; // string | The Code of the order status.

try {
    $result = $apiInstance->orderStatusesGetOrderStatus($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusesApi->orderStatusesGetOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the order status. |
 **code** | **string**| The Code of the order status. |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrderStatusesModel**](../Model/OrderStatusesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderStatusesGetOrderStatusList**
> \FomF\Ungerboeck\Client\Model\OrderStatusesModel orderStatusesGetOrderStatusList($org_code, $search)

Basic - Search for order status using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OrderStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->orderStatusesGetOrderStatusList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusesApi->orderStatusesGetOrderStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrderStatusesModel**](../Model/OrderStatusesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

