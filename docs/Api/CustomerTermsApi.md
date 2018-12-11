# FomF\Ungerboeck\Client\CustomerTermsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerTermsGetCustomerTerms**](CustomerTermsApi.md#customerTermsGetCustomerTerms) | **GET** /api/v1/CustomerTerms/{OrgCode}/{Code} | Get a customer term by its parameters
[**customerTermsGetCustomerTermsList**](CustomerTermsApi.md#customerTermsGetCustomerTermsList) | **GET** /api/v1/CustomerTerms/{OrgCode} | Search for customer terms using OData.


# **customerTermsGetCustomerTerms**
> \FomF\Ungerboeck\Client\Model\CustomerTermsModel customerTermsGetCustomerTerms($org_code, $code)

Get a customer term by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CustomerTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the customer term.
$code = "code_example"; // string | The code of the customer term.

try {
    $result = $apiInstance->customerTermsGetCustomerTerms($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTermsApi->customerTermsGetCustomerTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the customer term. |
 **code** | **string**| The code of the customer term. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomerTermsModel**](../Model/CustomerTermsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerTermsGetCustomerTermsList**
> \FomF\Ungerboeck\Client\Model\CustomerTermsModel[] customerTermsGetCustomerTermsList($org_code, $search)

Search for customer terms using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CustomerTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->customerTermsGetCustomerTermsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTermsApi->customerTermsGetCustomerTermsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomerTermsModel[]**](../Model/CustomerTermsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

