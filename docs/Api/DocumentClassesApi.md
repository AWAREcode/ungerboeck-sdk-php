# FomF\Ungerboeck\Client\DocumentClassesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentClassesGetDocumentClass**](DocumentClassesApi.md#documentClassesGetDocumentClass) | **GET** /api/v1/DocumentClasses/{OrgCode}/{Class} | Basic - Get a single document class by its parameters
[**documentClassesGetDocumentClassList**](DocumentClassesApi.md#documentClassesGetDocumentClassList) | **GET** /api/v1/DocumentClasses/{OrgCode} | Basic - Search for document class using OData.


# **documentClassesGetDocumentClass**
> \FomF\Ungerboeck\Client\Model\DocumentClassesModel documentClassesGetDocumentClass($org_code, $class)

Basic - Get a single document class by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DocumentClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the document class.
$class = "class_example"; // string | The class of the document class.

try {
    $result = $apiInstance->documentClassesGetDocumentClass($org_code, $class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentClassesApi->documentClassesGetDocumentClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the document class. |
 **class** | **string**| The class of the document class. |

### Return type

[**\FomF\Ungerboeck\Client\Model\DocumentClassesModel**](../Model/DocumentClassesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentClassesGetDocumentClassList**
> \FomF\Ungerboeck\Client\Model\DocumentClassesModel documentClassesGetDocumentClassList($org_code, $search)

Basic - Search for document class using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DocumentClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->documentClassesGetDocumentClassList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentClassesApi->documentClassesGetDocumentClassList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\DocumentClassesModel**](../Model/DocumentClassesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

