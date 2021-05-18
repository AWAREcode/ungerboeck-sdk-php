# FomF\Ungerboeck\Client\OrganizationParametersApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationParametersGetOrganizationParameter**](OrganizationParametersApi.md#organizationParametersGetOrganizationParameter) | **GET** /api/v1/OrganizationParameters/{OrgCode}/{ApplicationCode}/{ParameterCode} | Standard - Get a single organization parameter by its parameters
[**organizationParametersGetOrganizationParameterList**](OrganizationParametersApi.md#organizationParametersGetOrganizationParameterList) | **GET** /api/v1/OrganizationParameters/{OrgCode} | Standard - Search for organization parameters using OData.


# **organizationParametersGetOrganizationParameter**
> \FomF\Ungerboeck\Client\Model\OrganizationParametersModel organizationParametersGetOrganizationParameter($org_code, $application_code, $parameter_code)

Standard - Get a single organization parameter by its parameters

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
    $result = $apiInstance->organizationParametersGetOrganizationParameter($org_code, $application_code, $parameter_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationParametersApi->organizationParametersGetOrganizationParameter: ', $e->getMessage(), PHP_EOL;
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

# **organizationParametersGetOrganizationParameterList**
> \FomF\Ungerboeck\Client\Model\OrganizationParametersModel organizationParametersGetOrganizationParameterList($org_code, $search)

Standard - Search for organization parameters using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->organizationParametersGetOrganizationParameterList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationParametersApi->organizationParametersGetOrganizationParameterList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\OrganizationParametersModel**](../Model/OrganizationParametersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

