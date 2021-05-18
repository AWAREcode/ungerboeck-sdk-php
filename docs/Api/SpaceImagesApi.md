# FomF\Ungerboeck\Client\SpaceImagesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spaceImagesDeleteSpaceImage**](SpaceImagesApi.md#spaceImagesDeleteSpaceImage) | **DELETE** /api/v1/SpaceImages/{OrgCode}/{Id} | Standard - Delete a single space image by its parameters
[**spaceImagesGetSpaceImage**](SpaceImagesApi.md#spaceImagesGetSpaceImage) | **GET** /api/v1/SpaceImages/{OrgCode}/{Id} | Basic - Get a single space image by its parameters
[**spaceImagesGetSpaceImageList**](SpaceImagesApi.md#spaceImagesGetSpaceImageList) | **GET** /api/v1/SpaceImages/{OrgCode} | Basic - Search for space images using OData.
[**spaceImagesPostSpaceImage**](SpaceImagesApi.md#spaceImagesPostSpaceImage) | **POST** /api/v1/SpaceImages | Standard - Add a space image
[**spaceImagesPutSpaceImage**](SpaceImagesApi.md#spaceImagesPutSpaceImage) | **PUT** /api/v1/SpaceImages/{OrgCode}/{Id} | Standard - Edit a space image


# **spaceImagesDeleteSpaceImage**
> spaceImagesDeleteSpaceImage($org_code, $id)

Standard - Delete a single space image by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space image.
$id = 56; // int | The id associated with the space image.

try {
    $apiInstance->spaceImagesDeleteSpaceImage($org_code, $id);
} catch (Exception $e) {
    echo 'Exception when calling SpaceImagesApi->spaceImagesDeleteSpaceImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space image. |
 **id** | **int**| The id associated with the space image. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceImagesGetSpaceImage**
> \FomF\Ungerboeck\Client\Model\SpaceImagesModel spaceImagesGetSpaceImage($org_code, $id)

Basic - Get a single space image by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space image.
$id = 56; // int | The id associated with the space image.

try {
    $result = $apiInstance->spaceImagesGetSpaceImage($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceImagesApi->spaceImagesGetSpaceImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space image. |
 **id** | **int**| The id associated with the space image. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceImagesModel**](../Model/SpaceImagesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceImagesGetSpaceImageList**
> \FomF\Ungerboeck\Client\Model\SpaceImagesModel spaceImagesGetSpaceImageList($org_code, $search)

Basic - Search for space images using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->spaceImagesGetSpaceImageList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceImagesApi->spaceImagesGetSpaceImageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceImagesModel**](../Model/SpaceImagesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceImagesPostSpaceImage**
> \FomF\Ungerboeck\Client\Model\SpaceImagesModel spaceImagesPostSpaceImage($data)

Standard - Add a space image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\SpaceImagesModel(); // \FomF\Ungerboeck\Client\Model\SpaceImagesModel | (Include in the HTTP Body) A SpaceImagesModel to add.

try {
    $result = $apiInstance->spaceImagesPostSpaceImage($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceImagesApi->spaceImagesPostSpaceImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\SpaceImagesModel**](../Model/SpaceImagesModel.md)| (Include in the HTTP Body) A SpaceImagesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceImagesModel**](../Model/SpaceImagesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceImagesPutSpaceImage**
> \FomF\Ungerboeck\Client\Model\SpaceImagesModel spaceImagesPutSpaceImage($org_code, $id, $data)

Standard - Edit a space image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space image.
$id = 56; // int | The id associated with the space image.
$data = new \FomF\Ungerboeck\Client\Model\SpaceImagesModel(); // \FomF\Ungerboeck\Client\Model\SpaceImagesModel | (Include in the HTTP Body) A SpaceImagesModel to edit.

try {
    $result = $apiInstance->spaceImagesPutSpaceImage($org_code, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceImagesApi->spaceImagesPutSpaceImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space image. |
 **id** | **int**| The id associated with the space image. |
 **data** | [**\FomF\Ungerboeck\Client\Model\SpaceImagesModel**](../Model/SpaceImagesModel.md)| (Include in the HTTP Body) A SpaceImagesModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceImagesModel**](../Model/SpaceImagesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

