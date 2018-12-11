# FomF\Ungerboeck\Client\NotesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notesDeleteNotes**](NotesApi.md#notesDeleteNotes) | **DELETE** /api/v1/Notes/{OrgCode}/{Type}/{Code}/{SequenceNumber} | Delete a note
[**notesGetNotes**](NotesApi.md#notesGetNotes) | **GET** /api/v1/Notes/{OrgCode}/{Type}/{Code}/{SequenceNumber} | Get a note by its parameters
[**notesGetNotesList**](NotesApi.md#notesGetNotesList) | **GET** /api/v1/Notes/{OrgCode} | Search for note using OData.
[**notesPostNotes**](NotesApi.md#notesPostNotes) | **POST** /api/v1/Notes | Add an note
[**notesPutNotes**](NotesApi.md#notesPutNotes) | **PUT** /api/v1/Notes/{OrgCode}/{Type}/{Code}/{SequenceNumber} | Edit an note


# **notesDeleteNotes**
> notesDeleteNotes($org_code, $type, $code, $sequence_number)

Delete a note

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
    $apiInstance->notesDeleteNotes($org_code, $type, $code, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesDeleteNotes: ', $e->getMessage(), PHP_EOL;
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

# **notesGetNotes**
> \FomF\Ungerboeck\Client\Model\NotesModel notesGetNotes($org_code, $type, $code, $sequence_number)

Get a note by its parameters

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
    $result = $apiInstance->notesGetNotes($org_code, $type, $code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesGetNotes: ', $e->getMessage(), PHP_EOL;
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

# **notesGetNotesList**
> \FomF\Ungerboeck\Client\Model\NotesModel[] notesGetNotesList($org_code, $search)

Search for note using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->notesGetNotesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesGetNotesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\NotesModel[]**](../Model/NotesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notesPostNotes**
> \FomF\Ungerboeck\Client\Model\NotesModel notesPostNotes($data)

Add an note

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
    $result = $apiInstance->notesPostNotes($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesPostNotes: ', $e->getMessage(), PHP_EOL;
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

# **notesPutNotes**
> \FomF\Ungerboeck\Client\Model\NotesModel notesPutNotes($org_code, $type, $code, $sequence_number, $data)

Edit an note

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
    $result = $apiInstance->notesPutNotes($org_code, $type, $code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->notesPutNotes: ', $e->getMessage(), PHP_EOL;
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

