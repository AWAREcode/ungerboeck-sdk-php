# FomF\Ungerboeck\Client\CountriesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countriesGetCountry**](CountriesApi.md#countriesGetCountry) | **GET** /api/v1/Countries/{OrgCode}/{Code} | Basic - Get a single country by its parameters
[**countriesGetCountryList**](CountriesApi.md#countriesGetCountryList) | **GET** /api/v1/Countries/{OrgCode} | Basic - Search for countries using OData.


# **countriesGetCountry**
> \FomF\Ungerboeck\Client\Model\CountriesModel countriesGetCountry($org_code, $code)

Basic - Get a single country by its parameters

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
$code = "code_example"; // string | The code of the country.  Note that since the '\\*' character is one of the reserved characters for a URL, the default code (\\*\\*\\*) can't be used here.  Instead, use it as a query string parameter: \".../api/v1/countries/10?code=***\"

try {
    $result = $apiInstance->countriesGetCountry($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesGetCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the country. |
 **code** | **string**| The code of the country.  Note that since the &#39;\\*&#39; character is one of the reserved characters for a URL, the default code (\\*\\*\\*) can&#39;t be used here.  Instead, use it as a query string parameter: \&quot;.../api/v1/countries/10?code&#x3D;***\&quot; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CountriesModel**](../Model/CountriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countriesGetCountryList**
> \FomF\Ungerboeck\Client\Model\CountriesModel countriesGetCountryList($org_code, $search)

Basic - Search for countries using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->countriesGetCountryList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesGetCountryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CountriesModel**](../Model/CountriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

