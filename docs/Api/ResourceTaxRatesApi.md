# FomF\Ungerboeck\Client\ResourceTaxRatesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resourceTaxRatesGetResourceMasterTaxRate**](ResourceTaxRatesApi.md#resourceTaxRatesGetResourceMasterTaxRate) | **GET** /api/v1/ResourceTaxRates/{OrgCode}/{Sequence} | Basic - Retrieve a ResourceMasterTaxRate record
[**resourceTaxRatesGetResourceMasterTaxRateList**](ResourceTaxRatesApi.md#resourceTaxRatesGetResourceMasterTaxRateList) | **GET** /api/v1/ResourceTaxRates/{OrgCode} | Basic - Search for ResourceTaxRates using OData.


# **resourceTaxRatesGetResourceMasterTaxRate**
> \FomF\Ungerboeck\Client\Model\ResourceTaxRatesModel resourceTaxRatesGetResourceMasterTaxRate($org_code, $sequence)

Basic - Retrieve a ResourceMasterTaxRate record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ResourceTaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the ResourceMasterTaxRate entry.
$sequence = 56; // int | The sequence number of the ResourceMasterTaxRate entry.

try {
    $result = $apiInstance->resourceTaxRatesGetResourceMasterTaxRate($org_code, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceTaxRatesApi->resourceTaxRatesGetResourceMasterTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the ResourceMasterTaxRate entry. |
 **sequence** | **int**| The sequence number of the ResourceMasterTaxRate entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ResourceTaxRatesModel**](../Model/ResourceTaxRatesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceTaxRatesGetResourceMasterTaxRateList**
> \FomF\Ungerboeck\Client\Model\ResourceTaxRatesModel resourceTaxRatesGetResourceMasterTaxRateList($org_code, $search)

Basic - Search for ResourceTaxRates using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ResourceTaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->resourceTaxRatesGetResourceMasterTaxRateList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceTaxRatesApi->resourceTaxRatesGetResourceMasterTaxRateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ResourceTaxRatesModel**](../Model/ResourceTaxRatesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

