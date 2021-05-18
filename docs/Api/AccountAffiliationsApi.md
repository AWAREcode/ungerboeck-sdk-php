# FomF\Ungerboeck\Client\AccountAffiliationsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountAffiliationsDeleteAccountAffiliation**](AccountAffiliationsApi.md#accountAffiliationsDeleteAccountAffiliation) | **DELETE** /api/v1/AccountAffiliations/{OrgCode}/{AccountCode}/{AffiliationCode} | Standard - Remove an affiliation from an account
[**accountAffiliationsGetAccountAffiliation**](AccountAffiliationsApi.md#accountAffiliationsGetAccountAffiliation) | **GET** /api/v1/AccountAffiliations/{OrgCode}/{AccountCode}/{AffiliationCode} | Basic - Get a single affiliation on an account by its parameters
[**accountAffiliationsGetAccountAffiliationList**](AccountAffiliationsApi.md#accountAffiliationsGetAccountAffiliationList) | **GET** /api/v1/AccountAffiliations/{OrgCode} | Basic - Search for account affiliations using OData.
[**accountAffiliationsPostAccountAffiliation**](AccountAffiliationsApi.md#accountAffiliationsPostAccountAffiliation) | **POST** /api/v1/AccountAffiliations | Standard - Add an affiliation to an account


# **accountAffiliationsDeleteAccountAffiliation**
> accountAffiliationsDeleteAccountAffiliation($org_code, $account_code, $affiliation_code)

Standard - Remove an affiliation from an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountAffiliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the account affiliation.
$account_code = "account_code_example"; // string | The Account Code of the account affiliation.
$affiliation_code = "affiliation_code_example"; // string | The Affiliation Code of the account affiliation.

try {
    $apiInstance->accountAffiliationsDeleteAccountAffiliation($org_code, $account_code, $affiliation_code);
} catch (Exception $e) {
    echo 'Exception when calling AccountAffiliationsApi->accountAffiliationsDeleteAccountAffiliation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the account affiliation. |
 **account_code** | **string**| The Account Code of the account affiliation. |
 **affiliation_code** | **string**| The Affiliation Code of the account affiliation. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountAffiliationsGetAccountAffiliation**
> \FomF\Ungerboeck\Client\Model\AccountAffiliationsModel accountAffiliationsGetAccountAffiliation($org_code, $account_code, $affiliation_code)

Basic - Get a single affiliation on an account by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountAffiliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the account affiliation.
$account_code = "account_code_example"; // string | The Account Code of the account affiliation.
$affiliation_code = "affiliation_code_example"; // string | The Affiliation Code of the account affiliation.

try {
    $result = $apiInstance->accountAffiliationsGetAccountAffiliation($org_code, $account_code, $affiliation_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAffiliationsApi->accountAffiliationsGetAccountAffiliation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the account affiliation. |
 **account_code** | **string**| The Account Code of the account affiliation. |
 **affiliation_code** | **string**| The Affiliation Code of the account affiliation. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountAffiliationsModel**](../Model/AccountAffiliationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountAffiliationsGetAccountAffiliationList**
> \FomF\Ungerboeck\Client\Model\AccountAffiliationsModel accountAffiliationsGetAccountAffiliationList($org_code, $search)

Basic - Search for account affiliations using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountAffiliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->accountAffiliationsGetAccountAffiliationList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAffiliationsApi->accountAffiliationsGetAccountAffiliationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountAffiliationsModel**](../Model/AccountAffiliationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountAffiliationsPostAccountAffiliation**
> \FomF\Ungerboeck\Client\Model\AccountAffiliationsModel accountAffiliationsPostAccountAffiliation($data)

Standard - Add an affiliation to an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountAffiliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\AccountAffiliationsModel(); // \FomF\Ungerboeck\Client\Model\AccountAffiliationsModel | (Include in the HTTP Body) an AccountAffiliationsModel to add.

try {
    $result = $apiInstance->accountAffiliationsPostAccountAffiliation($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAffiliationsApi->accountAffiliationsPostAccountAffiliation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\AccountAffiliationsModel**](../Model/AccountAffiliationsModel.md)| (Include in the HTTP Body) an AccountAffiliationsModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountAffiliationsModel**](../Model/AccountAffiliationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

