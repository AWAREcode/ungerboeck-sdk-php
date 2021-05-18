# FomF\Ungerboeck\Client\SpaceSetupsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spaceSetupsDeleteSpaceSetup**](SpaceSetupsApi.md#spaceSetupsDeleteSpaceSetup) | **DELETE** /api/v1/SpaceSetups/{OrgCode}/{Space}/{Code} | Standard - Delete a single space setup by its parameters
[**spaceSetupsGetSpaceSetup**](SpaceSetupsApi.md#spaceSetupsGetSpaceSetup) | **GET** /api/v1/SpaceSetups/{OrgCode}/{Space}/{Code} | Basic - Get a single space setup by its parameters
[**spaceSetupsGetSpaceSetupList**](SpaceSetupsApi.md#spaceSetupsGetSpaceSetupList) | **GET** /api/v1/SpaceSetups/{OrgCode} | Basic - Search for space setups using OData.
[**spaceSetupsPostSpaceSetup**](SpaceSetupsApi.md#spaceSetupsPostSpaceSetup) | **POST** /api/v1/SpaceSetups | Standard - Add a space setup
[**spaceSetupsPutSpaceSetup**](SpaceSetupsApi.md#spaceSetupsPutSpaceSetup) | **PUT** /api/v1/SpaceSetups/{OrgCode}/{Space}/{Code} | Standard - Edit a space setup


# **spaceSetupsDeleteSpaceSetup**
> spaceSetupsDeleteSpaceSetup($org_code, $space, $code)

Standard - Delete a single space setup by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceSetupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space setup.
$space = "space_example"; // string | The space code for the space the space setup/feature is associated with.
$code = "code_example"; // string | The setup/feature ID for the setup/feature the space setup/feature is associated with.

try {
    $apiInstance->spaceSetupsDeleteSpaceSetup($org_code, $space, $code);
} catch (Exception $e) {
    echo 'Exception when calling SpaceSetupsApi->spaceSetupsDeleteSpaceSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space setup. |
 **space** | **string**| The space code for the space the space setup/feature is associated with. |
 **code** | **string**| The setup/feature ID for the setup/feature the space setup/feature is associated with. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceSetupsGetSpaceSetup**
> \FomF\Ungerboeck\Client\Model\SpaceSetupsModel spaceSetupsGetSpaceSetup($org_code, $space, $code)

Basic - Get a single space setup by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceSetupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space setup.
$space = "space_example"; // string | The space code for the space the space setup/feature is associated with.
$code = "code_example"; // string | The setup/feature ID for the setup/feature the space setup/feature is associated with.

try {
    $result = $apiInstance->spaceSetupsGetSpaceSetup($org_code, $space, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceSetupsApi->spaceSetupsGetSpaceSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space setup. |
 **space** | **string**| The space code for the space the space setup/feature is associated with. |
 **code** | **string**| The setup/feature ID for the setup/feature the space setup/feature is associated with. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceSetupsModel**](../Model/SpaceSetupsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceSetupsGetSpaceSetupList**
> \FomF\Ungerboeck\Client\Model\SpaceSetupsModel spaceSetupsGetSpaceSetupList($org_code, $search)

Basic - Search for space setups using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceSetupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->spaceSetupsGetSpaceSetupList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceSetupsApi->spaceSetupsGetSpaceSetupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceSetupsModel**](../Model/SpaceSetupsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceSetupsPostSpaceSetup**
> \FomF\Ungerboeck\Client\Model\SpaceSetupsModel spaceSetupsPostSpaceSetup($data)

Standard - Add a space setup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceSetupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\SpaceSetupsModel(); // \FomF\Ungerboeck\Client\Model\SpaceSetupsModel | (Include in the HTTP Body) A SpaceSetupsModel to add.

try {
    $result = $apiInstance->spaceSetupsPostSpaceSetup($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceSetupsApi->spaceSetupsPostSpaceSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\SpaceSetupsModel**](../Model/SpaceSetupsModel.md)| (Include in the HTTP Body) A SpaceSetupsModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceSetupsModel**](../Model/SpaceSetupsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceSetupsPutSpaceSetup**
> \FomF\Ungerboeck\Client\Model\SpaceSetupsModel spaceSetupsPutSpaceSetup($org_code, $space, $code, $data)

Standard - Edit a space setup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceSetupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space setup.
$space = "space_example"; // string | The space code for the space the space setup/feature is associated with.
$code = "code_example"; // string | The setup/feature ID for the setup/feature the space setup/feature is associated with.
$data = new \FomF\Ungerboeck\Client\Model\SpaceSetupsModel(); // \FomF\Ungerboeck\Client\Model\SpaceSetupsModel | (Include in the HTTP Body) A SpaceSetupsModel to edit.

try {
    $result = $apiInstance->spaceSetupsPutSpaceSetup($org_code, $space, $code, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceSetupsApi->spaceSetupsPutSpaceSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space setup. |
 **space** | **string**| The space code for the space the space setup/feature is associated with. |
 **code** | **string**| The setup/feature ID for the setup/feature the space setup/feature is associated with. |
 **data** | [**\FomF\Ungerboeck\Client\Model\SpaceSetupsModel**](../Model/SpaceSetupsModel.md)| (Include in the HTTP Body) A SpaceSetupsModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceSetupsModel**](../Model/SpaceSetupsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

