# FomF\Ungerboeck\Client\JournalEntriesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalEntriesGetJournalEntries**](JournalEntriesApi.md#journalEntriesGetJournalEntries) | **GET** /api/v1/JournalEntries/{OrgCode}/{Year}/{Period}/{Source}/{EntryNumber} | Get an journal entry by its parameters
[**journalEntriesGetJournalEntriesList**](JournalEntriesApi.md#journalEntriesGetJournalEntriesList) | **GET** /api/v1/JournalEntries/{OrgCode} | Search for journal entry using OData.


# **journalEntriesGetJournalEntries**
> \FomF\Ungerboeck\Client\Model\JournalEntriesModel journalEntriesGetJournalEntries($org_code, $year, $period, $source, $entry_number)

Get an journal entry by its parameters

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
    $result = $apiInstance->journalEntriesGetJournalEntries($org_code, $year, $period, $source, $entry_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->journalEntriesGetJournalEntries: ', $e->getMessage(), PHP_EOL;
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

# **journalEntriesGetJournalEntriesList**
> \FomF\Ungerboeck\Client\Model\JournalEntriesModel[] journalEntriesGetJournalEntriesList($org_code, $search)

Search for journal entry using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->journalEntriesGetJournalEntriesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->journalEntriesGetJournalEntriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntriesModel[]**](../Model/JournalEntriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

