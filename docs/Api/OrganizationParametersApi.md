# FomF\Ungerboeck\Client\OrganizationParametersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationParametersGetOrganizationParameters**](OrganizationParametersApi.md#organizationParametersGetOrganizationParameters) | **GET** /api/v1/OrganizationParameters/{OrgCode}/{ApplicationCode}/{ParameterCode} | Get an organization parameter by its parameters
[**organizationParametersGetOrganizationParametersList**](OrganizationParametersApi.md#organizationParametersGetOrganizationParametersList) | **GET** /api/v1/OrganizationParameters/{OrgCode} | Search for organization parameters using OData.


# **organizationParametersGetOrganizationParameters**
> \FomF\Ungerboeck\Client\Model\OrganizationParametersModel organizationParametersGetOrganizationParameters($org_code, $application_code, $parameter_code)

Get an organization parameter by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OrganizationParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the organization parameter.
$application_code = "application_code_example"; // string | The application code of the organization parameter.
$parameter_code = "parameter_code_example"; // string | The parameter code of the organization parameter.

try {
    $result = $apiInstance->organizationParametersGetOrganizationParameters($org_code, $application_code, $parameter_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationParametersApi->organizationParametersGetOrganizationParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the organization parameter. |
 **application_code** | **string**| The application code of the organization parameter. |
 **parameter_code** | **string**| The parameter code of the organization parameter. |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrganizationParametersModel**](../Model/OrganizationParametersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationParametersGetOrganizationParametersList**
> \FomF\Ungerboeck\Client\Model\OrganizationParametersModel[] organizationParametersGetOrganizationParametersList($org_code, $search)

Search for organization parameters using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OrganizationParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->organizationParametersGetOrganizationParametersList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationParametersApi->organizationParametersGetOrganizationParametersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrganizationParametersModel[]**](../Model/OrganizationParametersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

