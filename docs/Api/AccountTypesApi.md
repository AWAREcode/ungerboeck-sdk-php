# FomF\Ungerboeck\Client\AccountTypesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTypesGetAccountType**](AccountTypesApi.md#accountTypesGetAccountType) | **GET** /api/v1/AccountTypes/{OrgCode}/{Code} | Basic - Get a single account type by its parameters
[**accountTypesGetAccountTypeList**](AccountTypesApi.md#accountTypesGetAccountTypeList) | **GET** /api/v1/AccountTypes/{OrgCode} | Basic - Search for account type using OData.


# **accountTypesGetAccountType**
> \FomF\Ungerboeck\Client\Model\AccountTypesModel accountTypesGetAccountType($org_code, $code)

Basic - Get a single account type by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the account type.
$code = "code_example"; // string | The code of the account type.

try {
    $result = $apiInstance->accountTypesGetAccountType($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountTypesGetAccountType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the account type. |
 **code** | **string**| The code of the account type. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountTypesModel**](../Model/AccountTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountTypesGetAccountTypeList**
> \FomF\Ungerboeck\Client\Model\AccountTypesModel accountTypesGetAccountTypeList($org_code, $search)

Basic - Search for account type using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->accountTypesGetAccountTypeList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountTypesGetAccountTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountTypesModel**](../Model/AccountTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

