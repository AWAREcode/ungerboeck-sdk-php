# FomF\Ungerboeck\Client\ARDemographicsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aRDemographicsGetARDemographics**](ARDemographicsApi.md#aRDemographicsGetARDemographics) | **GET** /api/v1/ARDemographics/{OrgCode}/{Account} | Get a AR demographic entry by its parameters
[**aRDemographicsGetARDemographicsList**](ARDemographicsApi.md#aRDemographicsGetARDemographicsList) | **GET** /api/v1/ARDemographics/{OrgCode} | Search for AR demographics using OData.


# **aRDemographicsGetARDemographics**
> \FomF\Ungerboeck\Client\Model\ARDemographicsModel aRDemographicsGetARDemographics($org_code, $account)

Get a AR demographic entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ARDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the AR demographic entry.
$account = "account_example"; // string | The account code of the AR demographic entry.

try {
    $result = $apiInstance->aRDemographicsGetARDemographics($org_code, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ARDemographicsApi->aRDemographicsGetARDemographics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the AR demographic entry. |
 **account** | **string**| The account code of the AR demographic entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ARDemographicsModel**](../Model/ARDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aRDemographicsGetARDemographicsList**
> \FomF\Ungerboeck\Client\Model\ARDemographicsModel[] aRDemographicsGetARDemographicsList($org_code, $search)

Search for AR demographics using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ARDemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->aRDemographicsGetARDemographicsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ARDemographicsApi->aRDemographicsGetARDemographicsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ARDemographicsModel[]**](../Model/ARDemographicsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

