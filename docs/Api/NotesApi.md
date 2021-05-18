# FomF\Ungerboeck\Client\NotesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notesDeleteNote**](NotesApi.md#notesDeleteNote) | **DELETE** /api/v1/Notes/{OrgCode}/{Type}/{Code}/{SequenceNumber} | Basic - Delete a note
[**notesGetNote**](NotesApi.md#notesGetNote) | **GET** /api/v1/Notes/{OrgCode}/{Type}/{Code}/{SequenceNumber} | Basic - Get a single note by its parameters
[**notesGetNoteList**](NotesApi.md#notesGetNoteList) | **GET** /api/v1/Notes/{OrgCode} | Basic - Search for note using OData.
[**notesPostNote**](NotesApi.md#notesPostNote) | **POST** /api/v1/Notes | Basic - Add an note
[**notesPutNote**](NotesApi.md#notesPutNote) | **PUT** /api/v1/Notes/{OrgCode}/{Type}/{Code}/{SequenceNumber} | Basic - Edit an note


# **notesDeleteNote**
> notesDeleteNote($org_code, $type, $code, $sequence_number)

Basic - Delete a note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the function.
$type = "type_example"; // string | The type of the note.
$code = "code_example"; // string | The code of the note.
$sequence_number = 1.2; // double | The sequence number of the note.

try {
    $apiInstance->notesDeleteNote($org_code, $type, $code, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesDeleteNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the function. |
 **type** | **string**| The type of the note. |
 **code** | **string**| The code of the note. |
 **sequence_number** | **double**| The sequence number of the note. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesGetNote**
> \FomF\Ungerboeck\Client\Model\NotesModel notesGetNote($org_code, $type, $code, $sequence_number)

Basic - Get a single note by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the note.
$type = "type_example"; // string | The type of the note.
$code = "code_example"; // string | The code of the note.
$sequence_number = 1.2; // double | The sequence number of the note.

try {
    $result = $apiInstance->notesGetNote($org_code, $type, $code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesGetNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the note. |
 **type** | **string**| The type of the note. |
 **code** | **string**| The code of the note. |
 **sequence_number** | **double**| The sequence number of the note. |

### Return type

[**\FomF\Ungerboeck\Client\Model\NotesModel**](../Model/NotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesGetNoteList**
> \FomF\Ungerboeck\Client\Model\NotesModel notesGetNoteList($org_code, $search)

Basic - Search for note using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->notesGetNoteList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesGetNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\NotesModel**](../Model/NotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesPostNote**
> \FomF\Ungerboeck\Client\Model\NotesModel notesPostNote($data)

Basic - Add an note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\NotesModel(); // \FomF\Ungerboeck\Client\Model\NotesModel | (Include in the HTTP Body) An NotesModel to add.

try {
    $result = $apiInstance->notesPostNote($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesPostNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\NotesModel**](../Model/NotesModel.md)| (Include in the HTTP Body) An NotesModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\NotesModel**](../Model/NotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesPutNote**
> \FomF\Ungerboeck\Client\Model\NotesModel notesPutNote($org_code, $type, $code, $sequence_number, $data)

Basic - Edit an note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the note.
$type = "type_example"; // string | The type of the note.
$code = "code_example"; // string | The code of the note.
$sequence_number = 1.2; // double | The sequence number of the note.
$data = new \FomF\Ungerboeck\Client\Model\NotesModel(); // \FomF\Ungerboeck\Client\Model\NotesModel | (Include in the HTTP Body) An NotesModel to edit.

try {
    $result = $apiInstance->notesPutNote($org_code, $type, $code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesPutNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the note. |
 **type** | **string**| The type of the note. |
 **code** | **string**| The code of the note. |
 **sequence_number** | **double**| The sequence number of the note. |
 **data** | [**\FomF\Ungerboeck\Client\Model\NotesModel**](../Model/NotesModel.md)| (Include in the HTTP Body) An NotesModel to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\NotesModel**](../Model/NotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

