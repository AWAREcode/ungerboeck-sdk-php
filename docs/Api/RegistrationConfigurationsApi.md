# FomF\Ungerboeck\Client\RegistrationConfigurationsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrationConfigurationsDeleteRegistrationConfiguration**](RegistrationConfigurationsApi.md#registrationConfigurationsDeleteRegistrationConfiguration) | **DELETE** /api/v1/RegistrationConfigurations/{OrgCode}/{ConfigurationCode} | Standard - Delete a registration configuration entry
[**registrationConfigurationsGetRegistrationConfiguration**](RegistrationConfigurationsApi.md#registrationConfigurationsGetRegistrationConfiguration) | **GET** /api/v1/RegistrationConfigurations/{OrgCode}/{ConfigurationCode} | Standard - Get a single registration configuration by its parameters
[**registrationConfigurationsGetRegistrationConfigurationList**](RegistrationConfigurationsApi.md#registrationConfigurationsGetRegistrationConfigurationList) | **GET** /api/v1/RegistrationConfigurations/{OrgCode} | Standard - Search for registration configuration using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**registrationConfigurationsPostRegistrationConfiguration**](RegistrationConfigurationsApi.md#registrationConfigurationsPostRegistrationConfiguration) | **POST** /api/v1/RegistrationConfigurations | Standard - Add a registration configuration
[**registrationConfigurationsPutRegistrationConfiguration**](RegistrationConfigurationsApi.md#registrationConfigurationsPutRegistrationConfiguration) | **PUT** /api/v1/RegistrationConfigurations/{OrgCode}/{ConfigurationCode} | Standard - Edit a registration configuration


# **registrationConfigurationsDeleteRegistrationConfiguration**
> registrationConfigurationsDeleteRegistrationConfiguration($org_code, $configuration_code)

Standard - Delete a registration configuration entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code
$configuration_code = "configuration_code_example"; // string | Code value for the configuration header.

try {
    $apiInstance->registrationConfigurationsDeleteRegistrationConfiguration($org_code, $configuration_code);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationConfigurationsApi->registrationConfigurationsDeleteRegistrationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code |
 **configuration_code** | **string**| Code value for the configuration header. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationConfigurationsGetRegistrationConfiguration**
> \FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel registrationConfigurationsGetRegistrationConfiguration($org_code, $configuration_code)

Standard - Get a single registration configuration by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the registration order.
$configuration_code = "configuration_code_example"; // string | Code value for the configuration header.

try {
    $result = $apiInstance->registrationConfigurationsGetRegistrationConfiguration($org_code, $configuration_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationConfigurationsApi->registrationConfigurationsGetRegistrationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the registration order. |
 **configuration_code** | **string**| Code value for the configuration header. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel**](../Model/RegistrationConfigurationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationConfigurationsGetRegistrationConfigurationList**
> \FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel registrationConfigurationsGetRegistrationConfigurationList($org_code, $search)

Standard - Search for registration configuration using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->registrationConfigurationsGetRegistrationConfigurationList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationConfigurationsApi->registrationConfigurationsGetRegistrationConfigurationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel**](../Model/RegistrationConfigurationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationConfigurationsPostRegistrationConfiguration**
> \FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel registrationConfigurationsPostRegistrationConfiguration($data)

Standard - Add a registration configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel(); // \FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel | (Include in the HTTP Body) A RegistrationConfigurationsModel entry to add.

try {
    $result = $apiInstance->registrationConfigurationsPostRegistrationConfiguration($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationConfigurationsApi->registrationConfigurationsPostRegistrationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel**](../Model/RegistrationConfigurationsModel.md)| (Include in the HTTP Body) A RegistrationConfigurationsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel**](../Model/RegistrationConfigurationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationConfigurationsPutRegistrationConfiguration**
> \FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel registrationConfigurationsPutRegistrationConfiguration($org_code, $configuration_code, $data)

Standard - Edit a registration configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the registration order.
$configuration_code = "configuration_code_example"; // string | Code value for the configuration header.
$data = new \FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel(); // \FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel | (Include in the HTTP Body) A RegistrationConfigurationsModel entry to edit.

try {
    $result = $apiInstance->registrationConfigurationsPutRegistrationConfiguration($org_code, $configuration_code, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationConfigurationsApi->registrationConfigurationsPutRegistrationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the registration order. |
 **configuration_code** | **string**| Code value for the configuration header. |
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel**](../Model/RegistrationConfigurationsModel.md)| (Include in the HTTP Body) A RegistrationConfigurationsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationConfigurationsModel**](../Model/RegistrationConfigurationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

