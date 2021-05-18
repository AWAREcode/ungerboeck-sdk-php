# FomF\Ungerboeck\Client\PriceListItemsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**priceListItemsDeletePriceListItem**](PriceListItemsApi.md#priceListItemsDeletePriceListItem) | **DELETE** /api/v1/PriceListItems/{OrgCode}/{PriceList}/{Sequence} | Extended (Resources and Price Lists) - Delete a price list item from a price list
[**priceListItemsGetPriceListItem**](PriceListItemsApi.md#priceListItemsGetPriceListItem) | **GET** /api/v1/PriceListItems/{OrgCode}/{PriceList}/{Sequence} | Basic - Get a single price list item by its parameters
[**priceListItemsGetPriceListItemList**](PriceListItemsApi.md#priceListItemsGetPriceListItemList) | **GET** /api/v1/PriceListItems/{OrgCode} | Basic - Search for price list item using OData.
[**priceListItemsPostPriceListItem**](PriceListItemsApi.md#priceListItemsPostPriceListItem) | **POST** /api/v1/PriceListItems | Extended (Resources and Price Lists) - Add a PriceListItem
[**priceListItemsPutPriceListItem**](PriceListItemsApi.md#priceListItemsPutPriceListItem) | **PUT** /api/v1/PriceListItems/{OrgCode}/{PriceList}/{Sequence} | Extended (Resources and Price Lists) - Edit a PriceListItem


# **priceListItemsDeletePriceListItem**
> priceListItemsDeletePriceListItem($org_code, $price_list, $sequence)

Extended (Resources and Price Lists) - Delete a price list item from a price list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PriceListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Service order item.
$price_list = "price_list_example"; // string | The name of the price list.
$sequence = 56; // int | The sequence of the price list item.

try {
    $apiInstance->priceListItemsDeletePriceListItem($org_code, $price_list, $sequence);
} catch (Exception $e) {
    echo 'Exception when calling PriceListItemsApi->priceListItemsDeletePriceListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Service order item. |
 **price_list** | **string**| The name of the price list. |
 **sequence** | **int**| The sequence of the price list item. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceListItemsGetPriceListItem**
> \FomF\Ungerboeck\Client\Model\PriceListItemsModel priceListItemsGetPriceListItem($org_code, $price_list, $sequence)

Basic - Get a single price list item by its parameters

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
    $result = $apiInstance->priceListItemsGetPriceListItem($org_code, $price_list, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListItemsApi->priceListItemsGetPriceListItem: ', $e->getMessage(), PHP_EOL;
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

# **priceListItemsGetPriceListItemList**
> \FomF\Ungerboeck\Client\Model\PriceListItemsModel priceListItemsGetPriceListItemList($org_code, $search)

Basic - Search for price list item using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->priceListItemsGetPriceListItemList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListItemsApi->priceListItemsGetPriceListItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListItemsModel**](../Model/PriceListItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceListItemsPostPriceListItem**
> \FomF\Ungerboeck\Client\Model\PriceListItemsModel priceListItemsPostPriceListItem($data)

Extended (Resources and Price Lists) - Add a PriceListItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PriceListItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\PriceListItemsModel(); // \FomF\Ungerboeck\Client\Model\PriceListItemsModel | (Include in the HTTP Body) A PriceListItemsModel entry to add.

try {
    $result = $apiInstance->priceListItemsPostPriceListItem($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListItemsApi->priceListItemsPostPriceListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\PriceListItemsModel**](../Model/PriceListItemsModel.md)| (Include in the HTTP Body) A PriceListItemsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListItemsModel**](../Model/PriceListItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceListItemsPutPriceListItem**
> \FomF\Ungerboeck\Client\Model\PriceListItemsModel priceListItemsPutPriceListItem($org_code, $price_list, $sequence, $data)

Extended (Resources and Price Lists) - Edit a PriceListItem

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
$price_list = "price_list_example"; // string | The name of the price list
$sequence = 56; // int | The sequence of the price list item
$data = new \FomF\Ungerboeck\Client\Model\PriceListItemsModel(); // \FomF\Ungerboeck\Client\Model\PriceListItemsModel | (Include in the HTTP Body) A PriceListItemsModel entry to edit.

try {
    $result = $apiInstance->priceListItemsPutPriceListItem($org_code, $price_list, $sequence, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListItemsApi->priceListItemsPutPriceListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the price list item. |
 **price_list** | **string**| The name of the price list |
 **sequence** | **int**| The sequence of the price list item |
 **data** | [**\FomF\Ungerboeck\Client\Model\PriceListItemsModel**](../Model/PriceListItemsModel.md)| (Include in the HTTP Body) A PriceListItemsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListItemsModel**](../Model/PriceListItemsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

