# FomF\Ungerboeck\Client\APDemographicsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aPDemographicsGetAPDemographic**](APDemographicsApi.md#aPDemographicsGetAPDemographic) | **GET** /api/v1/APDemographics/{OrgCode}/{Supplier} | Standard - Get a single ap demographic by its parameters
[**aPDemographicsGetAPDemographicList**](APDemographicsApi.md#aPDemographicsGetAPDemographicList) | **GET** /api/v1/APDemographics/{OrgCode} | Standard - Search for ap demographic using OData.


# **aPDemographicsGetAPDemographic**
> \FomF\Ungerboeck\Client\Model\APDemographicsModel aPDemographicsGetAPDemographic($org_code, $supplier)

Standard - Get a single ap demographic by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\APDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the ap demographic.
$supplier = "supplier_example"; // string | The supplier of the ap demographic.

try {
    $result = $apiInstance->aPDemographicsGetAPDemographic($org_code, $supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APDemographicsApi->aPDemographicsGetAPDemographic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the ap demographic. |
 **supplier** | **string**| The supplier of the ap demographic. |

### Return type

[**\FomF\Ungerboeck\Client\Model\APDemographicsModel**](../Model/APDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aPDemographicsGetAPDemographicList**
> \FomF\Ungerboeck\Client\Model\APDemographicsModel aPDemographicsGetAPDemographicList($org_code, $search)

Standard - Search for ap demographic using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\APDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->aPDemographicsGetAPDemographicList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APDemographicsApi->aPDemographicsGetAPDemographicList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\APDemographicsModel**](../Model/APDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

