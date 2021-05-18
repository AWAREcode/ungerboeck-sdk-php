# FomF\Ungerboeck\Client\AccountsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsGetAccount**](AccountsApi.md#accountsGetAccount) | **GET** /api/v1/Accounts/{OrgCode}/{AccountCode} | Basic - Get a single account by its parameters
[**accountsGetAccountList**](AccountsApi.md#accountsGetAccountList) | **GET** /api/v1/Accounts/{OrgCode} | Basic - Search for accounts using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**accountsPostAccount**](AccountsApi.md#accountsPostAccount) | **POST** /api/v1/Accounts | Standard - Add an account
[**accountsPutAccount**](AccountsApi.md#accountsPutAccount) | **PUT** /api/v1/Accounts/{OrgCode}/{AccountCode} | Standard - Edit an account


# **accountsGetAccount**
> \FomF\Ungerboeck\Client\Model\AllAccountsModel accountsGetAccount($org_code, $account_code)

Basic - Get a single account by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the account.
$account_code = "account_code_example"; // string | The Account Code of the account.

try {
    $result = $apiInstance->accountsGetAccount($org_code, $account_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the account. |
 **account_code** | **string**| The Account Code of the account. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AllAccountsModel**](../Model/AllAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsGetAccountList**
> \FomF\Ungerboeck\Client\Model\AllAccountsModel accountsGetAccountList($org_code, $search)

Basic - Search for accounts using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->accountsGetAccountList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetAccountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AllAccountsModel**](../Model/AllAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsPostAccount**
> \FomF\Ungerboeck\Client\Model\AllAccountsModel accountsPostAccount($data)

Standard - Add an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\AllAccountsModel(); // \FomF\Ungerboeck\Client\Model\AllAccountsModel | (Include in the HTTP Body) An AllAccountsModel to add.

try {
    $result = $apiInstance->accountsPostAccount($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsPostAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\AllAccountsModel**](../Model/AllAccountsModel.md)| (Include in the HTTP Body) An AllAccountsModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AllAccountsModel**](../Model/AllAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsPutAccount**
> \FomF\Ungerboeck\Client\Model\AllAccountsModel accountsPutAccount($org_code, $account_code, $data)

Standard - Edit an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the account.
$account_code = "account_code_example"; // string | The account code of the account.
$data = new \FomF\Ungerboeck\Client\Model\AllAccountsModel(); // \FomF\Ungerboeck\Client\Model\AllAccountsModel | (Include in the HTTP Body) An AllAccountsModel to edit.

try {
    $result = $apiInstance->accountsPutAccount($org_code, $account_code, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsPutAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the account. |
 **account_code** | **string**| The account code of the account. |
 **data** | [**\FomF\Ungerboeck\Client\Model\AllAccountsModel**](../Model/AllAccountsModel.md)| (Include in the HTTP Body) An AllAccountsModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AllAccountsModel**](../Model/AllAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

