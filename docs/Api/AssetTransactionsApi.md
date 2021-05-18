# FomF\Ungerboeck\Client\AssetTransactionsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetTransactionsGetAssetTransaction**](AssetTransactionsApi.md#assetTransactionsGetAssetTransaction) | **GET** /api/v1/AssetTransactions/{OrgCode}/{Asset}/{Book}/{Sequence} | Standard - Get an asset transaction by its parameters
[**assetTransactionsGetAssetTransactionList**](AssetTransactionsApi.md#assetTransactionsGetAssetTransactionList) | **GET** /api/v1/AssetTransactions/{OrgCode} | Standard - Search for asset transactions using OData.


# **assetTransactionsGetAssetTransaction**
> \FomF\Ungerboeck\Client\Model\AssetTransactionsModel assetTransactionsGetAssetTransaction($org_code, $asset, $book, $sequence)

Standard - Get an asset transaction by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AssetTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the asset transaction.
$asset = "asset_example"; // string | The asset code of the asset transaction entry.
$book = "book_example"; // string | The book code of the asset transaction entry.
$sequence = 56; // int | The sequence number of the asset transaction entry.

try {
    $result = $apiInstance->assetTransactionsGetAssetTransaction($org_code, $asset, $book, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTransactionsApi->assetTransactionsGetAssetTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the asset transaction. |
 **asset** | **string**| The asset code of the asset transaction entry. |
 **book** | **string**| The book code of the asset transaction entry. |
 **sequence** | **int**| The sequence number of the asset transaction entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AssetTransactionsModel**](../Model/AssetTransactionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetTransactionsGetAssetTransactionList**
> \FomF\Ungerboeck\Client\Model\AssetTransactionsModel assetTransactionsGetAssetTransactionList($org_code, $search)

Standard - Search for asset transactions using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AssetTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->assetTransactionsGetAssetTransactionList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTransactionsApi->assetTransactionsGetAssetTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\AssetTransactionsModel**](../Model/AssetTransactionsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

