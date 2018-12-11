# FomF\Ungerboeck\Client\PaymentPlanHeadersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentPlanHeadersGetPaymentPlanHeaders**](PaymentPlanHeadersApi.md#paymentPlanHeadersGetPaymentPlanHeaders) | **GET** /api/v1/PaymentPlanHeaders/{OrgCode}/{PayPlanID}/{PaymentNumber} | Get a payment plan header by its parameters
[**paymentPlanHeadersGetPaymentPlanHeadersList**](PaymentPlanHeadersApi.md#paymentPlanHeadersGetPaymentPlanHeadersList) | **GET** /api/v1/PaymentPlanHeaders/{OrgCode} | Search for payment plan headers using OData.


# **paymentPlanHeadersGetPaymentPlanHeaders**
> \FomF\Ungerboeck\Client\Model\PaymentPlanHeadersModel paymentPlanHeadersGetPaymentPlanHeaders($org_code, $pay_plan_id, $payment_number)

Get a payment plan header by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentPlanHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the payment plan header.
$pay_plan_id = 56; // int | The plan ID for the payment plan the step is associated with.
$payment_number = 56; // int | The payment number of the payment plan header.

try {
    $result = $apiInstance->paymentPlanHeadersGetPaymentPlanHeaders($org_code, $pay_plan_id, $payment_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPlanHeadersApi->paymentPlanHeadersGetPaymentPlanHeaders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the payment plan header. |
 **pay_plan_id** | **int**| The plan ID for the payment plan the step is associated with. |
 **payment_number** | **int**| The payment number of the payment plan header. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentPlanHeadersModel**](../Model/PaymentPlanHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentPlanHeadersGetPaymentPlanHeadersList**
> \FomF\Ungerboeck\Client\Model\PaymentPlanHeadersModel[] paymentPlanHeadersGetPaymentPlanHeadersList($org_code, $search)

Search for payment plan headers using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentPlanHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->paymentPlanHeadersGetPaymentPlanHeadersList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPlanHeadersApi->paymentPlanHeadersGetPaymentPlanHeadersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentPlanHeadersModel[]**](../Model/PaymentPlanHeadersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

