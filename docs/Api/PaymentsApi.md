# FomF\Ungerboeck\Client\PaymentsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsGetPayment**](PaymentsApi.md#paymentsGetPayment) | **GET** /api/v1/Payments/{OrgCode}/{AccountCode}/{Sequence} | Standard - Get a single Payment entry by its parameters
[**paymentsGetPaymentList**](PaymentsApi.md#paymentsGetPaymentList) | **GET** /api/v1/Payments/{OrgCode} | Standard - Search for payments using OData.
[**paymentsPostPayment**](PaymentsApi.md#paymentsPostPayment) | **POST** /api/v1/Payments | Standard - Add a Payment entry to an account
[**paymentsPutPayment**](PaymentsApi.md#paymentsPutPayment) | **PUT** /api/v1/Payments/{OrgCode}/{AccountCode}/{Sequence} | Standard - Edit a Payment entry


# **paymentsGetPayment**
> \FomF\Ungerboeck\Client\Model\PaymentsModel paymentsGetPayment($org_code, $account_code, $sequence)

Standard - Get a single Payment entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Payment entry.
$account_code = "account_code_example"; // string | The account code of the Payment entry.
$sequence = 56; // int | The sequence of the Payment entry.

try {
    $result = $apiInstance->paymentsGetPayment($org_code, $account_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Payment entry. |
 **account_code** | **string**| The account code of the Payment entry. |
 **sequence** | **int**| The sequence of the Payment entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentsModel**](../Model/PaymentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsGetPaymentList**
> \FomF\Ungerboeck\Client\Model\PaymentsModel paymentsGetPaymentList($org_code, $search)

Standard - Search for payments using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->paymentsGetPaymentList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsGetPaymentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentsModel**](../Model/PaymentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsPostPayment**
> \FomF\Ungerboeck\Client\Model\PaymentsModel paymentsPostPayment($data)

Standard - Add a Payment entry to an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\PaymentsModel(); // \FomF\Ungerboeck\Client\Model\PaymentsModel | (Include in the HTTP Body) A PaymentsModel entry to add.

try {
    $result = $apiInstance->paymentsPostPayment($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsPostPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\PaymentsModel**](../Model/PaymentsModel.md)| (Include in the HTTP Body) A PaymentsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentsModel**](../Model/PaymentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsPutPayment**
> \FomF\Ungerboeck\Client\Model\PaymentsModel paymentsPutPayment($org_code, $account_code, $sequence, $data)

Standard - Edit a Payment entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Payment entry.
$account_code = "account_code_example"; // string | The account code of the Payment entry.
$sequence = 56; // int | The sequence number of the Payment entry.
$data = new \FomF\Ungerboeck\Client\Model\PaymentsModel(); // \FomF\Ungerboeck\Client\Model\PaymentsModel | (Include in the HTTP Body) A PaymentsModel entry to edit.

try {
    $result = $apiInstance->paymentsPutPayment($org_code, $account_code, $sequence, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsPutPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Payment entry. |
 **account_code** | **string**| The account code of the Payment entry. |
 **sequence** | **int**| The sequence number of the Payment entry. |
 **data** | [**\FomF\Ungerboeck\Client\Model\PaymentsModel**](../Model/PaymentsModel.md)| (Include in the HTTP Body) A PaymentsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentsModel**](../Model/PaymentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

