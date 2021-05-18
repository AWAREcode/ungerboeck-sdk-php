# FomF\Ungerboeck\Client\FiscalYearsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fiscalYearsGetFiscalYear**](FiscalYearsApi.md#fiscalYearsGetFiscalYear) | **GET** /api/v1/FiscalYears/{OrgCode}/{Year} | Standard - Get a fiscal year by its parameters
[**fiscalYearsGetFiscalYearList**](FiscalYearsApi.md#fiscalYearsGetFiscalYearList) | **GET** /api/v1/FiscalYears/{OrgCode} | Standard - Search for fiscal years using OData.


# **fiscalYearsGetFiscalYear**
> \FomF\Ungerboeck\Client\Model\FiscalYearsModel fiscalYearsGetFiscalYear($org_code, $year)

Standard - Get a fiscal year by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FiscalYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the fiscal year.
$year = 56; // int | The year of the the fiscal year entry.

try {
    $result = $apiInstance->fiscalYearsGetFiscalYear($org_code, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsApi->fiscalYearsGetFiscalYear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the fiscal year. |
 **year** | **int**| The year of the the fiscal year entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\FiscalYearsModel**](../Model/FiscalYearsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fiscalYearsGetFiscalYearList**
> \FomF\Ungerboeck\Client\Model\FiscalYearsModel fiscalYearsGetFiscalYearList($org_code, $search)

Standard - Search for fiscal years using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\FiscalYearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->fiscalYearsGetFiscalYearList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearsApi->fiscalYearsGetFiscalYearList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\FiscalYearsModel**](../Model/FiscalYearsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

