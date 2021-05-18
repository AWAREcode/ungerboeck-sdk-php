# FomF\Ungerboeck\Client\ValidationEntriesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validationEntriesGetValidationEntry**](ValidationEntriesApi.md#validationEntriesGetValidationEntry) | **GET** /api/v1/ValidationEntries/{OrgCode}/{ValidationTableID}/{SequenceNumber} | Basic - Get a single validation entry by its parameters
[**validationEntriesGetValidationEntryList**](ValidationEntriesApi.md#validationEntriesGetValidationEntryList) | **GET** /api/v1/ValidationEntries/{OrgCode} | Basic - Search for validation entries using OData.


# **validationEntriesGetValidationEntry**
> \FomF\Ungerboeck\Client\Model\ValidationEntriesModel validationEntriesGetValidationEntry($org_code, $validation_table_id, $sequence_number)

Basic - Get a single validation entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ValidationEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the validation entry.
$validation_table_id = 56; // int | The validation table ID of the validation entry.
$sequence_number = 56; // int | The sequence number of the validation entry.

try {
    $result = $apiInstance->validationEntriesGetValidationEntry($org_code, $validation_table_id, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationEntriesApi->validationEntriesGetValidationEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the validation entry. |
 **validation_table_id** | **int**| The validation table ID of the validation entry. |
 **sequence_number** | **int**| The sequence number of the validation entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ValidationEntriesModel**](../Model/ValidationEntriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validationEntriesGetValidationEntryList**
> \FomF\Ungerboeck\Client\Model\ValidationEntriesModel validationEntriesGetValidationEntryList($org_code, $search)

Basic - Search for validation entries using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ValidationEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->validationEntriesGetValidationEntryList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationEntriesApi->validationEntriesGetValidationEntryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ValidationEntriesModel**](../Model/ValidationEntriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

