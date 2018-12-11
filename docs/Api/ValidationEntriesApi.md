# FomF\Ungerboeck\Client\ValidationEntriesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validationEntriesGetValidationEntries**](ValidationEntriesApi.md#validationEntriesGetValidationEntries) | **GET** /api/v1/ValidationEntries/{OrgCode}/{ValidationTableID}/{SequenceNumber} | Get a validation entry by its parameters
[**validationEntriesGetValidationEntriesList**](ValidationEntriesApi.md#validationEntriesGetValidationEntriesList) | **GET** /api/v1/ValidationEntries/{OrgCode} | Search for validation entries using OData.


# **validationEntriesGetValidationEntries**
> \FomF\Ungerboeck\Client\Model\ValidationEntriesModel validationEntriesGetValidationEntries($org_code, $validation_table_id, $sequence_number)

Get a validation entry by its parameters

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
    $result = $apiInstance->validationEntriesGetValidationEntries($org_code, $validation_table_id, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationEntriesApi->validationEntriesGetValidationEntries: ', $e->getMessage(), PHP_EOL;
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

# **validationEntriesGetValidationEntriesList**
> \FomF\Ungerboeck\Client\Model\ValidationEntriesModel[] validationEntriesGetValidationEntriesList($org_code, $search)

Search for validation entries using OData.

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
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->validationEntriesGetValidationEntriesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationEntriesApi->validationEntriesGetValidationEntriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ValidationEntriesModel[]**](../Model/ValidationEntriesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

