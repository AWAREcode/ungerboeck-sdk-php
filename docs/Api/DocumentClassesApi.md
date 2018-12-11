# FomF\Ungerboeck\Client\DocumentClassesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentClassesGetDocumentClasses**](DocumentClassesApi.md#documentClassesGetDocumentClasses) | **GET** /api/v1/DocumentClasses/{OrgCode}/{Class} | Get a document class by its parameters
[**documentClassesGetDocumentClassesList**](DocumentClassesApi.md#documentClassesGetDocumentClassesList) | **GET** /api/v1/DocumentClasses/{OrgCode} | Search for document class using OData.


# **documentClassesGetDocumentClasses**
> \FomF\Ungerboeck\Client\Model\DocumentClassesModel documentClassesGetDocumentClasses($org_code, $class)

Get a document class by its parameters

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
    $result = $apiInstance->documentClassesGetDocumentClasses($org_code, $class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentClassesApi->documentClassesGetDocumentClasses: ', $e->getMessage(), PHP_EOL;
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

# **documentClassesGetDocumentClassesList**
> \FomF\Ungerboeck\Client\Model\DocumentClassesModel[] documentClassesGetDocumentClassesList($org_code, $search)

Search for document class using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->documentClassesGetDocumentClassesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentClassesApi->documentClassesGetDocumentClassesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\DocumentClassesModel[]**](../Model/DocumentClassesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

