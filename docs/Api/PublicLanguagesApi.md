# FomF\Ungerboeck\Client\PublicLanguagesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publicLanguagesDeletePublicLanguage**](PublicLanguagesApi.md#publicLanguagesDeletePublicLanguage) | **DELETE** /api/v1/PublicLanguages/{Sequence} | Standard - Delete a public language entry
[**publicLanguagesGetPublicLanguage**](PublicLanguagesApi.md#publicLanguagesGetPublicLanguage) | **GET** /api/v1/PublicLanguages/{Sequence} | Standard - Get a single public language by its parameters
[**publicLanguagesGetPublicLanguageList**](PublicLanguagesApi.md#publicLanguagesGetPublicLanguageList) | **GET** /api/v1/PublicLanguages | Standard - Search for public languages using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.
[**publicLanguagesPostPublicLanguage**](PublicLanguagesApi.md#publicLanguagesPostPublicLanguage) | **POST** /api/v1/PublicLanguages | Standard - Add a public language
[**publicLanguagesPutPublicLanguage**](PublicLanguagesApi.md#publicLanguagesPutPublicLanguage) | **PUT** /api/v1/PublicLanguages/{Sequence} | Standard - Edit a public language


# **publicLanguagesDeletePublicLanguage**
> publicLanguagesDeletePublicLanguage($sequence)

Standard - Delete a public language entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PublicLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence = 56; // int | Language sequence number

try {
    $apiInstance->publicLanguagesDeletePublicLanguage($sequence);
} catch (Exception $e) {
    echo 'Exception when calling PublicLanguagesApi->publicLanguagesDeletePublicLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence** | **int**| Language sequence number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicLanguagesGetPublicLanguage**
> \FomF\Ungerboeck\Client\Model\PublicLanguagesModel publicLanguagesGetPublicLanguage($sequence)

Standard - Get a single public language by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PublicLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence = 56; // int | Language sequence number

try {
    $result = $apiInstance->publicLanguagesGetPublicLanguage($sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicLanguagesApi->publicLanguagesGetPublicLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence** | **int**| Language sequence number |

### Return type

[**\FomF\Ungerboeck\Client\Model\PublicLanguagesModel**](../Model/PublicLanguagesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicLanguagesGetPublicLanguageList**
> \FomF\Ungerboeck\Client\Model\PublicLanguagesModel publicLanguagesGetPublicLanguageList($search)

Standard - Search for public languages using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PublicLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->publicLanguagesGetPublicLanguageList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicLanguagesApi->publicLanguagesGetPublicLanguageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PublicLanguagesModel**](../Model/PublicLanguagesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicLanguagesPostPublicLanguage**
> \FomF\Ungerboeck\Client\Model\PublicLanguagesModel publicLanguagesPostPublicLanguage($data)

Standard - Add a public language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PublicLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\PublicLanguagesModel(); // \FomF\Ungerboeck\Client\Model\PublicLanguagesModel | A PublicLanguagesModel entry to add.

try {
    $result = $apiInstance->publicLanguagesPostPublicLanguage($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicLanguagesApi->publicLanguagesPostPublicLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\PublicLanguagesModel**](../Model/PublicLanguagesModel.md)| A PublicLanguagesModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PublicLanguagesModel**](../Model/PublicLanguagesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicLanguagesPutPublicLanguage**
> \FomF\Ungerboeck\Client\Model\PublicLanguagesModel publicLanguagesPutPublicLanguage($sequence, $data)

Standard - Edit a public language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PublicLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence = 56; // int | Language sequence number
$data = new \FomF\Ungerboeck\Client\Model\PublicLanguagesModel(); // \FomF\Ungerboeck\Client\Model\PublicLanguagesModel | A PublicLanguagesModel entry to edit.

try {
    $result = $apiInstance->publicLanguagesPutPublicLanguage($sequence, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicLanguagesApi->publicLanguagesPutPublicLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence** | **int**| Language sequence number |
 **data** | [**\FomF\Ungerboeck\Client\Model\PublicLanguagesModel**](../Model/PublicLanguagesModel.md)| A PublicLanguagesModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PublicLanguagesModel**](../Model/PublicLanguagesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

