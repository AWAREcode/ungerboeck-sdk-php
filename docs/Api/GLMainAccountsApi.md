# FomF\Ungerboeck\Client\GLMainAccountsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gLMainAccountsGetGLMainAccount**](GLMainAccountsApi.md#gLMainAccountsGetGLMainAccount) | **GET** /api/v1/GLMainAccounts/{OrgCode}/{GLMainAccount} | Standard - Retrieve a GLMainAccount record
[**gLMainAccountsGetGLMainAccountList**](GLMainAccountsApi.md#gLMainAccountsGetGLMainAccountList) | **GET** /api/v1/GLMainAccounts/{OrgCode} | Standard - Search for GLMainAccounts using OData.


# **gLMainAccountsGetGLMainAccount**
> \FomF\Ungerboeck\Client\Model\GLMainAccountsModel gLMainAccountsGetGLMainAccount($org_code, $gl_main_account)

Standard - Retrieve a GLMainAccount record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLMainAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the GLMainAccount entry.
$gl_main_account = "gl_main_account_example"; // string | The account code of the GLMainAccount entry.

try {
    $result = $apiInstance->gLMainAccountsGetGLMainAccount($org_code, $gl_main_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLMainAccountsApi->gLMainAccountsGetGLMainAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the GLMainAccount entry. |
 **gl_main_account** | **string**| The account code of the GLMainAccount entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLMainAccountsModel**](../Model/GLMainAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gLMainAccountsGetGLMainAccountList**
> \FomF\Ungerboeck\Client\Model\GLMainAccountsModel gLMainAccountsGetGLMainAccountList($org_code, $search)

Standard - Search for GLMainAccounts using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\GLMainAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->gLMainAccountsGetGLMainAccountList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GLMainAccountsApi->gLMainAccountsGetGLMainAccountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\GLMainAccountsModel**](../Model/GLMainAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

