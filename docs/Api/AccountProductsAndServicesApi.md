# FomF\Ungerboeck\Client\AccountProductsAndServicesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountProductsAndServicesDeleteAccountProductService**](AccountProductsAndServicesApi.md#accountProductsAndServicesDeleteAccountProductService) | **DELETE** /api/v1/AccountProductsAndServices/{OrgCode}/{AccountCode}/{ProductServiceCode} | Standard - Remove a product/service from an account
[**accountProductsAndServicesGetAccountProductAndServiceList**](AccountProductsAndServicesApi.md#accountProductsAndServicesGetAccountProductAndServiceList) | **GET** /api/v1/AccountProductsAndServices/{OrgCode} | Basic - Search for account products and services using OData.
[**accountProductsAndServicesGetAccountProductService**](AccountProductsAndServicesApi.md#accountProductsAndServicesGetAccountProductService) | **GET** /api/v1/AccountProductsAndServices/{OrgCode}/{AccountCode}/{ProductServiceCode} | Basic - Get a single product/service on an account by its parameters
[**accountProductsAndServicesPostAccountProductService**](AccountProductsAndServicesApi.md#accountProductsAndServicesPostAccountProductService) | **POST** /api/v1/AccountProductsAndServices | Standard - Add a product/service to an account


# **accountProductsAndServicesDeleteAccountProductService**
> accountProductsAndServicesDeleteAccountProductService($org_code, $account_code, $product_service_code)

Standard - Remove a product/service from an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the account product/service.
$account_code = "account_code_example"; // string | The Account Code of the account product/service.
$product_service_code = "product_service_code_example"; // string | The Product/Service Code of the account product/service.

try {
    $apiInstance->accountProductsAndServicesDeleteAccountProductService($org_code, $account_code, $product_service_code);
} catch (Exception $e) {
    echo 'Exception when calling AccountProductsAndServicesApi->accountProductsAndServicesDeleteAccountProductService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the account product/service. |
 **account_code** | **string**| The Account Code of the account product/service. |
 **product_service_code** | **string**| The Product/Service Code of the account product/service. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountProductsAndServicesGetAccountProductAndServiceList**
> \FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel accountProductsAndServicesGetAccountProductAndServiceList($org_code, $search)

Basic - Search for account products and services using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->accountProductsAndServicesGetAccountProductAndServiceList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountProductsAndServicesApi->accountProductsAndServicesGetAccountProductAndServiceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel**](../Model/AccountsProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountProductsAndServicesGetAccountProductService**
> \FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel accountProductsAndServicesGetAccountProductService($org_code, $account_code, $product_service_code)

Basic - Get a single product/service on an account by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The Organization Code of the account product/service.
$account_code = "account_code_example"; // string | The Account Code of the account product/service.
$product_service_code = "product_service_code_example"; // string | The Product/Service Code of the account product/service.

try {
    $result = $apiInstance->accountProductsAndServicesGetAccountProductService($org_code, $account_code, $product_service_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountProductsAndServicesApi->accountProductsAndServicesGetAccountProductService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The Organization Code of the account product/service. |
 **account_code** | **string**| The Account Code of the account product/service. |
 **product_service_code** | **string**| The Product/Service Code of the account product/service. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel**](../Model/AccountsProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountProductsAndServicesPostAccountProductService**
> \FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel accountProductsAndServicesPostAccountProductService($data)

Standard - Add a product/service to an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AccountProductsAndServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel(); // \FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel | (Include in the HTTP Body) a AccountsProductsAndServicesModel to add.

try {
    $result = $apiInstance->accountProductsAndServicesPostAccountProductService($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountProductsAndServicesApi->accountProductsAndServicesPostAccountProductService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel**](../Model/AccountsProductsAndServicesModel.md)| (Include in the HTTP Body) a AccountsProductsAndServicesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AccountsProductsAndServicesModel**](../Model/AccountsProductsAndServicesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

