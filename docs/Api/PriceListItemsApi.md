# FomF\Ungerboeck\Client\PriceListItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**priceListItemsGetPriceListItems**](PriceListItemsApi.md#priceListItemsGetPriceListItems) | **GET** /api/v1/PriceListItems/{OrgCode}/{PriceList}/{Sequence} | Get an price list item by its parameters
[**priceListItemsGetPriceListItemsList**](PriceListItemsApi.md#priceListItemsGetPriceListItemsList) | **GET** /api/v1/PriceListItems/{OrgCode} | Search for price list item using OData.


# **priceListItemsGetPriceListItems**
> \FomF\Ungerboeck\Client\Model\PriceListItemsModel priceListItemsGetPriceListItems($org_code, $price_list, $sequence)

Get an price list item by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PriceListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the price list item.
$price_list = "price_list_example"; // string | The code of the price list item.
$sequence = 56; // int | The sequence of the price list item.

try {
    $result = $apiInstance->priceListItemsGetPriceListItems($org_code, $price_list, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListItemsApi->priceListItemsGetPriceListItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the price list item. |
 **price_list** | **string**| The code of the price list item. |
 **sequence** | **int**| The sequence of the price list item. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListItemsModel**](../Model/PriceListItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceListItemsGetPriceListItemsList**
> \FomF\Ungerboeck\Client\Model\PriceListItemsModel[] priceListItemsGetPriceListItemsList($org_code, $search)

Search for price list item using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PriceListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->priceListItemsGetPriceListItemsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListItemsApi->priceListItemsGetPriceListItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListItemsModel[]**](../Model/PriceListItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

