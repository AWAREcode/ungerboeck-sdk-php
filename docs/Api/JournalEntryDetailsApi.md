# FomF\Ungerboeck\Client\JournalEntryDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalEntryDetailsGetJournalEntryDetail**](JournalEntryDetailsApi.md#journalEntryDetailsGetJournalEntryDetail) | **GET** /api/v1/JournalEntryDetails/{OrgCode}/{Year}/{Period}/{Source}/{EntryNumber}/{Line} | Standard - Get a single journal entry detail by its parameters
[**journalEntryDetailsGetJournalEntryDetailList**](JournalEntryDetailsApi.md#journalEntryDetailsGetJournalEntryDetailList) | **GET** /api/v1/JournalEntryDetails/{OrgCode} | Standard - Search for journal entry detail using OData.
[**journalEntryDetailsPostJournalEntryDetail**](JournalEntryDetailsApi.md#journalEntryDetailsPostJournalEntryDetail) | **POST** /api/v1/JournalEntryDetails | Extended (Journal Entries) - Add a Journal Entry item
[**journalEntryDetailsPutJournalEntryDetail**](JournalEntryDetailsApi.md#journalEntryDetailsPutJournalEntryDetail) | **PUT** /api/v1/JournalEntryDetails/{OrgCode}/{Year}/{Period}/{Source}/{EntryNumber}/{Line} | Extended (Journal Entries) - Edit a Journal Entry item


# **journalEntryDetailsGetJournalEntryDetail**
> \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel journalEntryDetailsGetJournalEntryDetail($org_code, $year, $period, $source, $entry_number, $line)

Standard - Get a single journal entry detail by its parameters

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
    $result = $apiInstance->journalEntryDetailsGetJournalEntryDetail($org_code, $year, $period, $source, $entry_number, $line);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntryDetailsApi->journalEntryDetailsGetJournalEntryDetail: ', $e->getMessage(), PHP_EOL;
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

# **journalEntryDetailsGetJournalEntryDetailList**
> \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel journalEntryDetailsGetJournalEntryDetailList($org_code, $search)

Standard - Search for journal entry detail using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->journalEntryDetailsGetJournalEntryDetailList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntryDetailsApi->journalEntryDetailsGetJournalEntryDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel**](../Model/JournalEntryDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalEntryDetailsPostJournalEntryDetail**
> \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel journalEntryDetailsPostJournalEntryDetail($data)

Extended (Journal Entries) - Add a Journal Entry item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JournalEntryDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel(); // \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel | (Include in the HTTP Body) A JournalEntryDetailsModel entry to edit.

try {
    $result = $apiInstance->journalEntryDetailsPostJournalEntryDetail($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntryDetailsApi->journalEntryDetailsPostJournalEntryDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel**](../Model/JournalEntryDetailsModel.md)| (Include in the HTTP Body) A JournalEntryDetailsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel**](../Model/JournalEntryDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalEntryDetailsPutJournalEntryDetail**
> \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel journalEntryDetailsPutJournalEntryDetail($org_code, $year, $period, $source, $entry_number, $line, $data)

Extended (Journal Entries) - Edit a Journal Entry item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JournalEntryDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | 
$year = 56; // int | 
$period = 56; // int | 
$source = "source_example"; // string | 
$entry_number = "entry_number_example"; // string | 
$line = 56; // int | 
$data = new \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel(); // \FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel | (Include in the HTTP Body) A JournalEntryDetailsModel entry to edit.

try {
    $result = $apiInstance->journalEntryDetailsPutJournalEntryDetail($org_code, $year, $period, $source, $entry_number, $line, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntryDetailsApi->journalEntryDetailsPutJournalEntryDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**|  |
 **year** | **int**|  |
 **period** | **int**|  |
 **source** | **string**|  |
 **entry_number** | **string**|  |
 **line** | **int**|  |
 **data** | [**\FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel**](../Model/JournalEntryDetailsModel.md)| (Include in the HTTP Body) A JournalEntryDetailsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\JournalEntryDetailsModel**](../Model/JournalEntryDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

