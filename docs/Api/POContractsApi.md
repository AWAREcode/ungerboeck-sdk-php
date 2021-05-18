# FomF\Ungerboeck\Client\POContractsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pOContractsGetPOContract**](POContractsApi.md#pOContractsGetPOContract) | **GET** /api/v1/POContracts/{OrgCode}/{ContractID} | Standard - Retrieve a POContracts record
[**pOContractsGetPOContractList**](POContractsApi.md#pOContractsGetPOContractList) | **GET** /api/v1/POContracts/{OrgCode} | Standard - Search for records. Note that this search endpoint does not use OrgCode.


# **pOContractsGetPOContract**
> \FomF\Ungerboeck\Client\Model\POContractsModel pOContractsGetPOContract($org_code, $contract_id)

Standard - Retrieve a POContracts record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\POContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the POContract entry.
$contract_id = 56; // int | The contract id of POContract.

try {
    $result = $apiInstance->pOContractsGetPOContract($org_code, $contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POContractsApi->pOContractsGetPOContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the POContract entry. |
 **contract_id** | **int**| The contract id of POContract. |

### Return type

[**\FomF\Ungerboeck\Client\Model\POContractsModel**](../Model/POContractsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pOContractsGetPOContractList**
> \FomF\Ungerboeck\Client\Model\POContractsModel pOContractsGetPOContractList($org_code, $search)

Standard - Search for records. Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\POContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place, needed for user-defined fields
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->pOContractsGetPOContractList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling POContractsApi->pOContractsGetPOContractList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place, needed for user-defined fields |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\POContractsModel**](../Model/POContractsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

