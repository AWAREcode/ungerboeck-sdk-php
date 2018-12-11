# FomF\Ungerboeck\Client\PaymentPlansApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentPlansGetPaymentPlans**](PaymentPlansApi.md#paymentPlansGetPaymentPlans) | **GET** /api/v1/PaymentPlans/{OrgCode}/{PaymentPlanID} | Get a payment plan by its parameters
[**paymentPlansGetPaymentPlansList**](PaymentPlansApi.md#paymentPlansGetPaymentPlansList) | **GET** /api/v1/PaymentPlans/{OrgCode} | Search for payment plan using OData.


# **paymentPlansGetPaymentPlans**
> \FomF\Ungerboeck\Client\Model\PaymentPlansModel paymentPlansGetPaymentPlans($org_code, $payment_plan_id)

Get a payment plan by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the payment plan.
$payment_plan_id = 56; // int | The payment plan ID of the payment plan.

try {
    $result = $apiInstance->paymentPlansGetPaymentPlans($org_code, $payment_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPlansApi->paymentPlansGetPaymentPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the payment plan. |
 **payment_plan_id** | **int**| The payment plan ID of the payment plan. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentPlansModel**](../Model/PaymentPlansModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentPlansGetPaymentPlansList**
> \FomF\Ungerboeck\Client\Model\PaymentPlansModel[] paymentPlansGetPaymentPlansList($org_code, $search)

Search for payment plan using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->paymentPlansGetPaymentPlansList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPlansApi->paymentPlansGetPaymentPlansList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentPlansModel[]**](../Model/PaymentPlansModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

