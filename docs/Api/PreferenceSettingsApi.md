# FomF\Ungerboeck\Client\PreferenceSettingsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**preferenceSettingsDeletePreferenceSettings**](PreferenceSettingsApi.md#preferenceSettingsDeletePreferenceSettings) | **DELETE** /api/v1/PreferenceSettings/{OrgCode}/{ID} | Standard - Delete a preference setting
[**preferenceSettingsGetPreferenceSetting**](PreferenceSettingsApi.md#preferenceSettingsGetPreferenceSetting) | **GET** /api/v1/PreferenceSettings/{OrgCode}/{ID} | Basic - Get a single preference setting by its parameters
[**preferenceSettingsGetPreferenceSettingList**](PreferenceSettingsApi.md#preferenceSettingsGetPreferenceSettingList) | **GET** /api/v1/PreferenceSettings/{OrgCode} | Basic - Search for preference settings using OData.
[**preferenceSettingsPostPreferenceSetting**](PreferenceSettingsApi.md#preferenceSettingsPostPreferenceSetting) | **POST** /api/v1/PreferenceSettings | Standard - Add a preference setting
[**preferenceSettingsPutPreferenceSetting**](PreferenceSettingsApi.md#preferenceSettingsPutPreferenceSetting) | **PUT** /api/v1/PreferenceSettings/{OrgCode}/{ID} | Standard - Edit a preference setting


# **preferenceSettingsDeletePreferenceSettings**
> preferenceSettingsDeletePreferenceSettings($org_code, $id)

Standard - Delete a preference setting

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

# **preferenceSettingsGetPreferenceSetting**
> \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel preferenceSettingsGetPreferenceSetting($org_code, $id)

Basic - Get a single preference setting by its parameters

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
    $result = $apiInstance->preferenceSettingsGetPreferenceSetting($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsGetPreferenceSetting: ', $e->getMessage(), PHP_EOL;
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

# **preferenceSettingsGetPreferenceSettingList**
> \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel preferenceSettingsGetPreferenceSettingList($org_code, $search)

Basic - Search for preference settings using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->preferenceSettingsGetPreferenceSettingList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsGetPreferenceSettingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PreferenceSettingsModel**](../Model/PreferenceSettingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preferenceSettingsPostPreferenceSetting**
> \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel preferenceSettingsPostPreferenceSetting($data)

Standard - Add a preference setting

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
    $result = $apiInstance->preferenceSettingsPostPreferenceSetting($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsPostPreferenceSetting: ', $e->getMessage(), PHP_EOL;
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

# **preferenceSettingsPutPreferenceSetting**
> \FomF\Ungerboeck\Client\Model\PreferenceSettingsModel preferenceSettingsPutPreferenceSetting($org_code, $id, $data)

Standard - Edit a preference setting

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
    $result = $apiInstance->preferenceSettingsPutPreferenceSetting($org_code, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreferenceSettingsApi->preferenceSettingsPutPreferenceSetting: ', $e->getMessage(), PHP_EOL;
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

