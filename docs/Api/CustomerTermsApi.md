# FomF\Ungerboeck\Client\CustomerTermsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerTermsGetCustomerTerm**](CustomerTermsApi.md#customerTermsGetCustomerTerm) | **GET** /api/v1/CustomerTerms/{OrgCode}/{Code} | Standard - Get a single customer term by its parameters
[**customerTermsGetCustomerTermList**](CustomerTermsApi.md#customerTermsGetCustomerTermList) | **GET** /api/v1/CustomerTerms/{OrgCode} | Standard - Search for customer terms using OData.


# **customerTermsGetCustomerTerm**
> \FomF\Ungerboeck\Client\Model\CustomerTermsModel customerTermsGetCustomerTerm($org_code, $code)

Standard - Get a single customer term by its parameters

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
    $result = $apiInstance->customerTermsGetCustomerTerm($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTermsApi->customerTermsGetCustomerTerm: ', $e->getMessage(), PHP_EOL;
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

# **customerTermsGetCustomerTermList**
> \FomF\Ungerboeck\Client\Model\CustomerTermsModel customerTermsGetCustomerTermList($org_code, $search)

Standard - Search for customer terms using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->customerTermsGetCustomerTermList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTermsApi->customerTermsGetCustomerTermList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomerTermsModel**](../Model/CustomerTermsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

