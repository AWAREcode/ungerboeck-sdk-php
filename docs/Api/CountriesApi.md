# FomF\Ungerboeck\Client\CountriesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countriesGetCountries**](CountriesApi.md#countriesGetCountries) | **GET** /api/v1/Countries/{OrgCode}/{Code} | Get an country by its parameters
[**countriesGetCountriesList**](CountriesApi.md#countriesGetCountriesList) | **GET** /api/v1/Countries/{OrgCode} | Search for countries using OData.


# **countriesGetCountries**
> \FomF\Ungerboeck\Client\Model\CountriesModel countriesGetCountries($org_code, $code)

Get an country by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the country.
$code = "code_example"; // string | The code of the country.

try {
    $result = $apiInstance->countriesGetCountries($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesGetCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the country. |
 **code** | **string**| The code of the country. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CountriesModel**](../Model/CountriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countriesGetCountriesList**
> \FomF\Ungerboeck\Client\Model\CountriesModel[] countriesGetCountriesList($org_code, $search)

Search for countries using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->countriesGetCountriesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesGetCountriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CountriesModel[]**](../Model/CountriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

