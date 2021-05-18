# FomF\Ungerboeck\Client\JournalEntriesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalEntriesGetJournalEntry**](JournalEntriesApi.md#journalEntriesGetJournalEntry) | **GET** /api/v1/JournalEntries/{OrgCode}/{Year}/{Period}/{Source}/{EntryNumber} | Standard - Get a single journal entry by its parameters
[**journalEntriesGetJournalEntryList**](JournalEntriesApi.md#journalEntriesGetJournalEntryList) | **GET** /api/v1/JournalEntries/{OrgCode} | Standard - Search for journal entry using OData.
[**journalEntriesPostJournalEntry**](JournalEntriesApi.md#journalEntriesPostJournalEntry) | **POST** /api/v1/JournalEntries | Extended (Journal Entries) - Add a journal entry
[**journalEntriesPutJournalEntry**](JournalEntriesApi.md#journalEntriesPutJournalEntry) | **PUT** /api/v1/JournalEntries/{OrgCode}/{Year}/{Period}/{Source}/{EntryNumber} | Extended (Journal Entries) - Edit a Journal Entry item


# **journalEntriesGetJournalEntry**
> \FomF\Ungerboeck\Client\Model\JournalEntriesModel journalEntriesGetJournalEntry($org_code, $year, $period, $source, $entry_number)

Standard - Get a single journal entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the journal entry.
$year = 56; // int | The year of the journal entry.
$period = 56; // int | The period of the journal entry.
$source = "source_example"; // string | The source of the journal entry.
$entry_number = "entry_number_example"; // string | The entry number of the journal entry.

try {
    $result = $apiInstance->journalEntriesGetJournalEntry($org_code, $year, $period, $source, $entry_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->journalEntriesGetJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the journal entry. |
 **year** | **int**| The year of the journal entry. |
 **period** | **int**| The period of the journal entry. |
 **source** | **string**| The source of the journal entry. |
 **entry_number** | **string**| The entry number of the journal entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntriesModel**](../Model/JournalEntriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalEntriesGetJournalEntryList**
> \FomF\Ungerboeck\Client\Model\JournalEntriesModel journalEntriesGetJournalEntryList($org_code, $search)

Standard - Search for journal entry using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->journalEntriesGetJournalEntryList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->journalEntriesGetJournalEntryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntriesModel**](../Model/JournalEntriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalEntriesPostJournalEntry**
> \FomF\Ungerboeck\Client\Model\JournalEntriesModel journalEntriesPostJournalEntry($data)

Extended (Journal Entries) - Add a journal entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\JournalEntriesModel(); // \FomF\Ungerboeck\Client\Model\JournalEntriesModel | 

try {
    $result = $apiInstance->journalEntriesPostJournalEntry($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->journalEntriesPostJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\JournalEntriesModel**](../Model/JournalEntriesModel.md)|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntriesModel**](../Model/JournalEntriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalEntriesPutJournalEntry**
> \FomF\Ungerboeck\Client\Model\JournalEntriesModel journalEntriesPutJournalEntry($org_code, $year, $period, $source, $entry_number, $data)

Extended (Journal Entries) - Edit a Journal Entry item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organizaton code of the journal entry
$year = 56; // int | The year of the fiscal period for the journal entry
$period = 56; // int | The period of the fiscal period for the journal entry
$source = "source_example"; // string | The GL source for the journal entry
$entry_number = "entry_number_example"; // string | Journal entry number of a valid journal entry within the system
$data = new \FomF\Ungerboeck\Client\Model\JournalEntriesModel(); // \FomF\Ungerboeck\Client\Model\JournalEntriesModel | (Include in the HTTP Body) A PurchaseOrdersModel entry to edit.

try {
    $result = $apiInstance->journalEntriesPutJournalEntry($org_code, $year, $period, $source, $entry_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->journalEntriesPutJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organizaton code of the journal entry |
 **year** | **int**| The year of the fiscal period for the journal entry |
 **period** | **int**| The period of the fiscal period for the journal entry |
 **source** | **string**| The GL source for the journal entry |
 **entry_number** | **string**| Journal entry number of a valid journal entry within the system |
 **data** | [**\FomF\Ungerboeck\Client\Model\JournalEntriesModel**](../Model/JournalEntriesModel.md)| (Include in the HTTP Body) A PurchaseOrdersModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntriesModel**](../Model/JournalEntriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

