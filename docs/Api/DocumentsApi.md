# FomF\Ungerboeck\Client\DocumentsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsDeleteDocument**](DocumentsApi.md#documentsDeleteDocument) | **DELETE** /api/v1/Documents/{OrgCode}/{Type}/{SequenceNumber} | Delete a Document entry from Ungerboeck
[**documentsDownload**](DocumentsApi.md#documentsDownload) | **GET** /api/v1/Documents/{OrgCode}/{Type}/{SequenceNumber}/Download | Get the bytes of a document
[**documentsGetDocument**](DocumentsApi.md#documentsGetDocument) | **GET** /api/v1/Documents/{OrgCode}/{Type}/{SequenceNumber} | Get a Document entry by its parameters.  To download a document file, use the /Download endpoint
[**documentsGetDocumentsList**](DocumentsApi.md#documentsGetDocumentsList) | **GET** /api/v1/Documents/{OrgCode} | Search for document entries using OData.
[**documentsPostDocument**](DocumentsApi.md#documentsPostDocument) | **POST** /api/v1/Documents | Add a Document entry in Ungerboeck.  You need to fill NewDocumentData and NewFilename with the document file to import.
[**documentsPutDocument**](DocumentsApi.md#documentsPutDocument) | **PUT** /api/v1/Documents/{OrgCode}/{Type}/{SequenceNumber} | Edit a Document entry properties.  You can use NewDocumentData and NewFilename to update the document file with an imported document.


# **documentsDeleteDocument**
> documentsDeleteDocument($org_code, $type, $sequence_number)

Delete a Document entry from Ungerboeck

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Document entry.
$type = "type_example"; // string | The document type (a.k.a. class) code of the Document entry.
$sequence_number = 56; // int | The sequence number of the Document entry.

try {
    $apiInstance->documentsDeleteDocument($org_code, $type, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDeleteDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Document entry. |
 **type** | **string**| The document type (a.k.a. class) code of the Document entry. |
 **sequence_number** | **int**| The sequence number of the Document entry. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsDownload**
> object documentsDownload($org_code, $type, $sequence_number)

Get the bytes of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Document entry.
$type = "type_example"; // string | The document type (a.k.a. class) code of the Document entry.
$sequence_number = 56; // int | The sequence number of the Document entry.

try {
    $result = $apiInstance->documentsDownload($org_code, $type, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Document entry. |
 **type** | **string**| The document type (a.k.a. class) code of the Document entry. |
 **sequence_number** | **int**| The sequence number of the Document entry. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetDocument**
> \FomF\Ungerboeck\Client\Model\DocumentsModel documentsGetDocument($org_code, $type, $sequence_number)

Get a Document entry by its parameters.  To download a document file, use the /Download endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Document entry.
$type = "type_example"; // string | The document type (a.k.a. class) code of the Document entry.
$sequence_number = 56; // int | The sequence number of the Document entry.

try {
    $result = $apiInstance->documentsGetDocument($org_code, $type, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Document entry. |
 **type** | **string**| The document type (a.k.a. class) code of the Document entry. |
 **sequence_number** | **int**| The sequence number of the Document entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\DocumentsModel**](../Model/DocumentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetDocumentsList**
> \FomF\Ungerboeck\Client\Model\DocumentsModel[] documentsGetDocumentsList($org_code, $search)

Search for document entries using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->documentsGetDocumentsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetDocumentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\DocumentsModel[]**](../Model/DocumentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsPostDocument**
> \FomF\Ungerboeck\Client\Model\DocumentsModel documentsPostDocument($data)

Add a Document entry in Ungerboeck.  You need to fill NewDocumentData and NewFilename with the document file to import.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\DocumentsModel(); // \FomF\Ungerboeck\Client\Model\DocumentsModel | (Include in the HTTP Body) A DocumentsModel entry to add.

try {
    $result = $apiInstance->documentsPostDocument($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsPostDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\DocumentsModel**](../Model/DocumentsModel.md)| (Include in the HTTP Body) A DocumentsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\DocumentsModel**](../Model/DocumentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsPutDocument**
> \FomF\Ungerboeck\Client\Model\DocumentsModel documentsPutDocument($org_code, $type, $sequence_number, $data)

Edit a Document entry properties.  You can use NewDocumentData and NewFilename to update the document file with an imported document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Document entry.
$type = "type_example"; // string | The document type (a.k.a. class) code of the Document entry.
$sequence_number = 56; // int | The sequence number of the Document entry.
$data = new \FomF\Ungerboeck\Client\Model\DocumentsModel(); // \FomF\Ungerboeck\Client\Model\DocumentsModel | (Include in the HTTP Body) A DocumentsModel entry to edit.

try {
    $result = $apiInstance->documentsPutDocument($org_code, $type, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsPutDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Document entry. |
 **type** | **string**| The document type (a.k.a. class) code of the Document entry. |
 **sequence_number** | **int**| The sequence number of the Document entry. |
 **data** | [**\FomF\Ungerboeck\Client\Model\DocumentsModel**](../Model/DocumentsModel.md)| (Include in the HTTP Body) A DocumentsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\DocumentsModel**](../Model/DocumentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

