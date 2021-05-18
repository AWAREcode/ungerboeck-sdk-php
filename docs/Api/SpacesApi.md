# FomF\Ungerboeck\Client\SpacesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spacesGetSpace**](SpacesApi.md#spacesGetSpace) | **GET** /api/v1/Spaces/{OrgCode}/{Code} | Basic - Get a single space by its parameters
[**spacesGetSpaceList**](SpacesApi.md#spacesGetSpaceList) | **GET** /api/v1/Spaces/{OrgCode} | Basic - Search for space using OData.
[**spacesPostSpace**](SpacesApi.md#spacesPostSpace) | **POST** /api/v1/Spaces | Standard - Add a space
[**spacesPutSpace**](SpacesApi.md#spacesPutSpace) | **PUT** /api/v1/Spaces/{OrgCode}/{Code} | Standard - Edit a space


# **spacesGetSpace**
> \FomF\Ungerboeck\Client\Model\SpacesModel spacesGetSpace($org_code, $code)

Basic - Get a single space by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space.
$code = "code_example"; // string | The code of the space.

try {
    $result = $apiInstance->spacesGetSpace($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spacesGetSpace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space. |
 **code** | **string**| The code of the space. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpacesModel**](../Model/SpacesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spacesGetSpaceList**
> \FomF\Ungerboeck\Client\Model\SpacesModel spacesGetSpaceList($org_code, $search)

Basic - Search for space using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->spacesGetSpaceList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spacesGetSpaceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpacesModel**](../Model/SpacesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spacesPostSpace**
> \FomF\Ungerboeck\Client\Model\SpacesModel spacesPostSpace($data)

Standard - Add a space

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\SpacesModel(); // \FomF\Ungerboeck\Client\Model\SpacesModel | (Include in the HTTP Body) A SpacesModel to add.

try {
    $result = $apiInstance->spacesPostSpace($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spacesPostSpace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\SpacesModel**](../Model/SpacesModel.md)| (Include in the HTTP Body) A SpacesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpacesModel**](../Model/SpacesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spacesPutSpace**
> \FomF\Ungerboeck\Client\Model\SpacesModel spacesPutSpace($org_code, $code, $data)

Standard - Edit a space

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space.
$code = "code_example"; // string | The code of the space.
$data = new \FomF\Ungerboeck\Client\Model\SpacesModel(); // \FomF\Ungerboeck\Client\Model\SpacesModel | (Include in the HTTP Body) A SpacesModel to edit.

try {
    $result = $apiInstance->spacesPutSpace($org_code, $code, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spacesPutSpace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space. |
 **code** | **string**| The code of the space. |
 **data** | [**\FomF\Ungerboeck\Client\Model\SpacesModel**](../Model/SpacesModel.md)| (Include in the HTTP Body) A SpacesModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpacesModel**](../Model/SpacesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

