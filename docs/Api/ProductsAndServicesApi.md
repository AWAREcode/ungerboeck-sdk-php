# FomF\Ungerboeck\Client\ProductsAndServicesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsAndServicesGetProductAndServiceList**](ProductsAndServicesApi.md#productsAndServicesGetProductAndServiceList) | **GET** /api/v1/ProductsAndServices/{OrgCode} | Basic - Search for products and services using OData.
[**productsAndServicesGetProductService**](ProductsAndServicesApi.md#productsAndServicesGetProductService) | **GET** /api/v1/ProductsAndServices/{OrgCode}/{Code} | Basic - Get a single product or a service by its parameters


# **productsAndServicesGetProductAndServiceList**
> \FomF\Ungerboeck\Client\Model\ProductsAndServicesModel productsAndServicesGetProductAndServiceList($org_code, $search)

Basic - Search for products and services using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->productsAndServicesGetProductAndServiceList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsAndServicesApi->productsAndServicesGetProductAndServiceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ProductsAndServicesModel**](../Model/ProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsAndServicesGetProductService**
> \FomF\Ungerboeck\Client\Model\ProductsAndServicesModel productsAndServicesGetProductService($org_code, $code)

Basic - Get a single product or a service by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the product or service.
$code = "code_example"; // string | The code of the product or service.

try {
    $result = $apiInstance->productsAndServicesGetProductService($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsAndServicesApi->productsAndServicesGetProductService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the product or service. |
 **code** | **string**| The code of the product or service. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ProductsAndServicesModel**](../Model/ProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

