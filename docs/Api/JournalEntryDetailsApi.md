# FomF\Ungerboeck\Client\JournalEntryDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalEntryDetailsGetJournalEntryDetails**](JournalEntryDetailsApi.md#journalEntryDetailsGetJournalEntryDetails) | **GET** /api/v1/JournalEntryDetails/{OrgCode}/{Year}/{Period}/{Source}/{EntryNumber}/{Line} | Get an journal entry detail by its parameters
[**journalEntryDetailsGetJournalEntryDetailsList**](JournalEntryDetailsApi.md#journalEntryDetailsGetJournalEntryDetailsList) | **GET** /api/v1/JournalEntryDetails/{OrgCode} | Search for journal entry detail using OData.


# **journalEntryDetailsGetJournalEntryDetails**
> \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel journalEntryDetailsGetJournalEntryDetails($org_code, $year, $period, $source, $entry_number, $line)

Get an journal entry detail by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JournalEntryDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the journal entry detail.
$year = 56; // int | The year of the journal entry detail.
$period = 56; // int | The period of the journal entry detail.
$source = "source_example"; // string | The source of the journal entry detail.
$entry_number = "entry_number_example"; // string | The entry number of the journal entry detail.
$line = 56; // int | The line (sequence) of the journal entry detail.

try {
    $result = $apiInstance->journalEntryDetailsGetJournalEntryDetails($org_code, $year, $period, $source, $entry_number, $line);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntryDetailsApi->journalEntryDetailsGetJournalEntryDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the journal entry detail. |
 **year** | **int**| The year of the journal entry detail. |
 **period** | **int**| The period of the journal entry detail. |
 **source** | **string**| The source of the journal entry detail. |
 **entry_number** | **string**| The entry number of the journal entry detail. |
 **line** | **int**| The line (sequence) of the journal entry detail. |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel**](../Model/JournalEntryDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalEntryDetailsGetJournalEntryDetailsList**
> \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel[] journalEntryDetailsGetJournalEntryDetailsList($org_code, $search)

Search for journal entry detail using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JournalEntryDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->journalEntryDetailsGetJournalEntryDetailsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntryDetailsApi->journalEntryDetailsGetJournalEntryDetailsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel[]**](../Model/JournalEntryDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

