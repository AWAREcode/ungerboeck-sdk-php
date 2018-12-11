# FomF\Ungerboeck\Client\PriceListApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**priceListGetPriceList**](PriceListApi.md#priceListGetPriceList) | **GET** /api/v1/PriceList/{OrgCode}/{Code} | Get an price list by its parameters
[**priceListGetPriceListList**](PriceListApi.md#priceListGetPriceListList) | **GET** /api/v1/PriceList/{OrgCode} | Search for price list using OData.


# **priceListGetPriceList**
> \FomF\Ungerboeck\Client\Model\PriceListModel priceListGetPriceList($org_code, $code)

Get an price list by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the price list.
$code = "code_example"; // string | The Code of the price list.

try {
    $result = $apiInstance->priceListGetPriceList($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListGetPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the price list. |
 **code** | **string**| The Code of the price list. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListModel**](../Model/PriceListModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceListGetPriceListList**
> \FomF\Ungerboeck\Client\Model\PriceListModel[] priceListGetPriceListList($org_code, $search)

Search for price list using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->priceListGetPriceListList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListGetPriceListList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListModel[]**](../Model/PriceListModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

