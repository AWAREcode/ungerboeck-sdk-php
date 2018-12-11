# FomF\Ungerboeck\Client\SpacesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spacesGetSpaces**](SpacesApi.md#spacesGetSpaces) | **GET** /api/v1/Spaces/{OrgCode}/{Code} | Get a space by its parameters
[**spacesGetSpacesList**](SpacesApi.md#spacesGetSpacesList) | **GET** /api/v1/Spaces/{OrgCode} | Search for space using OData.
[**spacesPostSpaces**](SpacesApi.md#spacesPostSpaces) | **POST** /api/v1/Spaces | Add a space
[**spacesPutSpaces**](SpacesApi.md#spacesPutSpaces) | **PUT** /api/v1/Spaces/{OrgCode}/{Code} | Edit a space


# **spacesGetSpaces**
> \FomF\Ungerboeck\Client\Model\SpacesModel spacesGetSpaces($org_code, $code)

Get a space by its parameters

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
    $result = $apiInstance->spacesGetSpaces($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spacesGetSpaces: ', $e->getMessage(), PHP_EOL;
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

# **spacesGetSpacesList**
> \FomF\Ungerboeck\Client\Model\SpacesModel[] spacesGetSpacesList($org_code, $search)

Search for space using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->spacesGetSpacesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spacesGetSpacesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpacesModel[]**](../Model/SpacesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spacesPostSpaces**
> \FomF\Ungerboeck\Client\Model\SpacesModel spacesPostSpaces($data)

Add a space

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
    $result = $apiInstance->spacesPostSpaces($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spacesPostSpaces: ', $e->getMessage(), PHP_EOL;
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

# **spacesPutSpaces**
> \FomF\Ungerboeck\Client\Model\SpacesModel spacesPutSpaces($org_code, $code, $data)

Edit a space

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
    $result = $apiInstance->spacesPutSpaces($org_code, $code, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spacesPutSpaces: ', $e->getMessage(), PHP_EOL;
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

