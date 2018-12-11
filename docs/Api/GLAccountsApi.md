# FomF\Ungerboeck\Client\GLAccountsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gLAccountsGetGLAccounts**](GLAccountsApi.md#gLAccountsGetGLAccounts) | **GET** /api/v1/GLAccounts/{OrgCode}/{GLAccount}/{SubAccount} | Get a GL account by its parameters
[**gLAccountsGetGLAccountsList**](GLAccountsApi.md#gLAccountsGetGLAccountsList) | **GET** /api/v1/GLAccounts/{OrgCode} | Search for GL accounts using OData.


# **gLAccountsGetGLAccounts**
> \FomF\Ungerboeck\Client\Model\GlAccountsModel gLAccountsGetGLAccounts($org_code, $gl_account, $sub_account)

Get a GL account by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the GL account.
$gl_account = "gl_account_example"; // string | The account code of the GL account.
$sub_account = "sub_account_example"; // string | The sub account of the GL account.

try {
    $result = $apiInstance->gLAccountsGetGLAccounts($org_code, $gl_account, $sub_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLAccountsApi->gLAccountsGetGLAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the GL account. |
 **gl_account** | **string**| The account code of the GL account. |
 **sub_account** | **string**| The sub account of the GL account. |

### Return type

[**\FomF\Ungerboeck\Client\Model\GlAccountsModel**](../Model/GlAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gLAccountsGetGLAccountsList**
> \FomF\Ungerboeck\Client\Model\GlAccountsModel[] gLAccountsGetGLAccountsList($org_code, $search)

Search for GL accounts using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->gLAccountsGetGLAccountsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLAccountsApi->gLAccountsGetGLAccountsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\GlAccountsModel[]**](../Model/GlAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

