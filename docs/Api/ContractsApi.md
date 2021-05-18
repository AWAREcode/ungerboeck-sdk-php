# FomF\Ungerboeck\Client\ContractsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractsGetContract**](ContractsApi.md#contractsGetContract) | **GET** /api/v1/Contracts/{OrgCode}/{Sequence} | Standard - Get a single contract by its parameters
[**contractsGetContractList**](ContractsApi.md#contractsGetContractList) | **GET** /api/v1/Contracts/{OrgCode} | Standard - Search for contract using OData.


# **contractsGetContract**
> \FomF\Ungerboeck\Client\Model\ContractsModel contractsGetContract($org_code, $sequence)

Standard - Get a single contract by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the contract.
$sequence = 56; // int | The sequence of the contract.

try {
    $result = $apiInstance->contractsGetContract($org_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the contract. |
 **sequence** | **int**| The sequence of the contract. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ContractsModel**](../Model/ContractsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contractsGetContractList**
> \FomF\Ungerboeck\Client\Model\ContractsModel contractsGetContractList($org_code, $search)

Standard - Search for contract using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->contractsGetContractList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetContractList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ContractsModel**](../Model/ContractsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

