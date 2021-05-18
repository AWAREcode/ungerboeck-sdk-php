# FomF\Ungerboeck\Client\PendingPaymentsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pendingPaymentsGetPendingPayment**](PendingPaymentsApi.md#pendingPaymentsGetPendingPayment) | **GET** /api/v1/PendingPayments/{OrgCode}/{PendingPaymentID} | Basic - Get a single Pending Payment by its parameters
[**pendingPaymentsGetPendingPaymentList**](PendingPaymentsApi.md#pendingPaymentsGetPendingPaymentList) | **GET** /api/v1/PendingPayments/{OrgCode} | Basic - Search for Pending Payments  List using OData.


# **pendingPaymentsGetPendingPayment**
> \FomF\Ungerboeck\Client\Model\PendingPaymentsModel pendingPaymentsGetPendingPayment($org_code, $pending_payment_id)

Basic - Get a single Pending Payment by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PendingPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | 
$pending_payment_id = 56; // int | 

try {
    $result = $apiInstance->pendingPaymentsGetPendingPayment($org_code, $pending_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PendingPaymentsApi->pendingPaymentsGetPendingPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**|  |
 **pending_payment_id** | **int**|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\PendingPaymentsModel**](../Model/PendingPaymentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pendingPaymentsGetPendingPaymentList**
> \FomF\Ungerboeck\Client\Model\PendingPaymentsModel pendingPaymentsGetPendingPaymentList($org_code, $search)

Basic - Search for Pending Payments  List using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PendingPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->pendingPaymentsGetPendingPaymentList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PendingPaymentsApi->pendingPaymentsGetPendingPaymentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PendingPaymentsModel**](../Model/PendingPaymentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

