# FomF\Ungerboeck\Client\MarketListItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketListItemsGetMarketListItem**](MarketListItemsApi.md#marketListItemsGetMarketListItem) | **GET** /api/v1/MarketListItems/{OrgCode}/{MarketList}/{Sequence} | Standard - Get a single Market List Item by its parameters
[**marketListItemsGetMarketListItemList**](MarketListItemsApi.md#marketListItemsGetMarketListItemList) | **GET** /api/v1/MarketListItems/{OrgCode} | Standard - Search for Market List Items using OData. Note that this search endpoint does not use OrgCode.


# **marketListItemsGetMarketListItem**
> \FomF\Ungerboeck\Client\Model\MarketListItemsModel marketListItemsGetMarketListItem($org_code, $market_list, $sequence)

Standard - Get a single Market List Item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MarketListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Org code of the Market List
$market_list = "market_list_example"; // string | Market List code of parent market list of the Market List Item
$sequence = 56; // int | Sequence of the Market List Item

try {
    $result = $apiInstance->marketListItemsGetMarketListItem($org_code, $market_list, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketListItemsApi->marketListItemsGetMarketListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Org code of the Market List |
 **market_list** | **string**| Market List code of parent market list of the Market List Item |
 **sequence** | **int**| Sequence of the Market List Item |

### Return type

[**\FomF\Ungerboeck\Client\Model\MarketListItemsModel**](../Model/MarketListItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketListItemsGetMarketListItemList**
> \FomF\Ungerboeck\Client\Model\MarketListItemsModel marketListItemsGetMarketListItemList($org_code, $search)

Standard - Search for Market List Items using OData. Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MarketListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->marketListItemsGetMarketListItemList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketListItemsApi->marketListItemsGetMarketListItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\MarketListItemsModel**](../Model/MarketListItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

