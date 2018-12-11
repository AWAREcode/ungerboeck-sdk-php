# FomF\Ungerboeck\Client\AccountTypesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTypesGetAccountTypes**](AccountTypesApi.md#accountTypesGetAccountTypes) | **GET** /api/v1/AccountTypes/{OrgCode}/{Code} | Get an account type by its parameters
[**accountTypesGetAccountTypesList**](AccountTypesApi.md#accountTypesGetAccountTypesList) | **GET** /api/v1/AccountTypes/{OrgCode} | Search for account type using OData.


# **accountTypesGetAccountTypes**
> \FomF\Ungerboeck\Client\Model\AccountTypesModel accountTypesGetAccountTypes($org_code, $code)

Get an account type by its parameters

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
    $result = $apiInstance->accountTypesGetAccountTypes($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountTypesGetAccountTypes: ', $e->getMessage(), PHP_EOL;
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

# **accountTypesGetAccountTypesList**
> \FomF\Ungerboeck\Client\Model\AccountTypesModel[] accountTypesGetAccountTypesList($org_code, $search)

Search for account type using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->accountTypesGetAccountTypesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypesApi->accountTypesGetAccountTypesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountTypesModel[]**](../Model/AccountTypesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

