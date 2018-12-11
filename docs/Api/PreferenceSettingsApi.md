# FomF\Ungerboeck\Client\PreferenceSettingsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**preferenceSettingsDeletePreferenceSettings**](PreferenceSettingsApi.md#preferenceSettingsDeletePreferenceSettings) | **DELETE** /api/v1/PreferenceSettings/{OrgCode}/{ID} | Delete a preference setting
[**preferenceSettingsGetPreferenceSettings**](PreferenceSettingsApi.md#preferenceSettingsGetPreferenceSettings) | **GET** /api/v1/PreferenceSettings/{OrgCode}/{ID} | Get a preference setting by its parameters
[**preferenceSettingsGetPreferenceSettingsList**](PreferenceSettingsApi.md#preferenceSettingsGetPreferenceSettingsList) | **GET** /api/v1/PreferenceSettings/{OrgCode} | Search for preference settings using OData.
[**preferenceSettingsPostPreferenceSettings**](PreferenceSettingsApi.md#preferenceSettingsPostPreferenceSettings) | **POST** /api/v1/PreferenceSettings | Add a preference setting
[**preferenceSettingsPutPreferenceSettings**](PreferenceSettingsApi.md#preferenceSettingsPutPreferenceSettings) | **PUT** /api/v1/PreferenceSettings/{OrgCode}/{ID} | Edit a preference setting


# **preferenceSettingsDeletePreferenceSettings**
> preferenceSettingsDeletePreferenceSettings($org_code, $id)

Delete a preference setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PreferenceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the preference setting.
$id = 56; // int | The ID of the preference setting.

try {
    $apiInstance->preferenceSettingsDeletePreferenceSettings($org_code, $id);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsDeletePreferenceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the preference setting. |
 **id** | **int**| The ID of the preference setting. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preferenceSettingsGetPreferenceSettings**
> \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel preferenceSettingsGetPreferenceSettings($org_code, $id)

Get a preference setting by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PreferenceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the preference setting.
$id = 56; // int | The ID of the preference setting.

try {
    $result = $apiInstance->preferenceSettingsGetPreferenceSettings($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsGetPreferenceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the preference setting. |
 **id** | **int**| The ID of the preference setting. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PreferenceSettingsModel**](../Model/PreferenceSettingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preferenceSettingsGetPreferenceSettingsList**
> \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel[] preferenceSettingsGetPreferenceSettingsList($org_code, $search)

Search for preference settings using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PreferenceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->preferenceSettingsGetPreferenceSettingsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsGetPreferenceSettingsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\PreferenceSettingsModel[]**](../Model/PreferenceSettingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preferenceSettingsPostPreferenceSettings**
> \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel preferenceSettingsPostPreferenceSettings($data)

Add a preference setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PreferenceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel(); // \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel | (Include in the HTTP Body) An PreferenceSettingsModel to add.

try {
    $result = $apiInstance->preferenceSettingsPostPreferenceSettings($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsPostPreferenceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\PreferenceSettingsModel**](../Model/PreferenceSettingsModel.md)| (Include in the HTTP Body) An PreferenceSettingsModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PreferenceSettingsModel**](../Model/PreferenceSettingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preferenceSettingsPutPreferenceSettings**
> \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel preferenceSettingsPutPreferenceSettings($org_code, $id, $data)

Edit a preference setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PreferenceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the preference setting.
$id = 56; // int | The ID of the preference setting.
$data = new \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel(); // \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel | (Include in the HTTP Body) An PreferenceSettingsModel to edit.

try {
    $result = $apiInstance->preferenceSettingsPutPreferenceSettings($org_code, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsPutPreferenceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the preference setting. |
 **id** | **int**| The ID of the preference setting. |
 **data** | [**\FomF\Ungerboeck\Client\Model\PreferenceSettingsModel**](../Model/PreferenceSettingsModel.md)| (Include in the HTTP Body) An PreferenceSettingsModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PreferenceSettingsModel**](../Model/PreferenceSettingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

