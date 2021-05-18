# FomF\Ungerboeck\Client\CustomFieldValidationTablesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customFieldValidationTablesGetCustomFieldValidationTable**](CustomFieldValidationTablesApi.md#customFieldValidationTablesGetCustomFieldValidationTable) | **GET** /api/v1/CustomFieldValidationTables/{OrgCode}/{ID} | Basic - Get a single custom field validation table by its parameters
[**customFieldValidationTablesGetCustomFieldValidationTableList**](CustomFieldValidationTablesApi.md#customFieldValidationTablesGetCustomFieldValidationTableList) | **GET** /api/v1/CustomFieldValidationTables/{OrgCode} | Basic - Search for custom field validation table using OData.


# **customFieldValidationTablesGetCustomFieldValidationTable**
> \FomF\Ungerboeck\Client\Model\CustomFieldValidationTablesModel customFieldValidationTablesGetCustomFieldValidationTable($org_code, $id)

Basic - Get a single custom field validation table by its parameters

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
    $result = $apiInstance->customFieldValidationTablesGetCustomFieldValidationTable($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldValidationTablesApi->customFieldValidationTablesGetCustomFieldValidationTable: ', $e->getMessage(), PHP_EOL;
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

# **customFieldValidationTablesGetCustomFieldValidationTableList**
> \FomF\Ungerboeck\Client\Model\CustomFieldValidationTablesModel customFieldValidationTablesGetCustomFieldValidationTableList($org_code, $search)

Basic - Search for custom field validation table using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->customFieldValidationTablesGetCustomFieldValidationTableList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldValidationTablesApi->customFieldValidationTablesGetCustomFieldValidationTableList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CustomFieldValidationTablesModel**](../Model/CustomFieldValidationTablesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

