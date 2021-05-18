# FomF\Ungerboeck\Client\MarketListsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketListsGetMarketList**](MarketListsApi.md#marketListsGetMarketList) | **GET** /api/v1/MarketLists/{OrgCode}/{Code} | Standard - Get a single Market List by its parameters
[**marketListsGetMarketListList**](MarketListsApi.md#marketListsGetMarketListList) | **GET** /api/v1/MarketLists/{OrgCode} | Standard - Search for Market Lists using OData. Note that this search endpoint does not use OrgCode.


# **marketListsGetMarketList**
> \FomF\Ungerboeck\Client\Model\MarketListsModel marketListsGetMarketList($org_code, $code)

Standard - Get a single Market List by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MarketListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Org code of the Market List
$code = "code_example"; // string | Sequence Number of the Market List

try {
    $result = $apiInstance->marketListsGetMarketList($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketListsApi->marketListsGetMarketList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Org code of the Market List |
 **code** | **string**| Sequence Number of the Market List |

### Return type

[**\FomF\Ungerboeck\Client\Model\MarketListsModel**](../Model/MarketListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketListsGetMarketListList**
> \FomF\Ungerboeck\Client\Model\MarketListsModel marketListsGetMarketListList($org_code, $search)

Standard - Search for Market Lists using OData. Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MarketListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->marketListsGetMarketListList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketListsApi->marketListsGetMarketListList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\MarketListsModel**](../Model/MarketListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

