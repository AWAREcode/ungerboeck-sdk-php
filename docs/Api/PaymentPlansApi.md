# FomF\Ungerboeck\Client\PaymentPlansApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentPlansGetPaymentPlan**](PaymentPlansApi.md#paymentPlansGetPaymentPlan) | **GET** /api/v1/PaymentPlans/{OrgCode}/{PaymentPlanID} | Standard - Get a single payment plan by its parameters
[**paymentPlansGetPaymentPlanList**](PaymentPlansApi.md#paymentPlansGetPaymentPlanList) | **GET** /api/v1/PaymentPlans/{OrgCode} | Standard - Search for payment plan using OData.


# **paymentPlansGetPaymentPlan**
> \FomF\Ungerboeck\Client\Model\PaymentPlansModel paymentPlansGetPaymentPlan($org_code, $payment_plan_id)

Standard - Get a single payment plan by its parameters

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
    $result = $apiInstance->paymentPlansGetPaymentPlan($org_code, $payment_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPlansApi->paymentPlansGetPaymentPlan: ', $e->getMessage(), PHP_EOL;
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

# **paymentPlansGetPaymentPlanList**
> \FomF\Ungerboeck\Client\Model\PaymentPlansModel paymentPlansGetPaymentPlanList($org_code, $search)

Standard - Search for payment plan using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->paymentPlansGetPaymentPlanList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPlansApi->paymentPlansGetPaymentPlanList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentPlansModel**](../Model/PaymentPlansModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

