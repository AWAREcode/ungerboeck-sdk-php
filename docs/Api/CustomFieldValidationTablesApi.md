# FomF\Ungerboeck\Client\CustomFieldValidationTablesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customFieldValidationTablesGetCustomFieldValidationTables**](CustomFieldValidationTablesApi.md#customFieldValidationTablesGetCustomFieldValidationTables) | **GET** /api/v1/CustomFieldValidationTables/{OrgCode}/{ID} | Get a custom field validation table by its parameters
[**customFieldValidationTablesGetCustomFieldValidationTablesList**](CustomFieldValidationTablesApi.md#customFieldValidationTablesGetCustomFieldValidationTablesList) | **GET** /api/v1/CustomFieldValidationTables/{OrgCode} | Search for custom field validation table using OData.


# **customFieldValidationTablesGetCustomFieldValidationTables**
> \FomF\Ungerboeck\Client\Model\CustomFieldValidationTablesModel customFieldValidationTablesGetCustomFieldValidationTables($org_code, $id)

Get a custom field validation table by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CustomFieldValidationTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the custom field validation table.
$id = 56; // int | The table ID of the custom field validation table.

try {
    $result = $apiInstance->customFieldValidationTablesGetCustomFieldValidationTables($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldValidationTablesApi->customFieldValidationTablesGetCustomFieldValidationTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the custom field validation table. |
 **id** | **int**| The table ID of the custom field validation table. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomFieldValidationTablesModel**](../Model/CustomFieldValidationTablesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldValidationTablesGetCustomFieldValidationTablesList**
> \FomF\Ungerboeck\Client\Model\CustomFieldValidationTablesModel[] customFieldValidationTablesGetCustomFieldValidationTablesList($org_code, $search)

Search for custom field validation table using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CustomFieldValidationTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->customFieldValidationTablesGetCustomFieldValidationTablesList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldValidationTablesApi->customFieldValidationTablesGetCustomFieldValidationTablesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomFieldValidationTablesModel[]**](../Model/CustomFieldValidationTablesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

