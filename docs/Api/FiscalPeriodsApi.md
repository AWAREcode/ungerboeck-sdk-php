# FomF\Ungerboeck\Client\FiscalPeriodsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fiscalPeriodsGetFiscalPeriod**](FiscalPeriodsApi.md#fiscalPeriodsGetFiscalPeriod) | **GET** /api/v1/FiscalPeriods/{OrgCode}/{Module}/{Year}/{Period} | Standard - Get a fiscal period by its parameters
[**fiscalPeriodsGetFiscalPeriodList**](FiscalPeriodsApi.md#fiscalPeriodsGetFiscalPeriodList) | **GET** /api/v1/FiscalPeriods/{OrgCode} | Standard - Search for fiscal periods using OData.


# **fiscalPeriodsGetFiscalPeriod**
> \FomF\Ungerboeck\Client\Model\FiscalPeriodsModel fiscalPeriodsGetFiscalPeriod($org_code, $module, $year, $period)

Standard - Get a fiscal period by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FiscalPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the fiscal period.
$module = "module_example"; // string | The module of the fiscal period entry.
$year = 56; // int | The year of the the fiscal period entry.
$period = 56; // int | The period of the the fiscal period entry.

try {
    $result = $apiInstance->fiscalPeriodsGetFiscalPeriod($org_code, $module, $year, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalPeriodsApi->fiscalPeriodsGetFiscalPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the fiscal period. |
 **module** | **string**| The module of the fiscal period entry. |
 **year** | **int**| The year of the the fiscal period entry. |
 **period** | **int**| The period of the the fiscal period entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FiscalPeriodsModel**](../Model/FiscalPeriodsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalPeriodsGetFiscalPeriodList**
> \FomF\Ungerboeck\Client\Model\FiscalPeriodsModel fiscalPeriodsGetFiscalPeriodList($org_code, $search)

Standard - Search for fiscal periods using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FiscalPeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->fiscalPeriodsGetFiscalPeriodList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalPeriodsApi->fiscalPeriodsGetFiscalPeriodList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\FiscalPeriodsModel**](../Model/FiscalPeriodsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

