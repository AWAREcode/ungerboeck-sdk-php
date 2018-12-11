# FomF\Ungerboeck\Client\APDemographicsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aPDemographicsGetAPDemographics**](APDemographicsApi.md#aPDemographicsGetAPDemographics) | **GET** /api/v1/APDemographics/{OrgCode}/{Supplier} | Get a ap demographic by its parameters
[**aPDemographicsGetAPDemographicsList**](APDemographicsApi.md#aPDemographicsGetAPDemographicsList) | **GET** /api/v1/APDemographics/{OrgCode} | Search for ap demographic using OData.


# **aPDemographicsGetAPDemographics**
> \FomF\Ungerboeck\Client\Model\APDemographicsModel aPDemographicsGetAPDemographics($org_code, $supplier)

Get a ap demographic by its parameters

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
    $result = $apiInstance->aPDemographicsGetAPDemographics($org_code, $supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APDemographicsApi->aPDemographicsGetAPDemographics: ', $e->getMessage(), PHP_EOL;
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

# **aPDemographicsGetAPDemographicsList**
> \FomF\Ungerboeck\Client\Model\APDemographicsModel[] aPDemographicsGetAPDemographicsList($org_code, $search)

Search for ap demographic using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->aPDemographicsGetAPDemographicsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APDemographicsApi->aPDemographicsGetAPDemographicsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\APDemographicsModel[]**](../Model/APDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

