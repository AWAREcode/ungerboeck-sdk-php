# FomF\Ungerboeck\Client\PriceListApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**priceListDeletePriceList**](PriceListApi.md#priceListDeletePriceList) | **DELETE** /api/v1/PriceList/{OrgCode}/{Code} | Extended (Resources and Price Lists) - Delete a price list
[**priceListGetPriceList**](PriceListApi.md#priceListGetPriceList) | **GET** /api/v1/PriceList/{OrgCode}/{Code} | Basic - Get a single price list entry by its parameters
[**priceListGetPriceListList**](PriceListApi.md#priceListGetPriceListList) | **GET** /api/v1/PriceList/{OrgCode} | Basic - Search for price list using OData.
[**priceListPostPriceList**](PriceListApi.md#priceListPostPriceList) | **POST** /api/v1/PriceList | Extended (Resources and Price Lists) - Add a PriceList
[**priceListPutPriceList**](PriceListApi.md#priceListPutPriceList) | **PUT** /api/v1/PriceList/{OrgCode}/{Code} | Extended (Resources and Price Lists) - Edit a PriceList


# **priceListDeletePriceList**
> priceListDeletePriceList($org_code, $code)

Extended (Resources and Price Lists) - Delete a price list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the PriceList.
$code = "code_example"; // string | The Code of the price list.

try {
    $apiInstance->priceListDeletePriceList($org_code, $code);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListDeletePriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the PriceList. |
 **code** | **string**| The Code of the price list. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceListGetPriceList**
> \FomF\Ungerboeck\Client\Model\PriceListModel priceListGetPriceList($org_code, $code)

Basic - Get a single price list entry by its parameters

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
> \FomF\Ungerboeck\Client\Model\PriceListModel priceListGetPriceListList($org_code, $search)

Basic - Search for price list using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

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
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListModel**](../Model/PriceListModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceListPostPriceList**
> \FomF\Ungerboeck\Client\Model\PriceListModel priceListPostPriceList($data)

Extended (Resources and Price Lists) - Add a PriceList

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\PriceListModel(); // \FomF\Ungerboeck\Client\Model\PriceListModel | (Include in the HTTP Body) A PriceListModel entry to add.

try {
    $result = $apiInstance->priceListPostPriceList($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListPostPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\PriceListModel**](../Model/PriceListModel.md)| (Include in the HTTP Body) A PriceListModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListModel**](../Model/PriceListModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceListPutPriceList**
> \FomF\Ungerboeck\Client\Model\PriceListModel priceListPutPriceList($org_code, $code, $data)

Extended (Resources and Price Lists) - Edit a PriceList

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
$code = "code_example"; // string | The Code of the price list
$data = new \FomF\Ungerboeck\Client\Model\PriceListModel(); // \FomF\Ungerboeck\Client\Model\PriceListModel | (Include in the HTTP Body) A PriceListModel entry to edit.

try {
    $result = $apiInstance->priceListPutPriceList($org_code, $code, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListPutPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the price list. |
 **code** | **string**| The Code of the price list |
 **data** | [**\FomF\Ungerboeck\Client\Model\PriceListModel**](../Model/PriceListModel.md)| (Include in the HTTP Body) A PriceListModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PriceListModel**](../Model/PriceListModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

