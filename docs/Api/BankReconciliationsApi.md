# FomF\Ungerboeck\Client\BankReconciliationsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankReconciliationsGetBankReconciliation**](BankReconciliationsApi.md#bankReconciliationsGetBankReconciliation) | **GET** /api/v1/BankReconciliations/{OrgCode}/{SequenceNumber} | Standard - Get Bank Reconciliation by its parameters
[**bankReconciliationsGetBankReconciliationList**](BankReconciliationsApi.md#bankReconciliationsGetBankReconciliationList) | **GET** /api/v1/BankReconciliations/{OrgCode} | Standard - Search for Bank Reconciliations using OData.


# **bankReconciliationsGetBankReconciliation**
> \FomF\Ungerboeck\Client\Model\BankReconciliationsModel bankReconciliationsGetBankReconciliation($org_code, $sequence_number)

Standard - Get Bank Reconciliation by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BankReconciliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Bank Reconciliation.
$sequence_number = 56; // int | The Sequence Number of the Bank Reconciliation are associated with.

try {
    $result = $apiInstance->bankReconciliationsGetBankReconciliation($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankReconciliationsApi->bankReconciliationsGetBankReconciliation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Bank Reconciliation. |
 **sequence_number** | **int**| The Sequence Number of the Bank Reconciliation are associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BankReconciliationsModel**](../Model/BankReconciliationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bankReconciliationsGetBankReconciliationList**
> \FomF\Ungerboeck\Client\Model\BankReconciliationsModel bankReconciliationsGetBankReconciliationList($org_code, $search)

Standard - Search for Bank Reconciliations using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BankReconciliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->bankReconciliationsGetBankReconciliationList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankReconciliationsApi->bankReconciliationsGetBankReconciliationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BankReconciliationsModel**](../Model/BankReconciliationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

