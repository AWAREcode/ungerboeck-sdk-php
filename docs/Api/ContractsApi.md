# FomF\Ungerboeck\Client\ContractsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractsGetContracts**](ContractsApi.md#contractsGetContracts) | **GET** /api/v1/Contracts/{OrgCode}/{Sequence} | Get a contract by its parameters
[**contractsGetContractsList**](ContractsApi.md#contractsGetContractsList) | **GET** /api/v1/Contracts/{OrgCode} | Search for contract using OData.


# **contractsGetContracts**
> \FomF\Ungerboeck\Client\Model\ContractsModel contractsGetContracts($org_code, $sequence)

Get a contract by its parameters

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
    $result = $apiInstance->contractsGetContracts($org_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetContracts: ', $e->getMessage(), PHP_EOL;
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

# **contractsGetContractsList**
> \FomF\Ungerboeck\Client\Model\ContractsModel[] contractsGetContractsList($org_code, $search)

Search for contract using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->contractsGetContractsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetContractsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ContractsModel[]**](../Model/ContractsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

