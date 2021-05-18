# FomF\Ungerboeck\Client\BankAccountsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankAccountsGetBankAccount**](BankAccountsApi.md#bankAccountsGetBankAccount) | **GET** /api/v1/BankAccounts/{OrgCode}/{Code} | Standard - Get a single bank account by its parameters
[**bankAccountsGetBankAccountList**](BankAccountsApi.md#bankAccountsGetBankAccountList) | **GET** /api/v1/BankAccounts/{OrgCode} | Standard - Search for bank accounts using OData.


# **bankAccountsGetBankAccount**
> \FomF\Ungerboeck\Client\Model\BankAccountsModel bankAccountsGetBankAccount($org_code, $code)

Standard - Get a single bank account by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the bank account entry.
$code = "code_example"; // string | The code of the bank account entry.

try {
    $result = $apiInstance->bankAccountsGetBankAccount($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->bankAccountsGetBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the bank account entry. |
 **code** | **string**| The code of the bank account entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BankAccountsModel**](../Model/BankAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankAccountsGetBankAccountList**
> \FomF\Ungerboeck\Client\Model\BankAccountsModel bankAccountsGetBankAccountList($org_code, $search)

Standard - Search for bank accounts using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->bankAccountsGetBankAccountList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->bankAccountsGetBankAccountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BankAccountsModel**](../Model/BankAccountsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

