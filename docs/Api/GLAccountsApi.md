# FomF\Ungerboeck\Client\GLAccountsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gLAccountsGetGLAccount**](GLAccountsApi.md#gLAccountsGetGLAccount) | **GET** /api/v1/GLAccounts/{OrgCode}/{GLAccount}/{SubAccount} | Standard - Get a GL account by its parameters
[**gLAccountsGetGLAccountList**](GLAccountsApi.md#gLAccountsGetGLAccountList) | **GET** /api/v1/GLAccounts/{OrgCode} | Standard - Search for GL accounts using OData.


# **gLAccountsGetGLAccount**
> \FomF\Ungerboeck\Client\Model\GlAccountsModel gLAccountsGetGLAccount($org_code, $gl_account, $sub_account)

Standard - Get a GL account by its parameters

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
$sub_account = "sub_account_example"; // string | The sub account of the GL account.  Note: Due to URL standards, if your sub account is blank, you will need to find it using a search.

try {
    $result = $apiInstance->gLAccountsGetGLAccount($org_code, $gl_account, $sub_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLAccountsApi->gLAccountsGetGLAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the GL account. |
 **gl_account** | **string**| The account code of the GL account. |
 **sub_account** | **string**| The sub account of the GL account.  Note: Due to URL standards, if your sub account is blank, you will need to find it using a search. |

### Return type

[**\FomF\Ungerboeck\Client\Model\GlAccountsModel**](../Model/GlAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gLAccountsGetGLAccountList**
> \FomF\Ungerboeck\Client\Model\GlAccountsModel gLAccountsGetGLAccountList($org_code, $search)

Standard - Search for GL accounts using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->gLAccountsGetGLAccountList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLAccountsApi->gLAccountsGetGLAccountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\GlAccountsModel**](../Model/GlAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

